@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container p-5 mt-4">
    <div class="d-flex row">
        <div class="col-9 d-flex row mt-5 justify-content-center">
            <div class="d-flex row mb-3">
                <div class="col-2">
                <img src="img/signbg.jpg" style="height: 100px; width: 100px;" class="rounded-4 ms-5">
            </div>
            <div class="col-4 ms-4">
                ESTHEDERM MINCEUR LAIT HYDRATANT ANTI-RELACHEMENT 200 ML ACHETE + ESTHEDERM BAUME DE MODELAGE 200 ML OFFERT
            </div>
            <div class="col-2 d-flex justify-content-center h-25">
                <input type="number" value="1" class="w-50 rounded p-3 mt-4">
            </div>
            <div class="col-2 fs-4 d-flex justify-content-center mt-3">29.99$</div>
            <div class="col-1 d-flex justify-content-center mt-4">
                <i class="fa fa-trash text-danger fs-4"></i>
            </div>
            </div>
            <hr class="w-75">
            <div class="d-flex row mb-3">
                <div class="col-2">
                <img src="img/signbg.jpg" style="height: 100px; width: 100px;" class="rounded-4 ms-5">
            </div>
            <div class="col-4 ms-4">
                ESTHEDERM MINCEUR LAIT HYDRATANT ANTI-RELACHEMENT 200 ML ACHETE + ESTHEDERM BAUME DE MODELAGE 200 ML OFFERT
            </div>
            <div class="col-2 d-flex justify-content-center h-25">
                <input type="number" value="1" class="w-50 rounded p-3 mt-4">
            </div>
            <div class="col-2 fs-4 d-flex justify-content-center mt-3">29.99$</div>
            <div class="col-1 d-flex justify-content-center mt-4">
                <i class="fa fa-trash text-danger fs-4"></i>
            </div>
            </div>
            


        </div>

        <div class="col-3 my-5">
            <div class="d-flex justify-content-between px-2">
                <h4>
                    1 article
                </h4>
                <h3>
                    29.99$
                </h3>
            </div>
            
            <hr>
            <div class="d-flex justify-content-between px-2">
                <h4>
                    Total
                </h4>
                <h3>
                    29.99$
                </h3>
            </div>
            
            <hr>
            <div class="d-flex justify-content-center">
                <button class="add btn text-light rounded fs-5 px-5">CHECKOUT</button>
            </div>
            
            
            

        </div>
    </div>
</div>

@endsection