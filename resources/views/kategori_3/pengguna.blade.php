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
              <label for="username" class="form-label">Nama </label>
              <input type="text" class="form-control" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">/>
              @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="password" class="form-label">Email</label>
              <input type="text" class="form-control" id="password" name="password"/>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Jenis Pengguna</label>
          <select id="user_type"  class="form-control @error('user_type') is-invalid @enderror" name="user_type" required autocomplete="user_type">   
            <option value="0"><lable>Admin</lable></option> 
            <option value="1"><lable>Pengguna</lable></option> 
        </div>

      <!-- Card footer -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('REGISTER') }}</button>
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
          <th class="col">NAMA</th>
          <th class="col">EMAIL</th>
          <th class="col">PASSWORD</th>
          <th class="col">TINDAKAN</th>
        </tr>
      </thread>
      <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$user->name ?? 'Code not Found'}}</td>
          <td>{{$user->email ?? 'Detail not Found'}}</td>
          <td>{{$user->password ?? 'Detail not Found'}}</td>
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