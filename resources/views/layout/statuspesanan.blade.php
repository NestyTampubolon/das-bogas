@include('layout.navbar')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

    </section><!-- End Intro Single-->
    @if(empty($pesan) && count($pesan) == 0 && empty($booking) )
    <section class="property-grid grid">
        <div class="container">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{url('/')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a>Status Pesanan</a>
                        </li>
                    </ol>
                </nav>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-10 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 text-center">
                        <div class="card-body">
                            <h1>Tidak ada pesanan</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Earnings (Monthly) Card Example -->
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{url('/')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a>Status Pesanan</a>
                        </li>
                    </ol>
                </nav>
                <div class="col-xl-10 col-md-6 mb-4">
                    <h2 class="title-2 justify-content-center">Produk</h2>
                    <div class="card border-left-primary shadow py-2">
                        <div class="card-body">
                            <div class="row no-gutters ">
                                <div class="col col-1">
                                </div>
                                <div class="col col-10">

                                    <form action="" method="post" enctype="multipart/form-data">
                                        @foreach($pesan as $pesan)

                                        <div class="card col-xl-12 col-md-6 ">
                                            <div class="card-body">
                                                <div class="row" style="padding: 10px;">
                                                    <div class="col col-1">
                                                    </div>
                                                    <div class="col col-6">
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                        <div class="price-box d-flex">
                                                            {{$pesan->nama_penerima}}
                                                        </div>
                                                        <div class="price-box d-flex">
                                                            Total Pembayaran : @currency($pesan->total_pembayaran)
                                                        </div>
                                                        <div class="price-box d-flex">
                                                            @if($pesan->status == 'Verifikasi')
                                                            <span class="badge badge-warning">{{$pesan->status}}</span>
                                                            @elseif($pesan->status == 'Proses')
                                                            <span class="badge badge-info">{{$pesan->status}}</span>
                                                            @elseif($pesan->status == 'Antar')
                                                            <span class="badge badge-primary">{{$pesan->status}}</span>
                                                            @elseif($pesan->status == 'Selesai')
                                                            <span class="badge badge-success">{{$pesan->status}}</span>
                                                            @elseif($pesan->status == 'Tolak')
                                                            <span class="badge badge-danger">{{$pesan->status}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col col-4">
                                                        <div class="col-md-8">
                                                            <button type="button" class="btn btn-danger" onclick="window.location.href='/statuspesanan/detail/{{$pesan->id_pemesananproduk}}'">Deskripsi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                            </div>
                                        </div>

                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section><!-- End Property Grid Single-->
    <br><br>
    <section class="property-grid grid">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-10 col-md-6 mb-4">
                    <h2 class="title-2 justify-content-center">Layanan</h2>
                    <div class="card border-left-primary shadow py-2">
                        <div class="card-body">
                            <div class="row no-gutters ">
                                <div class="col col-1">
                                </div>
                                <div class="col col-10">

                                    <form action="" method="post" enctype="multipart/form-data">
                                        @foreach($booking as $booking)

                                        <div class="card col-xl-12 col-md-6 ">
                                            <div class="card-body">
                                                <div class="row" style="padding: 10px;">
                                                    <div class="col col-1">
                                                    </div>
                                                    <div class="col col-6">
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                        <div class="price-box d-flex">
                                                            Tipe Kendaraan : {{$booking->tipe_kendaraan}}
                                                        </div>
                                                        <div class="price-box d-flex">
                                                            Total Pembayaran : @currency($booking->total_pembayaran)
                                                        </div>
                                                        <div class="price-box d-flex">
                                                            @if($booking->status == 'Verifikasi')
                                                            <span class="badge badge-warning">{{$booking->status}}</span>
                                                            @elseif($booking->status == 'Diterima')
                                                            <span class="badge badge-success">{{$booking->status}}</span>
                                                            @elseif($booking->status == 'Ditolak')
                                                            <span class="badge badge-danger">{{$booking->status}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col col-4">
                                                        <div class="col-md-8">
                                                            <button type="button" class="btn btn-danger" onclick="window.location.href='/statuspesananlayanan/detail/{{$booking->id_pembookinganlayanan}}'">Deskripsi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                            </div>
                                        </div>

                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section><!-- End Property Grid Single-->
    @endif
</main>


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