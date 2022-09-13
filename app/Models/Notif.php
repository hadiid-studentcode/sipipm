<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;
    protected $table = 'notif';
    protected $fillable = [
       'isi_notif',
       'id_user',
       'status'
    ];
    protected $primaryKey = 'id';

    public function User(){
        return $this->belongsTo(Tbsatuan::class, 'id_user');
    }
}
