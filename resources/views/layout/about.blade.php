@include('layout.navbar')

<main id="main">

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
                Tentang
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

      <!-- ======= About Section ======= -->
      <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="{{url('img/das-bogas2.jpg')}}" alt="" height="600px" width="100%">
            </div>
            <div class="sinse-box">
              <p>Berdiri tahun</p>
              <h3 class="sinse-title">
                <br> 8 Februari 2010
              </h3>
             
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{url('img/about-2.jpg')}}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                 
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">
                    <span>Latar belakang berdirinya Das Bogas</span>
                  </h3>
                </div>
                <p class="color-text-a">
                  Arti kata DAS BOGAS yang berasal dari bahasa batak yang artinya pekerjaan yang dilakukan sampai selesai atau tuntas
                </p>
                <p class="color-text-a">
                  Beberapa fasilitas yang tersedia Cafe, free Wi-Fi. Mengatasi berbagai masalah mobil dalam waktu yang singkat dan hasil yang memuaskan.
                  Menerima derek mobil mogok dan jemput cuci mobil. Layanan dari mulai doorsmeer, ganti oli dan servis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- ======= Contact Single ======= -->
  <section class="contact mt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.4621045687763!2d99.11076761568943!3d2.350262958196965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e06b2a2fc185b%3A0x7b0575fa5ebbf823!2sDas%20Bogas%20Auto%20Service!5e0!3m2!1sid!2sid!4v1646035930629!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        @if (Route::has('login'))
        @foreach($pesan as $pesan)
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <form action="{{route('testimoni')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" value="{{$pesan->name}}" disabled required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" value="{{$pesan->email}}" disabled required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="judul" class="form-control form-control-lg form-control-a" placeholder="Judul" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="pesan" class="form-control" cols="45" rows="8" placeholder="Pesan" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-a">Kirim Ulasan</button>
                  </div>
                </div>
              </form>
            </div>
            @endforeach
            @endif
            <div class="col-sm-12 section-t8">
              <div class="row">
                <div class="col-md-7">
                  <form action="" method="post" enctype="multipart/form-data">
              
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="judul" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="pesan" class="form-control" cols="45" rows="8" placeholder="Message" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 my-3">

                      </div>

                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-a">Kirim </button>
                      </div>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
        </div>
  </section><!-- End Contact Single-->

  </div>
  </section><!-- End Latest Properties Section -->


</main><!-- End #main -->


@include('layout.footer')