<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/about2');

        $response->assertStatus(200);
    }
    public function  testaboutroute()
    {
        $response = $this->get('/about2');
        // dd($response);
        $response->assertSee('About');
    }
}
