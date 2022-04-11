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
  <link href="{{asset('vendor')}}/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('vendor')}}/jquery/jquery.min.js" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('css')}}/style.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  ======================================================== -->
</head>

<body>
  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->


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
            <a class="nav-link active" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/produk">Produk</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/layanan">Layanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/cafe">Cafe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/about">About</a>
          </li>
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
            <div class="dropdown-menu">
             
                <a class="dropdown-item " href="/checkout/produk/{{ Auth::user()->user_id}}">Checkout Produk</a>
                <a class="dropdown-item " href="/checkout/layanan/{{ Auth::user()->user_id}}">Checkout Layanan</a>
                <a class="dropdown-item " href="/statuspesanan">Status Pemesanan</a>
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

</body>

</html>