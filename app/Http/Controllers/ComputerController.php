<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::latest()->paginate(3);
        return view('web_admin.computers.index', compact('computers'))->with('i',(request()->input('page',1)-1)*3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web_admin.computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpeg|max:2048',
            'name' => 'required',
            'type' => 'required',
        ]);
        $computer = new Computer();
        $computer->image = $request->input('image');
        $computer->name = $request->input('name');
        $computer->type = $request->input('type');
        $computer->price = $request->input('price');
        $computer->cpu = $request->input('cpu');
        $computer->ram = $request->input('ram');
        $computer->storage = $request->input('storage');
        $computer->detail = $request->input('detail');

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'-'.time().'.'.$extention;
            $path = $request->file('image')->storeAs('public/images',$fileNameToStore);
        }else {
            $fileNameToStore = 'noimage.jpg';
        }
            $computer->image = $fileNameToStore;
            $computer->save();

            return redirect()->route('computers.index')->with('success','Computer Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        return view('web_admin.computers.edit', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer_id)

    {
        $computer = Computer::find($computer_id);
        $computer->image = $request->input('image');
        $computer->name = $request->input('name');
        $computer->type = $request->input('type');
        $computer->price = $request->input('price');
        $computer->cpu = $request->input('cpu');
        $computer->ram = $request->input('ram');
        $computer->storage = $request->input('storage');
        $computer->detail = $request->input('detail');
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'-'.time().'.'.$extention;
            $path = $request->file('image')->storeAs('public/images',$fileNameToStore);
        }else {
            $fileNameToStore = 'noimage.jpg';
        }
            $computer->image = $fileNameToStore;
            $computer->save();

        return redirect()->route('computers.index')->with('success','Computer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {

        $computer->delete();
        return redirect()->route('computers.index')->with('success','Computer Deleted');


    }
}
