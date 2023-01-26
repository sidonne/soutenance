<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Info;
use App\Http\Controllers\StartPageController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $search = $request-> input('search');
        $result = Info::where([
            "title"=> "$search",
        ])->get();
        $home_controller = new HomeController;
        $home_controller->startpage($request);

        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('home',compact('posts'));

        $post=Post::all();
        return view('home', compact('post'));
        //return view('home');
    }
}
