@extends('DisasterStatus.layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="card-header">
    Disaster Status Table
  </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>Disaster Status ID</td>
          <td>Status Name</td>
          <td class="text-center">Action</td>
        </tr>
        <br>
        <div>        <a href="{{ url('admin/disasterstatus/create') }}" class="btn btn-success btn-sm" title="Add New Disaster Status">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a></div>

        <br>

    </thead>
    <tbody>
        @foreach($disasterstatus as $disasterstatus)
        <tr>
            <td>{{$disasterstatus->id}}</td>
            <td>{{$disasterstatus->status_name}}</td>

            <td class="text-center">
              
                <a href="{{ route('disasterstatus.edit', $disasterstatus->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('disasterstatus.destroy', $disasterstatus->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"  href="index.blade.php" type="submit">Delete</button>
                </form>
                <a href="{{ url('admin/disasterstatus/'.$disasterstatus->id)}}" title="View Disaster Status">
                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div>        <a href="{{ url('admin/disasterdamage') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Disaster Damage Page
</a>
</div>
<br>
<div>        <a href="{{ url('admin/disasterlocation') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Disaster Location Page
</a>
</div>
<br>
<div>        <a href="{{ url('admin/disaster') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Disaster Page
</a>
</div>
<br>
<div>        <a href="{{ url('admin/disastertype') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Disaster Type Page
</a>
</div>
<br>
<div>        <a href="{{ url('admin/dispatcher') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Dispatcher Page
</a>
</div>
<br>
<div>        <a href="{{ url('admin/office') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Office Page
</a>
</div>
<br>
<div>        <a href="{{ url('admin/disasterimage') }}" class="btn btn-success btn-sm">

<i class="fa fa-plus" aria-hidden="true"></i> Disaster Image Page
</a>
</div>
<br>
<br>
<br>
@endsection