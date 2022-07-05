<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beranda - Bioskop</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Bioskopku</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
      <!-- <span class="d-none d-lg-block">Sumber Rejeki</span> -->
    </div><!-- End Logo -->

  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="ri-home-2-fill"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('film.index') }}">
          <i class="ri-movie-fill"></i>
          <span>Data Film</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('bioskop.index') }}">
          <i class="ri-slideshow-3-fill"></i>
          <span>Data Bioskop</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('tiket.index') }}">
          <i class="ri-book-fill"></i>
          <span>Tiket</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Bioskop</h1>
  <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Beranda</li>    
        <li class="breadcrumb-item">Data Bioskop</li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Bioskop</h5>

      @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('bioskop.update',$bioskop->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Bioskop:</strong>
                        <input type="text" name="nama_bioskop" value="{{ $bioskop->nama_bioskop }}" class="form-control" placeholder="Masukkan Nama Bioskop" autocomplete="off">
                        @error('nama_bioskop')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telepon Bioskop:</strong>
                        <input type="text" name="telepon_bioskop" class="form-control" value="{{ $bioskop->telepon_bioskop }}" placeholder="Masukkan Telepon Bioskop" autocomplete="off">
                        @error('telepon_bioskop')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat Bioskop:</strong>
                        <input type="text" name="alamat_bioskop" value="{{ $bioskop->alamat_bioskop }}" class="form-control" placeholder="Masukkan Alamat Bioskop" autocomplete="off"></textarea>
                        @error('alamat_bioskop')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <start>
                <div class="">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    <a class="btn btn-primary" href="{{ route('bioskop.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
                </start>

            </div>
        </form>
        
        
    </div>
              
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>