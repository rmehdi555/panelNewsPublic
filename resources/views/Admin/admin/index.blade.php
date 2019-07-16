@extends('Admin.layouts.app')
@section('content')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User-details</h1>
        {{--<div class="btn-toolbar mb-2 mb-md-0">--}}
            {{--<div class="btn-group mr-2">--}}
                {{--<a href="#" class="btn btn-sm btn-outline-success">Add User</a>--}}
            {{--</div>--}}

        {{--</div>--}}
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>isadmin</th>
                <th>Email</th>
                <th>update</th>


            </tr>
            </thead>
            <tbody>
            {{--@foreach($users as $user)--}}
            @foreach($users as  $duser)
                <tr>

                    <td>{{ $duser->id }}</td>
                    <td>{{ $duser->name }}</td>
                    <td>{{ $duser->isadmin }}</td>
                    <td>{{ $duser->email }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route("panel.admin.user.edit",$duser->id) }}"><i class="fa fa-edit"></i></a>

                        <form class="form-inline d-inline" action="{{ route("panel.admin.user.destroy",$duser->id) }}" method="post">
                            @csrf
                            {{ method_field('delete') }}
                            {{--<input value="delete">--}}
                            <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>


@endsection

