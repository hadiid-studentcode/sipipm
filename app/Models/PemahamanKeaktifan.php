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
        'fasilitator_pemateri',
        'fasilitator_pendamping',
        'n_preTest',
        'n_postTest'

    ];
    protected $primaryKey = 'id';


    public function Peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }

    public function simpanNilai($data)
    {
        $result = PemahamanKeaktifan::create($data);
        return $result;
    }

    public function nilaiMateri($idmateri)
    {

        $nilai = PemahamanKeaktifan::where('id_materi', $idmateri)

            ->get();

        return $nilai;
    }
}
