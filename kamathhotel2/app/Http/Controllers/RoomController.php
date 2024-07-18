<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Room::all();
        return view('index',['data'=>$data]);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new RoomType;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/room/create')->with('success','Data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Room::find($id);
        return view('show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $data=Room::find($id);
        return view('edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Room::find($id);
        $data->title=$request->title;

        $data->save();

        return redirect('admin/roomtype/'.$id.'/edit')->with('success','Data has been updated.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Room::where('id',$id)->delete();
        return redirect('admin/roomtype')->with('success','Data has been deleted.');
    }
}
