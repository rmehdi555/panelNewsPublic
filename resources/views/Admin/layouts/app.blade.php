<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com/docs/4.1/examples/dashboard/# -->
<html lang="en">

    @include('Admin.layouts.head-tag')

    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    @include('Admin.layouts.navbar')


        @include('Admin.layouts.side-bar')



            @yield('content')

        <footer class="main-footer">
            <strong>TEAM<a href="#">555</a>.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    @include('Admin.layouts.script')
    @yield('script')
</body></html>