 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">




      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KGD</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }} (Renter)</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            

            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/userprofile/{{ Auth::user()->id }}" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-university"></i>
                <p>
                Propertys
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Wish List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://127.0.0.1:8000/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="/pending_properties" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pending</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/all_propertis" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All</p>
                  </a>
                </li> -->
              </ul>
            </li>

            

            
            
            <li class="nav-header">Others</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendar
                  {{-- <span class="badge badge-info right">2</span> --}}
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
              <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <i class="fa fa-share-square nav-icon"></i>
                      <button style="border: none; background:transparent; color:#C2C7D0">Logout</button>
                    </form>
              </a>
            </li>

          









          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>