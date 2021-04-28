<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }
    /**
     * @test
     * @return void
     */
    // public function employees_can_be_accessed()
    // {
    //     $this->expectException('Illuminate\Auth\AuthenticationException');
    //     $response = $this->get('/employees');
    //     $response->assertStatus(200);
    // }
}
