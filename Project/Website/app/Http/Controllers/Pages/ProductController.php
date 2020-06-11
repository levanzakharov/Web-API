<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Pages\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Values = Product::all();
        return view('Pages.Index',compact('Values'));
    }

    public function indexAdmin()
    {
        $Values = Product::all();
        return view('AdminPanel.Product',compact('Values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Product');
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
            'ProductName' => 'required',
            'Id_Brand' => 'required|numeric',
            'Id_Category' => 'required|numeric',
            'Price' => 'required|numeric',
            'Content' => 'required',
            'Discount' => 'required',
            'Photo' => 'required'
        ]);

        $ProductName = $request->input('ProductName');
        $Id_Brand = $request->input('Id_Brand');
        $Id_Category = $request->input('Id_Category');
        $Price = $request->input('Price');
        $Content = $request->input('Content');
        $Discount = $request->input('Discount');
        $Photo = $request->input('Photo');


        DB::table('Product')->insert(
            [
                'ProductName' => $ProductName,
                'Id_Brand' => $Id_Brand,
                'Id_Category' => $Id_Category,
                'Price' => $Price,
                'Content' => $Content,
                'Discount' => $Discount,
                'Photo' => $Photo
            ]

        );

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'Id_Product' => 'required|numeric',
        ]);

        $id = $request->input('Id_Product');
        $Values = Product::where('Id_Product', $id)->first();
        return view('AdminPanel.Product',compact('Values'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            "Id_Product" => "required|numeric",
            'ProductName' => 'required',
            'Id_Brand' => 'required|numeric',
            'Id_Category' => 'required|numeric',
            'Model_Year' => 'required|numeric',
            'Price' => 'required|numeric',
            'Content' => 'required',
            'Discount' => 'required',
            'Photo' => 'required'
        ]);

        $id = $request->input('Id_Product');
        $ProductName = $request->input('ProductName');
        $Id_Brand = $request->input('Id_Brand');
        $Id_Category = $request->input('Id_Category');
        $Price = $request->input('Price');
        $Content = $request->input('Content');
        $Discount = $request->input('Discount');
        $Photo = $request->input('Photo');

        $data = [
            'ProductName' => $ProductName,
                'Id_Brand' => $Id_Brand,
                'Id_Category' => $Id_Category,
                'Price' => $Price,
                'Content' => $Content,
                'Discount' => $Discount,
                'Photo' => $Photo
        ];

        DB::table('brands')->where('Id_Brand', $id)->update($data);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request, [
            "Id_Product" => "required|numeric",
        ]);

        $id = $request->input('Id_Product');

        Product::where('Id_Product', $id)->delete();


        return back();
    }
}
