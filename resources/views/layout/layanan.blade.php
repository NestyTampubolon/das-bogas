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
                    <input type="text" class="form-control" placeholder="Cari" name="search" value="{{request('search')}}">
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
                <input type="text" class="form-control" placeholder="Cari" name="search" value="{{request('search')}}">
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
                <img src="{{url('gbr_layanan/'.$layanan->gambar_layanan)}}" alt="" class="img-b img-fluid">
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
                  <a href="layanan/detail/{{$layanan->id_layanan}}" class="link-a">Lihat Selengkapnya
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

<!-- ======= Footer ======= -->
<section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="w-header-a">
            <img src="{{asset('logo2.png')}}" width="300px" alt="">
            <h3 class="w-title-a text-brand">Das Bogas Auto Service</h3>
          </div>
          <div class="w-body-a">
          </div>
          <div class="w-footer-a">
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a">Jam Operasi : :</span> 08:00 - 17:00 setiap hari
              </li>
              <li class="color-a">
                <span class="color-text-a">Phone :</span> 085262323979
              </li>
              <li class="color-a">
                <span class="color-text-a">Email
                  :
                </span> bengkeldasbogas@gmail.com
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">PETA</h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Home</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Produk</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Layanan</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Cafe</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Tentang</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">LOKASI</h3>
          </div>
          <div class="w-body-a">
            <p>Jl. Pasar Melintang Tambunan, Desa Lumban Pea Timur, Kec. Balige, Kab. Toba</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>

  <!-- ======= Footer ======= -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="{{$instagram}}" target="_blank">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{$twitter}}" target="_blank">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{$youtube}}" target="_blank">
                  <i class="bi bi-youtube" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{$facebook}}" target="_blank">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Kelompok 3 PA2</span> 2022
            </p>
          </div>
          <div class="credits">
            By <a href="">INSTITUT TEKNOLOGI DEL</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- @if(Session::has('success'))
  <script>
    toastr.success("{{Session::get('success') }}")
  </script>
  @endif
  @if(Session::has('warning'))
  <script>
    toastr.warning("{{Session::get('warning') }}")
  </script>
  @endif -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('js')}}/previewimg.js"></script>
  <script src="{{asset('js')}}/owl.carousel.js"></script>
  <script src="{{asset('js')}}/jquery-3.3.1.slim.min.js"></script>
  <script src="{{asset('vendor')}}/aos/aos.js"></script>
  <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('vendor')}}/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('vendor')}}/php-email-form/validate.js"></script>
  <script>
    AOS.init({
      duration: 500,
      easing: 'ease-in-out',
      once: false,
      mirror: false
    });
  </script>

  <!-- Template Main JS File -->
  <script src="{{asset('js')}}/main.js"></script>

  </body>

  </html>