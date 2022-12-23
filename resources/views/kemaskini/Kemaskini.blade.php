@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
@if(\Session('failed'))
      <div>
        <div class="alert alert-danger" role="alert">
        {{session('failed')}}
        </div>
      </div>
        @endif

        <div class="container mt-5">
  <div class="card text-bg-light bg-gradient ">
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Kemaskini</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <form action="/kemaskini/Kemaskini" method="post">
      @csrf <!-- {{ csrf_field() }} -->
      <div class="card-body">
        <div class="mb-3">
          <label for="dateFrom." class="form-label">Sila Masukkan Tarikh</label>
          <input type="date" name="dateFrom" id="dateFrom" class="form-control"/>
        </div>
      

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
  </div>
</form>
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection