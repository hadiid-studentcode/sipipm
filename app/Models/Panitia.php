<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panitia extends Model
{
  use HasFactory;
  protected $table = 'panitia';
  protected $fillable = [
    'nama',
    'nba',
    'wa',
    'jk',
    'jabatan',
    'foto'

  ];
  protected $primaryKey = 'id';


  public function dataPanitia()
  {

    $data = [
      'Ketua Panitia',
      'Sekretaris Panitia',
      'Bendahara Panitia',
      'Divisi Acara',
      'Divisi Konsumsi',
      'Divisi Pendanaan',
      'Divisi Humas',
      'Divisi Perlengkapan',
      'Divisi Dokumentasi',
      'Anggota Divisi Acara',
      'Anggota Divisi Konsumsi',
      'Anggota Divisi Pendanaan',
      'Anggota Divisi Humas',
      'Anggota Divisi Perlengkapan',
      'Anggota Divisi Dokumentasi'


    ];

    return $data;
  }

  public function simpanPanitia($data)
  {
    $result = Panitia::create($data);
    return $result;
  }

  public function contackPerson()
  {

    $result = DB::table('panitia')
      ->select('wa')
      ->where('jabatan', '=', 'Ketua Panitia')
     ->first();


    return $result;
  }

  public function queryPanitia(){
    $result = Panitia::all();

    return $result;
  }

  public function deletePanitia($nama){
    $deleted = Panitia::where('nama', $nama)->delete();

    return $deleted;
  }

  public function totalPanitia()
  {
    $result = DB::table('panitia')->count();

    return $result;
  }
}
