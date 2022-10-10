<?php

namespace App\Http\Controllers;

use App\Models\Fasilitator;
use App\Models\Materi;
use App\Models\Notif;
use App\Models\PemahamanKeaktifan;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PemahamanKeaktifanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = new Materi();
        $materi = $data->Materi();






        return view('Dashboard.Pemahaman.index')
            ->with('title', 'Pemahaman-keaktifan')
            ->with('active', 'pemahaman-keaktidan')
            ->with('materi', $materi);
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

       

        $idmateri = $request->input('idmateri');
        $pemateri = $request->input('pemateri');
        $pendamping = $request->input('pendamping');
        $idpeserta =  $request->input('idpeserta');
        $pretest = $request->input('pretest');
        $posttest = $request->input('posttest');


        $data = [
            'id_peserta' => $idpeserta,
            'id_materi' => $idmateri,
            'fasilitator_pemateri' => $pemateri,
            'fasilitator_pendamping' => $pendamping,
            'n_preTest' => $pretest,
            'n_postTest' => $posttest


        ];


        // simpan nilai pemahaman materi
        $result = new PemahamanKeaktifan();
        $result->simpanNilai($data);

        $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
        $url = '/' . $pecahurl[4];

        // simpan notif
        $notif = new Notif();
        $notif->insertNotif('Nilai Berhasil Ditambahkan ! ', $url);
        return redirect('/pemahaman-keaktifan/'. $idmateri);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // tampilakn materi  dan hari, tanggal, waktu

        $idmateri = $id;



        $result = new Materi();
        $materihtw = $result->MateriTerpilih($id);


        $materi = $result->Materi();


        // peserta 
        $data = new Peserta();
        $peserta = $data->queryPeserta();


        // nilai materi
        $data = new PemahamanKeaktifan();
        $nilai =$data->nilaiMateri($id);






        // tampilkan pemateri dan fasilitator pendamping







        return view('Dashboard.Pemahaman.index')
            ->with('title', 'Pemahaman-keaktifan')
            ->with('active', 'pemahaman-keaktidan')
            ->with('materi', $materi)
            ->with('datamateri', $materihtw)
            ->with('peserta', $peserta)
            ->with('idmateri', $idmateri)
            ->with('nilai',$nilai);
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
