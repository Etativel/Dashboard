@extends('layout.users')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Update Disaster</h1> -->
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
      <form method="post" action="{{ route('disaster.update', $disaster->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label  hidden for="id">Disaster ID</label>
              <input hidden type="text" class="form-control" name="id" value="{{ $disaster->id }}"/>
          </div>
          <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" value="{{ $disaster->type }}"/>
          </div>
          <div class="form-group">
              <label for="office_id">Office ID</label>
              <input type="text" class="form-control" name="office_id" value="{{ $disaster->office_id }}"/>
          </div>
          <div class="form-group">
              <label for="dispatcher_id">Dispatcher ID</label>
              <input type="text" class="form-control" name="dispatcher_id" value="{{ $disaster->dispatcher_id }}"/>
          </div>
          <div class="form-group">
              <label for="status">Status</label>
              <input type="text" class="form-control" name="status" value="{{ $disaster->status }}"/>
          </div>
          <div class="form-group">
              <label for="disaster_title">Disaster Title</label>
              <input type="text" class="form-control" name="disaster_title" value="{{ $disaster->disaster_title }}"/>
          </div>
          <div class="form-group">
              <label for="disaster_date">Disaster Date</label>
              <input type="date" class="form-control" name="disaster_date" value="{{ $disaster->disaster_date }}"/>
          </div>
          <div class="form-group">
              <label for="disaster_description">Disaster Description</label>
              <input type="text" class="form-control" name="disaster_description" value="{{ $disaster->disaster_description }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Disaster</button>
      </form>
  </div>
</div>




@endsection