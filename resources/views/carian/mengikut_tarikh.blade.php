@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container mt-5">
  <div class="card text-bg-light bg-gradient ">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Carian Mengikut Tarikh</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <form action="/carian/mengikut_tarikh" method="post">
      <div class="card-body">
        <div class="mb-3">
          <label for="mengikut_tarikh" class="form-label">Sila Masukkan Tarikh</label>
          <input type="date" name="search" id="search" class="form-control" placeholder="Search by date" value="{{$search}}"/>
        </div>
      </form>

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/carian/mengikut_tarikh')}}">
          <button class="btn btn-primary" type="button">Reset</button>
        </a>
      </div>
  </div>
  </div>
</div>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection