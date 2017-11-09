<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class FeluniController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['title'] = 'Feluni UI';
         return view('feluni', compact('data'));
         //return view('about', $data);
    }
}
