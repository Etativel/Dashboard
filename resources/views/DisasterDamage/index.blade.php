@extends('layout.adminblank')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Damage Table</h1>
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

    <div class="card-body">
  <table class="table">
    <thead>
        <tr >
          <td>ID</td>
          <td>Disaster ID</td>
          <td>Location ID</td>
          <td>Office ID</td>
          <td>Affected</td>
          <td>Injured</td>
          <td>Missing</td>
          <td>Killed</td>
          <td>Building Destroyed</td>
          <td>Building Damaged</td>
          <td class="text-center">Action</td>
        </tr>
        <br>
        <div>        <a href="{{ url('admin/disasterdamage/create') }}" class="btn btn-success btn-sm" title="Add New Disaster">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a></div>

        <br>

    </thead>
    <tbody>
        @foreach($disasterdamage as $disasterdamage)
        <tr>
            <td>{{$disasterdamage->id}}</td>
            <td>{{$disasterdamage->disaster_id}}</td>
            <td>{{$disasterdamage->location_id}}</td>
            <td>{{$disasterdamage->office_id}}</td>
            <td>{{$disasterdamage->affected}}</td>
            <td>{{$disasterdamage->injured}}</td>
            <td>{{$disasterdamage->missing}}</td>
            <td>{{$disasterdamage->killed}}</td>
            <td>{{$disasterdamage->building_destroyed}}</td>
            <td>{{$disasterdamage->building_damage}}</td>
            <td class="text-center">
              
                <a href="{{ route('disasterdamage.edit', $disasterdamage->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('disasterdamage.destroy', $disasterdamage->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
                <div>
                <a href="{{ url('admin/disasterdamage/'.$disasterdamage->id)}}" title="View Disaster Damage">
                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                </a>
                </div>
                

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

</div>

@endsection