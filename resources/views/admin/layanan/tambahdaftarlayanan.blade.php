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
                            <form  action="{{route('daftarlayanan.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputjenisservice" class="col-sm-2 col-form-label">Jenis Service</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenisservice" name="jenisservice" placeholder="Jenis Service">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga Tipe A</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_tipea" name="harga_tipea" placeholder="cth: 150000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga Tipe B</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_tipeb" name="harga_tipeb" placeholder="cth: 150000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar_layanan" name="gambar_layanan">
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
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