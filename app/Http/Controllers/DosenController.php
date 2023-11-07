<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 7;
        $b = 2;
        $c = $a%$b;
        return "<h1>Hasil mod: ". $c . "</h1>";
    }

    public function biodata(){
    	$nama = "nang";
        $alamat = "sprk13";
        $umur = 19 ;
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
