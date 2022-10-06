<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    use HasFactory;
    protected $table = 'outbound';
    protected $fillable = [
        'id_peserta',
        'semangat',
        'disiplin',
        'kerjaSama',
        'komunikasi',
        'kreatifitas',
        'jumlahSkor',
        'nilai',
        'predikat'
       
    ];
    protected $primaryKey = 'id';


    public function Peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }

    public function simpanOutbound($data)
    {
        $result = Outbound::create($data);
        return $result;
    }
    public function queryOutbound()
    {
        $result = Outbound::all();

        return $result;
    }
}
