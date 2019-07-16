
@extends('Admin.layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>نقش ها</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
              {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
              <div class="btn-group">
                <a href="{{route('roles.create')}}" class="btn btn-sm btn-info">ایجاد role</a>
                <a href="{{route('permissions.index')}}" class="btn btn-sm btn-success">بخش دسترسی ها</a>

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
                <h3 class="card-title">جدول مدیریت نقش ها</h3>

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
                <th>id</th>
                <th>نام role</th>
                <th>توضیح</th>

                <th>update</th>


                </tr>
                </thead>
                <tbody>

                @foreach($roles as  $role)
                <tr>

                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->label }}</td>

                <td>
                <a class="btn btn-sm btn-info" href="{{ route("roles.edit",$role->id) }}"><i class="fa fa-edit"></i></a>

                <form class="form-inline d-inline" action="{{ route("roles.destroy",$role->id) }}" method="post">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" value="delete">
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
            {!! $roles->render() !!}
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
