@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">

                <form action="{{ URL::asset('/pre-post-test') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">

                        <select class="form-select" aria-label="Default select example" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="idmateri">
                            <option selected>Pilih Materi</option>
                            @foreach ($materi as $m)
                                <option value="{{ $m->id }}"><?php echo $m->materi; ?></option>
                            @endforeach


                        </select>


                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pilih</button>
                    </div>

                </form>



            </h3>


        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Peserta</th>
                    <th>Nilai Pra Test</th>
                    <th>Nilai Post Test</th>
                    <th>Aksi</th>

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
                    <th></th>
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
