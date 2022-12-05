@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
<div class="container mt-5">
  <div class="card text-bg-light bg-gradient">
    <form method="post" action="/kategori_1/kategori_aduan/edit{{$aduan->aduan_id}}" enctype="multipart/form-data">
    @csrf
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Edit Kategori Aduan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="aduan_kod" class="form-label">Kod</label>
              <input type="text" class="form-control" id="aduan_kod" name="aduan_kod"  value="{{$aduan->aduan_kod}}"/>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="aduan_detail" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="aduan_detail" name="aduan_detail" value="{{$aduan->report_detail}}"/>
            </div>
          </div>
        </div>

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