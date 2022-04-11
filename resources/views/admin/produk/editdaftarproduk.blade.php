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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Daftar produk</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('daftarproduk.update',$editproduks->id_produk)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_produk" value="{{$editproduks->id_produk}}">
                                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$editproduks->nama}}">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{$editproduks->harga}}">
                                        @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control  @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{$editproduks->kategori}}">
                                        @error('kategori')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Kuantitas</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control  @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{$editproduks->stok}}">
                                        @error('stok')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <img src="{{url('gbr_produk/'.$editproduks->gambar)}}" class="img-preview mb-3 col-sm-5" alt="">
                                            <input type="file" class="custom-file-input  @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{url('gbr_produk/'.$editproduks->gambar)}}" onchange="previewImage()">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                            @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row py-xl-5">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Edit</button>
                                        <button type="submit" class="btn btn-primary">Kembali</button>
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