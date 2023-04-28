@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <div class="container p-5 mt-4">
        <div class="d-flex row">
            <div class="col-9 d-flex row mt-5 justify-content-center">
                @forelse ($carts as $cart)
                    <div class="d-flex row mb-3">
                        <div class="col-2">
                            <img src="img/products/{{ $cart->product->img }}" style="height: 100px; width: 100px;"
                                class="rounded-4 ms-5">
                        </div>
                        <div class="col-4 fs-5 mt-4 ms-4">{{ $cart->product->name }}</div>
                        <div class="col-2 d-flex justify-content-center h-50">
                            <input type="number" value="{{ $cart->quantity }}" class="rounded mt-3 ps-3"
                                onchange="changeQuantity(event,{{ $cart->id }})" min="1"
                                max="{{ $cart->product->stock }}">
                        </div>
                        <div class="col-2 fs-4 d-flex justify-content-center mt-4">
                            {{ ($cart->product->price - ($cart->product->promotion * $cart->product->price) / 100) * $cart->quantity }}$
                        </div>
                        <div class="col-1 d-flex justify-content-center mt-4">
                            <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-1 delete-btn">
                                    <i class="fa fa-trash text-danger fs-4"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <hr class="w-75">
                @empty
                    <h2 class="text-center">There is no products in the cart </h2>
                @endforelse


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
                    <a href="{{ route('checkout') }}"><button class="add btn big_btn text-light rounded fs-5"
                            type="submit">CHECKOUT</button></a>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function changeQuantity(e, id) {
            $.ajax({
                url: '{{ route('cart.update') }}',
                method: "put",
                data: {
                    id: id,
                    quantity: e.target.value
                },
                success: function(response) {
                    console.log(response)
                }
            });
        }
    </script>
@endsection
