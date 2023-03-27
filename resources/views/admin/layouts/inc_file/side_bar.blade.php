<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('backend')}}/index3.html" class="brand-link">
    <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
             <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
             <a href="{{asset('backend')}}/#" class="d-block">Hi,{{ Auth::guard('admin')->user()->name }}</a>
          </div>
       </div>
       <!-- Sidebar Menu -->
       <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
             <li class="nav-item">
                <a href="{{url('admin')}}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i> Dashboard</a>
             </li>
             <li class="nav-item">
                <a href="{{asset('backend')}}/#" class="nav-link">
                   <i class="nav-icon fas fa-copy"></i>
                   <p>
                      Layout Options
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">6</span>
                   </p>
                </a>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      <a href="{{asset('backend')}}/pages/layout/top-nav.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Top Navigation</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{route('admin.demo')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Demo</p>
                      </a>
                   </li>

                </ul>
             </li>
             <li class="nav-item">
                <a href="{{route('admin.demo')}}" class="nav-link {{ request()->routeIs('admin.demo') ? 'active' : '' }}">
                <i class="nav-icon fas fa-link"></i>
                {{__('Demo')}}</a>
             </li>

             <li class="nav-item">
                <a href="{{route('admin.about')}}" class="nav-link {{ request()->routeIs('admin.about') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-link"></i>
                   <p>About</p>
                </a>
             </li>
             {{-- <li class="nav-item">
                <a href="{{route('admin.adviser')}}" class="nav-link {{ request()->routeIs('admin.adviser') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-link"></i>
                   <p>Adviser</p>
                </a>
             </li> --}}

             <li class="nav-item">
                <a href="{{url('/')}}" target="_blank" class="nav-link">
                <i class="nav-icon fas fa-globe"></i>
                Website</a>
             </li>
          </ul>
       </nav>
       <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>
