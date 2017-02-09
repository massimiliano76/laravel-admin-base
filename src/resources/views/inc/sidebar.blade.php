@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="//placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('bytenet-admin-base::base.online') }}</a>
          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="{{ trans('bytenet-admin-base::base.search') }}...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ mb_strtoupper(trans('bytenet-admin-base::base.administration')) }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li class="active">
              <a href="{{ url('/' . config('bytenet.admin.base.route_prefix') . '/dashboard') }}">
                  <i class="fa fa-dashboard"></i>
                  <span>{{ mb_ucfirst(trans('bytenet-admin-base::base.dashboard')) }}</span>
              </a>
          </li>

          <li class="header">{{ mb_strtoupper(trans('bytenet-admin-base::base.header')) }}</li>

          <li>
              <a href="{{ '/' . config('bytenet.admin.base.route_prefix') . '/contacts' }}">
                  <i class="fa fa-users"></i>
                  <span>{{ mb_ucfirst(trans('bytenet-admin-contacts::contacts.contacts')) }} {{-- composer! --}}</span>
              </a>
          </li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
