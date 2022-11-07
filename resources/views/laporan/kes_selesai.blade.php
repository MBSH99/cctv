@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-success bg-gradient ">
    
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Kes Selesai</h4>
      </div>

      <table class="table table-light" style="text-align:center" >
      <thread>
        <tr>
          <th class="col" class="table-info">BIL</th>
          <th class="col" class="table-info">TARIKH</th>
          <th class="col" class="table-info">CCTV</th>
          <th class="col" class="table-info">LAPORAN KEJADIAN</th>
        </tr>
      </thread>
      <tbody>
      @foreach ($data9 as $report)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$report->report_tarikh}}</td>
          <td>{{$report->report_lokasi}}</td>
          <td>{{$report->report_laporan}}</td>
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