  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ URL::asset('/') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="https://wa.link/4noqib" class="nav-link" target="_blank">Contact</a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

          <?php
          
          $notif = new App\Models\Notif();
          //  jumlah notif
          $jumlahNotif = $notif->JumlahNotif();
          //  data notif
          $dataNotif = $notif->callNotif();
          
          ?>






          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                
                      @if ($jumlahNotif == 0)
                      
                        @else
                          <span class="badge badge-warning navbar-badge">
                          {{ $jumlahNotif }}
                      @endif
                  </span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">
                      @if ($jumlahNotif == 0)
                          Nothing
                      @else
                          {{ $jumlahNotif }}
                      @endif Notifications
                  </span>
                  <div class="dropdown-divider"></div>

                  @foreach ($dataNotif as $notif)
                      <a href="{{ URL::asset($notif->url) }}" class="dropdown-item"
                          onclick="
                        
                        <?php
                        DB::table('notif')
                            ->where('id', $notif->id)
                            ->update(['status' => '1']);
                        
                        ?>
                        
                        
                        ">




                          <i class="far fa-bell "></i> <span class="text-danger">{{ $notif->isi_notif }}</span>
                          <span class="float-right text-muted text-sm">3 mins</span>
                      </a>
                  @endforeach


                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>


          <span class="slider round"></span>


          <li class="nav-item">
              <a class="nav-link " href="{{ URL::asset('/logout') }}">
                  <span class="material-symbols-outlined">
                      logout
                  </span>
              </a>
          </li>





      </ul>
  </nav>
  <!-- /.navbar -->
