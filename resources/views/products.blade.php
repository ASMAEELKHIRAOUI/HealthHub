@include('layouts.sidebar')
<div class="p-5" style="height: 100vh">
<div class="row">
    <div class="col-lg-12">
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
</div>
