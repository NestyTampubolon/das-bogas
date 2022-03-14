@include('admin.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </form>


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <main>
                <div class="container-fluid">

                    <!-- Basic Card Example -->
                    <div class="card shadow col-xl-10 col-md-6 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Daftar Layanan</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('daftarlayanan.update',$editlayanans->id_layanan)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputjenisservice" class="col-sm-2 col-form-label">Jenis Service</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_produk" value="{{$editlayanans->id_layanan}}">
                                        <input type="text" class="form-control" id="jenisservice" name="jenisservice" value="{{$editlayanans->jenisservice}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga Tipe A</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_tipea" name="harga_tipea"  value="{{$editlayanans->harga_tipea}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga Tipe B</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_tipeb" name="harga_tipeb" value="{{$editlayanans->harga_tipeb}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar_layanan" name="gambar_layanan" value="">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                            <img src="{{url('gbr_layanan/'.$editlayanans->gambar_layanan)}}" class="py-1 width="50" height="100" alt="">
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