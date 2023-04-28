@include('layouts.sidebar')
@include('product.modal')

<div class="p-5">
<div class="row">
    <div class="col-lg-12">
        <div class="overview-wrap">
            <h2 class="title-1 m-b-25 me-4 mt-4" id="products-list">Products</h2>
            <button class="btn big_btn me-3 mt-4 logup text-light rounded fs-5" href="#productModal" data-bs-toggle="modal" id="color">
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
                    @forelse ($products as $product)
                        <tr>
                            <td class="text-right"><img src="img/products/{{ $product->img }}" alt="" style="height:50px; width:50px;"></td>
                            <td class="text-right">{{ $product->name }}</td>
                            <td class="text-right">{{ $product->description }}</td>
                            <td class="text-right">{{ $product->brand->name }}</td>
                            <td class="text-right">{{ $product->category->name }}</td>
                            <td class="text-right">{{ $product->promotion }}</td>
                            <td class="text-right">{{ $product->stock }}</td>
                            <td class="text-right">{{ $product->price }}</td>
                            <td class="text-left">
                                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                    <a href="{{ route('product.edit',$product->id) }}">
                                        <i class="fa fa-edit text-primary me-2"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">
                                        <i class="fa fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h2 class="text-center">There is no products, try adding one!</h2>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
