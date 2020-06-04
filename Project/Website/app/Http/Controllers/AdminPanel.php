<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function index()
    {
        return view('AdminPanel.Index');
    }

    public function brand()
    {
        return view('AdminPanel.Brand');
    }
}
