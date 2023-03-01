<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MahasiswaCreateRequest;
// use PHPUnit\Framework\MockObject\Stub\ReturnReference;


class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        // search
        $keyword = $request->keyword;

        $mhs = Mahasiswa::with('kelas')
            ->where('nama', 'like', "%" . $keyword . "%")
            ->OrWhere('nim', 'like', "%" . $keyword . "%")
            ->orWhereHas('kelas', function ($query) use ($keyword) {
                $query->where('nama', 'LIKE', "%" . $keyword . "%");
            })
            ->Paginate(5);

        return view('mahasiswa', ['mahasiswa' => $mhs]);
    }

    public function show($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa-detail', ['mahasiswa' => $mhs]);
    }
    public function create()
    {
        $kelas = Kelas::select('id', 'nama')->get();
        return view('add-mahasiswa', ['kelas' => $kelas]);
    }

    public function store(MahasiswaCreateRequest $request)
    {
        $newName = '';

        if ($request->file('foto')) {
            $ekstension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $ekstension;
            $request->file('foto')->storeAs('foto', $newName);
        }

        //image 
        $request['image'] = $newName;

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->kelas_id = $request->kelas_id;
        $mahasiswa->image = $request['image'];
        $mahasiswa->save();

        if ($mahasiswa) {

            Session::flash('status', 'success');
            Session::flash('message', 'Data Berhasil Ditambahkan !');
        }

        return redirect('/mahasiswa');
    }
    public function edit(Request $request, $id)
    {
        $mhs = Mahasiswa::with('kelas')->findOrFail($id);
        $kelas = Kelas::all();
        return view('edit-mahasiswa', ['mahasiswa' => $mhs], ['kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        $data = DB::table('mahasiswa')
            ->select('image')
            ->where('id', $id)
            ->first();

        $newName = $data->image;

        if ($request->file('foto')) {
            $ekstension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $ekstension;
            $request->file('foto')->storeAs('foto', $newName);
            $request['image'] = $newName;
        }

        //image

        $mahsiswa = Mahasiswa::findOrFail($id);

        $mahsiswa->nama = $request->nama;
        $mahsiswa->nim = $request->nim;
        $mahsiswa->kelas_id = $request->kelas_id;
        $mahsiswa->image = $newName;


        $mahsiswa->save();


        return redirect('/mahasiswa');
    }
    public function delete($id)
    {
        $mhs = DB::table('mahasiswa')
            ->where('id', $id)
            ->delete();

        if ($mhs) {
            Session::flash('hapus', 'success');
            Session::flash('message', 'Data Berhasil Dihapus !');

            return redirect('/mahasiswa');
        }
    }
}
