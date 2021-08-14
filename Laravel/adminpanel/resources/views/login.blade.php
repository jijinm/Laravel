@extends('layout')
@section('title')
Admin Panel | Login
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
            <h1 class="m-0">Login</h1>
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
   <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i>Login Failed</h5>
                 {{session('msg')}}
                </div></div>
                @endif
              <form class="form-horizontal" method="post" action="/logindata">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
               @error('email')
    <small>{{ $message }}</small>
    @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
               @error('password')
    <small>{{ $message }}</small>
    @enderror
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection














