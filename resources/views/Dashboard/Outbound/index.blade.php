@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">


                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nilai">Penilaian</button>

              

            </h3>
              <!-- Modal -->
                <div class="modal fade" id="nilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ URL::asset('/outbound') }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lembar Penilaian
                                        Outbound
                                    </h1>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Peserta</label>
                                      


                                        <select class="form-select" aria-label="Default select example"
                                            name="id"required>
                                            <option selected>Pilih Peserta</option>

                                            @foreach ($peserta as $p)
                                                <option value="{{ $p->id }}">{{ $loop->iteration }} {{ $p->nama }}</option>
                                            @endforeach
                                          

                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="aspekPenilaian" class="form-label">Aspek Penilaian</label>
                                        <div class="row">
                                            <div class="col">
                                                <label for="semangat" class="form-label">Semangat</label>
                                                <input type="number" class="form-control" name="semangat" autofocus min="1" max="4">
                                            </div>
                                            <div class="col">
                                                <label for="Disiplin" class="form-label">Disiplin</label>
                                                <input type="number" class="form-control" name="disiplin" min="1" max="4">
                                            </div>
                                            <div class="col">
                                                <label for="kerjaSama" class="form-label">Kerja Sama</label>
                                                <input type="number" class="form-control" name="kerjasama" min="1" max="4">
                                            </div>
                                            <div class="col">
                                                <label for="Komunikasi" class="form-label">Komunikasi</label>
                                                <input type="number" class="form-control" name="Komunikasi" min="1" max="4">
                                            </div>
                                            <div class="col">
                                                <label for="Kreatifitas" class="form-label">Kreatifitas</label>
                                                <input type="number" class="form-control" name="Kreatifitas" min="1" max="4">
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



        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Semangat</th>
                    <th>Disiplin</th>
                    <th>Kerja Sama</th>
                    <th>Komunikasi</th>
                    <th>Kreatifitas</th>
                    <th>Jumlah Skor</th>
                    <th>Nilai</th>
                    <th>Prediket</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($outbound as $p)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->Peserta->nama }}</td>


                    <td>{{ $p->semangat }}</td>
                    <td>{{ $p->disiplin }}</td>

                    <td>{{ $p->kerjaSama }}</td>

                    <td>{{ $p->komunikasi }}</td>

                    <td>{{ $p->kreatifitas }}</td>

                    <td>{{ $p->jumlahSkor }}</td>

                    <td>{{ $p->nilai }}</td>
                      <th>{{ $p->predikat }}</th>






                    </tr>
                @endforeach



            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Total Kepanitiaan : Orang</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Prediket</th>

                </tr>
            </tfoot>
        </table>




    </div>
    <!-- /.card-body -->
    </div>
@endsection
