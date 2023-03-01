@extends('layout.main') @section('title', 'dosen detail') @section('content')
<div class="mt-3">
    <h1>Dosen {{$dosen->nama}}</h1>
    <p>Kelas {{$dosen->kelas['nama']}}</p>
    <p>Anggota</p>
    <p>
        @foreach ($dosen->kelas->mahasiswa as $mhs)
        {{$loop->iteration}} . {{$mhs->name}} <br />
        @endforeach
    </p>
</div>
@endsection
