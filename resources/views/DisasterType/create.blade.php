@extends('layout.adminblank')

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
    Add Disaster Type
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
      <form method="post" action="{{ route('disastertype.store') }}">
          <div class="form-group">
              @csrf
              <label for="id">Disaster Type ID</label>
              <input type="text" class="form-control" name="id"/>
          </div>
          <div class="form-group">
              <label for="type_name">Type Name</label>
              <input type="text" class="form-control" name="type_name"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Create Disaster Type</button>
      </form>
  </div>
</div>
@endsection