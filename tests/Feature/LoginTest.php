<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {

        $user = User::create([
            'name' => 'User test',
            'email' => 'example@yrgo.se',
            'password' => password_hash('123456', 1)

        ]);
        Auth::login($user);

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '123456',
            ]);

        $response->assertSeeText('Hello, User test!');
    }

    // public function test_login_user_without_password()
    // {
    //     $response = $this
    //         ->followingRedirects()
    //         ->post('login', [
    //             'email' => 'example@yrgo.se',
    //         ]);

    //     $response->assertSeeText('Whoops! Please try to login again.');
    // }
}
