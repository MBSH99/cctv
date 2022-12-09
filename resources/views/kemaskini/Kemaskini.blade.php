@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

@if(\Session('success'))
        <div class="alert alert-primary" role="alert">
        {{session('success')}}
        </div>
        @endif

<div class="container mt-5">
  <div class="card text-bg-success bg-gradient">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Kemaskini</h4>
      </div>

      <!-- Card body -->
      <form action="/kemaskini/Kemaskini" method="get">
      <div class="card-body">
        <div class="mb-3">
          <label for="search" class="form-label">Sila Masukkan Tarikh</label>
          <input type="date" name="date" id="date" class="form-control" placeholder="Search by date" value="{{$search}}"/>
        </div>
      </form>
      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/kemaskini/Kemaskini')}}">
          <button class="btn btn-primary" type="button">Reset</button>
        </a>
      </div>
    </form>
  </div>
</div>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection