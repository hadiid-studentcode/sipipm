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
                        <li class="list-group-item">Pemateri :
                            {{ isset($datamateri) ? $datamateri->fasilitator_pemateri : '' }} </li>
                        <li class="list-group-item">Fasilitator :
                            {{ isset($datamateri) ? $datamateri->fasilitator_pendamping : '' }}</li>
                        <li class="list-group-item">Hari, Tanggal : {{ isset($datamateri) ? $datamateri->hari : '' }} </li>
                        <li class="list-group-item">Waktu :
                            {{ isset($datamateri) ? $datamateri->waktu_dari . '-' . $datamateri->waktu_sampai : '' }} </li>
                    </ul>
                </div>
            </h3>


        </div>

        <ul class="nav justify-content-start container">
            <li class="nav-item">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                    @if (isset($peserta))
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#nilai">Penilian</button>
                    @else
                    @endif

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            Pilih Materi
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($materi as $m)
                                <li><a class="dropdown-item"
                                        href="{{ asset('/pemahaman-keaktifan/' . $m->id) }}">{{ $m->materi }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>



        </ul>

        @if (isset($peserta))
            <!-- Modal -->


            <div class="modal fade" id="nilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ URL::asset('/pemahaman-keaktifan') }}" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Lembar Penilaian
                                    materi
                                </h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <input type="hidden" name="idmateri" value="{{ $idmateri }}">
                                    <input type="hidden" name="pemateri" value="{{ $datamateri->fasilitator_pemateri }}">
                                      <input type="hidden" name="pendamping" value="{{ $datamateri->fasilitator_pendamping }}">
                                    <label for="nama" class="form-label">Nama Peserta</label>



                                    <select class="form-select" aria-label="Default select example" name="idpeserta"required>
                                        <option selected>Pilih Peserta</option>

                                        @foreach ($peserta as $p)
                                            <option value="{{ $p->id }}">{{ $loop->iteration }} {{ $p->nama }}
                                            </option>
                                        @endforeach


                                    </select>

                                </div>
                                <div class="mb-3">
                                   
                                    <div class="row">
                                        <div class="col">
                                            <label for="Pre Test" class="form-label">Pre Test</label>
                                            <input type="number" class="form-control" name="pretest" autofocus
                                                min="0" max="100">
                                        </div>
                                        <div class="col">
                                            <label for="Post Test" class="form-label">Post Test</label>
                                            <input type="number" class="form-control" name="posttest" min="0"
                                                max="100">
                                        </div>


                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
        @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Peserta</th>

                    <th>Nilai Pre Test</th>
                    <th>Nilai Post Test</th>

                </tr>
            </thead>
            <tbody>


                @if(isset($nilai))

                @foreach($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->peserta->nama }}</td>

                    <td>{{ $n->n_preTest }}</td>
                    <td>{{ $n->n_postTest }}</td>
                </tr>

                @endforeach


                @else



                 <tr>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                </tr>


                @endif



            </tbody>
            <tfoot>
                <tr>
                    <th>Total Materi :</th>
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
