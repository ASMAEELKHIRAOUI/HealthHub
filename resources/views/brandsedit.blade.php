@include('layouts.sidebar')

{{-- @dd($brand) --}}
<div class="modal-content">
    <form action="{{ route('brands.update', $brand) }}" method="POST" id="form" data-parsley-validate>

        @csrf
        @method('PUT')
        <div class="modal-header">
            <h5 class="modal-title">Add brand</h5>
            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $brand->name }}" required />
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="img" type="file" id="formFile">
            </div>



        </div>
        <div class="modal-footer">
            <a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
            <button type="submit" name="SaveBrand" class="color text-light border-white p-2 rounded" id="save-btn">Save</button>
        </div>
    </form>
</div>
