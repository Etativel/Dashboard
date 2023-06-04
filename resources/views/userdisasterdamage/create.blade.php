@extends('layout.users')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Damage</h1>
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
      <div class="card push-top">

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
      <form method="post" action="{{ route('disasterdamage.store') }}">
          <div class="form-group">
              @csrf
              <label for="id">Disaster Damage ID</label>
              <input type="text" class="form-control" name="id"/>
          </div>
          <div class="form-group">
              <label for="disaster_id">Disaster ID</label>
              <input type="text" class="form-control" name="disaster_id"/>
          </div>
          <div class="form-group">
              <label for="location_id">Location ID</label>
              <input type="text" class="form-control" name="location_id"/>
          </div>
          <div class="form-group">
              <label for="office_id">Office ID</label>
              <input type="text" class="form-control" name="office_id"/>
          </div>
          <div class="form-group">
              <label for="affected">Affected</label>
              <input type="text" class="form-control" name="affected"/>
          </div>
          <div class="form-group">
              <label for="injured">Injured</label>
              <input type="text" class="form-control" name="injured"/>
          </div>
          <div class="form-group">
              <label for="missing">Missing</label>
              <input type="text" class="form-control" name="missing"/>
          </div>
          <div class="form-group">
              <label for="killed">Killed</label>
              <input type="text" class="form-control" name="killed"/>
          </div>
          <div class="form-group">
              <label for="building_destroyed">Building Destroyed</label>
              <input type="text" class="form-control" name="building_destroyed"/>
          </div>
          <div class="form-group">
              <label for="building_damage">Building Damaged</label>
              <input type="text" class="form-control" name="building_damage"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Disaster Damage</button>
      </form>
  </div>
</div>

      </div>
</div>





@endsection