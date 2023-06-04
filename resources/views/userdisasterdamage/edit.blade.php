@extends('layout.users')
@section('content')

<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Disaster Damage</h1> -->
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
      <form method="post" action="{{ route('disasterdamage.update', $disasterdamage->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label hidden  for="id">Disaster Damage ID</label>
              <input  hidden type="text" class="form-control" name="id" value="{{ $disasterdamage->id }}"/>
          </div>
          <div class="form-group">
              <label for="disaster_id">Disaster ID</label>
              <input type="text" class="form-control" name="disaster_id" value="{{ $disasterdamage->disaster_id }}"/>
          </div>
          <div class="form-group">
              <label for="location_id">Location ID</label>
              <input type="text" class="form-control" name="location_id" value="{{ $disasterdamage->location_id }}"/>
          </div>
          <div class="form-group">
              <label for="office_id">Office ID</label>
              <input type="text" class="form-control" name="office_id" value="{{ $disasterdamage->office_id }}"/>
          </div>
          <div class="form-group">
              <label for="affected">Affected</label>
              <input type="text" class="form-control" name="affected" value="{{ $disasterdamage->affected }}"/>
          </div>
          <div class="form-group">
              <label for="injured">Injured</label>
              <input type="text" class="form-control" name="injured" value="{{ $disasterdamage->injured }}"/>
          </div>
          <div class="form-group">
              <label for="missing">Missing</label>
              <input type="text" class="form-control" name="missing" value="{{ $disasterdamage->missing }}"/>
          </div>
          <div class="form-group">
              <label for="killed">Killed</label>
              <input type="text" class="form-control" name="killed" value="{{ $disasterdamage->killed }}"/>
          </div>
          <div class="form-group">
              <label for="building_destroyed">Building Destroyed</label>
              <input type="text" class="form-control" name="building_destroyed" value="{{ $disasterdamage->building_destroyed }}"/>
          </div>
          <div class="form-group">
              <label for="building_damage">Building Damaged</label>
              <input type="text" class="form-control" name="building_damage" value="{{ $disasterdamage->building_damage }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Disaster Damage</button>
      </form>
  </div>
</div>


