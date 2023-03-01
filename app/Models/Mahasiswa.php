<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table = 'mahasiswa';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function matkul()
    {
        return $this->belongsToMany(Matkul::class, 'mahasiswa_matkul', 'mahasiswa_id', 'matkul_id');
    }
}
