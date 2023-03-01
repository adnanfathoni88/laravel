<?php

namespace App\Http\Controllers;

// use App\Models\Matkul;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::with('mahasiswa')->get();
        return view('matkul', ['matkul' => $matkul]);
    }

    public function show($id)
    {
        $matkul = Matkul::FindOrFail($id);
        return view('matkul-detail', ['matkul' => $matkul]);
    }
}
