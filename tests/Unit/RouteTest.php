<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    { 
        // $user = factory(User::class)->create();
        // print_r($user);

        $response = $this->get("/");
        $response->assertSee('Laravel');
        $response->assertSee('Documentation');
        $response->assertSeeText('Documentation');
        $response->assertDontSee('Documentation1');
        $response->assertDontSeeText('Documentation1');
        $response->assertStatus(200);
        

        // $response = $this->json('POST', '/user', ['name' => 'gaurav']);

        // $response = $this->withSession(['foo' => 'bar'])->get('/');
        // $response->assertSessionHas('foo', 'bar');
        
        // $response->assertStatus(201);
        // $response->assertStatus(404);

        // $this->assertEquals(200, $response->getStatusCode());
        // $this->assertEquals(404, $response->getStatusCode());

        // $this->assertTrue(true); 

        // $this->assertDatabaseHas('users', [
        //     'email' => 'gauravmrvh1@gmail.com'
        // ]);
    }

    public function test_route_about_return_succesfull_response()
    {
        $response = $this->get("/about");
        $response->assertStatus(200);
    }

    public function test_login_redirect_to_dashboard()
    {
        User::create([
            'name' => 'gaurav',
            'email' => 'gaurav.marvaha@unthinkable'.rand(10000,1000).'.co',
            'password' => bcrypt('password')
        ]);

        $response = $this->post("/login", [
            'email' => 'gaurav.marvaha@unthinkable.co',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
        // $response->assertRedirect('/home');
        $response->assertRedirect('/');
    }

    public function test_auth_user_can_acess_dashboard()
    {
        $user = User::create([
            'name' => 'gaurav',
            'email' => 'gaurav.marvaha@unthinkable'.rand(10000,1000).'.co',
            'password' => bcrypt('password')
        ]);

        $response = $this->actingAs($user)->get('/home');
        $response->assertStatus(200);
    }

    public function test_unauth_user_cannot_acess_dashboard()
    {
        $response = $this->get("/about");
        $response->assertStatus(200);

        $response = $this->get("/home");
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_user_have_name_attribute()
    {
        $user = User::first();
        $this->assertEquals('gaurav', $user->name);
    }

    
}
