@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container mt-5">
  <div class="card text-bg-light bg-gradient">
    <form>
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Carian Mengikut Kategori Aduan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <form action="/carian/mengikut_kategori" method="post">
        <div class="mb-3">
          <label for="kaduan" class="form-label">Sila Pilih Kategori</label>
          <select type="search" id="kaduan" name="kaduan" class="form-select mb-3" aria-label="Default select example">
                            <option selected>Sila Pilih</option>
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

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection