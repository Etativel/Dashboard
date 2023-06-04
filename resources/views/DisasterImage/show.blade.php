@extends('layout.adminblank')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Disaster Image</h1> -->
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
      <div class="card-header"> <b>View Image</b> </div>
            <div class="card-body">
              <p class="card-text">Disaster Image ID : {{ $model->id }}</p>
              <p class="card-text">Disaster ID : {{ $model->disaster_id }}</p>
            <p class="card-text">Image : {{ $model->image }}</p>
            <p class="card-text">Image Name ID : {{ $model->image_name }}</p>
            <p class="card-text">Image Description : {{ $model->image_description }}</p>

      </div>
          
        </hr>
      
      </div>
    </div>