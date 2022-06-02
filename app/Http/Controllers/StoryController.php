<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;
use Intervention\Image\Facades\Image;

class StoryController extends Controller
{
    public function mystory(Request $request){
        $user = $request->user();
        $stories = new Story;
        if($request->hasFile('uploadTheStory')){
            $IMG = $request->file('uploadTheStory');
            $filename = $IMG->getClientOriginalName();
            Image::make($IMG)->save(public_path('images/stories/'.$filename));
            $stories->storyImg = $filename;
           
        }
        $user->Post()->save($stories);
        return redirect(route('authCheck'))->with('successMessage',"created a story");

    }
        
        
}
