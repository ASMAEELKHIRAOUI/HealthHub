@include('layouts.sidebar')

{{-- @dd($brand) --}}
<div class="edit-modal-content p-5">
    <form action="{{ route('brand.update', $brand) }}" method="POST" id="edit-form" data-parsley-validate>

        @csrf
        @method('PUT')
        <div class="modal-header">
            <h3 class="modal-title text-dark py-4">Edit brand</h3>
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
            <a href="#" class="btn big_btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
            <button type="submit" name="SaveBrand" class="color big_btn text-light border-white p-2 rounded" id="save-btn">Save</button>
        </div>
    </form>
</div>
