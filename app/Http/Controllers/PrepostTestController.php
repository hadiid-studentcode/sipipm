<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Preposttest;
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

    public function pretest($idMateri, $pre){



        if($pre == 'pre'):
        

        $result = new Preposttest();
        $pre = $result->dataPre($idMateri);
        $pretest = $pre;





        switch ($idMateri) {


            case 1:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;
            case 2:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;

            case 3:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;

            case 4:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;

            case 5:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;

            case 6:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;



            case 7:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;

            case 8:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;
            case 9:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;
            case 10:
                //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                    ->with('pre', $pretest);
                break;


            default:

                return view('Dashboard.PrepostTest.view')
                    ->with('id', 'Terjadi Kesalahan');
                break;
        }

    else:
            $result = new Preposttest();
            $post = $result->dataPost($idMateri);
            $posttest = $post;


            dd($posttest);




            switch ($idMateri) {


                case 1:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;
                case 2:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;

                case 3:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;

                case 4:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;

                case 5:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;

                case 6:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;



                case 7:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;

                case 8:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;
                case 9:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;
                case 10:
                    //    return view('Dashboard.PrepostTest.'.$d->idMateri.'.view')
                    return view('Dashboard.PrepostTest.view')
                    ->with('id', $idMateri)
                        ->with('post', $posttest);
                    break;


                default:

                    return view('Dashboard.PrepostTest.view')
                    ->with('id', 'Terjadi Kesalahan');
                    break;
            }


    endif;

    }

   
}
