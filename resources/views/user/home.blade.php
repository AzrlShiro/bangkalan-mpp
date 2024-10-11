<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MPP Bangkalan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/bangkalan.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">MPP Bangkalan</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('home') }}" class="nav-item nav-link active">Beranda</a>
                <a href="{{ url('layanan') }}" class="nav-item nav-link">Layanan</a>
                <a href="{{ url('fasilitas') }}" class="nav-item nav-link">Fasilitas</a>
                <a href="{{ url('kontak') }}" class="nav-item nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <!-- Slide 1 -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="Layanan Publik">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));">
                    <div class="container text-center">
                        <h5 class="text-white text-uppercase mb-2 animated fadeInDown">Selamat Datang di MPP Bangkalan
                        </h5>
                        <h1 class="text-white display-4 fw-bold mb-3 animated fadeInUp">Pelayanan Publik Berkualitas
                        </h1>
                        <a href="#services" class="btn btn-primary py-2 px-4 me-2 animated zoomIn">Lihat Layanan</a>
                        <a href="#contact" class="btn btn-outline-light py-2 px-4 animated zoomIn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="Layanan Publik">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));">
                    <div class="container text-center">
                        <h5 class="text-white text-uppercase mb-2 animated fadeInDown">Pelayanan Prima</h5>
                        <h1 class="text-white display-4 fw-bold mb-3 animated fadeInUp">Standar Terbaik untuk Anda</h1>
                        <a href="#services" class="btn btn-primary py-2 px-4 me-2 animated zoomIn">Lihat Layanan</a>
                        <a href="#contact" class="btn btn-outline-light py-2 px-4 animated zoomIn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="Layanan Publik">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));">
                    <div class="container text-center">
                        <h5 class="text-white text-uppercase mb-2 animated fadeInDown">Komitmen Kami</h5>
                        <h1 class="text-white display-4 fw-bold mb-3 animated fadeInUp">Pelayanan Terus Meningkat</h1>
                        <a href="#services" class="btn btn-primary py-2 px-4 me-2 animated zoomIn">Lihat Layanan</a>
                        <a href="#contact" class="btn btn-outline-light py-2 px-4 animated zoomIn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Pendahuluan -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <!-- Gambar Pendahuluan -->
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid" src="img/fasilitas1.jpg"
                            style="
                            object-fit: cover;
                            border-radius: 15px; /* Ganti dengan nilai radius sesuai kebutuhan */
                            width: 90%; /* Ganti dengan nilai width sesuai kebutuhan */
                            height: auto; /* Atur tinggi otomatis agar proporsional */
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            "
                            alt="Latar Belakang">
                    </div>
                </div>

                <!-- Teks Pendahuluan -->
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="text-start">
                            <h1 class="display-5 mb-4">Latar Belakang</h1>
                        </div>
                        <p class="mb-4 pb-2">
                            Dalam upaya mencapai kualitas pelayanan, diperlukan penyusunan standar pelayanan publik yang
                            menjadi tolak ukur kualitas pelayanan. Standar ini mengharuskan semua instansi pemerintah
                            menetapkan standar pelayanan yang jelas.
                        </p>
                        <p class="mb-4 pb-2">
                            Pelayanan publik mencakup berbagai aspek kehidupan masyarakat seperti pendidikan, kesehatan,
                            pekerjaan umum, dan lainnya, dengan keterbukaan informasi menjadi kunci agar publik memahami
                            persyaratan, prosedur, biaya, dan jangka waktu pelayanan.
                        </p>
                        <p class="mb-4 pb-2">
                            Standar pelayanan publik memastikan pengawasan dari masyarakat dan transparansi dalam
                            penyelenggaraannya, sehingga dapat memberikan pelayanan yang cepat, mudah, terjangkau, dan
                            terukur.
                        </p>
                        <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pendahuluan End -->

    <!-- Visi Misi -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <!-- Visi -->
                <div class="col-lg-6 feature-text py-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="p-lg-5 ps-lg-0 text-center text-lg-start">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-3">
                            <div class="icon bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-eye text-white"></i>
                            </div>
                            <h1 class="display-5 ms-3 mb-0">Visi</h1>
                        </div>
                        <p class="fw-bold text-primary mt-3">Terwujudnya Masyarakat Kabupaten Bangkalan yang Religius
                            dan Sejahtera Berbasis Potensi Lokal.</p>
                        <p class="mb-4">Visi ini mencerminkan harapan untuk membangun masyarakat yang seimbang antara
                            kesejahteraan material dan nilai-nilai agama, dengan mengoptimalkan potensi lokal.</p>
                    </div>
                </div>
                <!-- Misi -->
                <div class="col-lg-6 feature-text py-5 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="p-lg-5 ps-lg-0 text-center text-lg-start">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-3">
                            <div class="icon bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-list-alt text-white"></i>
                            </div>
                            <h1 class="display-5 ms-3 mb-0">Misi</h1>
                        </div>
                        <ol class="list-unstyled mt-3 mb-4">
                            <li class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Mewujudkan
                                kehidupan
                                beragama yang berkualitas.</li>
                            <li class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Menyelenggarakan
                                birokrasi yang profesional dan berintegritas tinggi.</li>
                            <li class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Meningkatkan
                                pelayanan
                                dasar yang berkualitas serta mengoptimalkan potensi lokal.</li>
                            <li class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Mewujudkan keamanan
                                dan
                                keadilan di masyarakat.</li>
                            <li><i class="fa fa-check-circle text-primary me-2"></i>Mempercepat pembangunan
                                infrastruktur berbasis pemerataan wilayah dan lingkungan untuk mendorong iklim
                                investasi.</li>
                        </ol>
                        <p class="text-muted mb-0"><em>Misi ke-5 berhubungan dengan program Dinas Penanaman Modal dan
                                Pelayanan Terpadu Satu Pintu Kabupaten Bangkalan:</em> <br> <strong>"Akselerasi
                                pembangunan infrastruktur berbasis pada pemerataan wilayah dan berwawasan lingkungan
                                dalam mendorong iklim investasi."</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi End -->


    <!-- Maklumat Pelayanan -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <!-- Gambar Maklumat Pelayanan -->
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid" src="img/fasilitas1.jpg"
                            style="
                            object-fit: cover;
                            border-radius: 15px; /* Ganti dengan nilai radius sesuai kebutuhan */
                            width: 90%; /* Ganti dengan nilai width sesuai kebutuhan */
                            height: auto; /* Atur tinggi otomatis agar proporsional */
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            "
                            alt="Latar Belakang">
                    </div>
                </div>

                <!-- Teks Maklumat Pelayanan -->
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="text-start">
                            <h1 class="display-5 mb-4">Maklumat Pelayanan</h1>
                        </div>
                        <p class="mb-4 pb-2">1) Kami berjanji melaksanakan pelayanan sesuai dengan standar yang telah
                            ditetapkan.</p>
                        <p class="mb-4 pb-2">2) Kami berjanji melakukan perbaikan pelayanan secara berkelanjutan.</p>
                        <p class="mb-4 pb-2">3) Kami bersedia menerima sanksi atau memberikan kompensasi jika pelayanan
                            tidak sesuai standar.</p>
                        <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Maklumat Pelayanan End -->

    <!-- Kode Etik -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <!-- Teks Kode Etik -->
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="text-start">
                            <h1 class="display-5 mb-4">Kode Etik Pelayanan</h1>
                        </div>
                        <p class="mb-4 pb-2">Pelaksana dalam pelayanan publik harus berperilaku:</p>
                        <ul>
                            <li>Melayani dengan senyum, salam, sapa, sopan, dan santun.</li>
                            <li>Jujur, disiplin, profesional, dan proporsional.</li>
                            <li>Adil, non-diskriminatif, dan teliti.</li>
                            <li>Taat pada peraturan yang berlaku.</li>
                        </ul>
                    </div>
                </div>
                <!-- Gambar Kode Etik -->
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid" src="img/fasilitas1.jpg"
                            style="
                            object-fit: cover;
                            border-radius: 15px; /* Ganti dengan nilai radius sesuai kebutuhan */
                            width: 90%; /* Ganti dengan nilai width sesuai kebutuhan */
                            height: auto; /* Atur tinggi otomatis agar proporsional */
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            "
                            alt="Latar Belakang">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Kode Etik End -->



    <!-- Instansi Start -->
    <!-- resources/views/user/layanan.blade.php -->
    @section('content')
        <h1>Daftar Instansi</h1>
        <div class="row">
            @foreach ($instansis as $instansi)
                <div class="col-md-4"> <!-- Atur kolom sesuai kebutuhan -->
                    <div class="card">
                        <img src="{{ asset('storage/' . $instansi->gambar) }}" alt="{{ $instansi->nama_instansi }}"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $instansi->nama_instansi }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection

    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 mb-5">Instansi Terkait</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Kantor Imigrasi</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Dispendukcapil</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Dinas Sosial</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Dinas PRKP</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Perumda Sumber Sejahtera</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">BPJS Ketenagakerjaan</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Samsat</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Polres</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Kejaksaan Negeri</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Pengadilan Agama</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Bank Jatim</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fasilitas1.jpg" alt="">
                        </div>
                        <div class="p-0 text-center border border-5 border-light border-top-0">
                            <h4 class="m-3">Dinas PMPTSP</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- Instansi End -->




    <!-- Footer Start -->
    <footer>
        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
        <p>
            <a href="#">Home</a> |
            <a href="#">About Us</a> |
            <a href="#">Contact</a>
        </p>
    </footer>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
