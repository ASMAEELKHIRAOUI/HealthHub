@include('layouts.head')

<body>
<!-- add match form -->
<div class="modal fade" id="productModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts.php/crudadmin.script.php" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add product</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>



                    <div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="Name"  class="form-control"  required/>
							</div>
							
                            <div class="mb-3">
								<label class="form-label">Description</label>
                                <textarea class="form-control" id="floatingTextarea" name="description"></textarea>
							</div>

                            <div class="mb-3">
								<label class="form-label">Brand</label>
								<select class="form-select" name="brand" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                        <option value="">sdfghjk</option>
                                </select>
							</div>

                            <div class="mb-3">
								<label class="form-label">Category</label>
								<select class="form-select" name="category" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="">dfghjk</option>
                                </select>
                                
							</div>

                            <div class="mb-3">
								<label class="form-label">Promotion</label>
								<input type="number" name="promotion" class="form-control" required/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Stock</label>
								<input type="number" name="stock" class="form-control" required/>
							</div>

                            <div class="mb-3">
                                <label class="form-label">Price</label>
								<input type="number" name="price" class="form-control" required/>
							</div>
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
						
					</div>







					
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveMatch" class="color text-light border-white p-2 rounded" id="save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- add team form -->
<div class="modal fade" id="categoryModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts.php/crudadmin.script.php" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add category</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id">

                            <div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="name" class="form-control" required/>
							</div>

                            <div>
                                <label class="form-label">Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Category
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Subcategory
                                    </label>
                                </div>
                            </div>
                            

						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveMatch" class="color text-light border-white p-2 rounded" id="save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- add team form -->
<div class="modal fade" id="brandModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts.php/crudadmin.script.php" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add brand</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id">

                            <div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="name" class="form-control" required/>
							</div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
                            

						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveMatch" class="color text-light border-white p-2 rounded" id="save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- add reservation form -->
<div class="modal fade" id="orderModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add order</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Product</label>
								<select class="form-select" aria-label="Default select example" name="product">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
							</div>

                            <div class="mb-3">
								<label class="form-label">Address</label>
                                <textarea class="form-control" id="floatingTextarea" name="address"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveMatch" class="color text-light border-white p-2 rounded" id="save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    
    <div class="page-wrapper">
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
                            <a href="#statistics" class="text-white text-decoration-none">
                            <i class="fa-solid fa-chart-simple"></i>Statistics</a>
                        </li>
                        <li class="active has-sub">
                            <a href="#products-list" class="text-white text-decoration-none">
                            <i class="fa-solid fa-bottle-droplet"></i>Products List</a>
                        </li>
                        <li>
                            <a href="#brands-list" class="text-white text-decoration-none"><i class="fa fa-tag fa-rotate-90"></i>Brands List</a>
                        </li>
                        <li>
                            <a href="#categories-list" class="text-white text-decoration-none">
                            <i class="bi bi-stack"></i>Categories List</a>
                        </li>
                        
                        <li>
                            <a href="#orders-list" class="text-white text-decoration-none">
                            <i class="fa-solid fa-box-open"></i>Orders List</a>
                        </li>

                        <li>
                            <a href="../scripts.php/logout.script.php?&action=logOut" class="text-white text-decoration-none">
                                <i class="fa fa-sign-out text-white"></i>Log out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container top-0">
        <!-- NAVBAR  -->
        <nav class="navbar fixed-top d-lg-none" id="color">
  <div class="container-fluid" >
    <a href="landingpage.php"><img class="logo" src="logo.png" style="height:40px; width:170px;"></a>
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
      </div>
    </div>
  </div>
