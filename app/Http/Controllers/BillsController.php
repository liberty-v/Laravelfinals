<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class BillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bills = Bill::orderBy('created_at','asc')->get();
        return view('bills.index')->with('bills',$bills);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'boarder_id' =>'required',
            'month' =>'required',
            'due_date' =>'required',
            'rent' =>'required',
            'electricity' =>'required',
            'water' =>'required',
            'status' =>'required'
        ]);

        //create bill
        $bill = new Bill;
        $bill->boarder_id = $request->input('boarder_id');
        $bill->month = $request->input('month');
        $bill->due_date = $request->input('due_date');
        $bill->rent = $request->input('rent');
        $bill->electricity = $request->input('electricity');
        $bill->water = $request->input('water');
        $bill->status = $request->input('status');
        $bill->save();

        return redirect('/bills')->with('success','Bill Created');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $boarder_id)
    {
        $bills = Bill::where('boarder_id', $boarder_id)->get();
        return view('bills.show')->with('bills', $bills);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bill = Bill::find($id);
        return view('bills.edit')->with('bill', $bill);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'boarder_id' =>'required',
            'month' =>'required',
            'due_date' =>'required',
            'rent' =>'required',
            'electricity' =>'required',
            'water' =>'required',
            'status' =>'required'
        ]);

        //create bill
        $bill = Bill::find($id);
        $bill->boarder_id = $request->input('boarder_id');
        $bill->month = $request->input('month');
        $bill->due_date = $request->input('due_date');
        $bill->rent = $request->input('rent');
        $bill->electricity = $request->input('electricity');
        $bill->water = $request->input('water');
        $bill->status = $request->input('status');
        $bill->save();

        return redirect('/bills')->with('success','Bill Updated');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        return redirect('/bills')->with('success','Bill Removed');

    }
}
