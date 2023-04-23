<div class="modal fade" id="brandModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('brand.store')}}" method="POST" id="add-form" enctype="multipart/form-data" data-parsley-validate>
                @csrf
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
                            <input class="form-control" name="img" type="file" id="formFile">
                        </div>
                        

                    
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-white border w-25" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
                    <button type="submit" name="SaveBrand" class="color text-light border-white p-2 rounded w-25" id="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

