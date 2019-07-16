@extends('Admin.layouts.app')

@section('script')
  <script>
    $(document).ready(function(){
      $('#levelticket_id').selectpicher();
    })
  </script>
@endsection
@section('content')

  <div class="card">
    <div class="card-header">levelticket  </div>

    <div class="card-body">
      <form method="POST" action="{{ route('leveltickets.update',['id'=>$levelticket->id])}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('put') }}

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">ویرایش levelticket</h3>
          </div>

          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">عنوان </label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ $levelticket->name  }}" required autofocus>


            </div>
          </div>








          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">توضیحات </label>

            <div class="col-md-6">
              <input id="label" type="text" class="form-control" name="label" value="{{ $levelticket->label  }}" required autofocus>


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
  </div>

@endsection

