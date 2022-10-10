<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hasilbelajar extends Model
{
    use HasFactory;
    protected $table = 'hasil_belajar';
    protected $fillable = [
        'id_nama_peserta',
        'nba',
        'id_materi',
        'prediket',
        'nominal'

    ];
    protected $primaryKey = 'id';

    public function Peserta()
    {
        return $this->belongsTo(User::class, 'id_nama_peserta');
    }

    public function materi()
    {
        return $this->belongsTo(User::class, 'id_materi');
    }

    public function PesertaTerpilih($id)
    {
        $result = Peserta::where('id', $id)->first();

        return $result;
    }
}
