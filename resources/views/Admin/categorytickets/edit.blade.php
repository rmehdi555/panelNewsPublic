@extends('Admin.layouts.app')

@section('script')
  <script>
    $(document).ready(function(){
      $('#categoryticket_id').selectpicher();
    })
  </script>
@endsection
@section('content')

  <div class="card">
    <div class="card-header">categoryticket  </div>

    <div class="card-body">
      <form method="POST" action="{{ route('categorytickets.update',['id'=>$categoryticket->id])}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('put') }}

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">ویرایش categoryticket</h3>
          </div>

          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">عنوان </label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ $categoryticket->name  }}" required autofocus>


            </div>
          </div>








          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">توضیحات </label>

            <div class="col-md-6">
              <input id="label" type="text" class="form-control" name="label" value="{{ $categoryticket->label  }}" required autofocus>


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

