<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Preposttest extends Model
{
    use HasFactory;
    protected $table = 'preposttest';
    protected $fillable = [
        'test',
        'idmateri',
        'link'

    ];
    protected $primaryKey = 'id';


    public function simpantest($data)
    {
        $result = Preposttest::create($data);
        return $result;
    }

    public function dataPre($idMateri){
        $result = DB::table('preposttest')
            ->join('bank_materi', 'bank_materi.id', '=', 'preposttest.idmateri')
            ->where('preposttest.idmateri', '=', $idMateri)
            ->where('test', '=', 'pre')
            ->select('preposttest.*', 'bank_materi.materi')
        ->first();


        return $result;
    }
    public function dataPost($idMateri)
    {
        $result = DB::table('preposttest')
        ->join('bank_materi', 'bank_materi.id', '=', 'preposttest.idmateri')
        ->where('preposttest.idmateri', '=', $idMateri)
            ->where('test', '=', 'post')
            ->select('preposttest.*', 'bank_materi.materi')
            ->first();


        return $result;
    }
}
