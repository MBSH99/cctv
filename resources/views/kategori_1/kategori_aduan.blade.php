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
    <form method="post" action="/kategori_1/kategori_aduan" enctype="multipart/form-data">
    @csrf
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Daftar Kategori Aduan</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="aduan_kod" class="form-label">Kod</label>
              <input type="text" class="form-control" id="aduan_kod" name="aduan_kod" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="aduan_detail" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="aduan_detail" name="aduan_detail"/>
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
      <h2>SENARAI KATEGORI ADUAN</h2>
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">NO</th>
          <th class="col">KOD</th>
          <th class="col">KATEGORI ADUAN</th>
          <th class="col">TINDAKAN</th>
        </tr>
      </thread>
      @foreach ($aduans as $aduan)
      <tbody>
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$aduan->aduan_kod  ?? 'Code not Found'}}</td>
          <td>{{$aduan->aduan_detail ?? 'Code not Found'}}</td>
          <td>
            <!-- Edit user button -->
            <form action ="/kategori_1/kategori_aduan/edit{{$aduan->aduan_id}}" method="GET">
            <button type="submit" class="btn btn-success "><i class="fas fa-edit"> EDIT</i></button>
            </form>
            <form method="get" action="/kategori_1/delete/{{$aduan->aduan_id}}/"> 
            <button onclick="return confirm('Betul Ingin Padam Data Ini ?')" class="btn btn-danger button-sm" ><i class="fas fa-trash"> PADAM</i></button>
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