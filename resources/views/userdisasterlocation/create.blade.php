@extends('layout.users')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Disaster Location</h1>
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
<div class="card push-top">
  <div class="card-header">
    Add Disaster Location
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
      <form method="post" action="{{ route('disasterlocation.store') }}">
          <div class="form-group">
              @csrf
              <label for="id">Disaster Location ID</label>
              <input type="text" class="form-control" name="id"/>
          </div>
          <div class="form-group">
              <label for="disaster_id">Disaster ID</label>
              <input type="text" class="form-control" name="disaster_id"/>
          </div>
          <div class="form-group">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" name="longitude"/>
          </div>
          <div class="form-group">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" name="latitude"/>
          </div>
          <div class="form-group">
              <label for="location_name">Location Name</label>
              <input type="text" class="form-control" name="location_name"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Disaster Location</button>
      </form>
  </div>
</div>
@endsection