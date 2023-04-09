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
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="subcategory" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Subcategory
                                </label>
                            </div>
                        </div>
                        <div id="category-select">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="">dfghjk</option>
                            </select>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
