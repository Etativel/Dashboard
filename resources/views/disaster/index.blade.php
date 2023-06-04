@extends('layout.adminblank')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Disaster Table</h1>
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
    <table class="table">
      <thead>
          <tr>
            <td>Disaster ID</td>
            <td>Type</td>
            <td>Office ID</td>
            <td>Dispatcher ID</td>
            <td>Status</td>
            <td>Title</td>
            <td>Date</td>
            <td>Description</td>
            <td class="text-center">Action</td>
          </tr>
          <br>
          <div>
            <a href="{{ url('admin/disaster/create') }}" class="btn btn-success btn-sm" title="Add New Disaster">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
          </div>

          <br>

      </thead>
      <tbody>
          @foreach($disaster as $disasters)
          <tr>
              <td>{{$disasters->id}}</td>
              <td>{{$disasters->type}}</td>
              <td>{{$disasters->office_id}}</td>
              <td>{{$disasters->dispatcher_id}}</td>
              <td>{{$disasters->status}}</td>
              <td>{{$disasters->disaster_title}}</td>
              <td>{{$disasters->disaster_date}}</td>
              <td>{{$disasters->disaster_description}}</td>
              <td class="text-center">
                
                  <a href="{{ route('disaster.edit', $disasters->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('disaster.destroy', $disasters->id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
                  <a href="{{ url('admin/disaster/'.$disasters->id)}}" title="View Disaster">
                  <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                  </a>
              </td>
          </tr>
          @endforeach
          
      </tbody>
    </table>
  </div>
  
</div>
</div>


@endsection