<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('home',compact('posts'));
    }

    public function getResult(Request $request){
        $data = Post::select('title')-> where("title", "LIKE", "%{$request-> term}%")-> get();
        return response()->json($data);
    }
}
