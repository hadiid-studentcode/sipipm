<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemahamanKeaktifan extends Model
{
    use HasFactory;
    protected $table = 'pemahaman';
    protected $fillable = [
        'id_peserta',
        'id_materi',
        'id_fasilitator',
        'n_preTest',
        'n_postTest'

    ];
    protected $primaryKey = 'id';
}
