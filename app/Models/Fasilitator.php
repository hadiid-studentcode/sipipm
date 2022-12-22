<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fasilitator extends Model
{
    use HasFactory;
    protected $table = 'fasilitator';
    protected $fillable = [
        'nama',
        'nba',
        'wa',
        'jk',
        'jabatan',
        'foto',
        'fasili_pendamping'

    ];
    protected $primaryKey = 'id';


    public function dataFasilitator()
    {

        $data = [
            'Master Of Training',
            'Imam Of Training',
            'Master Of Games',
            'Fasilitator Pemateri',
            'Fasilitator Pendamping',

        ];

        return $data;
    }

    public function simpanFasilitator($data)
    {
        $result = Fasilitator::create($data);
        return $result;
    }

    public function contackPerson()
    {

        $result = DB::table('fasilitator')
            ->select('wa')
            ->where('jabatan', '=', 'Master Of Training')
            ->first();


        return $result;
    }

    public function queryFasilitator()
    {
        $result = Fasilitator::all();

        return $result;
    }

    public function deleteFasilitator($nama)
    {
        $deleted = Fasilitator::where('nama', $nama)->delete();

        return $deleted;
    }

    public function FasilitatorPemateri()
    {
        $result = DB::table('fasilitator')
            ->where('jabatan', '=', 'Fasilitator Pemateri')
            ->get();

        return $result;
    }

    public function FasilitatorPendamping()
    {
        $result = DB::table('fasilitator')
            ->where('jabatan', '=', 'Fasilitator Pendamping')
            ->get();

        return $result;
    }
    public function fasilitatorTerpilih($id)
    {
        $result = DB::table('fasilitator')
        ->select('id','nama','jabatan')

        ->where('id', '=', $id)
            ->where('jabatan', '=', 'Fasilitator Pemateri')

            ->first();

        return $result;
    }
}
