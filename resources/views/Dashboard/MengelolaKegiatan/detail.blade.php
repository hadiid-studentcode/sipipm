@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">{{ $detail->nama }}</h3>
                        <h5 class="widget-user-desc">{{ date('d F Y', strtotime($detail->dari)); }} - {{ date('d F Y', strtotime($detail->sampai)); }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ URL::asset('dist/img/kegiatan/' . $detail->upload_logo) }}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                              
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                   <a class="text-decoration"
                                   @if(isset($ketuaPanitia->wa))
                                    href="https://api.whatsapp.com/send?phone={{ $ketuaPanitia->wa }}&text=Assalamualaikum%20Ketua%20Panitia%20">
                                    @else
                                    href="#">
                                    
                                   @endif
                                    <h5 class="description-header fs-2"><i class="bi bi-whatsapp"></i></h5></a> 
                                    
                                   
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                          
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7 mt-3 mt-mobile">
                <div class="card">
                    <ul class="nav nav-tabs profile-tab" role="tablist" id="tabsec">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#detail" role="tab"
                                aria-selected="false"><i class="fa fa-calendar"></i> Detail
                            </a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="detail" role="tabpanel">
                            <div class="card-body"><strong>Deskripsi</strong>
                                <p class="text-muted">{{ $detail->deskripsi }}</p>
                                <strong>Tujuan Kegiatan</strong>
                                <p class="text-muted">{{ $detail->tujuan }}</p>
                                <strong>Tempat</strong>
                                <p class="text-muted">{{ $detail->tempat }}</p><strong>Tanggal</strong>
                                <p class="text-muted">{{ date('d F Y', strtotime($detail->dari)); }} - {{ date('d F Y', strtotime($detail->sampai)); }}</p><strong>Contact Person</strong>
                                <p class="text-muted">
                                    @if(isset($ketuaPanitia->wa))
                                    {{ $ketuaPanitia->wa }}
                                    @else
                                    -
                                    @endif
                                    
                                </p><strong>Informasi Detail</strong>
                                <p class="text-muted">{{ $detail->informasi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
