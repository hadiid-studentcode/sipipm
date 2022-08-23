<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-6">
    <!-- Brand Logo -->
    <a href="{{ URL::asset('/')}}" class="brand-link">
      <img src="{{ URL::asset('dist/img/logotm1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIP IPM TM 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('dist/img/hadiid.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hadiid Andri Yulison</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manajemen Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::asset('/barang')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::asset('/satuan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Satuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::asset('/pelanggan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggan</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::asset('/penjualan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::asset('/penjualan/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Penjualan</p>
                </a>
              </li>
             
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manajemen Seminar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::asset('/peserta')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Peserta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::asset('/peserta/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Input Peserta</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{ URL::asset('/seminar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Seminar</p>
                </a>
              </li>
          
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div> 

    
    <!-- /.sidebar -->
  </aside>



