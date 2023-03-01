@extends('layout.main') @section('title', 'Mahasiswa') @section('content')
<h1>Mahasiswa</h1>
<div class="d-flex justify-content-between">
    <div>
        <a href="add-mahasiswa" class="btn btn-primary d-inline-flex">Add data</a>
    </div>
    <form action="" method="get">
        <div class="d-flex w-30">
            <input type="text" class="form-control" placeholder="keyword" name="keyword">
            <button class="btn btn-primary">search</button>   
        </div>
    </form>
</div>

@if(Session::has('status'))
    <div class="alert alert-success mt-1">
        {{Session::get('message')}}
    </div>  
@endif
@if(Session::has('hapus'))
    <div class="alert alert-danger mt-1">
        {{Session::get('message')}}
    </div>  
@endif

@if(Session::has('user'))
<div class="">

</div>
@endif
    

    <table class="table">
        <thead>
            <tr>
                <td>no.</td>
                <td>Nama</td>
                <td>Nim</td>
                <td>Kelas</td>
                <td>Action</td>
                <!-- <td>Matkul</td>
            <td>Dosen Wali</td> -->
            </tr>
        </thead>
        @foreach ($mahasiswa as $mhs)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama}}</td>
                <td>{{ $mhs->nim}}</td>
                <td>{{ $mhs->kelas['nama']}}</td>
                <td>
                    <a href="mahasiswa/{{$mhs->id}}">Detail</a>
                    <a href="/edit-mahasiswa/{{$mhs->id}}">Edit</a>
                    <a href="/delete-mahasiswa/{{$mhs->id}}" onclick="return confirm('Hapus data ?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    {{ $mahasiswa->withQueryString()->links() }}
    <div><a href="destory" class="btn btn-danger">destroy</a></div>
    @endsection

</div>

