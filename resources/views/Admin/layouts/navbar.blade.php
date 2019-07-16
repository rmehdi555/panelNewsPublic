<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <!-- Messages Dropdown Menu -->


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>


        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-sign-out"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">


                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                   خروج</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->

    </ul>
</nav>
<!-- /.navbar -->






{{--<nav class="py-1 navbar navbar-dark  flex-md-nowrap p-0 shadow bg-dark-blue">--}}
    {{--<span>--}}
    {{--<button class="btn btn-info btn-sm d-inline d-lg-none m-2" data-toggle="collapse" data-target="#sidebar"><i class="fa fa-list"></i></button>--}}
          {{--<a class="navbar-brand mr-0 text-light-gray px-3 py-2" href="#" target="_blank">Hi {{Auth::User()->name}}</a>--}}

    {{--</span>--}}

    {{--<div class="dropdown mx-sm-3">--}}
        {{--<button >--}}
            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                {{--{{ __('Logout') }}--}}
            {{--</a>--}}
            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
            {{--</form>--}}
        {{--</button>--}}
        {{--<div class="dropdown-menu  dropdown-menu-right-costumize ">--}}
            {{--<a class="dropdown-item" href="#">Action</a>--}}
            {{--<a class="dropdown-item" href="#">Another action</a>--}}
            {{--<a class="dropdown-item" href="#">Something else here</a>--}}
            {{--<a class="dropdown-item" href="#">--}}

                {{--LogOut--}}
                {{--<i class="fa fa-sign-out"></i>--}}

            {{--</a>--}}

        {{--</div>--}}
    {{--</div>--}}

{{--</nav>--}}
