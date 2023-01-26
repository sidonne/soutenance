<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class StartPageController extends Controller
{
    //
    public function startpage(Request $request){
        $search = $request-> input('search');
        if ($search-> filled(input('search'))) {
            #return ('Please enter a search');
            $result = Info::where([
                "title"=> "$search",
            ])->get();
            return view('home', compact('result'));
        } #else {
            # $search = $request-> input('search');

        #}


    }
}
