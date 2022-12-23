@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-light bg-gradient">
    <form method="post" action="/kategori_2/lokasi/edit/{{$lokasi->lokasi_id}}" enctype="multipart/form-data">
      @csrf
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Edit Lokasi CCTV</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="lokasi_kod" class="form-label">Kod</label>
              <input type="text" class="form-select mb-3 @error('lokasi_kod') is-invalid @enderror" id="lokasi_kod" name="lokasi_kod" value="{{$lokasi->lokasi_kod}}"/>
            </div>
          </div>

          @error('lokasi_kod')
          <div class="alert alert-danger">Sila isi semua maklumat terperinci</div>
          @enderror
                              

          <div class="col-md-6">
            <div class="mb-3">
              <label for="lokasi_detail" class="form-label">Keterangan</label>
              <input type="text" class="form-select mb-3 @error('lokasi_detail') is-invalid @enderror" id="lokasi_detail" name="lokasi_detail" value="{{$lokasi->lokasi_detail}}"/>
            </div>
          </div>
        </div>

        @error('lokasi_detail')
          <div class="alert alert-danger">Sila isi semua maklumat terperinci</div>
          @enderror
                              

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
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