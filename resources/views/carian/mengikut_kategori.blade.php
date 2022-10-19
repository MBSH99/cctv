@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container mt-5">
  <div class="card text-bg-success bg-gradient">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Carian Mengikut Kategori Aduan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <form action="/carian/mengikut_kategori" method="get">
        <div class="mb-3">
          <label for="report_kaduan" class="form-label">Sila Pilih Kategori</label>
          <select type="search" id="search" name="search" class="form-select mb-3" aria-label="Default select example" value="{{$search}}">
                            <option selected>Sila Pilih</option>
                            <option value="BG01/SISA BINAAN">SISA BINAAN
                            <option value="BG02/BINAAN(STRUKTUR) TANPA KEBENARAN">BINAAN(STRUKTUR) TANPA KEBENARAN
                            <option value="D01/PARKING LUAR PETAK">PARKING LUAR PETAK
                            <option value="D02/SALAHGUNA PETAK OKU">SALAHGUNA PETAK  OKU
                            <option value="D03/SALAHGUNA PETAK MOTOSIKAL">SALAHGUNA PETAK MOTOSIKAL
                            <option value="D04/HALANGAN (LALUAN AWAM DAN SIARKAKI)">HALANGAN (LALUAN AWAM DAN SIARKAKI)
                            <option value="D05/ISU VANDALISME">ISU VANDALISME
                            <option value="D06/MELANGGAR PEDESTRIAN CROSSING">MELANGGAR PEDESTRIAN CROSSING
                            <option value="D07 /HALANGAN / PARKING LUAR PETAK (SMART CCTV)">HALANGAN / PARKING LUAR PETAK (SMART CCTV)
                            <option value="D08/PARKING DI BAHU JALAN">PARKING DI BAHU JALAN
                            <option value="D09/AKTA PENGANGKUTAN JALAN 1987">AKTA PENGANGKUTAN JALAN 1987
                            <option value="KJ01/PETAK KUNING/OKU PUDAR">PETAK KUNING/OKU PUDAR
                            <option value="KJ02/PENUTUP LONGKANG ROSAK/HILANG">PENUTUP LONGKANG ROSAK/HILANG
                            <option value="KJ03/TEMBOK/TEBING/SIARKAKI ROSAK">TEMBOK/TEBING/SIARKAKI ROSAK
                            <option value="LE01/PENJAJA">PENJAJA
                            <option value="LE02/IKLAN BANNER DAN BUNTING">IKLAN "BANNER" DAN "BUNTING"
                            <option value="LK01/HALANGAN DAHAN POKOK">HALANGAN DAHAN POKOK
                            <option value="PK01/KAWASAN PEMBIAKAN (VEKTOR)">KAWASAN PEMBIAKAN (VEKTOR)
                            <option value="PK02/HAIWAN LIAR">HAIWAN LIAR
                            <option value="PR01/SAMPAH">SAMPAH 
                            <option value="PR02/LONGKANG TERSUMBAT">LONGKANG TERSUMBAT
                            <option value="PR03/SAMPAH (SMART CCTV)">SAMPAH (SMART CCTV)
                            <option value=""></option>
            </select>
          </form>
        </div>
       
      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/carian/mengikut_kategori')}}">
          <button class="btn btn-primary" type="button">Reset</button>
        </a>
      </div>
    </form>
  </div>
</div>
<div class="mb-3">
  <div class="card shadow">
    <div class="card-header">
      <h2>SENARAI MENGIKUT CARIAN KATEGORI</h2>
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">BIL</th>
          <th class="col">TARIKH</th>
          <th class="col">MASA</th>
          <th class="col">LOKASI</th>
          <th class="col">KATEGORI</th>
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
          <td>{{$report->report_kaduan}}</td>
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
@endsection