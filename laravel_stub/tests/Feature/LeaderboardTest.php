<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class LeaderboardTest extends TestCase
{
    use WithoutMiddleware;
    protected function setUp(): void
    {
        parent::setUp();
        config(['database.default' => 'sqlite']);
        config(['database.connections.sqlite.database' => ':memory:']);

        // Build schema for leaderboard joins
        Schema::create('users', function ($table) {
            $table->increments('userID');
            $table->string('userName');
        });
        Schema::create('userhighscore', function ($table) {
            $table->increments('id');
            $table->integer('userid');
            $table->integer('highscore');
        });
        Schema::create('elo', function ($table) {
            $table->increments('id');
            $table->integer('userid');
            $table->integer('elo');
        });
        Schema::create('ranks', function ($table) {
            $table->increments('id');
            $table->integer('userid');
            $table->integer('rankid');
        });
        Schema::create('achievableranks', function ($table) {
            $table->increments('id');
            $table->string('rank');
        });

        // Middleware disabled via trait

        // Seed sample data
        DB::table('users')->insert(['userID'=>1,'userName'=>'Neo']);
        DB::table('userhighscore')->insert(['userid'=>1,'highscore'=>1234]);
        DB::table('elo')->insert(['userid'=>1,'elo'=>1500]);
        $rankId = DB::table('achievableranks')->insertGetId(['rank'=>'Bronze']);
        DB::table('ranks')->insert(['userid'=>1,'rankid'=>$rankId]);
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('ranks');
        Schema::dropIfExists('achievableranks');
        Schema::dropIfExists('elo');
        Schema::dropIfExists('userhighscore');
        Schema::dropIfExists('users');
        parent::tearDown();
    }

    public function test_leaderboard_index_lists_rows()
    {
        $resp = $this->get('/leaderboard');
        $resp->assertStatus(200);
        $resp->assertSee('Neo');
        $resp->assertSee('1234');
        $resp->assertSee('Bronze');
        $resp->assertSee('1500');
    }

    public function test_leaderboard_search_filters_by_name()
    {
        $resp = $this->post('/leaderboard/search', ['searchplayer' => 'Neo']);
        $resp->assertStatus(200);
        $resp->assertSee('Neo');
    }
}
