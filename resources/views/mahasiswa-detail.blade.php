@extends('layout.main') @section('title', 'Mahasiswa Detail')
@section('content')

<style>
    th {
        width: 50%;
    }
</style>

<div class="mt-3">
    <h1>detail {{$mahasiswa->nama}} - {{ $mahasiswa->nim }}</h1>

    <div class="d-flex justify-content-center mb-3">
        @if ($mahasiswa->image)
        <img
            src="{{ asset('storage/foto/'.$mahasiswa->image) }}"
            alt=""
            width="300px"
        />
        @else
        <img
            src="{{ asset('storage/foto/default.png') }}"
            alt=""
            width="300px"
        />
        <!-- <p>tidak ada foto</p> -->
        @endif
    </div>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Kelas</th>
            <th>Dosen Wali</th>
        </tr>
        <tr>
            <td>{{$mahasiswa->kelas->nama}}</td>
            <td>{{$mahasiswa->kelas->dosen->nama}}</td>
        </tr>
    </table>
    <div>
        <h2>Matkul</h2>

        @foreach ($mahasiswa->matkul as $mk)
        {{$loop->iteration}} . {{$mk->name}} <br />
        @endforeach
    </div>
</div>
@endsection
