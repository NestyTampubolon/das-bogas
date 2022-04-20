@include('layout.navbar')
<main id="main">

  @if(empty($layanans) || count($layanans) == 0 )
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Layanan Tidak Ditemukan</h1>
            <span class="color-text-a">Grid News</span>
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <form action="/layanan">
                  <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
                    <button class="btn btn-danger" type="submit" id="button-addon2">Button</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                News Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  @else
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href={{url('/')}}>Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Layanan
              </li>
            </ol>
          </nav>
          <div class="col-md-12 text-center">
            <form action="/layanan">
              <div class="input-group mb-3 ">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
                <button class="btn btn-danger" type="submit" id="button-addon2"> <i class="bi bi-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->



  <!-- =======  Blog Grid ======= -->
  <section class="news-grid grid">
    <div class="container">
      <div class="row">
        @foreach($layanans as $layanan)
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <a href="layanan/detail/{{$layanan->id_layanan}}" class="link-a">
                <img src="{{asset('img')}}/post-1.jpg" alt="" class="img-b img-fluid">
              </a>
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="layanan/detail/{{$layanan->id_layanan}}">{{$layanan->jenisservice}}
                  </h2>
                </div>
                <div class="card-category-b">
                  <a class="category-b">TIPE A | @currency($layanan->harga_tipea)</a>
                </div>
                <br>
                <div class="card-category-b">
                  <a class="category-b">TIPE B | @currency($layanan->harga_tipeb)</a>
                </div>
                <br>
                <div class="card-date">
                  <a href="layanan/detail/{{$layanan->id_layanan}}" class="link-a">Click here to view
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </section><!-- End Blog Grid-->

</main><!-- End #main -->
@endif
@include('layout.footer')