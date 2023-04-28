@include('layouts.head')

<body>
    @php
        $categories = App\Models\Category::all()->where('type', 1);
    @endphp
    <div id="app">

        <nav class="navbar" style="height:70px;">
            <div class="container-fluid">
                <div>
                    
                    <button  class="btn text-white" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling">
                        <i class="bi bi-hdd-stack-fill d-md-none"></i>
                        <span class="d-none d-md-inline btn big_btn text-white">
                            Categories
                        </span>
                        
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
                                                            <a href="{{ route('filterCategory', $subcategory->name) }}"
                                                                class="subcategory text-dark">
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
                <div><a href="{{ url('/') }}">
                    <img class="logo d-none d-sm-inline" src="{{asset('img/logo.png')}}"
                            style="height:50px; width:170px;" ></i></a></div>
                <div class="justify-content-end" id="navbarColor01">
                    <div class="btn-group">
                        <div class="d-flex flex-row align-items-center pe-4">
                            @guest
                                
                            @if (Route::has('register'))
                            <div class="nav-item me-2">
                                <a class="nav-link text-light"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                            @endif
                                @if (Route::has('login'))
                                    <div class="nav-item badge bg-white text-black">
                                        <a class="nav-link fw-normal fs-6 p-1 " href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </div>
                                @endif
                            @else
                                <a href="{{ route('cart') }}" class="fs-2 text-white mt-3 mx-3"><i class="bi bi-cart-dash"></i></a>
                                <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light mt-3" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre><i class="bi bi-person-circle fs-3 m-2 "></i>
                                        <p class="d-none d-md-inline fw-bold fs-5">{{ Auth::user()->name }}</p>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @if (Auth::user()->hasRole('admin'))
                                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>





    </div>
    </nav>
    <main class="">
        @yield('content')
    </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
