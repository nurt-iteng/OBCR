<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active menu-open">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>

            <li class="">
                <a href="{{ url('/requisition/create-requisition') }}">
                    <i class="fa fa-book"></i>
                    <span>DEMO 1</span>
                </a>
            </li>

            <li class="">
                <a href="{{ url('/requisition/demo-time-picker') }}">
                    <i class="fa fa-book"></i>
                    <span>DEMO 2</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>