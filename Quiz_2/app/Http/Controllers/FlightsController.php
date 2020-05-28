<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flights;

use function Ramsey\Uuid\v1;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Flights::all();
        return view("Flights.index",compact("data",$data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Flights;
        $obj->identification = $request->identification;
        $obj->FromFlightName = $request->FromFlightName;
        $obj->ToFlightName = $request->ToFlightName;
        $obj->FromFlightName = $request->FromFlightDate;
        $obj->ToFlightName = $request->ToFlightDate;
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
        $data = Flights::find($id);
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
        $obj = Flights::find($id);
        $obj->identification = $request->identification;
        $obj->FromFlightName = $request->FromFlightName;
        $obj->ToFlightName = $request->ToFlightName;
        $obj->FromFlightName = $request->FromFlightDate;
        $obj->ToFlightName = $request->ToFlightDate;
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
        $obj = Flights::find($id);
        $obj->delete();
    }
}
