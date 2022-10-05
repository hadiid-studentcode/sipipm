@extends('layouts.main')

@section('container')
    <div class="card">

        <div class="card-header">



            <h3 class="card-title">


                <div class="card">
                    <div class="card-header">
                        Materi : {{ isset($datamateri) ? $datamateri->materi : '' }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pemateri : {{ isset($datamateri) ? $datamateri->fasilitator_pemateri : '' }} </li>
                          <li class="list-group-item">Fasilitator : {{ isset($datamateri) ? $datamateri->fasilitator_pendamping : '' }}</li>
                        <li class="list-group-item">Hari, Tanggal : {{ isset($datamateri) ? $datamateri->hari : '' }} </li>
                        <li class="list-group-item">Waktu : {{ isset($datamateri) ? $datamateri->waktu_dari .'-' .$datamateri->waktu_sampai : '' }} </li>
                    </ul>
                </div>
            </h3>


        </div>

        <ul class="nav justify-content-start container">
            <li class="nav-item">

            </li>
            <li class="nav-item">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            Pilih Materi
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($materi as $m)
                                <li><a class="dropdown-item" href="{{ asset('/pemahaman-keaktifan/'.$m->id) }}">{{ $m->materi }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">
                <a class="nav-link disabled"></a>
            </li>
        </ul>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Peserta</th>
                    <th>Materi</th>
                    <th>Nilai Pre Test</th>
                    <th>Nilai Post Test</th>

                </tr>
            </thead>
            <tbody>


                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </tbody>
            <tfoot>
                <tr>
                    <th>Total Materi :</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
