@include('layouts.sidebar')
<div class="p-5" style="height: 100vh">
<div class="row">
    <div class="col-lg-12">
        <div class="overview-wrap">
            <h2 class="title-1 m-b-25 me-4" id="categories-list">Categories</h2>
            <button class="btn me-3 logup text-light rounded fs-5" href="#categoryModal" data-bs-toggle="modal" id="color">
                <i class="fa fa-plus fs-5 me-2"></i>Add category</button>
        </div>
<br>
        <div class="table-responsive table--no-card mb-4" >
            <table class="table table-borderless table-striped table-earning" >
                <thead >
                    <tr >
                        <th class="text-right">Name</th>
                        <th class="text-right">Type</th>
                        <th class="text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="text-right">{{ $category->name }}</td>
                        <td class="text-right">{{ $category->type }}</td>
                        <td class="text-left d-flex justify-content-end">
                            <a href="update.category.php?id="><i class="fa fa-edit text-primary me-2"></i></a>
                               
                            @csrf
                            @method('DELETE')

                            <button type="submit border border-0"><i class="fa fa-trash text-danger"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
