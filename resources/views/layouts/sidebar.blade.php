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
                    <a href="landingpage.php" class="text-white text-decoration-none">
                        <i class="fa fa-home"></i>Home</a>
                </li>
                <li class="active has-sub">
                    <a href="{{ url('dashboard') }}" class="text-white text-decoration-none">
                    <i class="fa-solid fa-chart-simple"></i>Statistics</a>
                </li>
                <li class="active has-sub">
                    <a href="{{ url('products') }}" class="text-white text-decoration-none">
                    <i class="fa-solid fa-bottle-droplet"></i>Products List</a>
                </li>
                <li>
                    <a href="{{ url('brands') }}" class="text-white text-decoration-none"><i class="fa fa-tag fa-rotate-90"></i>Brands List</a>
                </li>
                <li>
                    <a href="{{ url('categories') }}" class="text-white text-decoration-none">
                    <i class="bi bi-stack"></i>Categories List</a>
                </li>
                
                <li>
                    <a href="{{ url('orders') }}" class="text-white text-decoration-none">
                    <i class="fa-solid fa-box-open"></i>Orders List</a>
                </li>

                <li>
                    <a href="../scripts.php/logout.script.php?&action=logOut" class="text-white text-decoration-none"><i class="fa fa-sign-out text-white"></i>Log out</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- PAGE CONTAINER-->
<div class="page-container top-0" style="height:100vh;">
<!-- NAVBAR  -->
    <nav class="navbar fixed-top d-lg-none" id="color">
        <div class="container-fluid" >
            <a href="landingpage.php"><img class="logo" src="img/logo.png" style="height:40px; width:170px;"></a>
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
                        <a class="nav-link active text-light" aria-current="page" href="landingpage.php"><i class="fa fa-home me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#statistics"><i class="fa-solid fa-chart-simple me-2"></i>Statistics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#products-list"><i class="fa-solid fa-bottle-droplet me-2"></i>Products list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#brands-list"><i class="fa fa-tag fa-rotate-90 me-2"></i>Brands list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#categories-list"><i class="bi bi-stack me-2"></i>Categories list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#orders-list"><i class="fa-solid fa-box-open me-2"></i>Orders list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="../scripts.php/logout.script.php?&action=logOut"><i class="fa fa-sign-out text-white me-2"></i>Log out</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
<!-- END OF NAVBAR -->