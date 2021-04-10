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
<<<<<<< HEAD
        // $credentials = [
        //     'email' => $request['email'],
        //     'password' => $request['password'],

        // ];
=======

>>>>>>> 158cc1192136381fe3254e7e89822137c1dd3452
        $credentials = $request->only(['email', 'password']);

        // dd($credentials);
        if (Auth::attempt($credentials)) {
<<<<<<< HEAD


            return redirect('dashboard');
        } else {
            return back()->withErrors('Whoops! Please try to login again.');
        }
=======
            return view('/index');
        }
        return back()->withErrors('Whoops! Please try again.');
>>>>>>> 158cc1192136381fe3254e7e89822137c1dd3452
    }
}
