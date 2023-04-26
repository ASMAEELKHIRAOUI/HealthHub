@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="land d-flex">
  <img src="img/woman.png" alt="">
  <div class="d-flex align-items-center">
    <p>
      Explore the alluring universe of online parapharmacy with <span  style="font-weight:bold;">HealthHub</span> , your ultimate digital destination for top-notch health and wellness solutions.
    </p>
  </div>
</div>
<searchbar class="row mb-2">
  <div class="col-lg-2 col-sm-1 col-md-2"></div>
  <form action="{{ route('product.search') }}" method="get" class="d-flex col-lg-8 col-sm-10 col-md-8" role="search">
      @csrf
      <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
  </form>
</searchbar>
<div class="d-flex row pt-5" id="landingPage">
  <h2 class="text-center p-5" style="font-family: 'Rockwell', Helvetica, sans-serif;">Our Products</h2>
    @foreach ($products as $product)
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('product.details',$product->id) }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/products/{{ $product->img }}" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">{{ $product->name }}</h1>
            <p class="">{{ $product->description }}</p>
            <p class="">{{ $product->price - (($product->promotion * $product->price)/100) }}$</p>
        </div>
    </a>
    @endforeach
    
    
<!-- cursouel  -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}

<div class="container">
  
  <h2 class="text-center p-5" style="font-family: 'Rockwell', Helvetica, sans-serif;">Our Brands</h2>
   <section class="customer-logos slider my-4">
    @php
                    $brands = App\Models\Brand::all();
                    @endphp
                    @foreach ($brands as $brand)
                    <div class="slide"><img src="img/brands/{{ $brand->img }}"></div>
                    @endforeach
   </section>
</div>
<script>
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>   

@endsection