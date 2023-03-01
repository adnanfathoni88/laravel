@extends('layout.main')
@section('title', 'Matkul')
@section('content')
<h1>Matkul</h1>
<div>
    <a href="#" class="btn btn-primary">Add data</a>
</div>
<table class="table">
    <thead>
        <tr>
            <td>no.</td>
            <td>Nama</td>
            <td>Action</td>
        </tr>
    </thead>
    @foreach ($matkul as $ma)
    <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ma->name}}</td>
            <td><a href="matkul/{{$ma->id}}">Detail</a></td>

            <!-- <td>
                @foreach ($ma->mahasiswa as $mhs)
                {{$loop->iteration}} .
                {{$mhs->name}} <br>

                @endforeach
            </td> -->

            <!-- <td>{{ $ma->mahasiswa }}</td> -->
        </tr>
    </tbody>
    @endforeach
</table>
@endsection