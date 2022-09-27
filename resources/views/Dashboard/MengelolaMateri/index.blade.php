@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-block btn-primary" onclick="Materi()">Kelola Materi</button>
            </h3>

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
        function Materi() {
            let silabus = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;

            open('{{ URL::asset('bank-materi') }}', 'silabus', silabus);
        }
    </script>
@endsection
