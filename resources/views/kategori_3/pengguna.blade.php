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
    <form method="post" action="/kategori_3/pengguna" enctype="multipart/form-data">
      @csrf
      <!-- Card header -->
      <div class="card-header">
        <h4 class="fw-bold">Daftar Pengguna</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="kakitangan_no" class="form-label">No Kakitangan </label>
              <input type="text" class="form-control" id="kakitangan_no" name="kakitangan_no"/>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="user_type" class="form-label">Capaian</label>
              <select id="user_type" name="user_type" class="form-select mb-3" aria-label="Default select example">
              <option>Sila Pilih</option>
              <option value="ADMIN">ADMIN</option>
              <option value="PENGGUNA">PENGGUNA</option>
              </select>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="kakitangan_name" class="form-label">Nama Penuh</label>
          <input type="text" class="form-control" id="kakitangan_name" name="kakitangan_name"/>
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
          <th class="col">BIL</th>
          <th class="col">NO KAKITANGAN</th>
          <th class="col">NAMA</th>
          <th class="col">JENIS</th>
          <th class="col">TINDAKAN</th>
        </tr>
      </thread>
      <tbody>
      @foreach($kakitangans as $kakitangan)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$kakitangan->kakitangan_no ?? 'Code not Found'}}</td>
          <td>{{$kakitangan->kakitangan_name ?? 'Detail not Found'}}</td>
          <td>{{$kakitangan->kakitangan_jenis ?? 'Detail not Found'}}</td>
          <td>
          <form method="get" action="/kategori_3/delete/{{$kakitangan->kakitangan_id}}/"> 
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