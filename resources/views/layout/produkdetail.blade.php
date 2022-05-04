@include('layout.navbar')
@include('sweetalert::alert')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href={{url('/')}}>Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href={{url('/produk')}}>Produk</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Produk Detail
                    </li>
                </ol>
            </nav>
            <div class="row justify-content-center">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-8 col-md-6 mb-4 j">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters ">
                                <div class="col col-6">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <img src="{{asset('gbr_produk')}}/{{$produks->gambar}}" alt="" class="img-b img-fluid" width="400px">
                                    </div>

                                </div>
                                <div class="col col-1">
                                </div>
                                <div class="col col-4">
                                    <h2 class="title-2">{{$produks->nama}}</h2>
                                    <h2 class="title-2">@currency($produks->harga)</h2>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                                    <div class="price-box d-flex">
                                        tersisa : &nbsp {{$produks->stok}}
                                    </div>
                                    <form action="{{route('pesan.produk')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_produk" class="form-control" value="{{$produks->id_produk}}">
                                        <input type="hidden" name="harga" required="required" class="form-control" value="{{$produks->harga}}">
                                        <input type="hidden" name="stok" required="required" class="form-control" value="{{$produks->stok}}">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <input type="number" name="kuantitas" class="form-control form-control-lg form-control-a  @error('kuantitas') is-invalid @enderror" autofocus value="{{ old('kuantitas') }}">
                                                    @error('kuantitas')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="col-md-12 text-center bottom-center" style="margin-Top : 90px;">
                                            <button type="submit" class="btn btn-a ">Kirim</button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Property Grid Single-->

    <!-- @if(Session::has('success'))
    <script>
        toastr.success("{{Session::get('success') }}")
    </script>
    @endif
    -->
    @include('layout.footer')