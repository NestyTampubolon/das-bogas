@include('admin.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Daftar Pemesanan</h1>
                    <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> -->

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Total Pembayaran</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr><?php $nomor = 1; ?>
                                    </thead>
                                    <tbody>
                                        @foreach($pemesanans as $pemesanan)
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td>{{$pemesanan->name}}</td>
                                            <td>{{ Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d-m-Y') }}</td>
                                            <td>@currency($pemesanan->total_pembayaran)</td>
                                            <td>
                                                <form action="{{route('daftarpemesanan.update',$pemesanan->id_pemesananproduk)}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class=" row">
                                                        <div class="col">
                                                            <select class="form-control" border="0px" required="required" name="status" aria-label="Default select example" value="{{$pemesanan->status}}">
                                                                <option value="{{$pemesanan->status}}">{{$pemesanan->status}}</option>
                                                                <option value="Verifikasi">Verifikasi</option>
                                                                <option value="Proses">Proses</option>
                                                                <option value="Antar">Antar</option>
                                                                <option value="Selesai">Selesai</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-icon-split">
                                                    <a href="" type="submit" class="btn btn-primary btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-pen"></i>
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