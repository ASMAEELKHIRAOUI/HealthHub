@include('layouts.sidebar')

<body id="dashboard-body">
    <div class="page-wrapper">
                    <!-- Statistics-->
                    <div class="main-content pt-5" id="dashboard-content">
                <div class="section__content section__content ">
                    <div class="container-fluid" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 mt-2" id="statistics">Statistics</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4" >
                                <div class="overview-item overview-item--c1 " id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex justify-content-between ms-3">
                                            <div class="icon mb-4 d-flex">
                                                <i class="fa-solid fa-bottle-droplet"></i>
                                                <div class="ms-3 text">
                                                    <h2>Products</h2>
                                                    <span>In stock</span>
                                                </div>
                                            </div>
                                            <div class="text mt-2 ms-3">
                                                <h2>{{ $productsInStock }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex justify-content-between ms-3">
                                            <div class="icon mb-4 d-flex">
                                                <i class="bi bi-slash-circle fs-1"></i>
                                                <div class="ms-3 text">
                                                    <h2>Products</h2>
                                                    <span>Out of stock</span>
                                                </div>
                                            </div>
                                            <div class="text mt-2 ms-3">
                                                <h2>{{ $productsOutOfStock }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1 pb-2" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex justify-content-between ms-3">
                                            <div class="icon mb-4 d-flex">
                                                <i class="fa fa-tag fa-rotate-90 me-2"></i>
                                                <div class="m-2 text">
                                                    <h2>Brands</h2>
                                                </div>
                                            </div>
                                            <div class="text mt-2 ms-3">
                                                <h2>{{ $brands }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1 pb-2" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex justify-content-between ms-3">
                                            <div class="icon mb-4 d-flex">
                                                <i class="fa fa-user text-white"></i>
                                                <div class="m-2 text">
                                                    <h2>Users</h2>
                                                </div>
                                            </div>
                                            <div class="text mt-2 ms-3">
                                                <h2>{{ $users }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1 pb-2" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex justify-content-between ms-3">
                                            <div class="icon mb-4 d-flex">
                                                <i class="fa-solid fa-box-open"></i>
                                                <div class="m-2 text">
                                                    <h2>Orders</h2>
                                                </div>
                                            </div>
                                            <div class="text mt-2 ms-3">
                                                <h2>{{ $orders }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex justify-content-between ms-3">
                                            <div class="icon mb-4 d-flex">
                                                <i class="fa-solid fa-box-open"></i>
                                                <div class="ms-3 text">
                                                    <h2>Orders</h2>
                                                    <span>Today</span>
                                                </div>
                                            </div>
                                            <div class="text mt-2 ms-3">
                                                <h2>{{ $ordersToday }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <!-- Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>