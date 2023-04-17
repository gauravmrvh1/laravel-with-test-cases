<?php

namespace Tests\Unit;

use App\User;
use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_product_route()
    {
        $response = $this->get("/product");
        $this->assertTrue(true);
        $response->assertSeeText('Product Index Page');
        $response->assertStatus(200);
    }

    public function test_product_has_name()
    {
        $product = Product::create([
            'name' => 'Product Name'
        ]);

        $this->assertNotEmpty($product->name);

        $response = $this->get("/product");
        $response->assertSee('Product Name');
        $response->assertDontSee('No Products');
    }

    public function test_product_are_empty()
    {
        Product::where('id','>=',1)->delete();
        $response = $this->get("/product");
        $response->assertSee('No Products');   
    }

    public function test_product_are_not_empty()
    {
        $product = Product::create([
            'name' => 'Product Name'
        ]);

        $response = $this->get("/product");
        $response->assertDontSee('No Products');   
    }

    public function test_not_auth_user_can_see_buy_button()
    {   
        $response = $this->get("/product");
        $response->assertStatus(200);
        // $response->assertSee('Buy Product'); 
        $response->assertDontSee('Buy Product'); 
    }  
    
    public function test_auth_user_can_see_buy_button()
    {   
        $user = User::create([
            'name' => 'gaurav',
            'email' => 'gaurav.marvaha@unthinkable'.rand(10000,1000).'.co',
            'password' => bcrypt('password')
        ]);

        $user = User::first();

        $response = $this->actingAs($user)->get('/home');
        $response->assertStatus(200);

        $response = $this->get("/product");
        $response->assertStatus(200);
        $response->assertSee('Buy Product'); 
    } 

}