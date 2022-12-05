<!doctype html>
<html lang="en">
  <head>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">

    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CCTV </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bg-info bg-gradient">

  <div class="container-expand-lg text-black bg-info bg-light">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="https://www.mbsp.gov.my/index.php/ms/" class="nav-link px-2 link-dark">MBSP</a></li>
         @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 light:text-gray-500 underline">Home</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 light:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </ul>
    </header>
  </div>

<div class="b-example-divider"></div>

<!----Center page---->
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">SISTEM MAKLUMAT CCTV</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-dark bg-gradient" method="POST" action="{{ route('login') }}">
        @csrf
          <div class="form-floating mb-3">

            <input type="username" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            <label for="floatingInput">{{ __('ID') }}</label>
            
            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

          </div>

          <div class="form-floating mb-3">

            <input type="password" class="form-control" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <label for="floatingPassword">Password</label>
            
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

          </div>

          <div class="form-floating mb-3">

            <select id="user_type"  class="form-control @error('user_type') is-invalid @enderror" name="user_type" required autocomplete="user_type" style="background-color: none;border: 1px solid black;" >   
                                    <option value="" disabled selected>Choose type of user</option> 
                                    <option value="0">Admin<lable></lable></option> 
                                    <option value="1"><lable>Pengguna</lable></option> 
                                </select>
            <label for="floatingInput">{{ __('Roles') }}</label>
            
            @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Login') }}</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
  <br><br>

  <footer class="footer mt-auto py-3 bg-light bg-gradient">
  <div class="container">
  <p class="text-center text-dark text-muted">&copy; 2022 MAJLIS BANDARAYA SEBERANG PERAI</p>
  </div>
</footer>
  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>