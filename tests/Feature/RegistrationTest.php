<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response\type;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_register_user()
    {

        // $this->validate([
        //     'email' => 'example@test.se',
        //     'name' => 'userTest',
        //     'password' => '12345678',
        // ]);
        // confirmed|$user = User::
        $this->get('/signup')
            ->type('UserTest', 'name')
            ->type('example@test.se', 'email')
            ->type('123456789', 'password')
            ->press('Create an account')
            ->seePageIs('/index');
        // ->assertSeeText('Hello, User test!')

    }
    // public function test_register_user()
    // {
    // $this->get('/signup')
    // ->type('UserTest', 'name')
    // ->type('example@test', 'email')
    // ->type('123456789', 'password')
    // ->press('Create an account');
    // ->seePageIs('/index');
    // }
}
