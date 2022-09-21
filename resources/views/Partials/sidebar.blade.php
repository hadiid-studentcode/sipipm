<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-6">
    <!-- Brand Logo -->
    <a href="{{ URL::asset('/dashboard') }}" class="brand-link text-decoration-none">
        <img src="{{ URL::asset('dist/img/logotm1.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SIP IPM TM 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('dist/img/hadiid.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ URL::asset('/dashboard') }}" class="d-block text-decoration-none">Hadiid Andri Yulison</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">Manajemen Kepanitiaan</li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/mengelola-kegiatan') }}" class="nav-link {{ $active == 'kegiatan' ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Mengelola Kegiatan

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/kepanitiaan') }}" class="nav-link {{ $active == 'kepanitiaan' ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Kepanitiaan

                        </p>
                    </a>

                </li>
                <li class="nav-header">Manajemen Fasilitator</li>


                <li class="nav-item">
                    <a href="{{ URL::asset('/fasilitator') }}" class="nav-link {{ $active == 'fasilitator' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Tim Fasilitator

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/mengelola-materi') }}" class="nav-link {{ $active == 'materi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Mengelola Materi

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ URL::asset('/metode-pembelajaran') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RKTL

                        </p>
                    </a>

                </li>

                <li class="nav-header">Kegiatan</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Penentuan Peserta

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Evaluasi Perkaderan

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Buku Pedoman

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Penilaian

                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pre - Post test</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Skala Pemahaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Outbound</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Praktek Kultum / Pidato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Praktek Sholat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Observer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>RKTL</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-header">Administrasi & Keuangan</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Administrasi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lembar Screening</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rowndown Acara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CV peserta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CV pemateri </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita Acara </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presensi </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Design ruangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Term of Reference</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Silabus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notulensi</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Keuangan

                        </p>
                    </a>

                </li>
                <li class="nav-header">Laporan</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Input Laporan

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Cetak Laporan

                        </p>
                    </a>

                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>


    <!-- /.sidebar -->
</aside>
