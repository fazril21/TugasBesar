@extends('layouts.app')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/1.webp" class="d-block w-100" alt="First Slide">
      </div>
      <div class="carousel-item">
        <img src="image/2.webp" class="d-block w-100" alt="Second Slide">
      </div>
      <div class="carousel-item">
        <img src="image/3.webp" class="d-block w-100" alt="Third Slide">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
@endsection
