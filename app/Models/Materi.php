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
        'id_fasilitator_pemateri',
        'id_fasilitator_pendamping',
        'status'

    ];
    protected $primaryKey = 'id';


    public function BankMateri()
    {
        return $this->belongsTo(BankMateri::class, 'idMateri');
    }

    public function FasilitatorPendamping()
    {
        return $this->belongsTo(Fasilitator::class, 'id_fasilitator_pendamping');
    }
    public function FasilitatorPemateri()
    {
        return $this->belongsTo(Fasilitator::class, 'id_fasilitator_pemateri');
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

   
}
