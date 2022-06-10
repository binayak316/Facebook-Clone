<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Post;
use App\Models\like;

class likeController extends Controller
{
    // // $post mea ns post ko jun id xa tyo as a parameter accept garxa
    // public function likePost($post){
    //     // check if the user like the post or not
    //     $user = Auth::user();
        
    //     $likePost = $user->likedPosts()->where('post_id', $post)->count();//post like vaye 1 auca count ma
     
    //     if($likePost == 0){//if koi user le like gareaxaina vane like insert hunxa
    //         $user->likedPosts()->attach($post);//attachemethod le database ma data insert garxa likedposts le hasMany relation dekhako xa
    //     }else{
    //         $user->likedPosts()->detach($post);//detach method as a parameter post ko id linxa destory method ho
    //     }
    //     return redirect()->back();
    // }

    public function likePost(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $post_id = $request->likeOn;
        
        $post = Post::where('id',$request->likeOn)->first();
        // dd($post);
        
        $isLikedAlready = like::where('user_id',$user->id)->where('post_id',$post->id)->where('liked',true)->first();
        // dd($isLikedAlready);
        if(!$isLikedAlready || $user->id !== $isLikedAlready->user_id){
           $data =  like::create([
                'user_id'=> $user->id,
                'post_id'=>$post_id,
                'liked'=>true,

            ]);
            $message = 'liked';
            // return response(['message'=>"liked","likes"=>$post->likes->count()]);
            // return redirect()->back();
            // return back();
           
        
        }
        else{
            $isLikedAlready->delete();
            $message = 'unliked';
            // return response(["message"=>"unliked","likes"=>$post->likes->count()]);
            // return redirect()->back();
            // return back();
            // return response()


        }

        $totallikes = like::where('post_id', $post->id)->count();
        return response(["message"=>$message,"likes"=>$totallikes]);
    }

   






    
}
