<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        {{--<img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
             {{--style="opacity: .8">--}}
        <span class="brand-text font-weight-light">پنل کاربری </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{--<div class="image">--}}
                    {{--<img src="" class="img-circle elevation-2" alt="User Image">--}}
                {{--</div>--}}
                <div class="info">
                    <a href="#" class="d-block">{{Auth::User()->name}} {{Auth::User()->family}}</a>
                </div>
            </div>







            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    @can('show-users')
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش کاربران</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcan
                    @can('show-roles')



                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                نقش های کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("roles.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تعریف نقش ها</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcan
                    @can('show-permissions')


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                               دسترسی های کاربران
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("permissions.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تعریف دسترسی ها </p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcan

                    @can('show-tickets')


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                کل درخواست ها
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("tickets.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مشاهده درخواست ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("leveltickets.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تعریف اولویت ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("categorytickets.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تعریف دسته ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("statustickets.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تعریف وضعیت ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    @endcan


                    @can('show-myTickets')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                               تیکت های من
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("users.userticket.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مشاهده تیکت ها</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcan
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            پروفایل من
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("users.userprofile.index") }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>مشاهده اطلاعات کاربری</p>
                            </a>
                        </li>

                    </ul>
                </li>


                    @can('show-links')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                لیست لینک کراولرها
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("links.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مشاهده لینک ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("links.create") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اضافه کردن لینک جدید</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcan
                    @can('show-data')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                لیست اخبار
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("datas.index") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مشاهده اخبار</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("datas.create") }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اضافه کردن خبر جدید</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcan




                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>





