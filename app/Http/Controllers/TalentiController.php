<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentiController extends Controller
{
    public function index()
    {
      return view('talenti');
    }
}
