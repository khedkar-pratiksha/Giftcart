  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Admin_assets/dist/img/adminIcon.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Giftcart</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="{{url('admin/user/view')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{url('admin/category')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/view-products')}}" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/view-orders')}}" class="nav-link">
              <i class="nav-icon fas fa-smile"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/view-banners')}}" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Banners
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="{{url('admin/view-cms')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                CMS
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{url('admin/view-coupons')}}" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Coupons
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/view-enquiries')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Enquiries
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/report')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>