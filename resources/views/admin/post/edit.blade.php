@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('post.index') }}">Post List</a></li>
                        <li class="breadcrumb-item active">Edit Post</li>
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
                                <h3 class="card-title">Edit Post {{ $post->name }}</h3>
                                <a href="{{ route('post.index') }}" class="btn btn-primary">Go Back To Post
                                    List</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <div class="card-body">
                                        <form action="{{ route('post.update', [$post->id]) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            @include('includes.errors')
                                            <div class="form-group">
                                                <label for="name">Post Title</label>
                                                <input type="name" class="form-control" id="title"
                                                    value="{{ $post->title }}" name="title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Post Category</label>
                                                <select name="category" id="category" class="form-control">
                                                    <option value="" style="display: none" selected>Select Category</option>
                                                    @foreach ($categories as $c)
                                                        <option value="{{ $c->id }}" @if ($post->category_id == $c->id) selected @endif>{{ $c->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <label for="image">Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="image" class="custom-file-input"
                                                                id="image">
                                                            <label class="custom-file-label" for="image">Choose File</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <div
                                                            style="max-width: 100px; max-height:100px; overflow:hidden; margin-left: auto">
                                                            <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <textarea name="description" id="description" rows="4" class="form-control"
                                                    placeholder="Enter Description">{{ $post->description }}</textarea>
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
