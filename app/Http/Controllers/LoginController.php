<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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

        // $credentials = $request->only(['email', 'password']);

        $credentials =  $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            // Auth::login();

            return redirect('/dashboard');
        }
        return back()->withErrors('Whoops! Please try to login again.');
    }


    //

    // // Login and "remember" the given user...
    // Auth::login($user, true);
}
