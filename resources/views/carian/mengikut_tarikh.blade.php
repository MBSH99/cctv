@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container mt-5">
  <div class="card text-bg-success bg-gradient ">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Carian Mengikut Tarikh</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <form action="/carian/mengikut_tarikh" method="get">
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
<div class="mb-3">
  <div class="card bg-gradient ">
    <div class="card-header">
      <h2>SENARAI MENGIKUT CARIAN TARIKH</h2>
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">BIL</th>
          <th class="col">TARIKH</th>
          <th class="col">MASA</th>
          <th class="col">LOKASI</th>
          <th class="col">LAPORAN KEJADIAN</th>
          <th class="col">MASA DI LAPOR</th>
          <th class="col">TINDAKAN</th>
          <th class="col">LAMPIRAN</th>
          <th class="col">MAKLUMBALAS</th>
        </tr>
      </thread>
      <tbody>
      @foreach ($report as $report)
        <tr>
        <td>{{$loop->iteration}}</td>
          <td>{{$report->report_tarikh}}</td>
          <td>{{$report->report_masa}}</td>
          <td>{{$report->report_lokasi}}</td>
          <td>{{$report->report_laporan}}</td>
          <td>{{$report->report_masalapor}}</td>
          <td>{{$report->report_saduan}}</td>
          <td>{{$report->report_image}}</td>
          <td>
          <form action ="/maklumbalas/{{$report->report_id}}" method="GET">
            <button type="submit" class="btn btn-info "><i class="fas fa-edit"> MAKLUMBALAS</i></button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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