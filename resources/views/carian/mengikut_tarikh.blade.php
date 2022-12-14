@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container mt-5">
  <div class="card text-bg-light bg-gradient "> 
    <form action="/carian/result_tarikh" method="post">
        @csrf
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Carian Mengikut Tarikh</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">

      <div class="card-body">
        <div class="mb-3">
          <label for="mengikut_tarikh" class="form-label">Sila Masukkan Tarikh</label>
          <input type="date" name="onedate" id="onedate" class="form-control" placeholder="Search by date"/>
        </div>
      </form>
      </div>

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
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