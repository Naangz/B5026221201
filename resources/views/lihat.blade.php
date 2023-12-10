@extends('master')

@section('taitel', 'Data Pegawai')

@section('konten')

<h2 class="text-center">View Data Pegawai</h2>

<br>


@foreach($pegawai as $p)
<div class="container p-3 my-3 border">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 d-flex justify-content-center">
        <div style="width: 300px; height: 300px; background-color: #ccc;"></div>
      </div>
      <div class="col-md-6">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>Nama</th>
              <td>{{ $p->pegawai_nama }}</td>
            </tr>
            <tr>
              <th>Jabatan</th>
              <td>{{ $p->pegawai_jabatan }}</td>
            </tr>
            <tr>
              <th>Umur</th>
              <td>{{ $p->pegawai_umur }}</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>{{ $p->pegawai_alamat }}</td>
            </tr>
          </tbody>
        </table>
        <a class="btn btn-success"href="/pegawai">OK</a>
      </div>
    </div>
  </div>
	@endforeach

@endsection
