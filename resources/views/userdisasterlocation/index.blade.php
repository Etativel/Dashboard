@extends('layout.users')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Location Table</h1>
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
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
      <table class="table">
        <thead>
            <tr class="">
              <td>Disaster Location ID</td>
              <td>Disaster ID</td>
              <td>Longitude</td>
              <td>Latitude</td>
              <td>Location Name</td>
              <td class="text-center">Action</td>
            </tr>
            <br>
            <div>        <a href="{{ url('user/disasterlocation/create') }}" class="btn btn-success btn-sm" title="Add New Disaster Location">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a></div>

            <br>

        </thead>
        <tbody>
            @foreach($disasterlocation as $disasterlocation)
            <tr>
                <td>{{$disasterlocation->id}}</td>
                <td>{{$disasterlocation->disaster_id}}</td>
                <td>{{$disasterlocation->longitude}}</td>
                <td>{{$disasterlocation->latitude}}</td>
                <td>{{$disasterlocation->location_name}}</td>
                <td class="text-center">
                  
                    <a href="{{ route('disasterlocation.edit', $disasterlocation->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('disasterlocation.destroy', $disasterlocation->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" href="index.blade.php" type="submit">Delete</button>
                    </form>
                    <a href="{{ url('user/disasterlocation/'.$disasterlocation->id)}}" title="View Disaster">
                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection