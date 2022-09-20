@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                    data-target="#exampleModal">Kelola Materi</button></h3>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitator</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Nama lengkap</label>
                                    <input type="text" class="form-control" id="namaf" placeholder="Nama Lengkap"
                                        name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Nomor Bangku Anggota IPM</label>
                                    <input type="text" class="form-control" id="nba" name="nbaf"
                                        placeholder="00.00.00000">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Nomor Wa</label>
                                    <input type="number" class="form-control" id="wa" name="waf"
                                        placeholder="0000-0000-0000">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="jk" name="jkf">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Ipmawan">Ipmawan</option>
                                        <option value="Ipmawati">Ipmawati</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nba">Jabatan Fasilitator</label>
                                    <select class="form-select" aria-label="jf" name="jf">
                                        <option selected>Pilih Jabatan</option>
                                        <option value="Ketua Panitia">Master OF Training</option>
                                        <option value="Sekretaris Panitia">Master OF Game</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="gambarf">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.card-body -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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
@endsection