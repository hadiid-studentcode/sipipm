@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">

                {{-- <form action="{{ URL::asset('/pre-post-test') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">

                        <select class="form-select" aria-label="Default select example" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="idmateri">
                            <option selected>Pilih Materi</option>
                            @foreach ($materi as $m)
                              
                                <option value="{{ $m->idMateri }}"></option>
                            @endforeach


                        </select>


                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pilih</button>
                    </div> --}}

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
                    <th>Materi</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($materi as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><?php echo $m->materi; ?></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                            
                                <div class="d-grid gap-2 d-md-block">
                                    
                                    <a  href="{{ URL::asset('/pre-post-test/' . $m->idMateri.'/pre' ) }}" class="btn btn-primary" target="_BLANK" type="submit">PRE TEST</a>
                                    <a  href="{{ URL::asset('/pre-post-test/' . $m->idMateri.'/post') }}" class="btn btn-primary" target="_BLANK" type="submit">POST TEST</a>
                                </div>

                                {{-- modal --}}

                            </div>
                        </td>

                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Total Materi :</th>
                    <th></th>
                    <th></th>


                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
