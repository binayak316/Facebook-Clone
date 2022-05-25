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


    
    
    
}
 