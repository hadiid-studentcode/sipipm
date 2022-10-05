<?php

namespace App\Http\Controllers;

use App\Models\Fasilitator;
use App\Models\Materi;
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
        ->with('title','Pemahaman-keaktifan')
        ->with('active', 'pemahaman-keaktidan')
        ->with('materi',$materi);
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
        // tampilakn materi  dan hari, tanggal, waktu

        $result = new Materi();
        $materihtw = $result->MateriTerpilih($id);


        $materi = $result->Materi();





        // tampilkan pemateri dan fasilitator pendamping




       


        return view('Dashboard.Pemahaman.index')
        ->with('title', 'Pemahaman-keaktifan')
        ->with('active', 'pemahaman-keaktidan')
        ->with('materi', $materi)
            ->with('datamateri', $materihtw);
    
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
