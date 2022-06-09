@extends('admin.layouts.master')
<style>
  h3.card-title-left {
    text-align: right;
    font-size: 1.1rem;
}
</style>
@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">User List</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User List</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User List</h3>
              <h3 class="card-title-left"><a href="{{Route('user-create')}}">Add User</a></h3>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Address</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td><img src="{{asset('images/').'/'.$user->profile_photo_path}}" width="50px" height="50px"></td>
                      <td>{{$user->address}}</td>
                      <td>{{$user->status}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
@endsection




