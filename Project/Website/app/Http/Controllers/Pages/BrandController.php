<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages\Brand;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Values = Brand::all();
        //->with('i', (request()->input('page', 1) - 1) * 5)
        return view('AdminPanel.Brand',compact('Values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('AdminPanel.Brand');
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
            'BrandName' => 'required',
        ]);

        $BrandName = $request->input('BrandName');

        Brand::insert(
            [
                'BrandName' => $BrandName,
            ]

        );

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'Id_Brand' => 'required|numeric',
        ]);

        $id = $request->input('Id_Brand');
        $Values = Brand::where('Id_Brand', $id)->first();
        return view('AdminPanel.Brand',compact('Values'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'Id_Brand' => 'required|numeric',
            'BrandName' => 'required',
        ]);


        $id = $request->input('Id_Brand');
        $BrandName = $request->input('BrandName');

        $data = [
            'Id_Brand' => $id,
            'BrandName' => $BrandName
        ];

        DB::table('brand')->where('Id_Brand', $id)->update($data);

        return back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request, [
            "Id_Brand" => "required|numeric",
        ]);

        $id = $request->input('Id_Brand');

        Brand::where('Id_Brand', $id)->delete();


        return back();
    }
}
