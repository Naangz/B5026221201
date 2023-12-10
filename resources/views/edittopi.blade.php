@extends('master')
@section('taitel','Edit Topi')

@section('konten')
	<h3>Edit Topi</h3>



	@foreach($topi as $t)
	<form action="/topi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodetopi" value="{{ $t->kodetopi }}"> <br/>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">Merk Topi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="merktopi" value="{{ $t->merktopi }}">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Stock Topi</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="stocksnack" value="{{ $t->stocktopi }}">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Tersedia:</label>
            <div class="col-sm-10">
                @if ($t->tersedia == "Y")
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y" checked>Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T"> Tidak Tersedia</div>
                @else
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y">Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T" checked> Tidak Tersedia</div>
                @endif
            </div>
          </div>
          <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Simpan">
                |
                <a class="btn btn-warning" href="/topi"> Kembali</a>
            </div>
          </div>
	</form>
	@endforeach

@endsection
