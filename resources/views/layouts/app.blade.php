@include('layouts.head')

<body>
    @php
        $categories = App\Models\Category::all()->where('type', 1);
    @endphp
    <div id="app">

        <nav class="navbar" style="height:70px;">
            <div class="container-fluid">
                <div>
                    <button class="btn text-white fw-light px-5" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling">Categories</i>
                    </button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Categories</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @php
                                    $categories = App\Models\Category::all()->where('type', 1);
                                @endphp
                                @foreach ($categories as $category)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $category->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $category->id }}"
                                                aria-expanded="false" aria-controls="flush-collapse{{ $category->id }}">
                                                {{ $category->name }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $category->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-heading{{ $category->id }}"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul class="subcategories">
                                                    @php
                                                        $subcategories = App\Models\Category::all()
                                                            ->where('type', 2)
                                                            ->where('category_id', $category->id);
                                                    @endphp
                                                    @foreach ($subcategories as $subcategory)
                                                        <li>
                                                            <a href="{{ route('filterCategory',$subcategory->name) }}" class="subcategory text-dark">
                                                                {{ $subcategory->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>




                    </div>
                </div>
                <div><a href="{{ url('/') }}"><img class="logo" src="img/logo.png"
                    style="height:50px; width:170px;"></a></div>
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
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light m-3" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            @if (Auth::user()->hasRole('admin'))
                                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                            @endif
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





    </div>
    </nav>
    {{-- <searchbar class="row mb-2">
        <div class="col-lg-4 col-sm-1 col-md-2"></div>
        <form action="{{ route('product.search') }}" method="get" class="d-flex col-lg-4 col-sm-10 col-md-8 pt-5" role="search">
            @csrf
            <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        </form>
    </searchbar> --}}















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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
