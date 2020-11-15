
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      @foreach (LaravelLocalization::getSupportedLanguagesKeys()  as $langs)
          <li class="nav-item">
          <a class="nav-link" href="{{url('/'.$langs.'/admin/admin')}}" role="button">{{strtoupper($langs)}}</a>
          </li>
      @endforeach
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('/design/adminlte/dist')}}/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('/design/adminlte/dist')}}/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('/design/adminlte/dist')}}/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {{-- @include('admin.layout.menu') --}}
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">@lang('site.dashboard')</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/storage/images/users/' . Admin_img())}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{auth()->guard('admin')->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
          <a href="{{url('admin/index')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                @lang('site.dashboard')
              </p>
            </a>
           
          </li>
          <li class="nav-item {{active_menu('admin')}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                @lang('site.admins')
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>@lang('site.all_admins')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>@lang('site.add_new_admin')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.index').'?level=User'}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>@lang('site.users')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.index').'?level=Vendor'}}" class="nav-link">
                  <i class="far nav-icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg></i>
                  <p>@lang('site.vendors')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.index').'?level=Company'}}" class="nav-link">
                  <i class="far fa-building nav-icon"></i>
                  <p>@lang('site.companies')</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item {{active_menu('country')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-flag"></i>
                <p>
                  @lang('site.countries')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('country.index')}}" class="nav-link">
                    <i class="fa fa-globe nav-icon"></i>
                    <p>@lang('site.all_countries')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('country.create')}}" class="nav-link">
                    <i class="far fa-plus-square nav-icon"></i>
                    <p>@lang('site.add_new_country')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{active_menu('city')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-city"></i>
                <p>
                  @lang('site.cities')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('city.index')}}" class="nav-link">
                    <i class="fa fa-city nav-icon"></i>
                    <p>@lang('site.all_cities')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('city.create')}}" class="nav-link">
                    <i class="far fa-plus-square nav-icon"></i>
                    <p>@lang('site.add_new_city')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{active_menu('state')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  @lang('site.states')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('state.index')}}" class="nav-link">
                    <i class="fa fa-city nav-th"></i>
                    <p>@lang('site.all_states')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('state.create')}}" class="nav-link">
                    <i class="far fa-plus-square nav-icon"></i>
                    <p>@lang('site.add_new_state')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{active_menu('department')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                  @lang('site.departments')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('department.index')}}" class="nav-link">
                    <i class="fa fa-folder nav-th"></i>
                    <p>@lang('site.all_departments')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('department.create')}}" class="nav-link">
                    <i class="far fa-folder nav-icon"></i>
                    <p>@lang('site.add_new_department')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{active_menu('manufact')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-industry"></i>
                <p>
                  @lang('site.manufactors')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('manufact.index')}}" class="nav-link">
                    <i class="fa fa-industry nav-industry"></i>
                    <p>@lang('site.all_manufactors')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('manufact.create')}}" class="nav-link">
                    <i class="far fa-plus-square nav-plus-square"></i>
                    <p>@lang('site.add_new_manufactor')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{active_menu('shipping')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shipping-fast"></i>
                <p>
                  @lang('site.shipping')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('shippings.index')}}" class="nav-link">
                    <i class="fa fa-shipping-fast nav-industry"></i>
                    <p>@lang('site.all_shipping')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('shippings.create')}}" class="nav-link">
                    <i class="far fa-plus-square nav-plus-square"></i>
                    <p>@lang('site.add_new_shipping')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{active_menu('products')}} ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  @lang('site.products')
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('products.index')}}" class="nav-link">
                    <i class="fa fa-shopping-bag nav-industry"></i>
                    <p>@lang('site.all_products')</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('products.create')}}" class="nav-link">
                    <i class="far fa-plus-square nav-plus-square"></i>
                    <p>@lang('site.add_new_product')</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.settings.edit')}}" class="nav-link">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    @lang('site.settings')
                  </p>
                </a>
              </li>  
          </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
