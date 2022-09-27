@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">




                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button" onclick="Silabus()">Silabus Materi</button>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#materi">Kelola Rowndown
                        Materi</button </div>


                </div>
            </h3>
            {{-- modal --}}
            <div class="modal fade" id="materi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ URL::asset('/mengelola-materi') }}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Materi</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="hari" class="form-label">Hari</label>
                                    <select class="form-select" aria-label="Default select example" name="hari"required>
                                        <option selected>Pilih Hari</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Ahad">Ahad</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label class="col-form-label"> Waktu
                                                    Pelaksanaan,<br>Dari:
                                                    <b style="color: red">*</b></label>
                                                <input type="time" class="form-control" name="wdari" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label"> Waktu
                                                    Pelaksanaan,<br>Sampai:
                                                    <b style="color: red">*</b></label>
                                                <input type="time" class="form-control" name="wsampai" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Materi" class="form-label">Materi   <b style="color: red">*</b></label></label>
                                    <select class="form-select" aria-label="Default select example" name="materi"required>
                                        <option selected>Pilih Materi</option>
                                        @foreach($materi as $m)
                                        <option value="<?php echo $m->id;?>"><?php echo $m->materi;?></option>
                                      @endforeach
                                    </select>
                                </div>
                                  <div class="mb-3">
                                    <label for="Materi" class="form-label">Fasilitator Pemateri   <b style="color: red">*</b></label></label>
                                
                                     <select class="form-select" aria-label="Default select example" name="pemateri"required >
                                        <option selected>Pilih Fasilitator Pemateri</option>
                                        @foreach($pemateri as $p)
                                        <option value="<?php echo $p->id;?>"><?php echo $p->nama;?></option>
                                      @endforeach
                                    </select>
                                   
                                </div>
                                   <div class="mb-3">
                                    <label for="Materi" class="form-label">Fasilitator Pendamping   <b style="color: red">*</b></label></label>
                                      <select class="form-select" aria-label="Default select example" name="pendamping"required >
                                        <option selected>Pilih Fasilitator Pendamping</option>
                                        @foreach($pendamping as $pen)
                                        <option value="<?php echo $pen->id;?>"><?php echo $pen->nama;?></option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
            {{-- akhir modal --}}

        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Hari/Tanggal</th>
                    <th>Waktu</th>
                    <th>Materi</th>
                    <th>Penanggung Jawab</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Senin/3 Juli
                        2017
                    </td>
                    <td>08.00-09.00</td>
                    <td>Registrasi</td>
                    <td>Panitia</td>
                    <td>
                        Selesai
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total Kepanitiaan : 100 Orang</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>

    <script>
        function Silabus() {
            let silabus = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;

            open('{{ URL::asset('/mengelola-materi/create') }}', 'silabus', silabus);
        }
    </script>
@endsection
