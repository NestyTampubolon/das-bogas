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
                Menu Cafe
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
              <select  id="assigned-user-filter" class="custom-select">
                <option value="All" selected>All</option>
                <option value="makanan">Makanan</option>
                <option value="Makanan Ringan">Makanan Ringan</option>
                <option value="minuman">Minuman</option>
                <option value="jus">Jus</option>
              </select>
            </form>
          </div>
        </div>

        @foreach($cafes as $cafe)
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" data-assigned-user="{{$cafe->kategori}}">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  {{$cafe->nama}}</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">@currency($cafe->harga_cafe)</div>
                </div>
                <div class="col-auto">
                <div class="price-box d-flex">
                  <span class="price-a" style="color: black;">{{$cafe->kategori}}</span>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
         
            <ul class="pagination justify-content-end">
              {{ $cafes -> links()}}            
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Property Grid Single-->
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