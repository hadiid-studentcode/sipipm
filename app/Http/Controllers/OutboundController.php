<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Outbound;
use App\Models\Peserta;
use Illuminate\Http\Request;

class OutboundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // peserta
        $result = new Peserta();
        $peserta = $result->queryPeserta();

        // Outbound

        $result = new Outbound();
        $outbound = $result->queryOutbound();

     
       


        return view('Dashboard.Outbound.index')
        ->with('title','Lembar Penilaian Outbound')
        ->with('active','outbound')
        ->with('peserta',$peserta)
        ->with('outbound', $outbound);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


     


      $id = $request->input('id');
      $semangat =
        $request->input('semangat');
      $disiplin =
        $request->input('disiplin');
      $kerjasama =
        $request->input('kerjasama');
      $komunikasi =
        $request->input('Komunikasi');
      $kreatifitas
        = $request->input('Kreatifitas');



        $skor = $semangat + $disiplin + $kerjasama + $komunikasi + $kreatifitas;
        $nilai = $skor/20 * 100;


        if ($nilai >= 80 ) {

            $p = 'A';
           
        }elseif($nilai >= 60){
            $p = 'B';

        }elseif($nilai >= 40){
            $p = 'C';
            
        }else{

            $p = 'D';
            
        }

        



       



        $data = [
            'id_peserta' => $id,
            'semangat' => $semangat,
            'disiplin' => $disiplin,
            'kerjaSama' => $kerjasama,
            'komunikasi' => $komunikasi,
            'kreatifitas' => $kreatifitas,
            'jumlahSkor' => $skor,
            'nilai'=> $nilai,
            'predikat' => $p

        ];
        

        $result = new Outbound();
        $result->simpanOutbound($data);

        $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
        $url = '/' . $pecahurl[4];

        // simpan notif
        $notif = new Notif();
        $notif->insertNotif('Nilai Outbound Berhasil Ditambahkan ! ', $url);
        return redirect('/outbound');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
