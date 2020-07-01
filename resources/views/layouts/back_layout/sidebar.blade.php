 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('images/icons/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">C.E.C</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('back/img/avatar04.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('branches.index') }}" class="nav-link @if(Request::is('branches/*')) active @endif @if(Route::current()->getName() == 'branches.index') active @endif">
              <i class="nav-icon far fa-image"></i>
              <p>
                Churches
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('ministries.index')}}" class="nav-link @if(Request::is('ministries/*')) active @endif @if(Route::current()->getName() == 'ministries.index') active @endif">
              <i class="nav-icon far fa-image"></i>
              <p>
                Ministries
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('leaders.index') }}" class="nav-link @if(Request::is('leaders/*')) active @endif @if(Route::current()->getName() == 'leaders.index') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
               Leaders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('message.index') }}" class="nav-link @if(Request::is('bishop/*')) active @endif @if(Route::current()->getName() == 'posts.index') active @endif">
              <i class="nav-icon far fa-image"></i>
              <p>
              Bishop&#39;s Message
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('posts.index') }}" class="nav-link @if(Request::is('posts/*')) active @endif @if(Route::current()->getName() == 'posts.index') active @endif">
              <i class="nav-icon far fa-image"></i>
              <p>
               Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('staffs.index') }}" class="nav-link @if(Request::is('staffs/*')) active @endif @if(Route::current()->getName() == 'staffs.index') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
               Staff
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link @if(Request::is('categories/*')) active @endif @if(Route::current()->getName() == 'categories.index') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
               Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link @if(Request::is('roles/*')) active @endif @if(Route::current()->getName() == 'roles.index') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
               Roles
              </p>
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