
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{('/admin')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrateur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jihad Ait Larbi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin')}}" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{request()->is('categories') || request()->is('addcategory')  ? 'menu-open' : ''}}">
            
            <a href="#" class="nav-link {{request()->is('categories') || request()->is('addcategory')  ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/addcategory')}}" class="nav-link {{ request()->is('addcategory')  ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter Categorie</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/categories')}}" class="nav-link {{request()->is('categories') ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('slider') || request()->is('addslider')  ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('slider') || request()->is('addslider')  ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/addslider')}}" class="nav-link {{request()->is('addslider')  ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/slider')}}" class="nav-link {{request()->is('slider')  ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('products') || request()->is('addproduct')  ? 'menu-open' : ''}}" >
            <a href="#" class="nav-link {{request()->is('products') || request()->is('addproduct')  ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Produits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/addproduct')}}" class="nav-link {{request()->is('addproduct')   ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter Produit</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/products')}}" class="nav-link {{request()->is('products')  ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Produit</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('orders')  ?'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('orders')  ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Commandes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{url('/orders')}}" class="nav-link {{request()->is('orders')  ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Commandes</p>
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

  @section('styles')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('scripts')
<!-- DataTables -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend./plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection