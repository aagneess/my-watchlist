<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'name' => 'required|max:255|alpha_num|min: 4',
            'password' => 'required|min:6',
        ]);
        // confirmed|
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        $user = Auth::user();
        $id = Auth::id();

        Auth::attempt($request->only('email', 'password'));


        return redirect('dashboard');
    }
}
