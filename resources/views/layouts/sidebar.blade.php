@include('layouts.head')

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block" id="dashboard">
    <div class="menu-sidebar__content js-scrollbar1 ">
        <nav class="navbar-sidebar pt-2">
            <ul class="list-unstyled navbar__list ">
                <li class="active has-sub">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none"><img class="logo" src="img/logo.png" style="height:50px; width:170px;"></a>
                </li>
                <li class="active has-sub">
                    <a href="{{ url('dashboard') }}" class="text-white text-decoration-none">
                        <i class="fa fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="text-white text-decoration-none">
                    <i class="bi bi-stack"></i>Categories List</a>
                </li>
                <li class="active has-sub">
                    <a href="{{ route('product.index') }}" class="text-white text-decoration-none">
                    <i class="fa-solid fa-bottle-droplet"></i>Products List</a>
                </li>                
                <li>
                    <a href="{{ route('brand.index') }}" class="text-white text-decoration-none"><i class="fa fa-tag fa-rotate-90"></i>Brands List</a>
                </li>
                <li>
                    <a href="{{ route('order.index') }}" class="text-white text-decoration-none">
                    <i class="fa-solid fa-box-open"></i>Orders List</a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="text-white text-decoration-none"><i class="fa fa-sign-out text-white"></i>Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- PAGE CONTAINER-->
<div class="page-container top-0" style="min-height:100vh;">
<!-- NAVBAR  -->
    <nav class="navbar fixed-top d-lg-none" id="color">
        <div class="container-fluid" >
            <a href="{{ url('/') }}"><img class="logo" src="img/logo.png" style="height:40px; width:170px;"></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon text-dark"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header" id="color">
                <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel"><i class="fa fa-user text-white fs-3 me-2"></i>username</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="color">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ url('/dashboard') }}"><i class="fa fa-home me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('category.index') }}"><i class="bi bi-stack me-2"></i>Categories list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('product.index') }}"><i class="fa-solid fa-bottle-droplet me-2"></i>Products list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('brand.index') }}"><i class="fa fa-tag fa-rotate-90 me-2"></i>Brands list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('order.index') }}"><i class="fa-solid fa-box-open me-2"></i>Orders list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out text-white me-2"></i>Log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>    
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
<!-- END OF NAVBAR -->