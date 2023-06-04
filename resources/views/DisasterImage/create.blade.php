@extends('layout.adminblank')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Disaster Image</h1>
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
        Add Disaster Image
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
          <form enctype = 'multipart/form-data' method="post" action="{{ route('disasterimage.store') }}">
              <div class="form-group">
                  @csrf
                  <label for="id">Disaster Image ID</label>
                  <input type="text" class="form-control" name="id"/>
              </div>
              <div class="form-group">
                  <label for="disaster_id">Disaster ID</label>
                  <input type="text" class="form-control" name="disaster_id"/>
              </div>
              <div class="mb-3">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" name="image"/>
              </div>
              <div >
                  <label for="image_name" class='form-label'>Image Name</label>
                  <input type="text" class="form-control" name="image_name"/>
              </div>
              <div class="form-group">
                  <label for="image_description">Image Description</label>
                  <input type="text" class="form-control" name="image_description"/>
              </div>
              <button type="submit" class="btn btn-block btn-danger">Create Disaster Image</button>
          </form>
</div>

</div>
@endsection