<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    public function index()
    {
        return view('AdminPanel.Index');
    }
}
