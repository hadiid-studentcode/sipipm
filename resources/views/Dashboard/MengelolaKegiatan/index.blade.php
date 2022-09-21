@extends('layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="sticky-top mb-3">
                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title">Kegiatan Yang akan Datang</h4>
                            </div>
                            <div class="card-body">

                                <!-- the events -->




                                <div id="external-events">
                                    @foreach ($kegiatanAcara as $acara)
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ URL::asset('dist/img/kegiatan/' . $acara->upload_logo) }}"
                                                        class="d-block w-100" alt="{{ $acara->nama }}">
                                                </div>



                                            </div>

                                        </div>
                                        <h3>{{ $acara->nama }}</h3>
                                        <p class="text-muted">{{ $acara->tema }}</p>
                                        <a href="{{ URL::asset('/mengelola-kegiatan/' . $acara->nama) }}"> <button
                                                type="button" class="btn btn-info"><i class="bi bi-eye"></i>
                                                Detail</button></a>




                                </div>






                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

                                <h4 class="card-title text-danger"
                                    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                                    {{ date('d F Y', strtotime($acara->dari)) }} -
                                    {{ date('d F Y', strtotime($acara->sampai)) }}</h4>
                            </div>
                            @endforeach
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="text-center">


                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal-lg"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg> Tambah Kegiatan</button>
                                <div class="modal fade" id="modal-lg">

                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <form action="{{ URL::asset('/mengelola-kegiatan') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-header">
                                                    <h4 class="modal-title"></h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- general form elements disabled -->
                                                    <div class="card card-warning">

                                                        <!-- /.card-header -->
                                                        <div class="card-body">


                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <!-- text input -->
                                                                    <div class="form-group">
                                                                        <label>Nama kegiatan <b
                                                                                style="color: red">*</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="nama" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputFile">Upload Logo</label>
                                                                        <div class="input-group">
                                                                            <div class="custom-file">
                                                                                <input type="file"
                                                                                    class="custom-file-input"
                                                                                    id="exampleInputFile"
                                                                                    name="upload_logo">
                                                                                <label class="custom-file-label"
                                                                                    for="exampleInputFile">Choose
                                                                                    file</label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <!-- textarea -->
                                                                    <div class="form-group">
                                                                        <label>Tema Kegiatan <b
                                                                                style="color: red">*</b></label>
                                                                        <textarea class="form-control" rows="3" name="tema" required></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <!-- input states -->
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <!-- text input -->
                                                                    <div class="form-group">
                                                                        <label class="col-form-label"> Tanggal
                                                                            Pelaksanaan,<br>Dari:
                                                                            <b style="color: red">*</b></label>
                                                                        <input type="date" class="form-control"
                                                                            name="dari" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label"> Tanggal
                                                                            Pelaksanaan,<br>Sampai:
                                                                            <b style="color: red">*</b></label>
                                                                        <input type="date" class="form-control"
                                                                            name="sampai" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-form-label">Deskripsi Singkat <b
                                                                        style="color: red">*</b></label>
                                                                <input type="text" class="form-control" required
                                                                    name="deskripsi">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Tujuan Kegiatan</label>

                                                                <textarea class="form-control " name="tujuan" id="" cols="30" rows="10"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Informasi Kegiatan</label>

                                                                <textarea class="form-control " name="informasi" id="" cols="30" rows="10"></textarea>
                                                            </div>

                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>

                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
        <!-- /.content -->

    <!-- fullCalendar 2.2.5 -->
    <script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/fullcalendar/main.js') }}"></script>
    <script>
        $(function() {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function() {

                    // create an Event Object (https://fullcalendar.io/docs/event-object)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    })

                })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
                itemSelector: '.external-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText,
                        backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                            'background-color'),
                        borderColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                            'background-color'),
                        textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                    };
                }
            });



            var calendar = new Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                themeSystem: 'bootstrap',
                //Random default events

                <?php
                $data = new App\Models\Kegiatan();
                $kegiatan = $data->queryKegiatan();
                
                ?>

                <?php foreach($kegiatan as $kg){  ?>

                events: [{
                    title: '{{ $kg->nama }}',
                    start: new Date("{{ $kg->dari }}"),
                    end: new Date("{{ $kg->sampai }}"),
                    backgroundColor: '#f39c12', //yellow
                    borderColor: '#f39c12', //yellow
                   
                }, ],

                <?php } ?>


                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                }
            });

            calendar.render();
            // $('#calendar').fullCalendar()

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            // Color chooser button
            $('#color-chooser > li > a').click(function(e) {
                e.preventDefault()
                // Save color
                currColor = $(this).css('color')
                // Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color': currColor
                })
            })
            $('#add-new-event').click(function(e) {
                e.preventDefault()
                // Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                // Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                event.text(val)
                $('#external-events').prepend(event)

                // Add draggable funtionality
                ini_events(event)

                // Remove event from text input
                $('#new-event').val('')
            })
        })
    </script>
@endsection
