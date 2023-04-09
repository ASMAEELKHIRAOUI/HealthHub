@include('layouts.sidebar')
<div class="p-5" style="height: 100vh">
<div class="row">
    <div class="col-lg-12">
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
                        <th class="text-right">Products</th>
                        <th class="text-right">Address</th>
                        <th class="text-right">total</th>
                        <th class="text-right">Status</th>
                        <th class="text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td class="text-right">{{ $product->product }}</td>
                        <td class="text-right">{{ $product->address }}</td>
                        <td class="text-right">{{ $product->total }}</td>
                        <td class="text-right">{{ $product->status }}</td>
                        <td class="text-left d-flex justify-content-end"><a href="update.match.php?id="><i class="fa fa-edit text-primary me-2"></i></a><a href="delete.php?deletematch="><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
