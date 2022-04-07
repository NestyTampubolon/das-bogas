@include('layout.navbar')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-8 col-md-6 mb-4 j">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters ">
                                <div class="col col-6">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <img src="{{asset('img')}}/post-1.jpg" alt="" class="img-b img-fluid" width="400px">
                                    </div>

                                </div>
                                <div class="col col-1">
                                </div>
                                <div class="col col-4">
                                    <h2 class="title-2">{{$layanans->jenisservice}}</h2>
                                    <h4 class="title-3">TIPE A : @currency($layanans->harga_tipea)</h4>
                                    <h4 class="title-3">TIPE B : @currency($layanans->harga_tipeb)</h4>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                                    <form action="{{route('pesan.layanan')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                            <input type="hidden" name="id_layanan" class="form-control" value="{{$layanans->id_layanan}}">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tipe_kendaraan" id="exampleRadios1" value="{{$layanans->harga_tipea}}" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        TIPE A
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tipe_kendaraan" id="exampleRadios1" value="{{$layanans->harga_tipea}}" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        TIPE B
                                                    </label>
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

    @include('layout.footer')