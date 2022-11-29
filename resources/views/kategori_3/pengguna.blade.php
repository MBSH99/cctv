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
              <label for="name" class="form-label">{{ __('Nama') }}</label>
              <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
            <label for="username" class="form-label">{{ __('ID') }}</label>
            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
            <label for="user_type" class="form-label">{{ __('Pengguna') }}</label>
              <select id="user_type"  class="form-control @error('user_type') is-invalid @enderror" name="user_type" required autocomplete="user_type" style="background-color: none;border: 1px solid black;" >   
                    <option value="" disabled selected>Choose type of user</option> 
                    <option value="0">Admin<lable></lable></option> 
                    <option value="1"><lable>Pengguna</lable></option> 
              </select>

                @error('user_type')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
            <label for="password" class="form-label">{{ __('Kata Laluan') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
          </div>
        </div>
        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Kata Laluan Pengesahan') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
      @foreach($data11 as $item)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->username}}</td>
          <td>{{$item->user_type== '1' ? 'Pengguna':'Admin'}}</td>
          <td>

          <form method="get" action="/kategori_3/delete/{{$item->id}}/"> 
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