<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ccController extends Controller
{
	public function indexcc()
	{
    	// mengambil data dari table kategori
		//$pegawai = DB::table('kategori')->get();
        $kategori = DB::table('kategori')->get();
    	// mengirim data pegawai ke view index
		return view('indexcc',['kategori' => $kategori]);

	}


    public function lihat(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('lihatcc', ['selectedKategoriId' => $selectedKategoriId,]);
}


}
