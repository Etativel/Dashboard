@extends('layout.adminblank')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Office Table</h1>
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
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="card-header">
  </div>
  <table class="table">
    <thead>
        <tr class="">
          <td>Office ID</td>
          <td>Office Name</td>
          <td class="text-center">Action</td>
        </tr>
        <br>
        <div>        <a href="{{ url('admin/office/create') }}" class="btn btn-success btn-sm" title="Add New Office">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a></div>

        <br>

    </thead>
    <tbody>
        @foreach($office as $office)
        <tr>
            <td>{{$office->id}}</td>
            <td>{{$office->office_name}}</td>

            <td class="text-center">
              
                <a href="{{ route('office.edit', $office->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('office.destroy', $office->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
                <a href="{{ url('admin/office/'.$office->id)}}" title="View Office">
                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection