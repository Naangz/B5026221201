@extends('master')

@section('taitel', 'Data Topi')

@section('konten')

<h2 class="text-center">View Data Topi</h2>

<br>


@foreach($topi as $t)
<div class="container p-3 my-3 border">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 d-flex justify-content-center">
        <div style="width: 300px; height: 300px; background-color: #ccc;"></div>
      </div>
      <div class="col-md-6">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>Merk Topi</th>
              <td>{{ $t->merktopi }}</td>
            </tr>
            <tr>
              <th>Stock Topi</th>
              <td>{{ $t->stocktopi }}</td>
            </tr>
            <tr>
              <th>Tersedia</th>
              <td>{{ $t->tersedia }}</td>
            </tr>
          </tbody>
        </table>
        <a class="btn btn-success"href="/topi">OK</a>
      </div>
    </div>
  </div>
	@endforeach

@endsection
