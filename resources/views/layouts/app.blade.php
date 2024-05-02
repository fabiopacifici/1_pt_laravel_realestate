<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle', 'LaraEstate')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased">


    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">REALESTEATE</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}" aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('company')}}">Company</a>
                        </li>

                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                    <a href="{{route('admin.houses.index')}}">Admin</a>
                </div>
            </div>
        </nav>

    </header>


    <main>
        @yield('content')
    </main>



    <footer class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Company</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta architecto ab fugit, vero totam doloribus nam incidunt explicabo natus tempora tenetur esse maxime nihil voluptatibus, voluptatum cum amet minima laboriosam?</p>
                </div>
                <div class="col">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem</a></li>
                        <li><a href="">Lorem</a></li>
                        <li><a href="">Lorem</a></li>
                        <li><a href="">Lorem</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Legal</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem</a></li>
                        <li><a href="">Lorem</a></li>
                        <li><a href="">Lorem</a></li>
                        <li><a href="">Lorem</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>



    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>

</html>
