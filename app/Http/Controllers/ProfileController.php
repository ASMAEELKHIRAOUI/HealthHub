<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request){
        // return $request;
        Auth::user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'updated_at' => now()
        ]);
        return redirect()->route('welcome');
    }
    public function edit()
    {
        $user=Auth::user();
        return view('profile', ['user' => $user]);
    }

}
