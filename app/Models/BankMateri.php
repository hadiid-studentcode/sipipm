<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silabus extends Model
{
    use HasFactory;
    protected $table = 'silabus';
    protected $fillable = [
        'silabus',
        'standar_kompetensi',
        'kompetensi_dasar',
        'indikator',
        'materi',
        'detailMateri',
        'strategi_pembelajaran',
        'sks',
        'referensi_acuan',
        'penilaian'

    ];
    protected $primaryKey = 'id';


    public function simpanPemateri($data)
    {
        $result = Silabus::create($data);
        return $result;
    }

    public function Silabus(){
        $result = Silabus::all();

        return $result;
    }
}
