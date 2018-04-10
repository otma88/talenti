<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosloviController extends Controller
{
    public function index(){
      return view('audicije-poslovi');
    }
}
