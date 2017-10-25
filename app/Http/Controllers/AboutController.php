<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class AboutController extends Controller
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
         $data['title'] = 'Tentang Kami';
         $data['pg1'] = 'Selamat datang di Lembaga Pendidikan yang didirikan dan dikelola oleh alumni sekaligus dosen Fakultas Ekonomi Universitas Indonesia (FE-UI) dan Fakultas Hukum Universitas Indonesia (FH-UI). Kami bergerak dan fokus pada pendidikan dan pengembangan sumber daya manusia sehingga bisa menjadi manusia yang unggul dan berkarakter.';
         $data['pg2'] = 'Bimbingan belajar yang kami berikan berbeda dengan bimbingan belajar yang ada saat ini. Kami mengadakan bimbingan belajar dengan suatu proses teknik pembelajaran yang unggul, unik, komprehensif dan integratif sehingga peserta didik bisa meraih impian masuk Universitas Indonesia (UI) ataupun Perguruan Tinggi Negeri favorit lainnya.';
         return view('about', compact('data'));
         //return view('about', $data);
    }
}
