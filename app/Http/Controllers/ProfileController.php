<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\User;
use Auth;
use DateTime;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }
    // logic for profile picture post functionality
    public function profile_posted(Request $request){
        // handling the user image upload for this we use Image Intervention package        
        if($request->hasFile('postImage')){
            
            $image = $request->file('postImage');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('images/profiles/' . $filename));
            
            $user = Auth::user();
            $user->Image = $filename; //$user->Image vaneko chai user vanne table ko image vanne column ho 
            $user->save();
        }
        return view('profile');
    }
    // logic for cover pitcure post functionality
    public function cover_posted(Request $request){
        
        if($request->hasFile('coverIMG')){
            $originalIMG = $request->file('coverIMG');
            $filename = time() . '.' . $originalIMG->getClientOriginalExtension();
            Image::make($originalIMG)->save(public_path('images/cover/'. $filename));
            
            $user = Auth::user();
            $user->Cover_img = $filename;//Cover_img is the column of the database
            $user->save();
        }
        
        return view('profile');
    }
 
    
}
 