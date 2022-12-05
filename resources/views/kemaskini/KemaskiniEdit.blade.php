@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

@if(\Session('success'))
        <div class="alert alert-primary" role="alert">
        {{session('success')}}
        </div>
        @endif

<div class="container mt-5">
 
  <div class="card text-bg-light bg-gradient">
    <form method="post" action="/kemaskini/Kemaskini/edit/{{$report->report_id}}" enctype="multipart/form-data" value="{{$report->report_image}}">
       @csrf
       <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Edit Laporan </h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mb-3">
              <label for="date" class="form-label">Tarikh Kejadian</label>
              <input type="date" id="report_tarikh" name="report_tarikh" class="form-control" value="{{$report->report_tarikh}}"/>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mb-3">
              <label for="time" class="form-label">Waktu Kejadian</label>
              <input type="time" id="report_masa" name="report_masa" class="form-control" value="{{$report->report_masa}}"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="report_lokasi" class="form-label">No CCTV / Lokasi</label>
            <select id="report_lokasi" name="report_lokasi" class="form-select mb-3" aria-label="Default select example">
              <option>Sila Pilih</option>
              @foreach($data as $lokasi)
              <option value="<?php echo $lokasi->lokasi_detail; ?>"> <?php echo $lokasi->lokasi_detail; ?>  </option>
              @endforeach
              <option value="">/</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="report_daerah" class="form-label">Daerah</label>
            <select id="report_daerah" name="report_daerah" class="form-select mb-3" aria-label="Default select example">
            <option>Sila Pilih</option>
            <option value="SPU" @if ($report->report_daerah=="SPU") selected @endif>SPU/SEBERANG PERAI UTARA</option>
            <option value="SPT" @if ($report->report_daerah=="SPT") selected @endif>SPT/SEBERANG PERAI TENGAH</option>
            <option value="SPS" @if ($report->report_daerah=="SPS") selected @endif>SPS/SEBERANG PERAI SELATAN</option>
            <option value="LLD" @if ($report->report_daerah=="LLD") selected @endif>LLD/LAIN-LAIN</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="report_kaduan" class="form-label">Kategori Aduan</label>
            <select id="report_kaduan" name="report_kaduan" class="form-select mb-3" aria-label="Default select example">
            <option>Sila Pilih</option>
            @foreach($data1 as $aduan)
              <option value="<?php echo $aduan->aduan_detail; ?>"> <?php echo $aduan->aduan_detail; ?>  </option>
              @endforeach
            <option value="">/</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="report_saduan" class="form-label">Status Aduan</label>
            <select id="report_saduan" name="report_saduan" class="form-select mb-3" aria-label="Default select example">
              <option>Sila Pilih</option>
              <option value="TINDAKAN JABATAN" @if ($report->report_saduan=="TINDAKAN JABATAN") selected @endif>TINDAKAN JABATAN</option>
              <option value="SELESAI" @if ($report->report_saduan=="SELESAI") selected @endif>SELESAI</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="report_jabatan" class="form-label">Jabatan</label>
            <select id="report_jabatan" name="report_jabatan" class="form-select mb-3" aria-label="Default select example">
            <option>Sila Pilih</option>
            <option value="101/KHIDMAT PENGURUSAN" @if ($report->report_jabatan=="101/KHIDMAT PENGURUSAN") selected @endif>101/KHIDMAT PENGURUSAN</option>
            <option value="102/UNDANG-UNDANG" @if ($report->report_jabatan=="102/UNDANG-UNDANG") selected @endif>102/UNDANG-UNDANG</option>
            <option value="103/PERKHIDMATAN PERBANDARAN" @if ($report->report_jabatan=="103/PERKHIDMATAN PERBANDARAN") selected @endif>103/PERKHIDMATAN PERBANDARAN</option>
            <option value="104/KEJURUTERAAN" @if ($report->report_jabatan=="104/KEJURUTERAAN") selected @endif>104/KEJURUTERAAN</option>
            <option value="105/BANGUNAN" @if ($report->report_jabatan=="105/BANGUNAN") selected @endif>105/BANGUNAN</option>
            <option value="106/PERANCANG BANDAR" @if ($report->report_jabatan=="106/PERANCANG BANDAR") selected @endif>106/PERANCANG BANDAR</option>
            <option value="107/PERBENDAHARAAN" @if ($report->report_jabatan=="107/PERBENDAHARAAN") selected @endif>107/PERBENDAHARAAN</option>
            <option value="108/PENILAIAN DAN PENGURUSAN HARTA" @if ($report->report_jabatan=="108/PENILAIAN DAN PENGURUSAN HARTA") selected @endif>108/PENILAIAN DAN PENGURUSAN HARTA</option>
            <option value="109/VETERINAR" @if ($report->report_jabatan=="109/VETERINAR") selected @endif>109/VETERINAR</option>
            <option value="110/INDUSTRI" @if ($report->report_jabatan=="110/INDUSTRI") selected @endif>110/INDUSTRI</option>
            <option value="111/KEMASYARAKATAN" @if ($report->report_jabatan=="111/KEMASYARAKATAN") selected @endif>111/KEMASYARAKATAN</option>
            <option value="112/PELESENAN" @if ($report->report_jabatan=="112/PELESENAN") selected @endif>112/PELESENAN</option>
            <option value="113/PERKHIDMATAN KESIHATAN" @if ($report->report_jabatan=="113/PERKHIDMATAN KESIHATAN") selected @endif>113/PERKHIDMATAN KESIHATAN</option>
            <option value="114/DIREKTORAT PENGUATKUASAAN" @if ($report->report_jabatan=="114/DIREKTORAT PENGUATKUASAAN") selected @endif>114/DIREKTORAT PENGUATKUASAAN</option>
            <option value="115/PESURUHJAYA BANGUNAN" @if ($report->report_jabatan=="115/PESURUHJAYA BANGUNAN") selected @endif>115/PESURUHJAYA BANGUNAN</option>
            <option value="116/LANDSKAP" @if ($report->report_jabatan=="116/LANDSKAP") selected @endif>116/LANDSKAP</option>
            <option value="117/KORPORAT DAN PERHUBUNGAN ANTARABANGSA" @if ($report->report_jabatan=="117/KORPORAT DAN PERHUBUNGAN ANTARABANGSA") selected @endif>117/KORPORAT DAN PERHUBUNGAN ANTARABANGSA</option>
            <option value="118/TEKNOLOGI INFORMASI DAN KOMUNIKASI" @if ($report->report_jabatan=="118/TEKNOLOGI INFORMASI DAN KOMUNIKASI") selected @endif>118/TEKNOLOGI INFORMASI DAN KOMUNIKASI</option>
            <option value="119/PENGURUSAN KRISIS" @if ($report->report_jabatan=="119/PENGURUSAN KRISIS") selected @endif>119/PENGURUSAN KRISIS</option>
            <option value="120/UNIT AUDIT DALAMAN" @if ($report->report_jabatan=="120/UNIT AUDIT DALAMAN") selected @endif>120/UNIT AUDIT DALAMAN</option>
            <option value="121/PUSAT SETEMPAT (OSC)" @if ($report->report_jabatan=="121/PUSAT SETEMPAT (OSC)") selected @endif>121/PUSAT SETEMPAT (OSC)</option>
            <option value="122/UNIT PELANCONGAN, SENI DAN WARISAN" @if ($report->report_jabatan=="122/UNIT PELANCONGAN, SENI DAN WARISAN") selected @endif>122/UNIT PELANCONGAN, SENI DAN WARISAN</option>
            <option value="123/UNIT BUTTERWORTH BARU" @if ($report->report_jabatan=="123/UNIT BUTTERWORTH BARU") selected @endif>123/UNIT BUTTERWORTH BARU</option>
            <option value="124/BAHAGIAN KESELAMATAN DAN KOMUNITI" @if ($report->report_jabatan=="124/BAHAGIAN KESELAMATAN DAN KOMUNITI") selected @endif>124/BAHAGIAN KESELAMATAN DAN KOMUNITI</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="report_masalapor" class="form-label">Masa Di Lapor</label>
            <input type="time" id="report_masalapor" name="report_masalapor" class="form-control" value="{{$report->report_masalapor}}"/>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="report_laporan" class="form-label">Laporan Kejadian</label>
             <input type="text" class="form-control" id="report_laporan" name="report_laporan" value="{{$report->report_laporan}}">
            </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="report_image" class="form-label">Lampiran</label>
             <input type="file" class="form-control" id="report_image" name="report_image" src="/images/{{ $report->report_image }}" onchange="preview()">
             <br>
             <br>
            <img id="frame" src="" class="rounded mx-auto d-block" />
            </div>
        </div>
        <br>

        <div class="row">
          <div class="mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
  </div>
</div>
<script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('report_image').value = null;
                frame.src = "";
            }
        </script>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection