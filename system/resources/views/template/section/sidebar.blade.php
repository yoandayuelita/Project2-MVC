<?php 
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{url('/')}}" class="brand-link">
    <span class="brand-text font-weight-light">-------Baby Shoes-------</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Yoan Dayu Elita</a>
      </div>
    </div>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="{{url('/beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/produk')}}" class="nav-link {{checkRouteActive('produk')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/kategori')}}" class="nav-link {{checkRouteActive('kategori')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
