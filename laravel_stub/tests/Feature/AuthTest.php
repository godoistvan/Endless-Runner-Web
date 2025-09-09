<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use WithoutMiddleware;
    protected function setUp(): void
    {
        parent::setUp();
        // Force sqlite in-memory for isolation
        config(['database.default' => 'sqlite']);
        config(['database.connections.sqlite.database' => ':memory:']);

        // Build minimal schema used by AuthController
        Schema::create('users', function ($table) {
            $table->increments('userID');
            $table->string('userName')->unique();
            $table->string('userEmail')->unique();
            $table->string('userPassword');
        });

        // Middleware disabled via trait
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('users');
        parent::tearDown();
    }

    public function test_register_creates_user_and_redirects_to_login()
    {
        $resp = $this->post('/register', [
            'username' => 'john',
            'email' => 'john@example.com',
            'password' => 'Password123',
            'password_confirmation' => 'Password123',
            'accepted' => 1,
        ]);

        $resp->assertRedirect('/login');
        $this->assertDatabaseHas('users', ['userName' => 'john', 'userEmail' => 'john@example.com']);
        $hashed = DB::table('users')->where('userName','john')->value('userPassword');
        $this->assertTrue(Hash::check('Password123', $hashed));
    }

    public function test_login_success_sets_session_and_redirects()
    {
        // seed a user
        DB::table('users')->insert([
            'userName' => 'jane',
            'userEmail' => 'jane@example.com',
            'userPassword' => Hash::make('Secret1234'),
        ]);

        $resp = $this->post('/login', [
            'username' => 'jane',
            'password' => 'Secret1234',
        ]);

        $resp->assertRedirect('/leaderboard');
        $resp->assertSessionHas('username', 'jane');
    }

    public function test_login_failure_shows_error()
    {
        $resp = $this->from('/login')->post('/login', [
            'username' => 'nobody',
            'password' => 'wrong',
        ]);

        $resp->assertRedirect('/login');
        $resp->assertSessionHasErrors('username');
    }
}
