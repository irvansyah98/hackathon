<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ url('img/user.gif') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->fullname }}</p>
        <span>{{ Auth::user()->role }}</span>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li>
        <a href="{{ url('/backend') }}">
          <i class="fa fa-th"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MASTER DATA</li>
        <li>
          <a href="{{ url('/backend/users') }}">
            <i class="fa fa-users"></i> <span>Users</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/backend/kategori') }}">
            <i class="fa fa-building"></i> <span>Kategori</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Toko</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{ url('/backend/toko') }}">
                <i class="fa fa-keyboard-o"></i> <span>Nama Toko</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/backend/produk') }}">
                <i class="fa fa-gift"></i> <span>Produk</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/backend/ulasan_produk') }}">
                <i class="fa fa-wechat"></i> <span>Ulasan</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Jasa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{ url('/backend/toko') }}">
                <i class="fa fa-keyboard-o"></i> <span>Nama Jasa</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/backend/produk') }}">
                <i class="fa fa-gift"></i> <span>Ulasan</span>
              </a>
            </li>
          </ul>
        </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
