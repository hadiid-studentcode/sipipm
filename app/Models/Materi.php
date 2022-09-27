<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $fillable = [
        'hari',
        'waktu_dari',
        'waktu_sampai',
        'idMateri',
        'fasilitator_pemateri',
        'fasilitator_pendamping'

    ];
    protected $primaryKey = 'id';


    public function BankMateri()
    {
        return $this->belongsTo(BankMateri::class, 'idMateri');
    }
}
