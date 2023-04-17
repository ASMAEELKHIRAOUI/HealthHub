@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container p-5 mt-4">
    <div class="d-flex row">
        <div class="col-9 d-flex row mt-5 justify-content-center">
            @foreach ($carts as $cart)
                <div class="d-flex row mb-3">
                    <div class="col-2">
                        <img src="img/products/{{ $cart->product->img }}" style="height: 100px; width: 100px;" class="rounded-4 ms-5">
                    </div>
                    <div class="col-4 ms-4">{{ $cart->product->name }}</div>
                    <div class="col-2 d-flex justify-content-center h-25">
                        <input type="number" value="{{ $cart->quantity }}" class="w-50 rounded p-3 mt-4" onchange="changeQuantity(event,{{ $cart->id }})" min="1" max="{{ $cart->product->stock }}">
                    </div>
                    <div class="col-2 fs-4 d-flex justify-content-center mt-3">{{ ($cart->product->price - (($cart->product->promotion * $cart->product->price)/100)) * $cart->quantity }}$</div>
                    <div class="col-1 d-flex justify-content-center mt-4">
                        <i class="fa fa-trash text-danger fs-4"></i>
                    </div>
                </div>
                <hr class="w-75">
            @endforeach
            



            
        
        {{-- <div class="d-flex row mb-3">
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
            
 --}}

        </div>
        

        <div class="col-3 my-5">
            <div class="d-flex justify-content-between px-2">
                <h4>
                    {{ $sum_items }} articles
                </h4>
                <h3>
                    {{ $subtotal }}$
                </h3>
            </div>
            
            <hr>
            <div class="d-flex justify-content-between px-2">
                <h4>
                    Total
                </h4>
                <h3>
                    {{ $subtotal }}$
                </h3>
            </div>
            
            <hr>
            <div class="d-flex justify-content-center">
                <a href="{{ route('checkout') }}"><button class="add btn big_btn text-light rounded fs-5" type="submit">CHECKOUT</button></a>
            </div>
            
            
            

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script type="text/javascript">

  function changeQuantity(e,id){
    $.ajax({
        url: '{{ route('cart.update') }}',
        method: "put",
        data: {
            id: id,
            quantity: e.target.value
        },
        success: function (response) {
           console.log(response)
        }
    });
  }
</script>
@endsection