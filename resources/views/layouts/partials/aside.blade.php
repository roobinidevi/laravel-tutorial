<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
               <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>            
            <li>
                <a href="{{ url('user') }}">
                    <i class="fa fa-circle-o"></i> <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ url('role') }}">
                    <i class="fa fa-circle-o"></i> <span>Role</span>
                </a>
            </li>
            <li>
                <a href="{{ url('contactus') }}">
                    <i class="fa fa-circle-o"></i> <span>Contact Us</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>