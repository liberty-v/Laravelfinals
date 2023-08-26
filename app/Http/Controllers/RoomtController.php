<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomt;

class RoomtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomts = Roomt::orderBy('room_num','asc')->get();
        return view('roomt.index')->with('roomt', $roomts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /*
        $room = Roomt::find($id);
        return view('roomt.show')->with('roomt',$room);
        */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
