@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="d-flex row my-3 pt-5" id="landingPage">
    @foreach ($products as $product)
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('product.detail',$product->id) }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/products/{{ $product->img }}" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">{{ $product->name }}</h1>
            <p class="">{{ $product->description }}</p>
            <p class="">{{ $product->price - (($product->promotion * $product->price)/100) }}</p>
        </div>
    </a>
    @endforeach
    
    
<!-- cursouel  -->

<div class="container my-5"> 
                
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mx-auto ">
                    @php
                    $brands = App\Models\Brand::all();
                    @endphp
                    @foreach ($brands as $brand)
                        <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
                            <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
                            <img src="img/brands/{{ $brand->img }}" class="card-img-top">
                            </div>
                        </div> 
                    @endforeach
                        
                    </div>  

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class=" text-dark carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection