<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark  "style="opacity:0.9;">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/')}}"><h3>ITI Blog</h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/iti')}}"><h3>All Posts </h3> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/users')}}"><h3>All Users </h3> </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="bg-warning">

            @yield('maincontent')
        </div>

        <div >
            @yield('body')
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
