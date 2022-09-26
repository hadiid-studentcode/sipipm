<?php

namespace App\Http\Controllers;

use App\Models\Fasilitator;
use App\Models\Notif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class FasilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = new Fasilitator();
        $fasilitator = $result->dataFasilitator();

        $data = new Fasilitator();
        $mot = $data->contackPerson();
        $tampilFasilitator = $data->queryFasilitator();



        return view('Dashboard.Fasilitator.index')
            ->with('title', 'Fasilitator')
            ->with('active', 'fasilitator')
            ->with('fasilitator', $fasilitator)
            ->with('mot', $mot)
            ->with('dataFasilitator', $tampilFasilitator);
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
           
            'gambarf' => 'mimes:PDF,pdf,jpg,jpeg,png|max:5000'
        ]);
        if ($request->hasfile('gambarf')) {
            $gambarf = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarf')->getClientOriginalName());





            $request->file('gambarf')->move(public_path('dist/img/fasilitator'), $gambarf);

            $data = [
                'nama' => $request->input('namaf'),
                'nba' => $request->input('nbaf'),
                'wa' => '+' . $request->input('waf'),
                'jk' => $request->input('jkf'),
                'jabatan' => $request->input('jf'),
                'foto' => $gambarf
            ];

            // simpan kegiatan
            $kegiatan = new Fasilitator();
            $kegiatan->simpanFasilitator($data);

            $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
            $url = '/' . $pecahurl[4];

            // simpan notif
            $notif = new Notif();
            $notif->insertNotif('Fasilitator Berhasil Ditambahkan ! ', $url);


            return redirect('/fasilitator');

        } elseif ($request->hasfile('gambarp') == false) {
            $data = [
                'nama' => $request->input('namaf'),
                'nba' => $request->input('nbaf'),
                'wa' => '+62' . $request->input('waf'),
                'jk' => $request->input('jkf'),
                'jabatan' => $request->input('jf'),
                'foto' => $request->input('gambarf')
            ];

            // simpan kegiatan
            $kegiatan = new Fasilitator();
            $kegiatan->simpanFasilitator($data);

            $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
            $url = '/' . $pecahurl[4];

            // simpan notif
            $notif = new Notif();
            $notif->insertNotif('Fasilitator Berhasil Ditambahkan ! ', $url);


            return redirect('/fasilitator');
        }
        
        
        
        else{
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
        $result = new Fasilitator();
        $result->deleteFasilitator($nama);

        $pecahurl = explode('/', $_SERVER['REQUEST_URI']);
        $url = '/' . $pecahurl[4];

        // simpan notif
        $notif = new Notif();
        $notif->insertNotif('Fasilitator Berhasil Dihapus ! ', $url);

        return redirect('/fasilitator');
    }
}
