@extends('layout.main') @section('title', 'Kelas Detial') @section('content')

<div class="mt-3">
    <h1>Kelas {{$kelas->nama}}</h1>
    <p>Dosen Wali : {{$kelas->dosen->nama}}</p>
    <p>anggota :</p>
    <p>
        @foreach ($kelas->mahasiswa as $mhs)
        {{$loop->iteration}} . {{$mhs->name}} <br />
        @endforeach
    </p>
</div>

@endsection
