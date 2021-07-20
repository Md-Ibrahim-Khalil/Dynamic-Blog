@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Setting</li>
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
                            <h3 class="card-title">Edit Site Setting</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="{{ route('setting.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Site Name</label>
                                            <input type="name" class="form-control" id="name"
                                                value="{{ $setting->name }}" name="name" placeholder="Enter Title">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="facebook" class="form-control" id="facebook"
                                                        value="{{ $setting->facebook }}" name="facebook"
                                                        placeholder="Facebook Url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="twitter" class="form-control" id="twitter"
                                                        value="{{ $setting->twitter }}" name="twitter"
                                                        placeholder="Twitter Url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="instagram">Instragram</label>
                                                    <input type="instagram" class="form-control" id="instagram"
                                                        value="{{ $setting->instagram }}" name="instagram"
                                                        placeholder="Instagram Url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="reddit">Reddit</label>
                                                    <input type="reddit" class="form-control" id="reddit"
                                                        value="{{ $setting->reddit }}" name="reddit"
                                                        placeholder="Reddit Url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="{{ $setting->email }}" name="email"
                                                        placeholder="Email Url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="copyright">Copyright</label>
                                                    <input type="copyright" class="form-control" id="copyright"
                                                        value="{{ $setting->copyright }}" name="copyright"
                                                        placeholder="Copyright">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Contact Phone Number</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        value="{{ $setting->phone }}" name="phone"
                                                        placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="address">Location</label>
                                                    <input type="address" class="form-control" id="address"
                                                        value="{{ $setting->address }}" name="address"
                                                        placeholder="Enter Your Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="logo">Site Logo</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="site_logo" class="custom-file-input"
                                                            id="site_logo">
                                                        <label class="custom-file-label" for="logo">Choose File</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div
                                                        style="max-width: 100px; max-height:100px; overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset($setting->site_logo) }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Site Description</label>
                                            <textarea name="description" id="description" rows="3" class="form-control"
                                                placeholder="Enter Description">{{ $setting->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                                        </div>
                                    </form>
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
