@extends('layout')
@section('title')
Admin Panel | Change Password
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
            <h1 class="m-0">Change Password</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="card card-info">
             
              <!-- /.card-header -->
              <!-- form start -->
              @if(session()->has('msg'))
              <div class="card-body">
   <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success</h5>
                 {{session('msg')}}
                </div></div>
                @endif
              <form class="form-horizontal" method="post" action="/changepassword">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="inputEmail3" placeholder="New Password">
               @error('password')
    <small>{{ $message }}</small>
    @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
              <input type="password" class="form-control" name="password_confirmation" id="inputPassword3" placeholder="Confirm Password">
               @error('password_confirmation')
    <small>{{ $message }}</small>
    @enderror
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Change Password</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection














