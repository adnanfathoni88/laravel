@extends('layout.main') @section('title', 'Edit Mahasiswa') @section('content')

<div class="continer mt-3">
    <h2>Edit Mahasiswa</h2>
    <form
        action="/update-mahasiswa/{{ $mahasiswa->id }}"
        method="post"
        enctype="multipart/form-data"
    >
        @csrf @method ('PUT')
        <div>
            <label for="nama">Nama</label>
            <input
                class="form-control"
                type="text"
                name="nama"
                required
                value="{{ $mahasiswa->nama}}"
            />
        </div>
        <div>
            <label for="nim">NIM</label>
            <input
                type="text"
                class="form-control"
                name="nim"
                value="{{ $mahasiswa->nim }}"
            />
        </div>
        <div>
            <label for="kelas_id">Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
                <option value="{{ $mahasiswa->kelas->id }}">
                    {{ $mahasiswa->kelas->nama }}
                </option>
                @foreach ($kelas as $kls)
                <option value="{{ $kls->id }}">{{ $kls->nama }}</option>
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
            <div class="d-flex justify-content-center">
                @if ($mahasiswa->image)
                <img
                    src="{{ asset('storage/foto/'.$mahasiswa->image) }}"
                    alt=""
                    width="300px"
                />
                @else
                <p><i>tidak ada foto</i></p>
                @endif
            </div>
            <center>{{ $mahasiswa->image }}</center>
        </div>
        <div>
            <button class="btn btn-primary mt-2">Update</button>
        </div>
    </form>
</div>

@endsection
