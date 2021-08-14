 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="home" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          @if(session()->has('userid'))
          <li class="nav-item">
            <a href="myprofile" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="changepwd" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
          
          @else
          <li class="nav-item">
            <a href="register" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Registration
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="login" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="contactus" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Contact Us
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="aboutus" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
          @if(session()->has('userid'))
          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>