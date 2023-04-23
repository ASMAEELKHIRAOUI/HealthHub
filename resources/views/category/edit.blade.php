@include('layouts.sidebar')

        <div class="edit-modal-content p-5">
            <form action="{{ route('category.update', $category) }}" method="POST" id="edit-form" data-parsley-validate>
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h3 class="modal-title text-dark py-4">Edit category</h3>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="id">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required/>
                        </div>

                        <div>
                            <label class="form-label">Type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="category" value="1" @if ($category->type == 1) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="subcategory" value="2" @if ($category->type == 2) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Subcategory
                                </label>
                            </div>
                        </div>
                        @php
                        $categories = App\Models\Category::all()->where('type',1);
                        @endphp
                        <div id="category-select" class="py-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option value="">Open this select menu</option>
                                @foreach($categories as $categoryy)
                                <option value="{{ $categoryy->id }}" @if ($category->category_id == $categoryy->id) selected @endif>{{ $categoryy->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn big_btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
                    <button type="submit" name="SaveCategory" class="color big_btn text-light border-white p-2 rounded" id="save-btn">Save</button>
                </div>
            </form>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>