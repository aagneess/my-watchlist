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

        $credentials = $request->only(['email', 'password']);

        // dd($credentials);
        if (Auth::attempt($credentials)) {

            return view('index');
        }
        return back()->withErrors('Whoops! Please try again.');
    }
}
