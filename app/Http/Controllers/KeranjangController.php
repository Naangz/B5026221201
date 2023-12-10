<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
	public function keranjangindex()
	{
    	// mengambil data dari table pegawai (semua)
		// $pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
        return view('keranjangindex',['keranjangbelanja' => $keranjangbelanja]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{

		// memanggil view tambah
		return view('keranjangtambah');

	}

	// method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

    // method untuk insert data ke table pegawai
	public function storebelanja(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->id,
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}
}
