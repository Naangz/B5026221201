@extends('master')

@section('taitel', 'Nilai Kuliah')

@section('konten')

	<h3>Nilai Kuliah</h3>

	<a class="btn btn-danger"href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/storenilai" method="post" class="form-horixontal">
		{{ csrf_field() }}


        <div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label ">NRP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="NRP" name="NRP" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka" min="1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-2 col-form-label ">SKS</label>
            <div class="col-sm-9">
                <input class="form-control" id="SKS" name="SKS" rows="5" required></input>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
	</form>



@endsection
