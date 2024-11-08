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
</head>

<body>

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
                <a href="{{ url('home') }}" class="nav-item nav-link">Beranda</a>
                <a href="{{ url('layanan') }}" class="nav-item nav-link active">Layanan</a>
                <a href="{{ url('fasilitas') }}" class="nav-item nav-link">Fasilitas</a>
                <a href="{{ url('kontak') }}" class="nav-item nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <div class="container mt-5">
        <div class="row">
            <!-- Service Details -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white d-flex align-items-center p-3 rounded-top-4">
                        <img src="img/logo_pendidikan_tr.png" alt="Dinas Pendidikan" style="width:10%" class="me-3 rounded-circle">
                        <div>
                            <h5 class="mb-0">Izin Pendirian dan Penyelenggaraan Pusat Kegiatan Belajar Masyarakat (PKBM)</h5>
                            <small>Bidang Pendidikan</small>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="accordion" id="serviceDetailsAccordion">
                            <!-- Persyaratan Pelayanan -->
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Persyaratan Pelayanan
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#serviceDetailsAccordion">
                                    <div class="accordion-body">
                                        <h5>Permohonan Baru:</h5>
                                        <p>1) Surat permohonan dari penyelenggara<br>
                                            2) Surat Rekomendasi dari Kepala UPTD setempat<br>
                                            3) Profil Lembaga<br>
                                            4) dan lain-lain...
                                        </p>
                                        <h5>Permohonan Perpanjangan:</h5>
                                        <p>1) Surat permohonan dari penyelenggara<br>
                                            2) Surat Rekomendasi dari Kepala UPTD setempat<br>
                                            3) dan lain-lain...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Mekanisme dan Prosedur -->
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Sistem, Mekanisme, dan Prosedur Layanan
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#serviceDetailsAccordion">
                                    <div class="accordion-body">
                                        <img src="img/dt_pendidikan.png" class="img-fluid rounded" alt="dt_pendidikan">
                                    </div>
                                </div>
                            </div>
                            <!-- Jangka Waktu Pelayanan -->
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Jangka Waktu Pelayanan
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#serviceDetailsAccordion">
                                    <div class="accordion-body">
                                        Maksimal 7 (tujuh) hari kerja
                                    </div>
                                </div>
                            </div>
                            <!-- Biaya / Tarif Layanan -->
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Biaya / Tarif Layanan
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#serviceDetailsAccordion">
                                    <div class="accordion-body">
                                        Tidak dipungut biaya / Gratis
                                    </div>
                                </div>
                            </div>
                            <!-- Produk Layanan -->
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Produk Layanan
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#serviceDetailsAccordion">
                                    <div class="accordion-body">
                                        Izin Pendirian dan Penyelenggaraan Lembaga Kursus dan Pelatihan (LKP)
                                    </div>
                                </div>
                            </div>
                            <!-- Penanganan Pengaduan -->
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Penanganan Pengaduan, Saran, dan Masukan
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#serviceDetailsAccordion">
                                    <div class="accordion-body">
                                        Email: dpmptsp@bangkalankab.go.id<br>
                                        Telp: (031) 3095020<br>
                                        WA: 08990681166
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Hours -->
            <div class="col-lg-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-secondary text-white rounded-top-4">
                        <h5 class="mb-0">Jam Pelayanan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Senin</td>
                                    <td>08:00 - 14.00</td>
                                </tr>
                                <tr>
                                    <td>Selasa</td>
                                    <td>08:00 - 14.00</td>
                                </tr>
                                <tr>
                                    <td>Rabu</td>
                                    <td>08:00 - 14.00</td>
                                </tr>
                                <tr>
                                    <td>Kamis</td>
                                    <td>08:00 - 14.00</td>
                                </tr>
                                <tr>
                                    <td>Jumat</td>
                                    <td>08:00 - 14.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>WPXV+Q9W, Jl. Halim Perdana Kusuma, Area
                        Sawah,
                        Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>08990681166</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Layanan</h4>
                    <a class="btn btn-link" href="">Pengaduan</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Tautan</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Kontak Kami</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Lokasi</h4>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9206883495295!2d-122.08424968468893!3d37.42199977982565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5a64dbd5d3f%3A0xc42c0d7f72a7336f!2sGoogleplex!5e0!3m2!1sen!2sus!4v1534522169854"
                            width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen=""
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">MPP Bangkalan</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


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
