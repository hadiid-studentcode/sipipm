<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankMateri extends Model
{
    use HasFactory;
    protected $table = 'bank_materi';
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
        $result = BankMateri::create($data);
        return $result;
    }

    public function Silabus(){
        $result = BankMateri::all();

        return $result;
    }
}
