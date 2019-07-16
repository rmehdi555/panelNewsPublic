@extends('Admin.layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">ویرایش لینک</div>

        <div class="card-body">
            <form method="POST" action="{{ route('panel.admin.user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}


                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">ویرایش اطلاعات کاربر</h3>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">نام</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">ایمیل</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">انتخاب دسترسی</label>

                        <div class="col-md-6">
                            {{--<input id="isadmin" type="text" class="form-control{{ $errors->has('isadmin') ? ' is-invalid' : '' }}" name="isadmin" value="{{ $user->isadmin }}" required autofocus>--}}
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="isadmin" id="exampleRadios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="isadmin" id="exampleRadios2" value="0">
                                <label class="form-check-label" for="exampleRadios2">
                                    user
                                </label>
                            </div>

                            @if ($errors->has('isadmin'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('isadmin') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                        <div class="row" style="margin-top: 10px">

                            <div class="form-group" style="margin-right: 15px;">

                                <button type="submit" class="btn btn-primary">
                                    ثبت
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

