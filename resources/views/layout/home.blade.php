@include('layout.navbar')

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

  <div class="swiper-wrapper">
    @foreach($carousels as $carousel)
    <div class="swiper-slide carousel-item-a intro-item ">
      <img src="{{url('gbr_galeri/'.$carousel->gambar)}}" class="bg-image" style="object-fit: contain;" width="100%" alt="">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="bi bi-cart"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Produk</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Produk yang kami jual merupakan produk berkualitas dengan harga yang terjangkau untuk perawatan kendaraan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="bi bi-calendar4-week"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Layanan</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Jasa yang kami miliki sangat terjamin dapat membuat kendaraan terlihat tetap bagus dan sehat.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="bi bi-card-checklist"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Testimoni</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Kami akan menyarankan jasa dan produk yang paling cocok untuk kendaraan yang anda miliki.
              </p>
            </div>
          </div>
        </div>
      </div>
  </section><!-- End Services Section -->

  <!-- ======= Latest Properties Section ======= -->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Produk Kami </h2>
            </div>
            <div class="title-link">
              <a href="/produk">Semua Produk
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="property-carousel" class="swiper">
        <div class="swiper-wrapper">

          @foreach($produks as $produk)
          <div class="carousel-item-c swiper-slide">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{url('gbr_produk/'.$produk->gambar)}}" alt="" height="400px">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single.html">{{$produk->nama}}
                    </h2>
                  </div>
                  <div class="card-category-b">
                    <a href="#" class="category-b">@currency($produk->harga)</a>
                  </div>
                  <div class="card-date">
                    <a href="produk/detail/{{$produk->id_produk}}" class="link-a">Lihat selengkapnya
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End carousel item -->
          @endforeach

        </div>
      </div>
      <div class="propery-carousel-pagination carousel-pagination"></div>

    </div>
  </section><!-- End Latest Properties Section -->



  <!-- ======= Latest News Section ======= -->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Layanan Kami</h2>
            </div>
            <div class="title-link">
              <a href="/layanan">Semua Layanan
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="news-carousel" class="swiper">
        <div class="swiper-wrapper">
          @foreach($layanans as $layanan)
          <div class="carousel-item-c swiper-slide">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{url('gbr_produk/'.$layanan->gambar_layanan)}}" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single.html">{{$layanan->jenisservice}}
                    </h2>
                  </div>
                  <div class="card-category-b">
                    <a href="#" class="category-b">TIPE A | @currency($layanan->harga_tipea)</a>
                  </div>
                  <br>
                  <div class="card-category-b">
                    <a href="#" class="category-b">TIPE B | @currency($layanan->harga_tipeb)</a>
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
          </div><!-- End carousel item -->
          @endforeach
        </div>
      </div>

      <div class="news-carousel-pagination carousel-pagination"></div>
    </div>
  </section><!-- End Latest News Section -->



</main><!-- End #main -->

<!-- ======= Testimonials Section ======= -->
<section class="section-testimonials section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Galeri</h2>
          </div>
          <div class="title-link">
          </div>
        </div>
      </div>
    </div>

    <div id="testimonial-carousel" class="swiper  col-md-6">
      <div class="swiper-wrapper">
        @foreach($galeris as $galeri)
        <div class="carousel-item-c swiper-slide">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="{{asset('gbr_galeri')}}/{{$galeri->gambar}}" alt="" class="img-b img-fluid" width="100%" height="500px">
            </div>
          </div>
        </div><!-- End carousel item -->
        @endforeach
      </div>
    </div>

    <div class="testimonial-carousel-pagination carousel-pagination"></div>
  </div>
</section><!-- End Latest News Section -->

<section class="property-single  section-t8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div id="property-single-carousel" class="swiper">
          <div class="swiper-wrapper">
            @foreach($testimonis as $testimoni)
            <div class="card p-5 carousel-item-c swiper-slide">
              <div class="border-primary news-box">
                <div class="testimonial-block_user">
                  <div class="testimonial-block_user_info">
                    <h3 class="testimonial-block_user_info_name">{{$testimoni->judul}}</h3>
                    <h4>{{$testimoni->name}}</h4>
                  </div>
                </div>
                <div class="testimonial-block_content">
                  <p>{{$testimoni->pesan}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="property-single-carousel-pagination carousel-pagination"></div>
      </div>
    </div>
</section>

@include('layout.footer')