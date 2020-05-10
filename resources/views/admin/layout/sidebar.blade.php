<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">لوحة تحكم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('dashboardHome')}}" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                الرئيسية
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                زيارة الواجهة الرئيسية
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{Request::segment(2)=='gifts' ? 'menu-open' : ''}}">
                        <a href="#"
                           class="nav-link {{Request::segment(2)=='gifts' ? 'active' : ''}} ">
                            <i class="nav-icon fa fa-gift"></i>
                            <p>
                                الهدايا
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('gifts.index')}}"
                                   class="nav-link {{Request::segment(2)=='gifts' ? 'active' : ''}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>الكل</p>
                                    <span class="badge badge-primary"></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{Request::segment(2)=='questions' ? 'menu-open' : ''}}">
                        <a href="#"
                           class="nav-link {{Request::segment(2)=='questions' ? 'active' : ''}} ">
                            <i class="nav-icon fa fa-question-circle-o"></i>
                            <p>
                                الاسئلة
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('questions.index')}}"
                                   class="nav-link {{Request::segment(2)=='questions' ? 'active' : ''}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>الكل</p>
                                    <span class="badge badge-primary"></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('settings.index')}}"
                           class="nav-link {{Request::segment(2)=='settings' ? 'active' : ''}} ">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                الاعدادات
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview {{Request::segment(2)=='banners' ? 'menu-open' : ''}}">
                        <a href="#"
                           class="nav-link {{Request::segment(2)=='banners' ? 'active' : ''}} ">
                            <i class="nav-icon fa fa-question-circle-o"></i>
                            <p>
                                البنرات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('banners.index')}}"
                                   class="nav-link {{Request::segment(2)=='banners' ? 'active' : ''}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>الكل</p>
                                    <span class="badge badge-primary"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
