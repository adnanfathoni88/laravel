<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'dosen_id', 'id');
    }
}
