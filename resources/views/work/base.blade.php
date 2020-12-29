<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog @yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container">
        <a href="" class="navbar-brand text-white"><b><i>Blog</i></b></a>

        <form action="" method="GET" class="d-flex ms-auto">
            <input type="text" name="search" placeholder="search here" class="form-control " size="70">
            <input type="submit" class="btn btn-danger" value="Search">
        </form>

        <ul class="navbar-nav ms-auto">

            <li class="nav-link"><a href="{{route('post.index')}}" class="btn btn-light btn-sm">Home</a></li>

            @auth
            <li class="nav-link"><a href="{{route('post.create')}}" class="btn btn-light btn-sm">Insert</a></li>
            <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                @csrf
                <input type="submit" value="Logout" class="btn btn-light btn-sm mt-2">
            </form>
            </li>
            @endauth

            @guest
                
            <li class="nav-link"><a href="{{route('login')}}" class="btn btn-light btn-sm">Login</a></li>
            <li class="nav-link"><a href="{{route('register')}}" class="btn btn-light btn-sm">Create an Account</a></li>
            @endguest
        </ul>
    </div>
    </nav>

</body>
@yield('content')

</html>
