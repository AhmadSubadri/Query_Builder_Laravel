<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        return view('home');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function about(){
        // mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('about',['pegawai' => $pegawai]);
    }

    public function contact(){
        return view('contact');
    }
}
