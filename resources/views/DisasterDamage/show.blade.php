@extends('layout.adminblank')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">View Damage</h1> -->
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
        <div class="card-header"> <b>View Damage</b> </div>
              <div class="card-body">
              <p class="card-text">Disaster Damage ID : {{ $model->id }}</p>
              <p class="card-text">Disaster ID : {{ $model->disaster_id }}</p>
              <p class="card-text">Location ID : {{ $model->location_id }}</p>
              <p class="card-text">Affected : {{ $model->affected }}</p>
              <p class="card-text">Injured : {{ $model->injured }}</p>
              <p class="card-text">Missing : {{ $model->missing }}</p>
              <p class="card-text">Killed : {{ $model->killed }}</p>
              <p class="card-text">Builidng Destroyed: {{ $model->building_destroyed }}</p>
              <p class="card-text">Building Damaged : {{ $model->building_damage }}</p>

        </div>
            
          </hr>
        
        </div>
      </div>
</div>