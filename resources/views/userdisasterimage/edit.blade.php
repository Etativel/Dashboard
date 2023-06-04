@extends('layout.users')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <div class="card push-top">
      <div class="card-header">
        Edit & Update
      </div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div><br />
        @endif
          <form method="post" action="{{ route('disasterimage.update', $disasterimage->id) }}">
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label  hidden for="id">Image ID</label>
                  <input  hidden type="text" class="form-control" name="id" value="{{ $disasterimage->id }}"/>
              </div>
              <div class="form-group">
                  <label for="disaster_id">Disaster ID</label>
                  <input type="text" class="form-control" name="disaster_id" value="{{ $disasterimage->disaster_id }}"/>
              </div>
              <div class="form-group">
                  <label for="image">Image</label>
                  <input type="text" class="form-control" name="image" value="{{ $disasterimage->image }}"/>
              </div>
              <div class="form-group">
                  <label for="image_name">Image Name</label>
                  <input type="text" class="form-control" name="image_name" value="{{ $disasterimage->image_name }}"/>
              </div>
              <div class="form-group">
                  <label for="image_description">Image Description=</label>
                  <input type="text" class="form-control" name="image_description" value="{{ $disasterimage->image_description }}"/>
              </div>
              <button type="submit" class="btn btn-block btn-danger">Update Disaster Image</button>
          </form>
      </div>
    </div>
</div>
@endsection