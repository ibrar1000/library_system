<?php

namespace App\Http\Controllers;

use App\Book;
use App\Rack;
use Illuminate\Http\Request;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $racks = Rack::get();

//        $racks->book_count = $books->
//        $length = count($books);
//        $count=0;
//        $j=0;
//        for($i = 0; $i<$length; $i++)
//        {
//            $count = Book::where('rack_id', $racks[$j]->id)->first();
//            $count = Book::where('rack_id', 'about-me')->first();
//            $j++;
//        }



//        $count = DB::where('page', 'about-me')->first();


        return view('admin.racks.view', compact('racks'));

//        return view('layouts.admin.app');

    }
    public function userIndex()
    {
        $racks = Rack::all();
        return view('user.racks.view', compact('racks'));
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
     * @param  \App\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function show(Rack $rack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function edit(Rack $rack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rack $rack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rack $rack)
    {
        //
    }
}
