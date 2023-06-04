@extends('layout.users')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Image Table</h1>
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
  <table class="table">
    <thead>
        <tr>
          <td>Disaster Image ID</td>
          <td>Disaster ID</td>
          <td>Image</td>
          <td>Image Name</td>
          <td>Image Description</td>
          <td class="text-center">Action</td>
        </tr>
        <br>
        <div>        <a href="{{ url('user/disasterimage/create') }}" class="btn btn-success btn-sm" title="Add New Disaster Image">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a></div>

        <br>

    </thead>
    <tbody>
        @foreach($disasterimage as $disasterimage)
        <tr>
            <td>{{$disasterimage->id}}</td>
            <td>{{$disasterimage->disaster_id}}</td>
            <td>
              <img src="{{ asset('imagedisaster/'.$disasterimage->image_name) }}" alt="" style = "width: 100px;  ">
            </td>
            <td>{{$disasterimage->image_name}}</td>
            <td>{{$disasterimage->image_description}}</td>

            <td class="text-center">
              
                <a href="{{ route('disasterimage.edit', $disasterimage->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('disasterimage.destroy', $disasterimage->id)}}"  method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm delete" data-id =" {{$disasterimage -> id}}" href="index.blade.php" type="submit">Delete</button>
                </form>
                <a href="{{ url('user/disasterimage/'.$disasterimage->id)}}" title="View Disaster Image">
                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>


    


<!-- <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!- <script>
  $(".delete").click(function(){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
  });
        
</script>  -->


@endsection