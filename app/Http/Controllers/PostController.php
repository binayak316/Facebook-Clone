<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create(Request $request)//method to post the data to the database of fb_ko_post
    {
        $user = $request->user();//request is possible is auth user is logged in
        $fb_ko_post = new Post;   
        $fb_ko_post->body = $request->TextPost;   
        // if only status then upper section will run after that whethere i have photo then downward will run
        if($request->hasFile('inputimage')){
            $image = $request->file('inputimage');
            $filename =$image->getClientOriginalName();
            // $image ->storeAs('images/post/'. $filename);
            Image::make($image)->save(public_path('images/post/'.$filename));
            $fb_ko_post->Img = $filename;
        }
        $user->post()->save($fb_ko_post);
        return redirect(route('authCheck'))->with('prompt',"Your post has been added");

       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
