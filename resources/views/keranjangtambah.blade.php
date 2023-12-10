@extends('master')

@section('taitel', 'Data Belanja')

@section('konten')
    <h3>Tambahkan Produk</h3>

    <a href="/keranjangbelanja" class="btn btn-danger"> Kembali</a>

    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "kode" class = "col-sm-2 control-label">Kode Barang</label>

            <div class = "col-sm-10">
                <input name="kode" type = "number" class = "form-control" id = "kode"
                    placeholder = "Masukkan Kode Barang">
            </div>

        </div>

        <div class = "form-group row">
            <label for = "jumlah" class = "col-sm-2 control-label">Jumlah</label>

            <div class = "col-sm-10">
                <input name="jumlah" type = "number" class = "form-control" id = "jumlah" placeholder = "Masukkan Jumlah">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "harga" class = "col-sm-2 control-label">Harga</label>

            <div class = "col-sm-10">
                <input name="harga" class = "form-control" id = "harga" placeholder = "Masukkan Harga">
            </div>

        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>

@endsection
