<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductCrudTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_create_product()
    {
        $user = User::first();

        $response = $this->actingAs($user)->post(route('product.store'),[
            'name' => 'Product Name'
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('product.index'));

        $this->assertDatabaseHas('products',[
            'name' => 'Product Name'
        ]);
        
    }
}
