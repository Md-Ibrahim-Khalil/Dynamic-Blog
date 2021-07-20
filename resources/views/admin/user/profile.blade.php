@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Users List</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">User Profile</h3>
                                <a href="{{ route('user.index') }}" class="btn btn-primary">Go Back To Users
                                    List</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        @include('includes.errors')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">User Name</label>
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            placeholder="Enter Name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">User Email</label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="Enter Email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">User Password<small class="text-info">(Enter password if you want to change.)</small></label>
                                                        <input type="password" class="form-control" id="password" name="password"
                                                            placeholder="Enter Password">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    
                                                    <div class="form-group">
                                                        <label for="image">User Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                                            <label for="exampleInputFile" class="custom-file-label">Choose File</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">User Description</label>
                                                        <textarea name="description" class="form-control" placeholder="Write Your Profile Description" id="description"  rows="5">{{ $user->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div style="height: 200px; width: 200px; overflow:hidden;" class="m-auto">
                                                <img src="{{ asset($user->image) }}" alt="" class="img-fluid rounded-circle img-rounded">
                                            </div>
                                            <div class="mt-2">
                                                <h5>{{ $user->name }}</h5>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


