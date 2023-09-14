
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Restaurantly </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="/public/images/logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Restaurantly - v3.1.0
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center justify-content-lg-between">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <a href="main"><img class="logo" src="/images/test1.png"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list mobile-nav-toggle" style="margin-left:150px"></i>
            </button>

            <!-- Navigation Links (Desktop) -->
            <nav id="navbar" class="navbar order-last order-lg-0 d-none d-lg-block">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link scrollto active" href="/main">Home</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/contact">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="restaurantDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Restaurant
                        </a>
                <ul class="nav">
                    @foreach($categories as $category)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="{{ $category->name }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $category->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="{{ $category->name }}">
                                @foreach($category->restaurants as $restaurant)
                                 <li><a class="dropdown-item" href="{{url('resdetail',$restaurant->id)}}">{{ $restaurant->name }} </a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
                {{-- <li class="nav-item"><a class="nav-link scrollto" href="/about"><i class="fas fa-search"></i>
                </a></li> --}}
                <li>
                    <div class="row">
                        <div class="col-md-6">
                         <input type="text" name="full_text_search" id="full_text_search" class="form-search form-control" placeholder="Search" value="">
                        </div>
                        <div class="col-md-2">
                         @csrf
                         <a href="{{  '/full-text-search'}}">
                         <button type="button" name="search" id="search" class="btn-search animated fadeInUp scrollto">Search</button></a>
                        </div>
                       </div>
                </li>

            </nav>

            <!-- User Dropdown (Desktop) -->
            <div class="dropdown d-none d-lg-block">
                <a href="#" class="dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user white-icon"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    @guest
                    <li>
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li>
                        <a href={{url('/user/index')}}><span class="dropdown-item">
                            {{ Auth::user()->name }}
                        </span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                        >
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>

        </div>
       
    </header>

    @yield('contentnav')


</body>

</html>
