<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  @include('vendor.adminlte.sidebar.brand')

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    @include('vendor.adminlte.sidebar.user')

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" 
      data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @include('vendor.adminlte.sidebar.menu')
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>