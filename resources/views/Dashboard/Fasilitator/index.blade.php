@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                    data-target="#exampleModal">Tambah Fasilitator</button></h3>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ URL::asset('/fasilitator') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah fasilitator</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Nama lengkap <b style="color: red">*</b></label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                        required name="namaf">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Nomor Bangku Anggota IPM</label>
                                    <input type="text" class="form-control" id="nba" name="nbaf"
                                        placeholder="00.00.00000">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                    <input type="number" class="form-control" id="wa" name="waf"
                                        placeholder="0000-0000-0000" value="62">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Jenis Kelamin <b style="color: red">*</b></label>
                                    <select class="form-select" aria-label="jk" name="jkf">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki - laki">Laki - laki </option>
                                        <option value="Perempuan">Perempuan</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nba">Jabatan Kepanitiaan <b style="color: red">*</b></label>
                                    <select class="form-select" aria-label="jk" name="jf">
                                        <option selected>Pilih Jabatan</option>
                                        @foreach ($fasilitator as $f)
                                            <option value="{{ $f }}">{{ $f }}</option>
                                        @endforeach


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
                                <button type="submit" class="btn btn-primary">Save</button>
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
                    <th>Nama Lengkap</th>
                    <th class="d-none">NBA</th>
                    <th class="d-none">No wa</th>
                    <th class="d-none">Jenis Kelamin</th>
                    <th>Fasilitator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dataFasilitator as $fasilitator)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fasilitator->nama }}</td>
                        <td class="d-none">{{ $fasilitator->nba }}</td>
                        <td class="d-none">{{ $fasilitator->wa }}</td>
                        <td class="d-none">{{ $fasilitator->jk }}</td>
                        <td>{{ $fasilitator->jabatan }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-info" data-toggle="modal" data-target="#view{{ $fasilitator->id }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></a>

                                {{-- modal --}}

                            </div>

                            {{-- akhir modal --}}






                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Total fasilitator : 100 Orang</th>
                    <th class="d-none"></th>
                    <th class="d-none"></th>
                    <th class="d-none"></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
          @foreach ($dataFasilitator as $fasilitator)
        <div class="modal fade" id="view{{ $fasilitator->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Profil fasilitator</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('dist/img/fasilitator/' . $fasilitator->foto) }}"
                                        alt="profil panitai" />
                                </div>

                                <h3 class="profile-username text-center">{{ $fasilitator->nama }}
                                </h3>

                                <p class="text-muted text-center">{{ $fasilitator->jabatan }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>NBA</b> <a class="float-right">{{ $fasilitator->nba }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Jenis Kelamin</b>
                                        <a class="float-right">{{ $fasilitator->jk }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>No Telp/Wa</b>
                                        <a class="float-right">{{ $fasilitator->wa }}</a>
                                    </li>
                                </ul>

                                <a href="https://api.whatsapp.com/send?phone={{ $fasilitator->wa }}&text=Assalamualaikum%20{{ $fasilitator->nama }}%20{{ $fasilitator->jabatan }}"
                                    class="btn btn-primary btn-block"><b>Hubungi</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <form action="{{ URL::asset('/fasilitator/' . $fasilitator->nama) }}" method="post">
                            @method('delete') @csrf

                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yakin?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </form>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
    </div>
    <!-- /.card-body -->
    </div>
  
@endsection
