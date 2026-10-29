<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $routes = ['/', '/services', '/contact', '/team', '/gallery'];
        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }
}
