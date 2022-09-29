<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
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
        // jumlah peserta
        $total = $result->totalPeserta();






        return view('Dashboard.Peserta.index')
            ->with('title', 'Peserta')
            ->with('active', 'Peserta')
            ->with('peserta',$peserta)
            ->with('total',$total);
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

            'gambarpes' => 'mimes:PDF,pdf,jpg,jpeg,png|max:5000'
        ]);




        if ($request->hasfile('gambarpes')) {



            $gambarpes = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarpes')->getClientOriginalName());
            $request->file('gambarpes')->move(public_path('dist/img/peserta'), $gambarpes);

            $data = [
                'nama' => $request->input('namapes'),
                'utusan' => $request->input('utusanpes'),
                'nowa' => '+62' . $request->input('wapes'),
                'jk' => $request->input('jkpes'),
                'foto' => $gambarpes
            ];

            // simpan kegiatan
            $kegiatan = new Peserta();
            $kegiatan->simpanPeserta($data);

            $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
            $url = '/' . $pecahurl[4];

            // simpan notif
            $notif = new Notif();
            $notif->insertNotif('Peserta Berhasil Ditambahkan ! ', $url);


            return redirect('/peserta');
        } elseif ($request->hasfile('gambarpes') == false) {
            $data = [
                  'nama' => $request->input('namapes'),
                'utusan' => $request->input('utusanpes'),
                'nowa' => '+62' . $request->input('wapes'),
                'jk' => $request->input('jkpes'),
                'foto' => $request->input('gambarpes')
            ];

            // simpan kegiatan
            $kegiatan = new Peserta();
            $kegiatan->simpanPeserta($data);

            $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
            $url = '/' . $pecahurl[4];

            // simpan notif
            $notif = new Notif();
            $notif->insertNotif('Peserta Berhasil Ditambahkan ! ', $url);
            return redirect('/peserta');
        } else {
            return back()
                ->with('warning', 'peserta Gagal Disimpan');
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


        $result = new Peserta();
        $result->deletePeserta($nama);

        $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
        $url = '/' . $pecahurl[4];

        // simpan notif
        $notif = new Notif();
        $notif->insertNotif('Peserta Berhasil Dihapus ! ', $url);

        return redirect('/peserta');
    }
}
