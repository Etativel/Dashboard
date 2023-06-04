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

    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
      <div class="card-header"> <b>View Office</b> </div>
            <div class="card-body">
              <p class="card-text">Office ID : {{ $model->id }}</p>
              <p class="card-text">Office Name : {{ $model->office_name }}</p>

      </div>
      </div>
</div>