@include('layouts.head')
<body>
    <div id="app">

        <nav class="navbar" style="height:70px;">
            <div class="container-fluid">
                
                <div>
                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-list fs-3"></i></button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        category #1
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="subcategories">
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        category #2
                                    </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="subcategories">
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                        </ul></div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        category #3
                                    </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="subcategories">
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="subcategory text-dark">
                                                    subcategory
                                                </a>
                                            </li>
                                        </ul></div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>




                <div><a href="{{ url('/') }}"><img class="logo" src="img/logo.png" style="height:50px; width:170px;"></a></div>
                <div class="justify-content-end" id="navbarColor01">
                    <div class="btn-group">
                        <div class="d-flex">
                            @guest
                                @if (Route::has('login'))
                                    <div class="nav-item">
                                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </div>
                                @endif

                                @if (Route::has('register'))
                                    <div class="nav-item ms-2">
                                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </div>
                                @endif
                            @else
                                <a href="{{ route('cart') }}" class="fs-2 text-white"><i class="bi bi-cart-dash"></i></a>
                                <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light m-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                        {{-- <img src="pp.png" class="pp rounded-circle btn dropdown-toggle text-light mt-1 ms-2" style="height:45px; width:75px;" type="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                        <?php
                        // if(isset($_SESSION["UserName"]))
                        // echo $_SESSION["UserName"];
                        ?>
                        {{-- </button> --}}
                        {{-- <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Settings</button></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST">
                                    <button class="dropdown-item" type="submit" name="logout">Logout</button>
                                </form>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </nav>
        <searchbar class="row mb-2">
            <div class="col-lg-4 col-sm-1 col-md-2"></div>
            <form class="d-flex col-lg-4 col-sm-10 col-md-8 pt-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </searchbar>














        
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
