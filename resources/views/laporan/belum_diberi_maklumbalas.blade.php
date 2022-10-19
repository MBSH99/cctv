@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-success bg-gradient">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Belum Diberi MaklumBalas</h4>
      </div>

      <!-- Card body -->
      
      </div>
    </form>
  </div>
</div>
<div class="mb-3">
  <div class="card bg-gradient ">
    <div class="card-header">
      <h2>SENARAI KESELURUHAN LAPORAN</h2>
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">TARIKH</th>
          <th class="col">MASA</th>
          <th class="col">LAPORAN KEJADIAN</th>
          <th class="col">MASA DI LAPOR0</th>
          <th class="col">TINDAKAN</th>
          <th class="col">CATATAN</th>
          <th class="col">GAMBAR</th>
        </tr>
      </thread>
      <tbody>
      @foreach ($reports as $report)
        <tr>
          <td>{{$report->report_tarikh}}</td>
          <td>{{$report->report_masa}}</td>
          <td>{{$report->report_laporan}}</td>
          <td>{{$report->report_masalapor}}</td>
          <td>{{$report->report_saduan}}</td>
          <td>{{$report->report_image}}</td>
          <td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
<div class="card-footer">
        <button type="submit" class="btn btn-primary">CETAK</button>
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