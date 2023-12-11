@extends('master')

@section('taitel', 'Kategori')

@section('konten')

    <h3>Kategori</h3>

    <br />

    <form action="/kategori/lihat" method="POST">
        @csrf
        <div class="form-group">
            <label for="kategori">Pilih Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
                @foreach($kategori as $k)
                    <option
                        value="{{ $k->id }}">{{ $k->Nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">KIRIM</button>
    </form>


@endsection
