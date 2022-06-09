@extends('admin.layouts.master')
<style>
    .dark-mode .card-primary:not(.card-outline)>.card-header {
        background-color: #343a41 !important;
    }
    .error {
        color: red;
    }
</style>
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">User Form</h3>
                </div>
                <form method="POST" action="{{Route('user-store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Name">
                            @if($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Email">
                            @if($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}"  placeholder="Enter Phone Number">
                            @if($errors->has('phone'))
                                <div class="error">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea name="address" rows="4" cols="152" style="background-color: #343a41;" placeholder="Enter Address">{{old('address')}}</textarea>
                            @if($errors->has('address'))
                                <div class="error">{{ $errors->first('address') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            @if($errors->has('image'))
                                <div class="error image">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value=""> Please Select Status</option>
                                <option value="pending">Pending</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            @if($errors->has('status'))
                                <div class="error image">{{ $errors->first('status') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
