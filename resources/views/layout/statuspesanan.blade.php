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
                                                            Status : {{$pesan->status}}
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
                                                            Status : {{$booking->status}}
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

@include('layout.footer')