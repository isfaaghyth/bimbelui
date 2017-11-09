<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class ContactController extends Controller
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
         $data['title'] = 'Hubungi Kami';
         return view('contact', compact('data'));
         //return view('about', $data);
    }
}
