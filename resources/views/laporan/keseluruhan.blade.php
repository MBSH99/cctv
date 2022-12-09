@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-light bg-gradient ">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Keseluruhan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <form action="/laporan/keseluruhan" method="get">
          <div class="row">
            <div class="col-md-6">
              <label for="date" class="form-label">Dari </label>
              <input type="date" name="search" id="dateFrom" class="form-control"/>
            </select>
          </div>

          <div class="col-md-6">
          <label for="date" class="form-label">Bila </label>
          <input type="date" name="search" id="dateTo" class="form-control"/>
            </select>
          </div>
        </form>
        </div>

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" value="Find" class="btn btn-primary">Submit</button>
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