<?php

namespace App\Http\Controllers;

use App\Models\BankMateri;
use App\Models\Fasilitator;
use App\Models\Materi;
use App\Models\Notif;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // set the default timezone to use.



        $data = new BankMateri();
        $silabus = $data->Silabus();



        $result = new Fasilitator();
        $fasilitator_pemateri = $result->FasilitatorPemateri();
        $fasilitator_pendamping = $result->FasilitatorPendamping();


        $result = new Materi();
        $materi = $result->DataMateri();
        $jumlah = $result->jumlahMateri();
        $penanggungjawab = $result->PenanggungJawab();








        return view('Dashboard.MengelolaMateri.index')
        ->with('title','Materi')
        ->with('active', 'materi')
        ->with('materi', $materi)
        ->with('pemateri', $fasilitator_pemateri)
        ->with('pendamping', $fasilitator_pendamping)
        ->with('jumlah',$jumlah)
        ->with('silabus',$silabus)
        ->with('pj',$penanggungjawab);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = new BankMateri();
        $silabus = $data->Silabus();





        return view('Dashboard.MengelolaMateri.create')
        ->with('silabus',$silabus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {






        $data = [
            'hari'=> $request->input('hari'),
            'waktu_dari' => $request->input('wdari'),
            'waktu_sampai' => $request->input('wsampai'),
            'idMateri' => $request->input('materi'),
            'PenanggungJawab' => $request->input('pj'),
            'fasilitator_pemateri' => $request->input('pemateri'),
            'fasilitator_pendamping' => $request->input('pendamping'),
            'status' => 'Belum Selesai'
        ];



        // simpan kegiatan
        $kegiatan = new Materi();
        $kegiatan->simpanMateri($data);

        $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
        $url = '/' . $pecahurl[4];

        // simpan notif
        $notif = new Notif();
        $notif->insertNotif('Materi Berhasil Ditambahkan ! ', $url);


        return redirect('/materi');
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
