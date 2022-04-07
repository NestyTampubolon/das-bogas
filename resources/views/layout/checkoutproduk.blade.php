@include('layout.navbar')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

    </section><!-- End Intro Single-->
    @if(empty($pesan) || count($pesan) == 0)
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
                    <h2 class="title-2 justify-content-center">Produk</h2>
                    <div class="card border-left-primary shadow py-2">
                        <div class="card-body">
                            <div class="row no-gutters ">
                                <div class="col col-1">
                                </div>
                                <div class="col col-10">
                                    <form action="{{route('checkout.storepemesananproduk')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        @foreach($pesan as $pesan)
                                        <div class="card col-xl-12 col-md-6 ">
                                            <div class="card-body">
                                                <div class="row" style="padding: 10px;">
                                                    <div class="col col-1">
                                                    </div>
                                                    <div class="col col-8">
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pesan->nama}}</div>
                                                        <input type="hidden" name="id_produk" value="{{$pesan->id_produk}}">
                                                        <input type="hidden" name="kuantitas" value="{{$pesan->kuantitas}}">
                                                        <input type="hidden" name="total" value="{{$pesan->total}}">
                                                        <div class="price-box d-flex">
                                                            {{$pesan->kuantitas}}
                                                        </div>
                                                        <div class="price-box d-flex">
                                                            @currency($pesan->total)
                                                        </div>
                                                    </div>
                                                    <div class="col col-2">
                                                        <div class="col-md-6 text-center">
                                                            <button type="button" class="btn btn-danger  bottom-50 end-50" onclick="window.location.href='/checkout/delete/{{$pesan->id_keranjangproduk}}'">Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                            </div>
                                        </div> @endforeach
                                        <br>

                                        <div class="col-md-12 text-center bottom-center" style="margin-Top : 90px;">
                                            <div class="row">
                                                <div class="col col-2">
                                                </div>
                                                <div class="col col-4">
                                                    @foreach($total as $totals)
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> @currency($totals->total)</div>
                                                    @endforeach
                                                </div>
                                                <div class="col col-4"><button type="button" class="btn btn-a" data-bs-toggle="modal" data-bs-target="#exampleModal">Checkout</button>

                                                </div>

                                            </div>
                                        </div>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @foreach($total as $totals)
                                                        <input type="hidden" name="total_harga" value="{{$totals->total}}">
                                                        @endforeach
                                                        <div class="form-group">
                                                            <label for="nama">Nama Penerima</label>
                                                            <input type="text" class="form-control form-control-user" name="nama_penerima" id="nama_penerima" placeholder="nama penerima">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_penerima">Alamat</label>
                                                            <textarea class="form-control" id="alamat_penerima" name="alamat_penerima" rows="3"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Kirim</button>
                                                    </div>
                                    </form>
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
    @include('layout.footer')