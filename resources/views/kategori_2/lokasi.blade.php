@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')
@if(\Session('success'))
        <div class="alert alert-primary" role="alert">
        {{session('success')}}
        </div>
        @endif
        
<div class="container mt-5">
  <div class="card text-bg-success bg-gradient">
    <form method="post" action="/kategori_2/lokasi" enctype="multipart/form-data">
      @csrf
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Daftar Lokasi CCTV</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="lokasi_kod" class="form-label">Kod</label>
              <input type="text" class="form-control" id="lokasi_kod" name="lokasi_kod"/>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="lokasi_detail" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="lokasi_detail" name="lokasi_detail"/>
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

<div class="mb-3">
  <div class="card shadow">
    <div class="card-header">
      <h2>SENARAI LOKASI</h2>
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">NO</th>
          <th class="col">KOD</th>
          <th class="col">LOKASI</th>
          <th class="col">TINDAKAN</th>
        </tr>
      </thread>
      <tbody>
      @foreach($lokasis as $lokasi)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$lokasi->lokasi_kod ?? 'Code not Found'}}</td>
          <td>{{$lokasi->lokasi_detail ?? 'Detail not Found'}}</td>
          <td>

          <form action ="/kategori_2/lokasi/edit/{{$lokasi->lokasi_id}}" method="GET">
          <button type="submit" class="btn btn-success "><i class="fas fa-edit"> EDIT</i></button>
          </form>
          <form method="get" action="/kategori_2/delete/{{$lokasi->lokasi_id}}/"> 
          <button onclick="return confirm('Betul Ingin Padam Data Ini ?')" class="btn btn-danger button-btn" ><i class="fas fa-trash"> DELETE</i></button>
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
<br><br><br>
<br><br><br>
<br><br><br>
@endsection