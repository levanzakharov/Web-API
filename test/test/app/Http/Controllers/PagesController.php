<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = array(
            'title'=> 'Welcome',
            'content'=> 'this is data'
        );
        return view('Pages/index')->with($data);
    }

    public function about()
    {
        return view('Pages/about');
    }
}
