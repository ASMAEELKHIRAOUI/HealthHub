@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container p-5">
    <div class="d-flex row">
        <div class="col-6">
            <img src="img/signbg.jpg" style="height: 500px; width: 500px;" class="rounded-4 ms-5">
        </div>
        <div class="col-6 my-5">
            <h4>
                ESTHEDERM MINCEUR LAIT HYDRATANT ANTI-RELACHEMENT 200 ML ACHETE + ESTHEDERM BAUME DE MODELAGE 200 ML OFFERT
            </h4>
            <h3>
                Brand
            </h3>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <h1>
                        29.99$
                    </h1>
                    <p class="text-decoration-line-through text-secondary ms-5 mt-2 fs-5">49.99$</p>
                </div>
                
                <div class="promo bg-danger rounded-end-circle fs-5 text-light px-3">
                    -15%
                </div>
            </div>
            <hr>
            <div class="text-success">
                In stock
            </div>
            <hr>
            <div class="d-flex">
                <div>
                    <input type="number" value="1" class="w-25 rounded p-2 mt-1">
                </div>
                <div>
                    <button class="add btn me-3 text-light rounded fs-5">Add to cart <i class="bi bi-cart-dash"></i></button>
                </div>
            </div>
            
            
            

        </div>
    </div>
    <div class="container mt-5 p-5">
        <h4 class="text-center p-3">
            Description
        </h4>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
</div>


@endsection