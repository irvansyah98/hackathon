<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/backend') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>J</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>BangJas</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#">
            <img src="{{ url('img/user.gif') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->fullname }}</span>
          </a>
        </li>
        <li class="dropdown user user-menu">
          <a href="{{ url('auth/logout') }}">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
