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
        <h4 class="fw-bold">Keseluruhan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <form action="/laporan/keseluruhan" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <label for="date" class="form-label">Dari </label>
              <input type="date" name="dateFrom" id="dateFrom" class="form-control"/>
              </select>
            </div>

            <div class="col-md-6">
              <label for="date" class="form-label">Sehingga </label>
              <input type="date" name="dateTo" id="dateTo" class="form-control"/>
              </select>
            </div>
        
        </div>

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
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
<br><br><br>
<br><br><br>
<br><br><br>
@endsection