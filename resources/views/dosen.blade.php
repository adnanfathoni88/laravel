@extends('layout.main')
@section('title', 'dosen')
@section('content')
<h1>Dosen</h1>
<div>
    <a href="#" class="btn btn-primary">Add data</a>
</div>
<table class="table">
    <thead>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Action</td>
        </tr>
    </thead>
    @foreach ($dosen as $dsn)
    <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$dsn->nama}}</td>
            <td><a href="dosen/{{$dsn->id}}">Detail</a></td>

        </tr>
    </tbody>
    @endforeach
</table>

@endsection