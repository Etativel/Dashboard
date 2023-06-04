@extends('disaster.layout')
@section('content')
<div class="card">
  <div class="card-header">Disaster Page</div>
  <div class="card-body">
        <div class="card-body">
          <h5 class="card-title">Disaster ID : {{ $disaster->disaster_id }}</h5>
          <h5 class="card-title">Disaster Type : {{ $disaster->type_id }}</h5>
        <p class="card-text">Office : {{ $disaster->office_id }}</p>
        <p class="card-text">Dispatcher ID : {{ $disaster->dispatcher_id }}</p>
        <p class="card-text">Status ID : {{ $disaster->status_id }}</p>
        <p class="card-text">Disaster Title : {{ $disaster->disaster_title }}</p>
        <p class="card-text">Disaster Date: {{ $disaster->disaster_date }}</p>
        <p class="card-text">Disaster Description : {{ $disaster->disaster_description }}</p>

  </div>
      
    </hr>
  
  </div>
</div>