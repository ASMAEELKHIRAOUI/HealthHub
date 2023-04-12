@include('layouts.head')
<div class="modal fade" id="productModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('products.store')}}" method="POST" id="add-form" enctype="multipart/form-data" data-parsley-validate>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add product</h5>
                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="id" >

                    @php
                    $brands = App\Models\Brand::all();
                    @endphp

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name"  class="form-control"  required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="floatingTextarea" name="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <select class="form-select" name="brand_id" aria-label="Default select example">
                            <option disabled selected>Open this select menu</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @php
                    $categories = App\Models\Category::all()->where('type',2);
                    @endphp
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <option disabled selected>Open this select menu</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Promotion</label>
                        <input type="number" name="promotion" class="form-control" min="0" max="100" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control" min="0" required/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" min="0" required/>
                    </div>
                    
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="img" type="file" id="formFile">
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
