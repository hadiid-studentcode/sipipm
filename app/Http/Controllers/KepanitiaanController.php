<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Panitia;
use Illuminate\Http\Request;

class KepanitiaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = new Panitia();
        $panitia = $result->dataPanitia();

        $data = new Panitia();
        $ketuaPanitia = $data->contackPerson();
        $tampilPanitia = $data->queryPanitia();

        





        return view('Dashboard.Kepanitiaan.index')
            ->with('title', 'Kepanitiaan')
            ->with('active', 'kepanitiaan')
            ->with('panitia', $panitia)
            ->with('ketuaPanitia', $ketuaPanitia)
            ->with('dataPanitia',$tampilPanitia);
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
            'gambarp' => 'required',
            'gambarp.*' => 'mimes:PDF,pdf,jpg,jpeg,png|max:5000'
        ]);
        if ($request->hasfile('gambarp')) {
            $gambarp = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarp')->getClientOriginalName());





            $request->file('gambarp')->move(public_path('dist/img/panitia'), $gambarp);

            $data = [
                'nama' => $request->input('namap'),
                'nba' =>$request->input('nbap'),
                'wa'=> '+'.$request->input('wap'),
                'jk'=> $request->input('jkp'),
                'jabatan'=> $request->input('jp'),
                'foto' => $gambarp
            ];

            // simpan kegiatan
            $kegiatan = new Panitia();
            $kegiatan->simpanPanitia($data);

            $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
            $url = '/' . $pecahurl[4];

            // simpan notif
            $notif = new Notif();
            $notif->insertNotif('Panitia Berhasil Ditambahkan ! ', $url);


            return redirect('/kepanitiaan');
        } else {
            return back()
                ->with('warning', 'Panitia Gagal Disimpan');
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
    public function destroy($nama)
    {
       $result = new Panitia();
       $result->deletePanitia($nama);

        $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
        $url = '/' . $pecahurl[4];

        // simpan notif
        $notif = new Notif();
        $notif->insertNotif('Panitia Berhasil Dihapus ! ', $url);

       return redirect('/kepanitiaan');
    }
}
