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
    <form method="post" action="/reports/report" enctype="multipart/form-data">
       @csrf
       <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Daftar Laporan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
      <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mb-3">
              <label for="date" class="form-label">Tarikh Kejadian</label>
              <input type="date" id="report_tarikh" name="report_tarikh" class="form-control"/>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mb-3">
              <label for="time" class="form-label">Waktu Kejadian</label>
              <input type="time" id="report_masa" name="report_masa" class="form-control" />
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
            <option value="SPU">SPU/SEBERANG PERAI UTARA</option>
            <option value="SPT">SPT/SEBERANG PERAI TENGAH</option>
            <option value="SPS">SPS/SEBERANG PERAI SELATAN</option>
            <option value="LLD">LLD/LAIN-LAIN</option>
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
              <option value="TINDAKAN JABATAN">TINDAKAN JABATAN</option>
              <option value="SELESAI">SELESAI</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="report_jabatan" class="form-label">Jabatan</label>
            <select id="report_jabatan" name="report_jabatan" class="form-select mb-3" aria-label="Default select example">
            <option>Sila Pilih</option>
            <option value="101/KHIDMAT PENGURUSAN">101/KHIDMAT PENGURUSAN</option>
            <option value="102/UNDANG-UNDANG">102/UNDANG-UNDANG</option>
            <option value="103/PERKHIDMATAN PERBANDARAN">103/PERKHIDMATAN PERBANDARAN</option>
            <option value="104/KEJURUTERAAN">104/KEJURUTERAAN</option>
            <option value="105/BANGUNAN">105/BANGUNAN</option>
            <option value="106/PERANCANG BANDAR">106/PERANCANG BANDAR</option>
            <option value="107/PERBENDAHARAAN">107/PERBENDAHARAAN</option>
            <option value="108/PENILAIAN DAN PENGURUSAN HARTA">108/PENILAIAN DAN PENGURUSAN HARTA</option>
            <option value="109/VETERINAR">109/VETERINAR</option>
            <option value="110/INDUSTRI">110/INDUSTRI</option>
            <option value="111/KEMASYARAKATAN">111/KEMASYARAKATAN</option>
            <option value="112/PELESENAN">112/PELESENAN</option>
            <option value="113/PERKHIDMATAN KESIHATAN">113/PERKHIDMATAN KESIHATAN</option>
            <option value="114/DIREKTORAT PENGUATKUASAAN">114/DIREKTORAT PENGUATKUASAAN</option>
            <option value="115/PESURUHJAYA BANGUNAN">115/PESURUHJAYA BANGUNAN</option>
            <option value="116/LANDSKAP">116/LANDSKAP</option>
            <option value="117/KORPORAT DAN PERHUBUNGAN ANTARABANGSA">117/KORPORAT DAN PERHUBUNGAN ANTARABANGSA</option>
            <option value="118/TEKNOLOGI INFORMASI DAN KOMUNIKASI">118/TEKNOLOGI INFORMASI DAN KOMUNIKASI</option>
            <option value="119/PENGURUSAN KRISIS">119/PENGURUSAN KRISIS</option>
            <option value="120/UNIT AUDIT DALAMAN">120/UNIT AUDIT DALAMAN</option>
            <option value="121/PUSAT SETEMPAT (OSC)">121/PUSAT SETEMPAT (OSC)</option>
            <option value="122/UNIT PELANCONGAN, SENI DAN WARISAN">122/UNIT PELANCONGAN, SENI DAN WARISAN</option>
            <option value="123/UNIT BUTTERWORTH BARU">123/UNIT BUTTERWORTH BARU</option>
            <option value="124/BAHAGIAN KESELAMATAN DAN KOMUNITI">124/BAHAGIAN KESELAMATAN DAN KOMUNITI</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="report_masalapor" class="form-label">Masa Di Lapor</label>
            <input type="time" id="report_masalapor" name="report_masalapor" class="form-control"/>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="report_laporan" class="form-label">Laporan Kejadian</label>
             <input type="text" class="form-control" id="report_laporan" name="report_laporan">
            </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="report_image" class="form-label">Lampiran</label>
             <input type="file" class="form-control" id="report_image" name="report_image" onchange="preview()">
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
    $(document).ready(function () {
	var fileTypes = ['jpg', 'jpeg', 'png', 'bmp'];  //acceptable file types
	$("report:file").change(function (evt) {
	    var parentEl = $(this).parent();
	    var tgt = evt.target || window.event.srcElement,
	                    files = tgt.files;

	    // FileReader support
	    if (FileReader && files && files.length) {
	        var fr = new FileReader();
	        var extension = files[0].name.split('.').pop().toLowerCase(); 
	        fr.onload = function (e) {
	        	success = fileTypes.indexOf(extension) > -1;
	        	if(success)
		        //	$(parentEl).append('<img src="' + fr.result + '" class="preview"/>');
                    /*preview image*/
              //var imageViewer = document.getElementById('imageViewer').src = fr.result;
	        }
	        fr.onloadend = function(e){
	            console.debug("Load End");
	        }
	        fr.readAsDataURL(files[0]);
	    }   
	});
});
</script>
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

@endsection