</nav>
        <!-- END OF NAVBAR -->



                    <!-- Statistiques-->
                    <div class="main-content pt-5">
                <div class="section__content section__content ">
                    <div class="container-fluid" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 mt-2" id="statistics">Statistics</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue rounded" id="color">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4" >
                                <div class="overview-item overview-item--c1 " id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex">
                                            <div class="icon mb-4">
                                                <i class="fa-solid fa-bottle-droplet"></i>
                                            </div>
                                            <div class="text d-flex row mt-2">
                                                <div class="col-10">
                                                    <h2>Products</h2>
                                                    <span>In stock</span>
                                                </div>
                                                <h2 class="col-2">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex">
                                            <div class="icon mb-4">
                                            <i class="bi bi-slash-circle fs-1"></i>
                                            </div>
                                            <div class="text d-flex row mt-2">
                                                <div class="col-10">
                                                    <h2>Products</h2>
                                                    <span>Out of stock</span>
                                                </div>
                                                <h2 class="col-2">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex">
                                            <div class="icon mb-4">
                                                <i class="fa fa-tag fa-rotate-90 me-2"></i>
                                            </div>
                                            <div class="text d-flex row mt-2">
                                                <h2 class="col-10">Brands</h2>
                                                <h2 class="col-2">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex">
                                            <div class="icon mb-4">
                                            <i class="fa fa-user text-white"></i>
                                            </div>
                                            <div class="text d-flex row mt-2">
                                                <h2 class="col-10">Users</h2>
                                                <h2 class="col-2">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex">
                                            <div class="icon mb-4">
                                                <i class="fa-solid fa-box-open"></i>
                                            </div>
                                            <div class="text d-flex row mt-2">
                                                <h2 class="col-10">Orders</h2>
                                                <h2 class="col-2">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix d-flex">
                                            <div class="icon mb-4">
                                                <i class="fa-solid fa-box-open"></i>
                                            </div>
                                            <div class="text d-flex row mt-2">
                                                <div class="col-10">
                                                    <h2>Orders</h2>
                                                    <span>Today</span>
                                                </div>
                                                <h2 class="col-2">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>










 
                        <!-- table of matches -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="products-list">Products</h2>
                                    <button class="btn me-3 logup text-light rounded fs-5" href="#productModal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>Add product</button>
                                </div>

                                <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Image</th>
                                                <th class="text-right">Name</th>
                                                <th class="text-right">Description</th>
                                                <th class="text-right">Brand</th>
                                                <th class="text-right">Categories</th>
                                                <th class="text-right">Promotion</th>
                                                <th class="text-right">Stock</th>
                                                <th class="text-right">Price</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td class="text-right">dfghjk</td>
                                                    <!-- <td>05:57</td> -->
                                                    <td class="text-right">gfhjkl</td>
                                                    <td class="text-start">ghjkl</td>
                                                    <td class="text-right">gfhjk</td>
                                                    <td class="text-right">gfhjk</td>
                                                    <td class="text-right">gfhjk</td>
                                                    <td class="text-right">gfhjk</td>
                                                    <td class="text-right">gfhjk</td>
                                                    <td class="text-left"><a href="update.match.php?id="><i class="fa fa-edit text-primary me-2"></i></a><a href="delete.php?deletematch="><i class="fa fa-trash text-danger me-2"></i></a></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     <!-- table of teames -->
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="brands-list">Brands</h2>
                                    <button class="btn me-3 logup text-light rounded fs-5" href="#brandModal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>Add brand</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Image</th>
                                                <th class="text-right">Name</th>
                                                <th class="text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><img style="width:5rem" src="../assets/img/teams/"> </td>
                                                <td class="text-right">gfhjk</td>
                                                <td class="text-left d-flex justify-content-end"><a href="update.team.php?id="><i class="fa fa-edit text-primary me-2"></i></a><a href="delete.php?deleteteam="><i class="fa fa-trash text-danger"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- table of stads -->
                     <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="categories-list">Categories</h2>
                                    <button class="btn me-3 logup text-light rounded fs-5" href="#categoryModal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>Add category</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Name</th>
                                                <th class="text-right">Type</th>
                                                <th class="text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    <tr>
                                                        <td class="text-right">gfhjk</td>
                                                        <td class="text-right">gfhjk</td>
                                                        <td class="text-left d-flex justify-content-end"><a href="update.match.php?id="><i class="fa fa-edit text-primary me-2"></i></a><a href="delete.php?deletematch="><i class="fa fa-trash text-danger"></i></a></td>
                                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- table of reservations -->
                     <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="orders-list">Orders</h2>
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#orderModal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>Add order</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Product</th>
                                                <th class="text-right">Address</th>
                                                <th class="text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-right">gfhjk</td>
                                                <td class="text-right">gfhjk</td>
                                                <td class="text-left d-flex justify-content-end"><a href="update.match.php?id="><i class="fa fa-edit text-primary me-2"></i></a><a href="delete.php?deletematch="><i class="fa fa-trash text-danger"></i></a></td>                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

    <!-- Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>