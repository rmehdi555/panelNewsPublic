
@extends('Admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>لیست اخبار</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
                            {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
                            <div class="btn-group">
                                <a href="{{route('datas.create')}}" class="btn btn-sm btn-info">ایجاد خبر جدید</a>
 

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
                                <h3 class="card-title">جدول خبر ها</h3>
                                <div class="card-tools">
                                    <form method="post" action="{{ route("datas.search") }}">
                                        @csrf

                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
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
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>

                                        <th>شماره</th>

                                        <th>لینک مقصد</th>
                                        <th>تاریخ درج</th>

                                        <th>تصویر</th>
                                        <th>عنوان</th>
                                        <th>لینک مبدا</th>
                                        <th>تنظیمات</th>
                                        {{--<th>data</th>--}}



                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>

                                            <td>{!! Str::limit($data->destlink, $limit = 40, $end = '...') !!}</td>
                                            <td>{{ $data->created_at}}</td>

                                            {{--<td>{{ $data->data}}</td>--}}
                                            <td><img src="{{ $data->imgxpath}}"  style="width:100px;height:100px;"></td>
                                            <td>{!! Str::limit($data->titlexpath, $limit = 30, $end = '...') !!}</td>
                                            <td>{!! Str::limit($data->link, $limit = 30, $end = '...') !!}</td>
                                            <td>
                                                {{--<form class="form-inline d-inline" action="{{ route("banner.content.change.status",$bannerContent->id) }}" method="post">--}}
                                                {{--@csrf--}}
                                                {{--{{ method_field('put') }}--}}
                                                {{--<button class="btn btn-data" type="submit">--}}
                                                {{--@if($bannerContent->status == 1)--}}
                                                {{--<i class="fa fa-toggle-on text-success"></i>--}}
                                                {{--@else--}}
                                                {{--<i class="fa fa-toggle-off text-muted"></i>--}}
                                                {{--@endif--}}
                                                {{--</button>--}}
                                                {{--</form>--}}
                                                {{--<hr>--}}
                                                <a class="btn btn-sm btn-info" href="{{ route("datas.edit",$data->id) }}"><i class="fa fa-edit"></i></a>
                                                <form class="form-inline d-inline" action="{{ route("datas.destroy",$data->id) }}" method="post">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        {!! $datas->render() !!}
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
