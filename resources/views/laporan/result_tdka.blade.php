@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container mt-5">
<a href="/laporan/tarikh&daerah" class="btn btn-primary pull-right">Kembali</a>
<div class="mb-3">
  <div class="card bg-gradient ">

    <div class="card-header">
      <h2>SENARAI LAPORAN MENGIKUT KATEGORI DAN DAERAH</h2>
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">TARIKH</th>
          <th class="col">MASA</th>
          <th class="col">LOKASI</th>
          <th class="col">LAPORAN KEJADIAN</th>
          <th class="col">MASA DI LAPOR</th>
          <th class="col">TINDAKAN</th>
          <th class="col">CATATAN</th>
          <th class="col">GAMBAR</th>
        </tr>
      </thread>
      <tbody>
      @foreach ($report as $report)
        <tr>
          <td>{{$report->report_tarikh}}</td>
          <td>{{$report->report_masa}}</td>
          <td>{{$report->report_lokasi}}</td>
          <td>{{$report->report_laporan}}</td>
          <td>{{$report->report_masalapor}}</td>
          <td>{{$report->maklumbalas_jabatan}}</td>
          <td>{{$report->maklumbalas_catatan}}</td>
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
<button class="btn btn-primary"  onclick="window.print()">CETAK</button>
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