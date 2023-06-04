@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dispatcher Table</h1>
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
  <div class="card-header">
  </div>
  <table class="table">
    <thead>
        <tr class="">
          <td>Dispatcher ID</td>
          <td>Office ID</td>
          <td>Dispatcher Name</td>
          <td>Dispatcher DOB</td>

          <td class="text-center">Action</td>
        </tr>
        <br>
        <div>        <a href="{{ url('admin/dispatcher/create') }}" class="btn btn-success btn-sm" title="Add New Dispatcher">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a></div>

        <br>

    </thead>
    <tbody>
        @foreach($dispatcher as $dispatcher)
        <tr>
            <td>{{$dispatcher->id}}</td>
            <td>{{$dispatcher->office_id}}</td>
            <td>{{$dispatcher->dispatcher_name}}</td>
            <td>{{$dispatcher->dispatcher_dob}}</td>
            <td class="text-center">
              
                <a href="{{ route('dispatcher.edit', $dispatcher->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('dispatcher.destroy', $dispatcher->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" href="index.blade.php" type="submit">Delete</button>
                </form>
                <a href="{{ url('admin/dispatcher/'.$dispatcher->id)}}" title="View Dispatcher">
                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection