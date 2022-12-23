<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>['required', 'min:5', 'max:20', 'unique:users'],
            'email'=>'required|email|dns|unique:users',
            'password'=>'required|min:6|max:16',
            'phone'=>'required|max:255',
            'address'=>'required|max:255',
        ]);
        $validatedData['password']= Hash::make($validatedData['password']);

        User::create($validatedData);

        // $this->$request->session()->flash('success', 'Registration successful! Please Login');

        return redirect('/login')->with('success', 'Registration successful! Please Login');
    }
}
