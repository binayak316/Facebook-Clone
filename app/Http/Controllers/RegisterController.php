<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


// use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // display the login interface 
    public function index(){
        if(Auth::check()){
            $posts = Post::all();
            return view('home',['posts'=>$posts]);
        }
        return view('login');        
    }

// validation of user email and password
   public function login(){
       $attributes = request()->validate([
           'email'=>'required|exists:users,email',
           'password'=>'required'
       ]);
    //    attempt to login if validation success or fails
    if(auth()->attempt($attributes)){
        return redirect(route('authCheck'))->with('success','Welcome Back');
    }

     // if auth failed
    return back()
    ->withInput()//data will not be erased in email field
    ->withErrors(['email'=> 'Your provided credentials could not be verified']);
   }


// this is for registration of user
    public function store(){
                // validation of users
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
        // data is saved to the database table
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success', 'Your account has been created'); 
   
    }




// >>>>>>>>>>>>>>>>>>>>>>> log the user out starts<<<<<<<<<<<<<<<<<<<<<

public function logout(Request $request){

    // from laracasts
    auth()-> logout();
    return redirect('/')->with('success', 'You are logged out'); 
}
   
// >>>>>>>>>>>>>>>>>>>>>>> log the user out ends<<<<<<<<<<<<<<<<<<<<<




}
