<?php

namespace App\Http\Controllers;

use App\Models\BankMateri;
use App\Models\Fasilitator;
use App\Models\Materi;
use App\Models\Notif;
use Illuminate\Http\Request;

class MengelolaMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = new BankMateri();
        $materi = $result->Silabus();

    
        $result = new Fasilitator();
        $fasilitator_pemateri = $result->FasilitatorPemateri();
        $fasilitator_pendamping = $result->FasilitatorPendamping();
        


        return view('Dashboard.MengelolaMateri.index')
        ->with('title','Mengelola Materi')
        ->with('active', 'materi')
        ->with('materi',$materi)
        ->with('pemateri', $fasilitator_pemateri)
        ->with('pendamping', $fasilitator_pendamping);
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
            'id_fasilitator_pemateri' => $request->input('pemateri'),
            'id_fasilitator_pendamping' => $request->input('pendamping'),
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


        return redirect('/mengelola-materi');
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
