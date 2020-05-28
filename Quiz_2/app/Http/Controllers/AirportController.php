<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airports;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Airports::all();
        return view("Airports.index",compact("data",$data));
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
        $obj = new Airports();
        $obj->identification = $request->identification;
        $obj->name = $request->name;
        $obj->country = $request->country;
        $obj->city = $request->city;
        $obj->TimeBelt = $request->TimeBelt;
        $obj->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Airports::find($id);
        return view("Flights.Find",compact("data",$data));
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
        $obj = Airports::find($id);
        $obj->identification = $request->identification;
        $obj->name = $request->name;
        $obj->country = $request->country;
        $obj->city = $request->city;
        $obj->TimeBelt = $request->TimeBelt;
        $obj->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Airports::find($id);
        $obj->delete();
    }
}
