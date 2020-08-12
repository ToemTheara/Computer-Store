<?php

namespace App\Http\Controllers;
use App\Computer;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory(){

        $computers = Computer::latest()->paginate(6);
        return view('web_user.home', compact('computers'))->with('i',(request()->input('page',1)-1)*6);
    }
    public function Apple(){
        $apple = Computer::Where('type',"apple")->get();
        return view('web_user.apple', compact('apple'));
    }
    public function Msi(){
        $msi = Computer::Where('type',"msi")->get();
        return view('web_user.msi', compact('msi'));
    }
    public function Dell(){
        $dell = Computer::Where('type',"dell")->get();
        return view('web_user.dell', compact('dell'));
    }
    public function Lenovo(){
        $lenovo = Computer::Where('type',"lenovo")->get();
        return view('web_user.lenovo',compact('lenovo'));
    }
    public function Asus(){
        $asus = Computer::Where('type',"asus")->get();
        return view('web_user.asus', compact('asus'));
    }
}
