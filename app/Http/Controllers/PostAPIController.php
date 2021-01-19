<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostAPIController extends Controller
{
    //
    public function fetch(){
        return Post::all();
    }

    public function create(Request $request){
        Post::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'body'=>$request->body,
            'image'=>$request->image,
            'user_id'=>$request->user_id,
        ]);
        return "data inserted successfully";
    }

    public function delete($id){
        Post::find($id)->delete();
        return "data delated successfully";
    }

}
