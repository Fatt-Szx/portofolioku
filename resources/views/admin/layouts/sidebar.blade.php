<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <a href="" class="brand-link">
        <img src="{{ asset('/images/Muhammadiyah.png') }} class="brand-image img-circle " style="opacity: .8">
        <span class="brand-text font-weight-light">Manajemen Portofolioku</span>
      </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div> --}}


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


      <!-- Dashboard -->
      <li class="nav-item">
        <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <!--<span class="right badge fa-tachometer-alt">New</span>-->
          </p>
        </a>
      </li>
      <!-- kategori -->   
      <!-- Dashboard -->
      <li class="nav-item">
        <a href="/admin/contact" class="nav-link {{ Request::is('admin/contact*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-calendar"></i>
          <p>
            Kontak
            <!--<span class="right badge fa-calendar">New</span>-->
          </p>
        </a>
      </li>
      
      <!-- Dashboard -->
      <li class="nav-item">
        <a href="/admin/certification" class="nav-link {{ Request::is('admin/certification*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-calendar"></i>
          <p>
            Sertifikat
            <!--<span class="right badge fa-calendar">New</span>-->
          </p>
        </a>
      </li>

      <!-- Dashboard -->
      <li class="nav-item">
        <a href="/admin/education" class="nav-link {{ Request::is('admin/education*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Pendidikan
            <!--<span class="right badge fa-list">New</span>-->
          </p>
        </a>
      </li>

      <!-- Dashboard -->
      <li class="nav-item">
        <a href="/admin/experience" class="nav-link {{ Request::is('admin/experience*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-envelope"></i>
          <p>
            Pengalaman
            <!--<span class="right badge fa-envelope">New</span>-->
          </p>
        </a>
      </li>

      <!-- Banner -->
      <li class="nav-item">
        <a href="/admin/project" class="nav-link {{ Request::is('admin/project*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-images"></i>
          <p>
            Projek yang dibuat
            <!--<span class="right badge fa-users">New</span>-->
          </p>
        </a>
      </li>      
      
      <li class="nav-item">
        <a href="/admin/skill" class="nav-link {{ Request::is('admin/skill*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-images"></i>
          <p>
            Skill
            <!--<span class="right badge fa-users">New</span>-->
          </p>
        </a>
      </li>

      <!-- User -->
      <li class="nav-item">
        <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Akun
            <!--<span class="right badge fa-users">New</span>-->
          </p>
        </a>
      </li>
                <!-- Menu for other roles (e.g., Doctor, Nurse, Pharmacist) can go here -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
