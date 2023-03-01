@extends('layout.main') @section('title', 'About') @section('content')

<div class="continer mt-3">
    <h2>Add Mahasiswa</h2>

    <!-- flash message validation -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="mahasiswa" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" />
        </div>
        <div>
            <label for="nim">Nim</label>
            <input class="form-control" type="text" name="nim" />
        </div>
        <div>
            <label for="kelas_id">Kelas_id</label>
            <select name="kelas_id" id="kelas_id" class="form-control">
                @foreach ($kelas as $kls)
                <option value="{{$kls->id}}">{{$kls->nama}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <div class="mb-3">
                <label for="foto" class="form-label">Photo</label>
                <input
                    class="form-control form-control-sm"
                    id="foto"
                    type="file"
                    name="foto"
                />
            </div>
        </div>
        <div>
            <button class="btn btn-primary mt-2">Simpan</button>
        </div>
    </form>
</div>

@endsection
