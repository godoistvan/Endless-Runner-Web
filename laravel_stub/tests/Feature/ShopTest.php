<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ShopTest extends TestCase
{
    use WithoutMiddleware;
    protected function setUp(): void
    {
        parent::setUp();
        config(['database.default' => 'sqlite']);
        config(['database.connections.sqlite.database' => ':memory:']);

        Schema::create('items', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('img')->nullable();
            $table->integer('price')->default(0);
            $table->boolean('onsale')->default(false);
        });

        // Middleware disabled via trait

        DB::table('items')->insert([
            ['name'=>'Sword','description'=>'Sharp','img'=>'sword.png','price'=>100,'onsale'=>1],
            ['name'=>'Shield','description'=>'Sturdy','img'=>'shield.png','price'=>200,'onsale'=>0],
        ]);
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('items');
        parent::tearDown();
    }

    public function test_shop_index_shows_weekly_deals()
    {
        $resp = $this->get('/shop');
        $resp->assertStatus(200);
        $resp->assertSee('Sword');
        $resp->assertDontSee('Shield');
    }

    public function test_cart_add_and_remove()
    {
        $respAdd = $this->post('/cart/add', ['termekID' => 1]);
        $respAdd->assertSessionHas('status');
        $this->assertEquals(1, session('kosar')[1] ?? 0);

        $respAdd2 = $this->post('/cart/add', ['termekID' => 1]);
        $this->assertEquals(2, session('kosar')[1] ?? 0);

        $respRemove = $this->post('/cart/remove', ['productID' => 1]);
        $respRemove->assertSessionHas('status');
        $this->assertArrayNotHasKey(1, session('kosar') ?? []);
    }
}
