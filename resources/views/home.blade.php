@extends('layout.main')

@section('title', 'Home')


@section('content')
<h1>Home {{$nama}}</h1>

@if ($role == 'admin')
<a href="">Ke admin</a>
@endif

<table class="table">
    <tr class="table-primary">
        <td>No.</td>
        <td>Nama</td>
    </tr>
    @foreach($user as $usr)
    <tr>
        <td>{{$loop->iteration }}</td>
        <td>{{$usr}}</td>
    </tr>
    @endforeach
</table>
@endsection