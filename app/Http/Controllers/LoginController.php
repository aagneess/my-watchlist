<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $user = User::get([
        //     'email' => $request->only('email'),
        //     // 'name' => $request->name,
        //     'password' => $request->only('password')
        // ]);

        $credentials = $request->only(['email', 'password']);
        // $email = $request->email;
        // $password = $request->password;



        if (Auth::attempt($credentials)) {
            dd($credentials);
            return view('index');
        }
        return back()->withErrors('Whoops! Please try again.');
    }
}
