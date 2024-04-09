@extends('layouts/app')

@section('content')
<div class="container py-5 " >

    <div id="carouselExampleControls" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner container">
          <div class="carousel-item active container">
            <img src="https://www.yogaformazione.it/wp-content/uploads/2024/02/Meditazione-Yoga-1200x675.jpg" class="d-block w-auto " alt="...">
          </div>
          <div class="carousel-item container">
            <img src="https://staticfanpage.akamaized.net/wp-content/uploads/sites/6/2021/11/bambino-sconsolato-hasbulla-1200x675.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://storage.googleapis.com/mamamia-pwa.appspot.com/images/2020-memes-f.jpg.1200x675.jpg" class="d-block w-100 " alt="...">
          </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    

</div>


@endsection