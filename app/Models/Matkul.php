<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'matkuls';

    public function mahasiswa()
    {
        // return $this->belongsToMany(Matkul::class, 'mahasiswa_matkul', 'mahasiswa_id', 'matkul_id');
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matkul', 'matkul_id', 'mahasiswa_id');;
    }
}
