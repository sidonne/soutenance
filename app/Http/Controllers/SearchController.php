<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    //
    public function search(){
        return view('start');
    }

    public function getResult(Request $request){
        //$data = Post::select('title')-> where("title", "LIKE", "%{$request-> term}%")-> get();
        //return response()->json($data);

        //$search = $request->input('search');
        //$data = Post::query('title')-> where('title', 'LIKE', "%{$search}%")->get();
        //return redirect-> view('welcome', compact('data'));

        //$data = DB::table('infos')->where('title', 'like', "%".$search."%");
        //return view('search.welcome', compact('data'));

        return Post::select('title')-> where('title', 'like', "%{$request->term}%")-> pluck('title');
    }
}
