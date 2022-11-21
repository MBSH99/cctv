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
        <h4 class="fw-bold">Daftar Lokasi CCTV</h4>
      </div>

      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" name="name"/>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="username" class="form-label">ID</label>
              <input type="text" class="form-control" id="username" name="username"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="password" class="form-label">Kata Laluan</label>
              <input type="text" class="form-control" id="password" name="password"/>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="user_type" class="form-label">Pengguna</label>
              <select id="user_type"  class="form-control @error('user_type') is-invalid @enderror" name="user_type" required autocomplete="user_type" style="background-color: none;border: 1px solid black;" >   
                    <option value="" disabled selected>Choose type of user</option> 
                    <option value="0">Admin<lable></lable></option> 
                    <option value="1"><lable>Pengguna</lable></option> 
               </select>
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
          <th class="col">NAMA</th>
          <th class="col">ID</th>
          <th class="col">PENGGUNA</th>
          <th class="col">TINDAKAN</th>
        </tr>
      </thread>
      <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$user->name ?? 'Code not Found'}}</td>
          <td>{{$user->username ?? 'Detail not Found'}}</td>
          <td>{{$user->user_type ?? 'Detail not Found'}}</td>
          <td>

          <form method="get" action="/kategori_3/delete/{{$user->id}}/"> 
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