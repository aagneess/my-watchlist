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
        // $credentials = [
        //     'email' => $request['email'],
        //     'password' => $request['password'],

        // ];
        $credentials = $request->only(['email', 'password']);

        dd($credentials);
        if (Auth::attempt($credentials)) {


            return redirect('dashboard');
        }

        return back()->withErrors('Whoops! Please try to login again.');
    }
}
