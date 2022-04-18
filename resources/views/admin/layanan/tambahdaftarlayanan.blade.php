@include('admin.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <main>
                <div class="container-fluid">

                    <!-- Basic Card Example -->
                    <div class="card shadow col-xl-10 col-md-6 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Layanan</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('daftarlayanan.store')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputjenisservice" class="col-sm-2 col-form-label">Jenis Service</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control  @error('jenisservice') is-invalid @enderror" id="jenisservice" name="jenisservice" placeholder="Jenis Service" autofocus value="{{ old('jenisservice') }}">
                                        @error('jenisservice')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga Tipe A</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control  @error('harga_tipea') is-invalid @enderror" id="harga_tipea" name="harga_tipea" placeholder="cth: 150000" autofocus value="{{ old('harga_tipea') }}">
                                        @error('harga_tipea')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga Tipe B</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control  @error('harga_tipeb') is-invalid @enderror" id="harga_tipeb" name="harga_tipeb" placeholder="cth: 150000" autofocus value="{{ old('harga_tipeb') }}">
                                        @error('harga_tipeb')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input  @error('gambar_layanan') is-invalid @enderror" id="gambar" name="gambar_layanan" onchange="previewImage()" autofocus value="{{ old('gambar_layanan') }}">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                            @error('gambar_layanan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                        <a href="/daftarlayanan" class="btn btn-primary btn-icon-split">
                                            <span class="text">Kembali</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    @include('admin.footer')