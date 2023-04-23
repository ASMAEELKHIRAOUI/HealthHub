@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="d-flex row my-3 pt-5" id="landingPage">
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



{{-- <div class="container-fluid">
    <h1>Use Bootstrap's carousel to show multiple items per slide.</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
          <div class="carousel-inner">
            <div class="item active">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            <!-- add  more items here -->
            <!-- Example item start:  -->
            
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive" style="width:100%; height:auto"></a></div>
            </div>
            
            <!--  Example item end -->
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
<script>
    // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});
// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.


$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
  

</script>


 --}}

{{-- 
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
    </div> --}}
@endsection