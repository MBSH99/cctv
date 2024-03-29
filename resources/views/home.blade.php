@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

@if(\Session('success'))
        <div class="alert alert-primary" role="alert">
        {{session('success')}}
        </div>
    @endif

    <br><br><br>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-white bg-dark">
      <div class="background-image: "></div>
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Kelebihan Sistem Baru</h1>
      <p class="lead fw-normal">Semua Pengguna Dapat Menggunakan Sistem Ini Dengan Mudah Kerana Ada Beberapa Perubahan Yang Mungkin Dapat Dilihat Dengan Jelas Dan Senang </p>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  
  <br><br><br>
@endsection
