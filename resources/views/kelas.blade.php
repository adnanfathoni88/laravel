@extends('layout.main')
@section('title', 'Kelas')
@section('content')
<h1>Kelas</h1>
<div>
    <a href="#" class="btn btn-primary">Add data</a>
</div>
<table class="table">
    <thead>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Action</td>
            <!-- <td>anggota</td>
            <td>Dosen Wali</td> -->
        </tr>
    </thead>
    @foreach ($kelas as $kls)
    <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$kls->nama}}</td>
            <td><a href="kelas/{{$kls->id}}">Detail</a></td>

            <!-- <td>
                @foreach ($kls->mahasiswa as $mhs)
                {{ $loop->iteration }} .
                {{$mhs->name}} <br>
                @endforeach
            </td>
            <td>{{$kls->dosen->nama}}</td> -->
        </tr>
    </tbody>
    @endforeach
</table>

@endsection