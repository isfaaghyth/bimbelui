<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class RegistrationController extends Controller
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
         $data['title'] = 'Registrasi BIMBEL-UI';
         return view('registration', compact('data'));
         //return view('about', $data);
    }
}
