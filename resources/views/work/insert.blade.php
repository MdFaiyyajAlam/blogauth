@extends('work.base')

@section('title')
Welcome to Insert Blog
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
<div class="col-lg-6 mx-auto">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5>Insert Psge</h5>
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
                <small class="text-danger">{{$errors->first('title')}}</small>
            </div>

            <div class="mb-3">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control">
                <small class="text-danger">{{$errors->first('author')}}</small>
            </div>

            <div class="mb-3">
                <label for="">Body</label>
                <textarea type="text" name="body" class="form-control"></textarea>
                <small class="text-danger">{{$errors->first('body')}}</small>
            </div>

            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
                <small class="text-danger">{{$errors->first('image')}}</small>
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>
        </div>
    </div>
</div>
        </div>
    </div>
@endsection