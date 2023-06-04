@extends('layout.adminblank')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">View Disaster</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="card">
  <div class="card-header"></div>
  
  <div class="card-body">
  <div class="card-header"> <b>View Disaster</b> </div>
        <div class="card-body">
          <p class="card-text">Disaster ID : {{ $model->id }}</p>
          <p class="card-text">Disaster Type : {{ $model->type }}</p>
        <p class="card-text">Office : {{ $model->office_id }}</p>
        <p class="card-text">Dispatcher ID : {{ $model->dispatcher_id }}</p>
        <p class="card-text">Status : {{ $model->status }}</p>
        <p class="card-text">Disaster Title : {{ $model->disaster_title }}</p>
        <p class="card-text">Disaster Date: {{ $model->disaster_date }}</p>
        <p class="card-text">Disaster Description : {{ $model->disaster_description }}</p>

  </div>
      
    </hr>
  
  </div>
</div>
      </div>
</div><
@endsection