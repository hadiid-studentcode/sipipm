<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class PrepostTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = new Materi();

        $materi = $result->Materi();





        return view('Dashboard.PrepostTest.index')
            ->with('title', 'Pre-Post Test')
            ->with('active', 'PrePostTest')
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





        $result = new Materi();
        $tampilkan = $result->materiprepostTest($idmateri);

       




        $materi = $result->Materi();


        return view('Dashboard.PrepostTest.index')
            ->with('title', 'Pre-Post Test')
            ->with('active', 'PrePostTest')
            ->with('materi', $materi)
            ->with('materiPrepostTest', $tampilkan)
            ->with('materiPrepostTest','');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
