<?php

namespace App\Http\Controllers;
use App\Computer;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search_products = $request->input('query');
        $computers = Computer::where('name','like',"%$search_products%")
                              ->orwhere('type','like',"%$search_products%")->paginate(3);
        return view('web_user.search_products')->with('computers',$computers);
    }

}
