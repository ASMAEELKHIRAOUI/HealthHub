@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="d-flex row my-3 pt-5" id="landingPage">
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('details') }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/signbg.jpg" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">smiya</h1>
            <p class="">diskripsyou</p>
            <p class="">taman</p>
        </div>
    </a>
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('details') }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/signbg.jpg" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">smiya</h1>
            <p class="">diskripsyou</p>
            <p class="">taman</p>
        </div>
    </a>
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('details') }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/signbg.jpg" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">smiya</h1>
            <p class="">diskripsyou</p>
            <p class="">taman</p>
        </div>
    </a>
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('details') }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/signbg.jpg" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">smiya</h1>
            <p class="">diskripsyou</p>
            <p class="">taman</p>
        </div>
    </a>
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('details') }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/signbg.jpg" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">smiya</h1>
            <p class="">diskripsyou</p>
            <p class="">taman</p>
        </div>
    </a>
    <a class="col-3 justify-items-center pb-12 text-dark" id="cards" href="{{ route('details') }}">
        <div class="card text-center pb-2 my-2">
            <img src="img/signbg.jpg" alt="" style="height:300px;width:275px;border-radius:20px" class="p-2">
            <h1 class="fs-2">smiya</h1>
            <p class="">diskripsyou</p>
            <p class="">taman</p>
        </div>
    </a>
    
    
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
    <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
        <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
          <img src="img/signbg.jpg" class="card-img-top">
      </div>
    </div>   

    <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
        <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
          <img src="img/signbg.jpg" class="card-img-top">
      </div>
    </div>  

    <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
        <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
          <img src="img/signbg.jpg" class="card-img-top">
      </div>
    </div>  
 </div>
 </div>

<div class="carousel-item">
<div class="row mx-auto ">
<div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
        <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
          <img src="img/signbg.jpg" class="card-img-top">
      </div>
    </div>  

    <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
        <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
          <img src="img/signbg.jpg" class="card-img-top">
      </div>
    </div>  

    <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
        <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
          <img src="img/signbg.jpg" class="card-img-top">
      </div>
    </div>  
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