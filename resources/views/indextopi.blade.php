@extends('master')

@section('taitel', 'Topi')

@section('konten')

    <h1>Data Topi</h1>

    <a href="/topi/tambah" class="btn btn-primary"> + Tambah Topi</a>

    <br />
    <p>Cari Merk Topi berdasarkan nama:</p>
    <form action="/topi/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Merk Topi .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
            <br>
        <input class="btn btn-primary" type="submit" value="CARI">

    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk Topi</th>
            <th>Stock Topi</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($topi as $t)
            <tr>
                <td>{{ $t->merktopi }}</td>
                <td>{{ $t->stocktopi }}</td>
                @if ($t->tersedia == 'Y')
                    <td>Tersedia</td>
                @else
                    <td>Tidak tersedia</td>
                @endif
                <td>
                    <a href="/topi/lihat/{{ $t->kodetopi }}" class="btn btn-success">View</a>
                    |
                    <a href="/topi/edit/{{ $t->kodetopi }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/topi/hapus/{{ $t->kodetopi }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <h4 >Note:</h4>
    <div class="text text-danger">Dalam index akan terlihat Tersedia/Tidak tersedia, namun jika di view, kolom 'tersedia' akan berupa Y/N</div>
    <br>
@endsection
