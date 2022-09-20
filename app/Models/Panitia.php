<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
