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
        <h2 class="title-2">Produk</h2>
        <div class="container">
            <div class="row justify-content-center">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-10 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2">
                        <div class="card-body">
                            <div class="row no-gutters ">
                                <div class="col col-1">
                                </div>
                                <div class="col col-10">
                                    <form action="{{route('checkout.storepembookinganlayanan')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        @foreach($pesan as $pesan)
                                        <div class="card col-xl-12 col-md-6 ">
                                            <div class="card-body">
                                                <div class="row" style="padding: 10px;">
                                                    <div class="col col-1">
                                                    </div>
                                                    <div class="col col-8">
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pesan->jenisservice}}</div>
                                                        <input type="hidden" name="id_layanan" value="{{$pesan->id_layanan}}">
                                                        <input type="hidden" name="kuantitas" value="{{$pesan->harga}}">

                                                        <div class="price-box d-flex">
                                                            @currency($pesan->harga)
                                                        </div>
                                                        <div class="price-box d-flex">

                                                        </div>
                                                    </div>
                                                    <div class="col col-2">
                                                        <div class="col-md-6 text-center">
                                                            <button type="button" class="btn btn-danger  bottom-50 end-50" onclick="window.location.href='/checkout/deletelayanan/{{$pesan->id_keranjanglayanan}}'">Hapus</button>
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
                                                        <input type="hidden" name="total_pembayaran" value="{{$totals->total}}">
                                                        @endforeach
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="nama">Tipe Kendaraan</label>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tipe_kendaraan" id="exampleRadios1" value="TIPE A" checked>
                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                        TIPE A
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tipe_kendaraan" id="exampleRadios1" value="TIPE B" checked>
                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                        TIPE B
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="form-group col-md-4">
                                                                <label for="nama">Tanggal Service</label>
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <input type="date" class="form-control" name="tanggal_pembookingan" id="tanggal_pembookingan" min="Carbon::now()">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="nama">Pukul</label>
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <input type="time" class="form-control" name="pukul" id="pukul">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keluhan">Keluhan</label>
                                                            <textarea class="form-control" id="keluhan_service" name="keluhan_service" rows="3"></textarea>
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