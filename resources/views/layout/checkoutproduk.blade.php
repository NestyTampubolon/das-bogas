@include('layout.navbar')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

    </section><!-- End Intro Single-->
    @if(empty($pesan) || count($pesan) == 0)
    <section class="property-grid grid">
        <div class="container">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{url('/')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a>Keranjang Produk</a>
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
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{url('/')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a>Keranjang Produk</a>
                        </li>
                    </ol>
                </nav>
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
                                                            Kuantitas : {{$pesan->kuantitas}}
                                                        </div>
                                                        <div class="price-box d-flex">
                                                            Total : @currency($pesan->total)
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
                                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body ">
                                                        @foreach($total as $totals)
                                                        <input type="hidden" name="total_harga" value="{{$totals->total}}">

                                                        <h5>{{ Auth::user()->name}}, Silahkan lakukan pembayaran @currency($totals->total)</h5>
                                                        <h6>Payment Information</h6>
                                                        <p>Silahkan transfer ke salah satu rekening berikut : </p>
                                                        <div class="row m-2">
                                                            <div class="col-md-2">
                                                                <img src="{{url('img/bank_bca.png')}}" alt="" height="20px">
                                                            </div>
                                                            <div class="col-md-4">
                                                                No Rek 000000000001
                                                            </div>
                                                            <div class="col-md-6">

                                                            </div>
                                                        </div>
                                                        <div class="row m-2">
                                                            <div class="col-md-2">
                                                                <img src="{{url('img/bank_bni.png')}}" alt="" height="20px">
                                                            </div>
                                                            <div class="col-md-4">
                                                                No Rek 000000000001
                                                            </div>
                                                            <div class="col-md-6">

                                                            </div>
                                                        </div>
                                                        <div class="row m-2">
                                                            <div class="col-md-2">
                                                                <img src="{{url('img/bank-mandiri.png')}}" alt="" height="20px">
                                                            </div>
                                                            <div class="col-md-4">
                                                                No Rek 000000000001
                                                            </div>
                                                            <div class="col-md-6">

                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <div class="form-group row m-2">
                                                            <div class="col-md-3">
                                                                <label for="nama">Nama Penerima</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control form-control-user @error('nama_penerima') is-invalid @enderror" name=" nama_penerima" id="nama_penerima" placeholder="nama penerima" autofocus value="{{ old('jenisservice') }}">
                                                                @error('nama_penerima')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-2">
                                                            <div class="col-md-3">
                                                                <label for="form-control alamat_penerima">Alamat</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control @error('alamat_penerima') is-invalid @enderror" id="alamat_penerima" name="alamat_penerima" rows="3" autofocus value="{{ old('alamat_penerima') }}"></textarea>
                                                                @error('alamat_penerima')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-2">
                                                            <div class="col-md-3">
                                                                <label for="bukti_pembayaran">Bukti Pembayaran</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                                                <input class="form-control  @error('bukti_pembayaran') is-invalid @enderror" type="file" id="formFile" id="gambar" name="bukti_pembayaran" onchange="previewImage()" autofocus value="{{ old('bukti_pembayaran') }}">
                                                                @error('bukti_pembayaran')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <h6>Note : Silahkan transfer sesuai dengan total pembayaran yang tertera, tidak kurang dan tidak lebih. Kemudian masukkan bukti pembayaran dan tunggu hingga kami
                                                            mengkonfirmasinya. Terimakasih
                                                        </h6>
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