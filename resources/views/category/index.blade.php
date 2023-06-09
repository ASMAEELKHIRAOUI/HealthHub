@include('layouts.sidebar')
@include('category.modal')
<div class="p-5">
<div class="row">
    <div class="col-lg-12">
        <div class="overview-wrap">
            <h2 class="title-1 m-b-25 mt-4 me-4" id="categories-list">Categories</h2>
            <button class="btn big_btn me-3 mt-4 logup text-light rounded fs-5" href="#categoryModal" data-bs-toggle="modal" id="color">
                <i class="fa fa-plus fs-5 me-2"></i>Add category</button>
        </div>
<br>
        <div class="table-responsive table--no-card mb-4" >
            <table class="table table-borderless table-striped table-earning" >
                <thead >
                    <tr >
                        <th class="text-right">Name</th>
                        <th class="text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="text-right">{{ $category->name }}</td>
                        <td class="text-left d-flex justify-content-end">
                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                <a href="{{ route('category.edit',$category->id) }}">
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
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-12 pt-3">
            <div class="overview-wrap">
                <h2 class="title-1 m-b-25 me-4" id="categories-list">Subcategories</h2>
            </div>
        <div class="table-responsive table--no-card mb-4" >
            <table class="table table-borderless table-striped table-earning" >
                <thead >
                    <tr >
                        <th class="text-right">Name</th>
                        <th class="text-right">category</th>
                        <th class="text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                    <tr>
                        <td class="text-right">{{ $subcategory->name }}</td>
                        <td class="text-right">{{ $subcategory->category->name }}
                        </td>
                        <td class="text-left d-flex justify-content-end">
                            <form action="{{ route('category.destroy',$subcategory->id) }}" method="POST">
                                <a href="{{ route('category.edit',$subcategory->id) }}">
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>