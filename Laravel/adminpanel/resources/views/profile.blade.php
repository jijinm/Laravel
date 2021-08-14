@extends('layout')
@section('title')
Admin Panel | Profile
@endsection
@section('content')
  <!-- Main Sidebar Container -->
@include('sidebar');
  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="card card-info">
      @if(session()->has('msg'))
              <div class="card-body">
   <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success</h5>
                 {{session('msg')}}
                </div></div>
                @endif
                 
                
     <img class="profile-user-img img-fluid img-circle" src="../../images/{{$userdata->image}}" alt="profile picture">
               
           
        <form enctype="multipart/form-data" method="post" action="/updatedetails">
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" value="{{$userdata->name}}">
                  @error('name')
    <small>{{ $message }}</small>
    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email" value="{{$userdata->email}}">
                    @error('email')
    <small>{{ $message }}</small>
    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
        <input type="number" class="form-control" name="mobile"  id="exampleInputEmail1" placeholder="Enter Mobile" value="{{$userdata->mobile}}">
                    @error('mobile')
    <small>{{ $message }}</small>
    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" name="city" id="exampleInputEmail1" placeholder="Enter City" value="{{$userdata->city}}">
                    @error('city')
    <small>{{ $message }}</small>
    @enderror
                  </div>
                 
                    <div class="form-group">
                      <label>Interests</label>
                        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="interests[]" value="music" @if(in_array('music',$interests)){{'checked'}}@endif>
                          <label class="form-check-label">Music</label>
                        </div>
                        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="interests[]" value="reading" @if(in_array('reading',$interests)){{'checked'}}@endif>
                          <label class="form-check-label">Reading</label>
                        </div>
                        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="interests[]" value="travel" @if(in_array('travel',$interests)){{'checked'}}@endif>
                          <label class="form-check-label">Travel</label>
                        </div>
                        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="interests[]" value="sports" @if(in_array('sports',$interests)){{'checked'}}@endif>
                          <label class="form-check-label">Sports</label>
                        </div>
                       @error('interests')
    <small>{{ $message }}</small>
    @enderror
                    
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
            @error('image')
    <small>{{ $message }}</small>
    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </form>
            
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 













