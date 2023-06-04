@extends('layout.adminblank')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dispatcher</h1>
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
    Add Dispatcher
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
      <form method="post" action="{{ route('dispatcher.store') }}">
          <div class="form-group">
              @csrf
              <label for="id">Dispatcher ID</label>
              <input type="text" class="form-control" name="id"/>
          </div>
          <div class="form-group">
              <label for="office_id">Office ID</label>
              <input type="text" class="form-control" name="office_id"/>
          </div>
          <div class="form-group">
              <label for="dispatcher_name">Dispatcher Name</label>
              <input type="text" class="form-control" name="dispatcher_name"/>
          </div>
          <div class="form-group">
              <label for="dispatcher_dob">Dispatcher DOB</label>
              <input type="date" class="form-control" name="dispatcher_dob"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Dispatcher</button>
      </form>
  </div>
</div>
@endsection