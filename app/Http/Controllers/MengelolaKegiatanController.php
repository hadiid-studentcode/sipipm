<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Notif;
use App\Models\Panitia;
use Illuminate\Http\Request;

class MengelolaKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = new Kegiatan();
        $kegiatan = $data->queryKegiatan();



        return view('dashboard.MengelolaKegiatan.index')
            ->with('title', 'Mengelola Kegiatan')
            ->with('active', 'kegiatan')
            ->with('kegiatanAcara', $kegiatan);
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
        $request->validate([
            'upload_logo' => 'required',
            'upload_logo.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('upload_logo')) {
            $upload_logo = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('upload_logo')->getClientOriginalName());





            $request->file('upload_logo')->move(public_path('dist/img/kegiatan'), $upload_logo);

            $data = [
                'nama' => strtoupper($request->input('nama')),
                'tema' =>  ucfirst($request->input('tema')),
                'dari' => $request->input('dari'),
                'sampai' => $request->input('sampai'),
                'deskripsi' => ucfirst($request->input('deskripsi')),
                'tujuan' => ucfirst($request->input('tujuan')),
                'informasi' => ucfirst($request->input('informasi')),
                'upload_logo' => $upload_logo
            ];

            // simpan kegiatan
            $kegiatan = new Kegiatan();
            $kegiatan->simpanKegiatan($data);

            $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
            $url = '/' . $pecahurl[4];

            // simpan notif
            $notif = new Notif();
            $notif->insertNotif('Kegiatan Anda Berhasil Ditambahkan ! ', $url);


            return redirect('/mengelola-kegiatan');
        } else {
            return back()
                ->with('warning', 'Kegiatan Gagal Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {

        $data = new Kegiatan();
        $detail = $data->detailKegiatan($nama);

        $data = new Panitia();
        $ketuaPanitia = $data->contackPerson();



       



        return view('Dashboard.MengelolaKegiatan.detail')
            ->with('title', 'Detail Kegiatan')
            ->with('active', 'kegiatan')
            ->with('detail', $detail)
            ->with('ketuaPanitia',$ketuaPanitia);
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
