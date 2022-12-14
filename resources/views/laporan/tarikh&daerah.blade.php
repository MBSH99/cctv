@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-light bg-gradient">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Tarikh & Kategori & Daerah</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
        <form action="/laporan/tarikh&daerah" method="post">
          <div class="col-md-6">
            <div class="mb-3">
            <label for="date" class="form-label">Dari </label>
            <input type="date" id="dateFrom" class="form-control"/>
            </div>
          </div>

          <div class="col-md-6">
          <label for="date" class="form-label">Bila </label>
          <input type="date" id="dateTo" class="form-control"/>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
        <label for="report_daerah" class="form-label">Daerah</label>
            <select id="report_daerah"class="form-select mb-3" aria-label="Default select example" value="{{$search}}">
            <option>Sila Pilih</option>
            <option value="SPU">SPU/SEBERANG PERAI UTARA</option>
            <option value="SPT">SPT/SEBERANG PERAI TENGAH</option>
            <option value="SPS">SPS/SEBERANG PERAI SELATAN</option>
            <option value="LLD">LLD/LAIN-LAIN</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="report_kaduan" class="form-label">Kategori Aduan</label>
            <select id="report_kaduan"class="form-select mb-3" aria-label="Default select example"value="{{$search}}">
            <option>Sila Pilih</option>
            <option value="BG01">BG01/SISA BINAAN</option>
            <option value="BG02">BG02/BINAAN(STRUKTUR) TANPA KEBENARAN</option>
            <option value="D01">D01/PARKING LUAR PETAK</option>
            <option value="D02">D02/SALAHGUNA PETAK  OKU</option>
            <option value="D03">D03/SALAHGUNA PETAK MOTOSIKAL</option>
            <option value="D04">D04/HALANGAN (LALUAN AWAM DAN SIARKAKI)</option>
            <option value="D05">D05/ISU VANDALISME</option>
            <option value="D06">D06/MELANGGAR PEDESTRIAN CROSSING</option>
            <option value="D07 ">D07 /HALANGAN / PARKING LUAR PETAK (SMART CCTV)</option>
            <option value="D08">D08/PARKING DI BAHU JALAN</option>
            <option value="D09">D09/AKTA PENGANGKUTAN JALAN 1987</option>
            <option value="KJ01">KJ01/PETAK KUNING/OKU PUDAR</option>
            <option value="KJ02">KJ02/PENUTUP LONGKANG ROSAK/HILANG</option>
            <option value="KJ03">KJ03/TEMBOK/TEBING/SIARKAKI ROSAK</option>
            <option value="LE01">LE01/PENJAJA</option>
            <option value="LE02">LE02/IKLAN "BANNER" DAN "BUNTING"</option>
            <option value="LK01">LK01/HALANGAN DAHAN POKOK</option>
            <option value="PK01">PK01/KAWASAN PEMBIAKAN (VEKTOR)</option>
            <option value="PK02">PK02/HAIWAN LIAR</option>
            <option value="PR01">PR01/SAMPAH </option>
            <option value="PR02">PR02/LONGKANG TERSUMBAT</option>
            <option value="PR03">PR03/SAMPAH (SMART CCTV)</option>
            <option value="">/</option>
            </select>
            </div>
        </div>
      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/laporan/tarikh&daerah')}}">
          <button class="btn btn-primary" type="button">Reset</button>
        </a>
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