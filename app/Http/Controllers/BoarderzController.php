<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boarder;


class BoarderzController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boarders = Boarder::orderBy('room_number','asc')->get();
        return view('boarderz.index')->with('boarderz', $boarders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('boarderz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'room_number' => 'required'

        ]);
        
        //create post
        $boarder = new Boarder;
        $boarder->first_name = $request->input('first_name');
        $boarder->last_name = $request->input('last_name');
        $boarder->contact_number = $request->input('contact_number');
        $boarder->room_number = $request->input('room_number');
        $boarder->user_id = auth()->user()->id;
        $boarder->save();

        return redirect('/boarders')->with('success', 'Boarder Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boarder = Boarder::find($id);
        return view('boarderz.show')->with('boarder',$boarder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boarder = Boarder::find($id);
        return view('boarderz.edit')->with('boarder',$boarder);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'room_number' => 'required'

        ]);
        
        //create post
        $boarder = Boarder::find($id);
        $boarder->first_name = $request->input('first_name');
        $boarder->last_name = $request->input('last_name');
        $boarder->contact_number = $request->input('contact_number');
        $boarder->room_number = $request->input('room_number');
        $boarder->save();

        return redirect('/boarders')->with('success', 'Boarder Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //deletes the row
        $boarder = Boarder::find($id);
        $boarder->delete();
        return redirect('/boarders')->with('success', 'Boarder Deleted');


    }
}
