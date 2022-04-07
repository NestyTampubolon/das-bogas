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
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Produk</h6>
                        </div>
                        <div class="card-body">
                            <form  action="{{route('daftarproduk.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga" name="harga" placeholder="cth: 150000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Produk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Kuantitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="stok" name="stok" placeholder="Jumlah Stok">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                        <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                            <div class="custom-file">
                                            <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar_produk" onchange="previewImage()">
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Tambah</button>                                
                                        <a href="/daftarproduk" class="btn btn-primary btn-icon-split">
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