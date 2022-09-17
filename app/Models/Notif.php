<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Notif extends Model
{
    use HasFactory;
    protected $table = 'notif';
    protected $fillable = [
        'isi_notif',
        'id_user',
        'status',
        'url',
    ];
    protected $primaryKey = 'id';

    public function User()
    {
        return $this->belongsTo(Tbsatuan::class, 'id_user');
    }

    public function callNotif()
    {
        $result = DB::table('notif')
            ->where('id_user', '=', Auth::user()->id)
            ->where('id', '<', 4)
            ->where('status', '=', '0')
            ->get();

        return $result;
    }

    public function JumlahNotif()
    {
        $dataNotif = DB::table('notif')
            ->where('id_user', '=', Auth::user()->id)
            ->where('status','=','0')
            ->count();

        return $dataNotif;
    }

    public function insertNotif($isinotif,$url){
        $result= Notif::create([
            'isi_notif' => $isinotif,
            'id_user' => Auth::user()->id,
            'status' => '0',
            'url'=> $url
        ]);

        return $result;
    }
}
