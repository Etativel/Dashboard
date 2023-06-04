@extends('layout.adminblank')
@section('content')
<div class="card">
  <div class="card-header">Disaster Type Page</div>
  <div class="card-body">
        <div class="card-body">
          <h5 class="card-title">Disaster Status ID : {{ $model->id }}</h5>
          <h5 class="card-title">Type Name: {{ $model->type_name }}</h5>


  </div>
      
    </hr>
  
  </div>
</div>