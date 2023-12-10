<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class topiController extends Controller
{
	public function indextopi()
	{
    	// mengambil data dari table topi
		//$pegawai = DB::table('pegawai')->get();
        $topi = DB::table('topi')
        ->get();
    	// mengirim data pegawai ke view index
		return view('indextopi',['topi' => $topi]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahtopi()
	{

		// memanggil view tambah
		return view('tambahtopi');

	}

	// method untuk insert data ke table pegawai
	public function storetopi(Request $request)
	{
		// insert data ke table pegawai
		DB::table('topi')->insert([
			'kodetopi' => $request->kodetopi,
			'merktopi' => $request->merktopi,
			'stocktopi' => $request->stocktopi,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/topi');

	}

	// method untuk edit data pegawai
	public function edittopi($kodetopi)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kodetopi = DB::table('topi')->where('kodetopi',$kodetopi)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edittopi',['topi' => $kodetopi]);

	}

    public function lihattopi($kodetopi)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kodetopi = DB::table('topi')->where('kodetopi',$kodetopi)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('lihattopi',['topi' => $kodetopi]);

	}



	// update data pegawai
	public function updatetopi(Request $request)
	{
		// update data pegawai
		DB::table('topi')->where('kodetopi',$request->kodetopi)->update([
			'merktopi' => $request->merktopi,
			'stocktopi' => $request->stocktopi,
			'tersedia' => $request->tersedia,

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/topi');
	}

	// method untuk hapus data pegawai
	public function hapustopi($kodetopi)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('topi')->where('kodetopi',$kodetopi)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/topi');
	}
    public function caritopi(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$topi = DB::table('topi')
		->where('merktopi','like',"%".$cari."%")->get();


    		// mengirim data pegawai ke view index
		return view('indextopi',['topi' => $topi, 'cari' => $cari]);

	}
}
