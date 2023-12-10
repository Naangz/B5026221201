@extends('master')

@section('taitel', 'Daftar Nilai Kuliah')

@section('konten')

	<h1>Nilai Kuliah</h1>

	<a href="/nilaikuliah/tambahnilai" class="btn btn-primary"> + Tambah Nilai Kuliah</a>

	<br/>
    <p>Berikut datftar nilai kuliah :</p>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $y)
		<tr>
			<td>{{ $y->ID}}</td>
			<td>{{ $y->NRP}}</td>
			<td>{{ $y->NilaiAngka}}</td>
			<td>{{ $y->SKS}}</td>
            @if($y->NilaiAngka <= 40)
                <td>D</td>
                @elseif($y->NilaiAngka <=60)
                <td>C</td>
                @elseif($y->NilaiAngka <= 80)
                <td>B</td>
            @else
                <td>A</td>
            @endif
            <td>{{$y->NilaiAngka * $y->SKS}}</td>
		</tr>
		@endforeach
	</table>

@endsection
