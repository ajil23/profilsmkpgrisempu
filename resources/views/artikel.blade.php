<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>SMK PGRI SEMPU</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('assets/plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('assets/plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('assets/plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


  <!-- header -->
  <header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 text-center text-lg-left">
            <a class="text-color mr-3" href="https://wa.me/+6283122366243"><strong>Hubungi</strong> +6283122366243 </a>
            <ul class="list-inline d-inline">
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                  href="https://www.facebook.com/smkpgrisempu"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                  href="https://www.instagram.com/smkgrisemba/"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 text-center text-lg-right">
            @if (Route::has('login'))
                @auth
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                        href="{{ url('/home') }}">Home admin</a></li>
                    </ul>
                @else
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                        href="{{ route('login') }}">Login admin</a></li>
                    </ul>
                @endauth
            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand" href="#"><img src="{{asset('assets/images/fotosmk/logo-smk.png')}}" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item active">
                <a class="nav-link" onclick="history.back()">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="history.back()">Jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="history.back()">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="history.back()">Guru</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" onclick="history.back()">Kontak</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->
  <!-- page title -->
  <section class="page-title-section overlay" data-background="#">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Artikel Kami</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Detail Artikel</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  <!-- blog details -->
  <section class="section-sm bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-4">
            <img src="{{ asset('storage/'.$detailartikel->image) }}" alt="blog-thumb" class="img-fluid w-100">
          </div>
          <div class="col-12">
            <ul class="list-inline">
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span
                  class="font-weight-bold mr-2">Post:</span>Admin</li>
              <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">{{date('d-m-Y', strtotime($detailartikel->created_at));}}</li>
            </ul>
          </div>
          <!-- border -->
          <div class="col-12 mt-4">
            <div class="border-bottom border-primary"></div>
          </div>
          <!-- blog contect -->
          <div class="col-12 mb-5">
            <h2>{{$detailartikel->judul}}</h2>
            <p>{{$detailartikel->isi}}</p>
          </div>
      </div>
    </div>
  </section>
  <!-- /blog details -->

  <!-- footer -->
  <footer>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
            <!-- logo -->
            <a class="logo-footer" href="#"><img class="img-fluid mb-4" src="{{asset('assets/images/fotosmk/logo-smk.png')}}"
                alt="logo"></a>
            <ul class="list-unstyled">
              <li class="mb-2">Jl. Raya Kalisetail No.159, Krajan, Sempu, Kec. Sempu, Kabupaten Banyuwangi, Jawa Timur
                68468</li>
              <li class="mb-2">+6283122366243</li>
              <li class="mb-2">contact@yourdomain.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 text-sm-left text-center">
            <p class="mb-0">Copyright
              <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
              </script>
              © Theme By <a href="https://themefisher.com">themefisher.com</a>
            </p>
          </div>
          <div class="col-sm-5 text-sm-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item"><a class="d-inline-block p-2"
                  href="https://www.facebook.com/smkpgrisempu" /><i class="ti-facebook text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2"
                  href="https://www.instagram.com/smkgrisemba/"><i class="ti-instagram text-primary"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- slick slider -->
  <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
  <!-- aos -->
  <script src="{{asset('assets/plugins/aos/aos.js')}}"></script>
  <!-- venobox popup -->
  <script src="{{asset('assets/plugins/venobox/venobox.min.js')}}"></script>
  <!-- mixitup filter -->
  <script src="{{asset('assets/plugins/mixitup/mixitup.min.js')}}"></script>
  <!-- google map -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="{{asset('assets/plugins/google-map/gmap.js')}}"></script>

  <!-- Main Script -->
  <script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>