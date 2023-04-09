@include('layouts.sidebar')
@include('brandsmodal')
<div class="p-5" style="height: 100vh">
    <div class="row">
    <div class="col-lg-12">
        <div class="overview-wrap">
            <h2 class="title-1 m-b-25 me-4" id="brands-list">Brands</h2>
            <button class="btn me-3 logup text-light rounded fs-5" href="#brandModal" data-bs-toggle="modal" id="color">
                <i class="fa fa-plus fs-5 me-2"></i>Add brand</button>
        </div>
        <br>
        <div class="table-responsive table--no-card mb-4" >
            <table class="table table-borderless table-striped table-earning" >
                <thead>
                    <tr>
                        <th class="text-right">Image</th>
                        <th class="text-right">Name</th>
                        <th class="text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                    <tr>
                        <td class="text-right"><img style="width:5rem" src="/img/brands/{{ $brand->img }}"> </td>
                        <td class="text-right">{{ $brand->name }}</td>
                        <td class="text-left d-flex justify-content-end"><a href="update.team.php?id="><i class="fa fa-edit text-primary me-2"></i></a><a href="delete.php?deleteteam="><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>
