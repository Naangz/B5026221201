@extends('master')

@section('taitel', 'Data Topi')

@section('konten')

	<h3>Data Topi</h3>

	<a class="btn btn-danger"href="/indextopi"> Kembali</a>

	<br/>
	<br/>

	<form action="/topi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merktopi" class="col-sm-2 col-form-label">Merk Topi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merktopi" name="merktopi" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="stocktopi" class="col-sm-2 col-form-label ">Stock Topi</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="stocktopi" name="stocktopi" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia?</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="Y">
                <label class="form-check-label" for="Y">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="N">
                <label class="form-check-label" for="N">No</label>
              </div>
            </div>
          </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
	</form>



@endsection
