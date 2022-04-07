@include('admin.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <main>
                <div class="container-fluid">

                    <!-- Basic Card Example -->
                    <div class="card shadow col-xl-8 col-md-6 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Daftar Cafe</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('daftarcafe.update',$editcafes->id_cafe)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputjenisservice" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_cafe" value="{{$editcafes->id_cafe}}">
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{$editcafes->nama}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_cafe" name="harga_cafe" value="{{$editcafes->harga_cafe}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="exampleFormControlSelect1" id="kategori" name="kategori"  value="{{$editcafes->kategori}}">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Edit</button>
                                        <a href="/daftarcafe" class="btn btn-primary btn-icon-split">
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