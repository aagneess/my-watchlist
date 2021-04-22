<?php

namespace Tests\Feature;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\Generator\Parameter;
use Illuminate\Testing\Fluent\AssertableJson;


use Tests\TestCase;

class MovieTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testAllRoutes()
    {
        $urls = [
            '/',
            '/login',
            '/signup'
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            if ($response->assertStatus(200)) {
                $this->assertTrue(true);
            } else {
                $this->assertTrue(false);
            }
        }
    }
    public function testIndexMovie()
    {
        $response = $this->json('GET', '/');
        $response
            ->assertStatus(200);
    }
}
