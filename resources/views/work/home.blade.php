@extends('work.base')

@section('title')
Welcome to Homepage Blog
@endsection

@section('content')
<div class="jumbotron bg-success ">
    <div class="container-fluid mt-2">
        <h1 class="display-3 text-center text-warning">Welcome To Best Novels</h1>
    </div>
    <p class="lead text-white">Looking for good novels? This is my list of the best novels of all-time. If you only have
        time to
        read one or two books, I recommend looking at the Top Novels section below.

        Further down the page, you'll find more great novels. Many of these books are fantastic. I try to carefully
        curate all of my reading lists and you can be sure that any novel on this page is worth your time. Enjoy!</p>
    <hr>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4>Types of Novels</h4>
                </div>
                <div class="list-group">
                    <a href="" class="list-group-item list-hroup-action">Mysteries</a>
                    <a href="" class="list-group-item list-hroup-action">Romance</a>
                    <a href="" class="list-group-item list-hroup-action">Thrillers</a>
                    <a href="" class="list-group-item list-hroup-action">Science Fiction</a>
                    <a href="" class="list-group-item list-hroup-action">Fantasy</a>
                    <a href="" class="list-group-item list-hroup-action">Historical Fiction</a>
                </div>
            </div>
        </div>


        <div class="col-lg-9">
            @if(session('msg'))
                {!! session('msg') !!}
            @endif
            @foreach($posts as $p)
                <div class="card-deck">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h5>{{ $p->title }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="{{ asset('images/'.$p->image) }}" alt=""
                                        width="200px" height="200px" class="rounded float-left">
                                    <p class="small">Author :- {{ $p->author }}</p>
                                    <hr>
                                    <a href="{{ route('post.show',['post'=>$p->id]) }}"
                                        class="btn btn-danger">View</a>
                                    <a href="{{ route('post.edit',['post'=>$p->id]) }}"
                                        class="btn btn-danger">Edit</a>
                                    <div class="float-end">
                                        <form
                                            action="{{ route('post.destroy',['post' =>$p->id]) }}"
                                            class="form-inline" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Delte">
                                        </form>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-lg-9">
                                    <h5>{{ $p->title }}</h5>
                                    <p class="lead">{{ $p->body }}</p>
                                    <a href="" class="btn btn-success float-end">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
