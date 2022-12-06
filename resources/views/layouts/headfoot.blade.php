<!doctype html>
<html lang="en">
  <head>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">
<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
<meta name="theme-color" content="#712cf9">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'CCTV') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bg-info bg-opacity-35">
<!-----Header----->
  <nav class="navbar navbar-expand-lg bg-light bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link px-2 link-dark" aria-current="page" href="/reports/report">Input</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link px-2 link-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Carian
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/carian/mengikut_tarikh">Mengikut Tarikh</a></li>
            <li><a class="dropdown-item" href="/carian/mengikut_kategori">Mengikut Aduan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link px-2 link-dark" aria-current="page" href="/kemaskini/Kemaskini">Kemaskini</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link px-2 link-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/laporan/keseluruhan">Keseluruhan</a></li>
            <li><a class="dropdown-item" href="/laporan/tarikh&daerah">Tarikh & Kategori & Daerah</a></li>
            <li><a class="dropdown-item" href="/laporan/belum_diberi_maklumbalas">Belum Diberi Maklumbalas</a></li>
            <li><a class="dropdown-item" href="/laporan/kes_selesai">Kes Selesai</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link px-2 link-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Penyelenggaraan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/kategori_2/lokasi">Lokasi</a></li>
            <li><a class="dropdown-item" href="/kategori_3/pengguna">Pengguna</a></li>
            <li><a class="dropdown-item" href="/kategori_1/kategori_aduan">Kategori Aduan</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link px-2 link-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link px-2 link-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link px-2 link-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
    </div>
  </div>
</nav>

<div class="content-wrapper">
  @yield('content')
</div>

  <!---Footer---->
  <footer class="footer mt-auto py-3 bg-light bg-gradient">
  <div class="container">
    <p class="text-center text-dark text-muted">&copy; 2022 MAJLIS BANDARAYA SEBERANG PERAI</p>
  </div>
</footer>

  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

  </body>
</html>