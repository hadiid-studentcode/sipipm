<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $fillable = [
        'nama',
        'tema',
        'dari',
        'sampai',
        'deskripsi',
        'tujuan',
        'informasi',
        'upload_logo'
    ];
    protected $primaryKey = 'id';


    public function simpanKegiatan($data)
    {
        $result = Kegiatan::create($data);
        return $result;
    }
}
