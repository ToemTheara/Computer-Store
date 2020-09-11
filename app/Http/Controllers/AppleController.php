<?php

namespace App\Http\Controllers;
use App\Computer;

use Illuminate\Http\Request;
use DB;

class AppleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apples = Computer::Where('type',"apple")->paginate(3);
        return view('web_user.apples.apple')->with('apples',$apples);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($computer_id)
    {

        $apple =  Computer::find($computer_id);
        return view('web_user.apples.apple_detail')->with('apple',$apple);


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
    public function model(){
        $models = Computer::Where('type',"apple")->get();
        return view('web_user.apples.apple')->with('models',$models);

    }
    public function searchModel(Request $request)
    {
        $search_model = $request->input('model');
        $search_year = $request->input('year');
        $computers = DB::table('computers')
                       ->where('model',$search_model)
                       ->where('year',$search_year)
                       ->paginate(3);
        return view('web_user.apples.apple_filter')->with('computers',$computers);
    }
}
