@extends('work.base')

@section('title')
    Welcome to view Blog
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>{{$posts->title}}</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('images/'.$posts->image)}}" alt="" width="1000px" height="500px" class="rounded ms-center">
                    <h6 class="smaill">Author :- {{$posts->author}}</h6>
                    <h6 class="lead"> {{$posts->body}}</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection