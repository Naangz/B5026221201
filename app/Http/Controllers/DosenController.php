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

    public function showjam($jam){

    	return "<h2> sekarang jam: ". $jam. "</h2>" ;

    }

    public function formulir(){

    	return view('formulir');

    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Nama : ".$nama.", Alamat : ".$alamat.", NRP : ".$nrp."<br>".$request;
    }
}
