@extends('DisasterStatus.layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add Disaster Status
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
      <form method="post" action="{{ route('disasterstatus.store') }}">
          <div class="form-group">
              @csrf
              <label for="id">Disaster Status ID</label>
              <input type="text" class="form-control" name="id"/>
          </div>
          <div class="form-group">
              <label for="status_name">Status Name</label>
              <input type="text" class="form-control" name="status_name"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Create Disaster Status</button>
      </form>
  </div>
</div>
@endsection