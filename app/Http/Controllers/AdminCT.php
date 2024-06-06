<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCT extends Controller
{
    public function index(){
        return view('admin.content.dashboard');
    }
}
