<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vacancy;

class VacancyController extends Controller
{
    public function __construct() {
        $this->middleware("IsCompany");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Values = Vacancy::all();
        return view("User",compact("Values"));
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
        $obj = new Vacancy();
        $obj->VacancyName = $request->input('VacancyName');
        $obj->Content = $request->input('Content');
        $obj->CompanyId = $request->user()->id;
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
        //
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
        $id = $request->user()->id;
        $obj = Vacancy::find($id);
        $obj->VacancyName = $request->input('VacancyName');
        $obj->Content = $request->input('Content');
        $obj->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->user()->id;
        $obj = Vacancy::find($id);
        $obj->delete();
    }
}
