<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    {{-- Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>@yield('title')</title>
</head>

<body>
    <span class="d-none" data-status="{{ session('status') }}" id="status"></span>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ url('/') }}">Home</span></a>
                    <a class="nav-item nav-link" href="{{ url('about') }}">About</a>
                    <a class="nav-item nav-link" href="{{ url('student') }}">Mahasiswa</a>
                    <a class="nav-item nav-link" href="{{ url('image') }}">Gallery</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('container')

    <footer>
        <div class="container-fluid bg-light border-top pt-3 mt-3">
            <div class="row">
                <div class="col text-center">
                <p class="font-weight-bold">&copy;Copyright {{ date('Y') }}</p>
            </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    {{-- custom js --}}
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
