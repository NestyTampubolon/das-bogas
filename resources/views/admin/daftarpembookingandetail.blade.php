@include('admin.sidebar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Daftar pembookingan</h1>
                    <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> -->
                    <div class="col-md-6">
                        @foreach($pembookingan as $pembookingans)
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telephone</label>
                                <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$pembookingans->nomor_telephone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jadwal Service</label>
                                <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{ Carbon\Carbon::parse($pembookingans->tanggal_pembookingan)->format('d-m-Y') }} || {{$pembookingans->pukul}}"">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keluhan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" disabled rows="3">{{$pembookingans->keluhan_service}}</textarea>
                            </div>
                        </form>
                        @endforeach
                    </div>

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
                                            <th>Total Harga</th>
                                        </tr><?php $nomor = 1; ?>
                                    </thead>
                                    <tbody>
                                        @foreach($daftarjoin as $daftarjoin)
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td>{{$daftarjoin->jenisservice}}</td>
                                            <td>@currency($daftarjoin->total_harga)</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=" py-3">
                        <div><a href="/daftarpembookingan" class="btn btn-primary btn-icon-split" style="text-align: right;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Kembali</span>
                            </a></div>
                    </div>
                </div>
            </main>

        </div>
        <!-- /.container-fluid -->

    </div>
    @include('admin.footer')