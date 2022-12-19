@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-light bg-gradient">
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Tarikh & Kategori & Daerah</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
        <form action="/laporan/tarikh&daerah" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="row">
            <div class="col-md-6">
              <label for="dateFrom" class="form-label">Dari </label>
              <input type="date" name="dateFrom" id="dateFrom" class="form-control"/>
              </select>
            </div>

            <div class="col-md-6">
              <label for="date" class="form-label">Sehingga </label>
              <input type="date" name="dateTo" id="dateTo" class="form-control"/>
              </select>
            </div>
        </div>


        <div class="row">
          <div class="col-md-6">
        <label for="report_daerah" class="form-label">Daerah</label>
            <select id="report_daerah" name="report_daerah" class="form-select mb-3" aria-label="Default select example">
            <option>Sila Pilih</option>
            <option value="SPU">SPU/SEBERANG PERAI UTARA</option>
            <option value="SPT">SPT/SEBERANG PERAI TENGAH</option>
            <option value="SPS">SPS/SEBERANG PERAI SELATAN</option>
            <option value="LLD">LLD/LAIN-LAIN</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="report_kaduan" class="form-label">Kategori Aduan</label>
            <select id="report_kaduan" name="report_kaduan" class="form-select mb-3" aria-label="Default select example">
                            <option>Sila Pilih</option>
                            <option value="SISA BINAAN">SISA BINAAN
                            <option value="BINAAN(STRUKTUR) TANPA KEBENARAN">BINAAN(STRUKTUR) TANPA KEBENARAN
                            <option value="PARKING LUAR PETAK">PARKING LUAR PETAK
                            <option value="SALAHGUNA PETAK OKU">SALAHGUNA PETAK  OKU
                            <option value="SALAHGUNA PETAK MOTOSIKAL">SALAHGUNA PETAK MOTOSIKAL
                            <option value="HALANGAN (LALUAN AWAM DAN SIARKAKI)">HALANGAN (LALUAN AWAM DAN SIARKAKI)
                            <option value="ISU VANDALISME">ISU VANDALISME
                            <option value="MELANGGAR PEDESTRIAN CROSSING">MELANGGAR PEDESTRIAN CROSSING
                            <option value="HALANGAN / PARKING LUAR PETAK (SMART CCTV)">HALANGAN / PARKING LUAR PETAK (SMART CCTV)
                            <option value="PARKING DI BAHU JALAN">PARKING DI BAHU JALAN
                            <option value="AKTA PENGANGKUTAN JALAN 1987">AKTA PENGANGKUTAN JALAN 1987
                            <option value="PETAK KUNING/OKU PUDAR">PETAK KUNING/OKU PUDAR
                            <option value="PENUTUP LONGKANG ROSAK/HILANG">PENUTUP LONGKANG ROSAK/HILANG
                            <option value="TEMBOK/TEBING/SIARKAKI ROSAK">TEMBOK/TEBING/SIARKAKI ROSAK
                            <option value="PENJAJA">PENJAJA
                            <option value="IKLAN BANNER DAN BUNTING">IKLAN "BANNER" DAN "BUNTING"
                            <option value="HALANGAN DAHAN POKOK">HALANGAN DAHAN POKOK
                            <option value="KAWASAN PEMBIAKAN (VEKTOR)">KAWASAN PEMBIAKAN (VEKTOR)
                            <option value="HAIWAN LIAR">HAIWAN LIAR
                            <option value="SAMPAH">SAMPAH 
                            <option value="LONGKANG TERSUMBAT">LONGKANG TERSUMBAT
                            <option value="SAMPAH (SMART CCTV)">SAMPAH (SMART CCTV)
                            <option value=""></option>
            </select>
          </div>
        </div>
      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit dfgfxgf</button>
        </a>
      </div>
    </form>
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