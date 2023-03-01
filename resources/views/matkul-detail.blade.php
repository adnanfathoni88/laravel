@extends('layout.main')
@section('title', 'Matkul Detail')
@section('content')

<div class="mt-3">
    <h1>Matkul {{$matkul->name}}</h1>
    <p>Anggota</p>
    <p>
        @foreach ($matkul->mahasiswa as $mhs)
        {{$loop->iteration}} .
        {{$mhs->name}} <br>
        @endforeach
    </p>

</div>

@endsection