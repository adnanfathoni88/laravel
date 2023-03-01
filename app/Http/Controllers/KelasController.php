<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = kelas::with('mahasiswa', 'dosen')->get();
        return view('kelas', ['kelas' => $kelas]);
    }

    public function show($id)
    {
        $kelas = Kelas::FindOrFail($id);
        return view('kelas-detail', ['kelas' => $kelas]);
    }
}
