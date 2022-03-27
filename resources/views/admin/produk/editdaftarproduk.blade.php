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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Daftar produk</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('daftarproduk.update',$editproduks->id_produk)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_produk" value="{{$editproduks->id_produk}}">
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{$editproduks->nama}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga" name="harga"  value="{{$editproduks->harga}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{$editproduks->kategori}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Kuantitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kuantitas" name="kuantitas" value="{{$editproduks->kuantitas}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar_produk" name="gambar_produk" value="">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                            <img src="{{url('gbr_produk/'.$editproduks->gambar_produk)}}" class="py-1 width="50" height="100" alt="">
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