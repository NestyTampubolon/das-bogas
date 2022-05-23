<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Das Bogas Auto Service</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('logo.jpg')}}" rel="icon">
  <link href="{{asset('img')}}/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor')}}/aos/aos.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/jquery/jquery.min.js" rel="stylesheet">
  <!-- Template Main CSS File --> 
  <link href="{{asset('css')}}/sb-admin-2.min.css" rel="stylesheet">
  <link href="{{asset('css')}}/style.css" rel="stylesheet">
  <script src="{{asset('js')}}/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom styles for this template-->
   
</head>

<body class="bg-gradient-primary">

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="/">Das Bogas<span class="color-b"> Auto Service</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href={{url('/')}}>Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href={{url('/produk')}}>Produk</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href={{url('/layanan')}}>Layanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href={{url('/cafe')}}>Kafe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href={{url('/about')}}>Tentang</a>
          </li>
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link active" href={{ route('login') }}>{{ __('Login') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
            <div class="dropdown-menu">

              <a class="dropdown-item " href="/checkout/produk/{{ Auth::user()->user_id}}">Keranjang Produk</a>
              <a class="dropdown-item " href="/checkout/layanan/{{ Auth::user()->user_id}}">Keranjang Layanan</a>
              <a class="dropdown-item " href={{url('/statuspesanan')}}>Status Pemesanan</a>
              <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav><!-- End Header/Navbar -->
  <main id="main">
  <section class="intro-single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">{{ __('Daftar Akun') }}</h1>
                        </div>

                    <div class="card-body">
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nomor_telephone" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Telephone') }}</label>

                                <div class="col-md-8">
                                    <input id="nomor_telephone" type="number" class="form-control @error('nomor_telephone') is-invalid @enderror" name="nomor_telephone" value="{{ old('nomor_telephone') }}"autocomplete="nomor_telephone" autofocus>

                                    @error('nomor_telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary  btn-block text-center">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </section>
  </main>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor')}}/jquery/jquery.min.js"></script>
    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor')}}/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js')}}/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js')}}/demo/datatables-demo.js"></script>


</html>