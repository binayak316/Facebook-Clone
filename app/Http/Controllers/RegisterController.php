<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\User;
// use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function login(){
        return view('login');
    }


    public function store(){
        
        $attributes = request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required',
            'month'=>'required',
            'day'=>'required',
            'year'=>'required',
            'gender'=>'required',

        ]);
        
       $user =  User::create($attributes);

       auth()->login($user);


        session()->flash('success', 'Your account has been created');

        return redirect('/');
       
    }
}
