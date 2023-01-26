<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfosController extends Controller
{
    //
     public function index()
    {
        //
        $posts = Info::orderBy('id', 'desc')->paginate(10);
        return view('home',compact('posts'));
    }

    public function getResult(Request $request){
        $data = Info::select('title')-> where("title", "LIKE", "%{$request-> term}%")-> get();
        return response()->json($data);
    }
    public function uploadImage(Request $request){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/', $fileName);
            $message = 'Image uploaded Successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
    public function store(Request $request){
        $input = $request->all();
        Info::create($input);
        return redirect('/home')->with('flash_message', 'Saved To Database SUCCESSFULLY!');
    }
}
