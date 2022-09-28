<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $fillable = [
        'hari',
        'waktu_dari',
        'waktu_sampai',
        'idMateri',
        'PenanggungJawab',
        'fasilitator_pemateri',
        'fasilitator_pendamping',
        'status'

    ];
    protected $primaryKey = 'id';


    public function BankMateri()
    {
        return $this->belongsTo(BankMateri::class, 'idMateri');
    }

   
    public function DataMateri(){

        $result = Materi::all();

        return $result;
    }

    public function simpanMateri($data)
    {
        $result = Materi::create($data);
        return $result;
    }

    public function jumlahMateri(){
        $result = DB::table('materi')->count();

        return $result;
    }

    public function PenanggungJawab(){
     $result =  DB::table('fasilitator')
            ->where('jabatan', '<>', 'Fasilitator Pendamping')
            ->where('jabatan', '<>', 'Fasilitator Pemateri')
            ->get();

            return $result;
    }
    

   
}
