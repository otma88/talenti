<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClanstvoController extends Controller
{
    public function index() {
      return view('clanstvo');
    }
}
