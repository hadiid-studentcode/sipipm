@extends('layouts.main')

@section('container')
    <div class="card">

        <div class="card-header">



            <h3 class="card-title">


                <div class="card">
                    <div class="card-header">
                        Nama :  {{ isset($dataPeserta) ? $dataPeserta->nama : '' }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">NBA :  {{ isset($dataPeserta) ? '-' : '' }}</li>
                        <li class="list-group-item">Utusan :  {{ isset($dataPeserta) ? $dataPeserta->utusan : '' }}</li>

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
                            Pilih Peserta
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($peserta as $p)
                                <li><a class="dropdown-item"
                                        href="{{ asset('/hasil-belajar/' . $p->id) }}">{{ $p->nama }}</a></li>
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
                    <th>Materi</th>
                    <th>SKS</th>
                    <th>Prediket</th>
                    <th>Nominal</th>

                </tr>
            </thead>
            <tbody>



                @if (isset($materi))
                    @foreach ($materi as $m)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $m->BankMateri->materi }}</td>

                            <td>
                            {{ $m->BankMateri->sks }}
                            </td>
                            <td><input type="text" class="form-control" size="1">
                            </td>
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
                    <th></th>

                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
