@include('layout.navbar')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

    </section><!-- End Intro Single-->
    @if(empty($daftarjoin) || count($daftarjoin) == 0)
    <section class="property-grid grid">
        <div class="container">
            <div class="row justify-content-center">

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
                <div class="col-xl-10 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2">
                        <div class="card-body" style="padding: 50px;">
                            <div class="row no-gutters ">
                                @foreach($pemesanan as $pemesanans)
                                <div>
                                    <h4>Pemesanan ID</h4>
                                    <h2># {{$pemesanans->id_pemesananproduk}}</h2>
                                </div>
                                <hr>
                                @endforeach
                                <h6>Pesanan Detail</h6>
                                @foreach($daftarjoin as $daftarjoin)
                                <p>Produk : {{$daftarjoin->nama}}</p>
                                <p>Harga : {{$daftarjoin->kuantitas_pesan}}</p>
                                <p>Harga : @currency($daftarjoin->total_harga)</p>
                                <hr style="width:50%;text-align:left;margin-left:0">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Property Grid Single-->
</main>
@endif
@include('layout.footer')