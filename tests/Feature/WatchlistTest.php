<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WatchlistTest extends TestCase
{
    use RefreshDatabase;

    public function testAddMovie()
    {
        $addMovie = new Watchlist();
        $addMovie->movie_id = '123';
        $addMovie->title = 'example';
        $addMovie->poster_path = 'example';
        $addMovie->user_id = '1';
        $addMovie->save();

        $this->assertDatabaseHas('watchlist', [
            "movie_id" => "123",
            "title" => "example",
            "poster_path" => "example",
            "user_id" => "1"
        ]);
    }

    public function testDeleteMovie()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->followingRedirects()
            ->post('delete', [
                "id" => 1
            ]);

        $this->assertDatabaseMissing('watchlist', [
            "id" => 1,
        ]);
    }
}
