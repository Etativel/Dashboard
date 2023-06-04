@extends('layout.adminblank')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Office</h1> -->
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
      <form method="post" action="{{ route('office.update', $office->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label  hidden for="id">Office ID</label>
              <input  hidden type="text" class="form-control" name="id" value="{{ $office->id }}"/>
          </div>
          <div class="form-group">
              <label for="type_id">Office Name</label>
              <input type="text" class="form-control" name="office_name" value="{{ $office->office_name }}"/>
              <br>
          <button type="submit" class="btn btn-block btn-danger">Update Office</button>
      </form>
  </div>
</div>
@endsection