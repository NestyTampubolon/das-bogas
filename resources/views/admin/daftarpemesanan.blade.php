@include('admin.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Daftar Pemesanan Produk</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href={{url('/dashboard')}}>Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a>Daftar Pemesanan Produk</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Data Tabel Pemesanan Produk
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Pemesanan</th>
                                            <!-- <th>Nama</th> -->
                                            <!-- <th>Tanggal Pemesanan</th> -->
                                            <th>Total Pembayaran</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr><?php $nomor = 1; ?>
                                    </thead>
                                    <tbody>
                                        @foreach($pemesanans as $pemesanan)
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td>{{$pemesanan->id_pemesananproduk}}</td>
                                            <!-- <td>{{$pemesanan->name}}</td> -->
                                            <!-- <td>{{ Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d-m-Y') }}</td> -->
                                            <td>@currency($pemesanan->total_pembayaran)</td>
                                            <td><img src="{{url('gbr_bukti_pembayaran/'.$pemesanan->bukti_pembayaran)}}" width="100px" height="100px" alt="" data-bs-toggle="modal" data-bs-target="#myModals{{$pemesanan->id_pemesananproduk}}"></td>
                                            <td>
                                                <form action="{{route('daftarpemesanan.update',$pemesanan->id_pemesananproduk)}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class=" row">
                                                        <div class="col">
                                                            <select class="form-control" border="0px" required="required" name="status" aria-label="Default select example" value="{{$pemesanan->status}}">
                                                                <option value="Verifikasi"{{$pemesanan->status == "Verifikasi" ? 'selected' : ''}}>Verifikasi</option>
                                                                <option value="Proses"{{$pemesanan->status == "Proses" ? 'selected' : ''}}>Proses</option>
                                                                <option value="Antar"{{$pemesanan->status == "Antar" ? 'selected' : ''}}>Antar</option>
                                                                <option value="Selesai"{{$pemesanan->status == "Selesai" ? 'selected' : ''}}>Selesai</option>
                                                                <option value="Tolak"{{$pemesanan->status == "Tolak" ? 'selected' : ''}}>Tolak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td class="text-center">
                                                <button type="submit" class="btn btn-success btn-icon-split">
                                                    <a href="" type="submit" class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Simpan</span>
                                                    </a></button>

                                                </form>
                                                <button class="btn btn-info btn-icon-split">
                                                    <a href="pemesanandetail/{{$pemesanan->id_pemesananproduk}}" class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-info"></i>
                                                        </span>
                                                        <span class="text">Detail</span>
                                                    </a>
                                                </button>
                                                <button class="btn btn-danger btn-icon-split">
                                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pemesanan->id_pemesananproduk}}">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Modal Gambar -->
                                        <div id="myModals{{$pemesanan->id_pemesananproduk}}" class="modal fade" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="{{url('gbr_bukti_pembayaran/'.$pemesanan->bukti_pembayaran)}}" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$pemesanan->id_pemesananproduk}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda yakin menghapusnya?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="daftarpemesanan/delete/{{$pemesanan->id_pemesananproduk}}" class="btn btn-danger btn-icon-split">
                                                            <span class="text">Hapus</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>





                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <!-- /.container-fluid -->

    </div>
    @include('admin.footer')