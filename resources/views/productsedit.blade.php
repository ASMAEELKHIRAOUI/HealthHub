@include('layouts.sidebar')
<div class="edit-modal-content p-5">
    <form action="{{ route('products.update', $product) }}" method="POST" id="edit-form" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        @method('PUT')

        <div class="modal-header">
            <h3 class="modal-title text-dark py-4">Edit product</h3>
        </div>
  <div class="modal-body">

                <input type="hidden" name="id" >

                @php
                $brands = App\Models\Brand::all();
                @endphp

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name"  class="form-control" value="{{ $product->name }}"  required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" id="floatingTextarea" name="description">{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Brand</label>
                    <select class="form-select" name="brand_id" aria-label="Default select example">
                        <option disabled selected>Open this select menu</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" @if ($product->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
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
                            <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="mb-3">
                    <label class="form-label">Promotion</label>
                    <input type="number" name="promotion" class="form-control" value="{{ $product->promotion }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required/>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}" required/>
                </div>
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" name="img" type="file" id="formFile">
                </div>
            
        </div>







        
        <div class="modal-footer">
            <a href="#" class="btn big_btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
            <button type="submit" name="SaveProduct" class="color big_btn text-light border-white p-2 rounded" id="save-btn">Save</button>
        </div>
    </form>
</div>
