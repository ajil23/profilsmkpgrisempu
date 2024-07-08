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
  <link rel="stylesheet" href="./assets/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="./assets/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="./assets/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="./assets/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="./assets/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="./assets/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="./assets/css/style.css" rel="stylesheet">

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
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/smkpgrisempu"><i
                    class="ti-facebook"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.instagram.com/smkgrisemba/"><i
                    class="ti-instagram"></i></a></li>
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
          <a class="navbar-brand" href="#"><img src="./assets/images/fotosmk/logo-smk.png" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#jurusan">Jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#guru">Guru</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#kontak">Kontak</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->

  <!-- hero slider -->
  <section class="hero-section overlay bg-cover" data-background="./assets/images/fotosmk/banner.jpg">
    <div class="container">
      <div class="hero-slider">
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInLeft" data-delay-in=".1">Wujudkan Potensi, Raih Kesuksesan!</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInLeft" data-delay-in=".4">Sebuah seruan yang mendorong seseorang untuk menggali potensi diri mereka dan menggunakannya untuk mencapai kesuksesan. SMK berperan penting dalam proses ini dengan memberikan pembelajaran yang berfokus pada pengembangan potensi siswa dan membantu mereka untuk menemukan passion mereka.</p>
              <a href="#jurusan" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5"
                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Lebih Lanjut</a>
            </div>
          </div>
        </div>
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInDown" data-delay-in=".1">Dari Mimpi Jadi Profesi</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInDown" data-delay-in=".4">Proses di mana seseorang mengubah mimpi atau cita-cita mereka menjadi kenyataan melalui kerja keras, dedikasi, dan pendidikan. SMK berperan penting dalam proses ini dengan membekali siswa dengan pengetahuan, keterampilan, dan pengalaman yang dibutuhkan untuk mencapai kesuksesan di bidang yang mereka impikan.</p>
              <a href="#jurusan" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Lebih Lanjut</a>
            </div>
          </div>
        </div>
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInUp" data-delay-in=".1">Jembatan Menuju Karir Impian</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInUp" data-delay-in=".4">SMK sebagai sarana atau jalan yang membantu seseorang untuk mencapai karir yang mereka impikan. SMK membekali siswa dengan pengetahuan, keterampilan, dan pengalaman yang dibutuhkan untuk memasuki dunia kerja dan meraih kesuksesan di bidang yang mereka minati.</p>
              <a href="#jurusan" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5"
                data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Lebih Lanjut</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /hero slider -->

  <!-- banner-feature -->
  <section class="bg-gray" id="jurusan">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-xl-4 col-lg-5 align-self-end">
          <img class="img-fluid w-100" src="./assets/images/fotosmk/jurusan.png" alt="banner-feature">
        </div>
        <div class="col-xl-8 col-lg-7">
          <div class="row feature-blocks bg-gray justify-content-between">
            @foreach ($datajurusan as $item)
            <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
              <i class="ti-briefcase mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">{{$item->nama}}</h3>
              <p>{{$item->deskripsi}}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /banner-feature -->

  <!-- about us -->
  <section class="section" id="tentang">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-2 order-md-1">
          <h2 class="section-title">Tentang Kami</h2>
          <p>SMK PGRI Sempu adalah salah satu sekolah kejuruan di Banyuwangi, Jawa Timur yang berfokus pada bidang
            pariwisata dan perhotelan. Didirikan pada tahun 2014, SMK PGRI Sempu telah menghasilkan banyak lulusan
            berprestasi yang bekerja di berbagai bidang industri. Sekolah ini memiliki fokus pada pendidikan kejuruan
            yang berkualitas dan relevan dengan kebutuhan industri terkini.</p>
        </div>
        <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
          <img class="img-fluid w-100" src="./assets/images/fotosmk/smklogo.png" alt="about image">
        </div>
      </div>
    </div>
  </section>
  <!-- /about us -->

  <!-- courses -->
  <section class="section-sm" id="artikel">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center section-title justify-content-between">
            <h2 class="mb-0 text-nowrap mr-3">Artikel Kami</h2>
            <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          </div>
        </div>
      </div>
      <!-- course list -->
      <div class="row justify-content-center">
        <!-- course item -->
        @foreach ($dataartikel as $item)
        <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="{{ asset('storage/'.$item->image) }}" alt="course thumb">
              <div class="card-body">
                <ul class="list-inline mb-2">
                  <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>{{date('d-m-Y', strtotime($item->created_at));}}</li>
                </ul>
                <a href="{{route('artikel.detail', $item->id)}}">
                  <h4 class="card-title">{{$item->judul}}</h4>
                </a>
                <p class="card-text mb-4"> Klik tombol untuk baca selengkapnya</p>
                <a href="{{route('artikel.detail', $item->id)}}" class="btn btn-primary btn-sm">Lebih Lanjut</a>
              </div>
            </div>
        </div>
        @endforeach
        <!-- /course list -->
      </div>
  </section>
  <!-- /courses -->

  <!-- teachers -->
  <section class="section" id="guru">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="section-title">Guru-guru Kami</h2>
        </div>
        <!-- teacher -->
        @foreach ($dataguru as $item)
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="{{ asset('storage/'.$item->image) }}" alt="teacher">
              <div class="card-body">
                <a href="#">
                  <h4 class="card-title">{{$item->nama}}</h4>
                </a>
                <p>{{$item->jabatan}}</p>
              </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- /teachers -->

  <!-- contact -->
  <section class="section bg-gray" id="kontak">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-title">Kontak Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-4 mb-lg-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.9009313340575!2d114.14411077445718!3d-8.312643283653799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd153a39f3667b5%3A0xf8757b054ff24829!2sSMK%20PGRI%20SEMPU!5e0!3m2!1sid!2sid!4v1716819192417!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-5">
          <p class="mb-5">Jika anda memiliki kritik, saran, atau pertanyaan silahkan kunjungi atau hubungi kontak dibawah ini.</p>
          <a href="https://wa.me/+6283122366243" class="text-color h5 d-block">+6283122366243</a>
          <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
          <p>Jl. Raya Kalisetail No.159, Krajan, Sempu, Kec. Sempu, Kabupaten Banyuwangi, Jawa Timur 68468</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->

  <!-- footer -->
  <footer>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
            <!-- logo -->
            <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="./assets/images/fotosmk/logo-smk.png"
                alt="logo"></a>
            <ul class="list-unstyled">
              <li class="mb-2">Jl. Raya Kalisetail No.159, Krajan, Sempu, Kec. Sempu, Kabupaten Banyuwangi, Jawa Timur 68468</li>
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
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/smkpgrisempu"/><i
                    class="ti-facebook text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.instagram.com/smkgrisemba/"><i
                    class="ti-instagram text-primary"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="./assets/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="./assets/plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="./assets/plugins/slick/slick.min.js"></script>
  <!-- aos -->
  <script src="./assets/plugins/aos/aos.js"></script>
  <!-- venobox popup -->
  <script src="./assets/plugins/venobox/venobox.min.js"></script>
  <!-- mixitup filter -->
  <script src="./assets/plugins/mixitup/mixitup.min.js"></script>
  <!-- google map -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="./assets/js/script.js"></script>

</body>

</html>