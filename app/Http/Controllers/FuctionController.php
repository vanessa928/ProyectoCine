<?php

namespace App\Http\Controllers;

use App\fuction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = DB::table('fuctions')->paginate(2);
        return view('fuctions.index', compact('fuctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fuctions.create');
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

            'start' => 'required',
            'end' => 'required',
            'aviable' => 'required',
            'type' => 'required',
        ]);
        fuction::create($request->all());

        return redirect()->route('fuctions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fuction  $fuction
     * @return \Illuminate\Http\Response
     */
    public function show(fuction $fuction)
    {
        return view('fuctions.show', compact('fuction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fuction  $fuction
     * @return \Illuminate\Http\Response
     */
    public function edit(fuction $fuction)
    {
        return view('fuctions.edit', compact('fuction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fuction  $fuction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fuction $fuction)
    {
        $request->validate([

            'start' => 'required',
            'end' => 'required',
            'aviable' => 'required',
            'type' => 'required',
        ]);
        $fuction->update($request->all());

        return redirect()->route('fuctions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fuction  $fuction
     * @return \Illuminate\Http\Response
     */
    public function destroy(fuction $fuction)
    {
        $fuction->delete();
        return redirect()->route('fuctions.index');
    }
}
