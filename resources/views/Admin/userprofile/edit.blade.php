@extends('Admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> ویرایش کاربر   ___ {{$user->username}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
                            {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
                            <div class="btn-group">
                                {{--<a href="{{route('roles.index')}}" class="btn btn-sm btn-info">سطوح دسترسی</a>--}}
                                {{--<a href="#" class="btn btn-sm btn-success">کاربران مدیریت</a>--}}
                            </div>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ویرایش کاربر</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        {{--<input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">--}}

                                        <div class="input-group-append">
                                            {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <form method="POST" action="{{ route('users.userprofile.update', $user->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('put') }}


                                    <div class="box box-info">
                                        <div class="box-header with-border">
                                            {{--<h3 class="box-title">ویرایش اطلاعات کاربر</h3>--}}
                                            <br>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label text-md-right">نام</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="family" class="col-sm-4 col-form-label text-md-right">فامیلی</label>

                                            <div class="col-md-6">
                                                <input id="family" type="text" class="form-control{{ $errors->has('family') ? ' is-invalid' : '' }}" name="family" value="{{ $user->family }}" required autofocus>


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mobile" class="col-sm-4 col-form-label text-md-right">شماره همراه</label>

                                            <div class="col-md-6">
                                                <input id="mobile" type="tel" pattern="^\d{11}$" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ $user->mobile }}" required autofocus>


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label text-md-right">ایمیل</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required autofocus>


                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label text-md-right"></label>

                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">
                                                    ثبت
                                                </button>


                                            </div>

                                        </div>




                                    </div>



                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection






