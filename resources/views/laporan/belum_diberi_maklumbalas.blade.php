@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-light bg-gradient ">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Belum Diberi Maklumbalas</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <form action="/laporan/belum_diberi_maklumbalas" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <label for="date" class="form-label">Dari </label>
              <input type="date" name="fromdate" id="fromdate" class="form-control"/>
            </select>
          </div>

          <div class="col-md-6">
          <label for="date" class="form-label">Bila </label>
          <input type="date" name="todate" id="todate" class="form-control"/>
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