<?php

namespace App\Http\Controllers;

use App\Models\Dosen;

use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen', ['dosen' => $dosen]);
    }
    public function show($id)
    {
        $dosen = Dosen::with('kelas', 'kelas.mahasiswa')->FindOrFail($id);
        return view('dosen-detail', ['dosen' => $dosen]);
    }
}
