<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
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

       

        return view('dashboard.MengelolaKegiatan.index')
            ->with('title', 'Mengelola Kegiatan')
            ->with('active', 'kegiatan');
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
                'nama' => $request->input('nama'),
                'tema' => $request->input('tema'),
                'dari' => $request->input('dari'),
                'sampai' => $request->input('sampai'),
                'deskripsi' => $request->input('deskripsi'),
                'tujuan' => $request->input('tujuan'),
                'informasi' => $request->input('informasi'),
                'upload_logo' => $upload_logo
            ];

            // simpan kegiatan
            $kegiatan = new Kegiatan();
            $kegiatan->simpanKegiatan($data);


           return redirect('/mengelola-kegiatan')
           ->with('success','Kegiatan Berhasil Disimpan');
        } else {
           return back()
           ->with('warning','Kegiatan Gagal Disimpan');
        }
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
