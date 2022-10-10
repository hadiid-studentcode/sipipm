<?php

namespace App\Http\Controllers;

use App\Models\Hasilbelajar;
use App\Models\Materi;
use App\Models\Peserta;
use Illuminate\Http\Request;

class HasilbelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = new Peserta();
        $peserta = $result->queryPeserta();


     

        


        return view('Dashboard.HasilBelajar.index')
        ->with('title','Lembar Hasil Belajar Peserta')
        ->with('active','hasilBelajar')
        ->with('peserta',$peserta);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // tampilakn nama peserta  dan nba, utusan

        $result = new Hasilbelajar();
        $peserta1 = $result->PesertaTerpilih($id);


        // peserta 
        $data = new Peserta();
        $peserta = $data->queryPeserta();




        // materi

        $result = new Materi();
        $materi = $result->DataMateri();


        // hasil belajar peserta
        $result = new Hasilbelajar();
        $hasilpeserta = $result->hasilbelajar();


        dd($hasilpeserta);
       







        return view('Dashboard.HasilBelajar.index')
            ->with('title', 'Lembar Hasil Belajar Peserta')
            ->with('active', 'hasilBelajar')
            ->with('materi', $materi)
            ->with('dataPeserta', $peserta1)
            ->with('peserta',$peserta)
            ;
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
