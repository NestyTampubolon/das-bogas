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
                    <div class="card shadow col-xl-8 col-md-6 mb-4">
                        <div class="card-header">
                            <h6 class=" font-weight-bold text-primary">Tambah Daftar Galeri</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('daftargaleri.store')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputjenisservice" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="judul" autofocus value="{{ old('judul') }}">
                                        @error('judul')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                            <input type="file" class="custom-file-input  @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="" onchange="previewImage()" autofocus value="{{ old('gambar') }}">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                            @error('gambar')
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
                                        <a href="/daftargaleri" class="btn btn-primary ">
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

    @include('admin.footer')