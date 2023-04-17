<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        print_r($response->status());
        // print_r($response->statusText());
        print_r($response->getStatusCode());
        
        $response->assertStatus(200);
    }
}
