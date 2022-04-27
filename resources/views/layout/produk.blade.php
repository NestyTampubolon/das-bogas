@include('layout.navbar')

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href={{url('/')}}>Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Produk
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Property Grid ======= -->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select id="assigned-user-filter" class="custom-select">
                <option value="All" selected>All</option>
                <option value="Sparepart">Sparepart</option>
                <option value="Eksterior">Eksterior</option>
                <option value="Interior">Interior</option>
                <option value="Filter">Filter</option>
              </select>
            </form>
          </div>
        </div>
        <div class="row">
          @foreach($produks as $produk)
          <div class="col-md-3 task-list-row" data-assigned-user="{{$produk->kategori}}">
            <div class=" card card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{asset('gbr_produk')}}/{{$produk->gambar}}" alt="" height="400px" width="400px" class="img-b" >
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="produk/detail/{{$produk->id_produk}}">{{$produk->nama}}
                    </h2>
                  </div>
                  <div class="price-box d-flex">
                    <span class="price-a">@currency($produk->harga)</span>
                  </div>
                  <h6>
                    {{$produk->kategori}}
                  </h6>
                  <div class="card-date">
                    <a href="produk/detail/{{$produk->id_produk}}" class="link-a">Lihat selengkapnya
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section><!-- End Property Grid Single-->
</main><!-- End #main -->

<script>
  $('#assigned-user-filter').on('change', function() {
    var assignedUser = this.value;

    if (assignedUser === 'All') {
      $('.task-list-row').hide().filter(function() {
        return $(this).data('assigned-user') != assignedUser;
      }).show();
    } else {
      $('.task-list-row').hide().filter(function() {
        return $(this).data('assigned-user') == assignedUser;
      }).show();
    }
  });
</script>

@include('layout.footer')