@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container p-5">
    <form action="{{route('cart.store')}}" method="POST">
        @csrf
    <div class="d-flex flex-wrap justify-content-between">
        
        <div class="">
            <div   style="width: 450px;height: 450px ;background-image: url('../img/products/{{ $product->img }}'); background-size: cover; background-position: center; background-repeat: no-repeat;" class="rounded-4 ms-5 section3"></div>
        </div>
        <div class=" my-5 section4">
            <h3>
                {{ $product->name }}
            </h3>
            <h4>
                {{ $product->brand->name }}
            </h4>
            <input type="hidden" value="{{ $product->id }}" name="product_id">
            <input type="hidden" value="{{ $user->id }}" name="user_id">
            <hr>
            @if($product->promotion > 0)
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <h1>
                        {{ $product->price - (($product->promotion * $product->price)/100) }}$
                    </h1>
                    <p class="text-decoration-line-through text-secondary ms-5 mt-2 fs-5">{{ $product->price }}$</p>
                </div>
                
                <div class="promo bg-danger rounded-end-circle fs-5 text-light px-3">
                    -{{ $product->promotion }}%
                </div>
            </div>
            @else
            <div class="d-flex justify-content-between">
                <h1>
                    {{ $product->price }}$
                </h1>
            </div>
            @endif
            <hr>
            @if($product->stock > 0)
            <div class="text-success">
                In stock
            </div>
            @else 
            <div class="text-danger">
                Out of stock
            </div>
            @endif
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    <input type="number" value="1" min="1" max="{{ $product->stock }}" class="rounded p-2" name="quantity">
                </div>
                <div class="">
                    <button class="add btn me-3 text-light rounded fs-5 w-100" type="submit">Add to cart <i class="bi bi-cart-dash"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 p-5">
        <h4 class="text-center p-3">
            Description
        </h4>
        <div>
            {{ $product->description }}
        </div>
    
    </div></form>
</div>
@endsection