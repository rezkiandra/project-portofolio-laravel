<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portfolio - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('kyy') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('kyy') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    {{-- Devicons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('kyy') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('kyy') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('kyy') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('kyy') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('kyy') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('kyy') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('kyy') }}/assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">
            <div class="profile">
                <img src="{{ asset('kyy') }}/assets/img/profile-img.jpg" alt=""
                    class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="/">{{ $about->judul }}</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="{{ get_meta_value('_twitter') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="{{ get_meta_value('_gitlab') }}" class="twitter"><i class="bx bxl-gitlab"></i></a>
                    <a href="{{ get_meta_value('_instagram') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="{{ get_meta_value('_github') }}" class="google-plus"><i class="bx bxl-github"></i></a>
                    <a href="{{ get_meta_value('_linkedin') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Beranda</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Tentang</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Riwayat</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portofolio</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Hubungi</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>I am Kyy</h1>
            <p>A <span class="typed" data-typed-items="Student, Web Developer, Photographer, Web Designer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Tentang Saya</h2>
                    <p>{{ get_meta_value('_desc') }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset('kyy') }}/assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{ get_meta_value('_posisi') }}</h3>
                        <p class="fst-italic">{{ get_meta_value('_desc_posisi') }}</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong>
                                        <span>{{ get_meta_value('_tgl_lahir') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>No. Telp :</strong>
                                        <span>{{ get_meta_value('_nohp') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Kota :</strong>
                                        <span>{{ get_meta_value('_kota') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Umur :</strong>
                                        <span>{{ get_meta_value('_umur') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Email :</strong><span>{{ get_meta_value('_email') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Provinsi :</strong><span>{{ get_meta_value('_provinsi') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Selama mendalami pada bidang web development, saya telah membuat project CRUD
                            menggunakan HTML5, CSS3, Bootstrap5, PHP, dan MySQL.
                        <ol>
                            <li>CRUD Bioskop</li>
                            <li>CRUD Apotek</li>
                            <li>CRUD Mahasiswa</li>
                            <li>Cloning Website Jurusan Manajemen Informatika</li>
                        </ol>
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Keahlian</h2>
                    <p>
                        Selama di dunia perkuliahan saya meningkatkan keahlian yang saya miliki agar di dunia kerja yang
                        professional nanti akan lebih siap lagi dalam berkontribusi di dalam sebuah perusahaan tempat
                        saya bekerja
                    </p>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-8" data-aos="fade-up">
                        <h5 class="mb-3">Bahasa Pemrograman & Framework</h5>
                        @foreach (explode(', ', get_meta_value('_language')) as $item)
                            <h1 class="list-inline-item"><i class="devicon-{{ strtolower($item) }}-plain"></i>
                            </h1>
                        @endforeach
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <h5 class="mb-3">Workflows</h5>
                        @foreach (explode(', ', get_meta_value('_workflow')) as $item)
                            <h1 class="list-inline-item"><i class="devicon-{{ strtolower($item) }}-plain"></i>
                            </h1>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Experience Section ======= -->
        <section id="resume" class="resume">
            <div class="container">
                <div class="section-title">
                    <h2>Riwayat Hidup</h2>
                    <p> Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Deskripsi Diri</h3>
                        <div class="resume-item pb-0">
                            <h4>{{ $about->judul }}</h4>
                            <p><em>{{ $about->isi }}</em></p>
                            <ul>
                                <li>{{ get_meta_value('_kota') }}</li>
                                <li>{{ get_meta_value('_nohp') }}</li>
                                <li>{{ get_meta_value('_email') }}</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>Sekolah Menengah Atas - SMAN 1 Sambas</h4>
                            <h5>2018 - 2021</h5>
                            <p><em>Jurusan MIPA - Matematika dan Ilmu Pengetahuan Alam</em></p>
                            <p>Selama duduk di bangku SMA, saya memilih jurusan MIPA dengan nilai yang cukup memuaskan
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Kuliah - Politeknik Negeri Sambas</h4>
                            <h5>2021 - 2024</h5>
                            <p><em>Jurusan Manajemen Informatika, Program Studi Sistem Informasi</em></p>
                            <p>Selama duduk di bangku perkuliahan, saya memilih program studi sistem informasi dengan
                                IPK : 3,87</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Pengalaman Kerja</h3>
                        <div class="resume-item">
                            <h4>Frontend Engineer</h4>
                            <h5>2020 - 2021</h5>
                            <p><em>Freelancer - Pekerja Lepas</em></p>
                            <p>Membuat website sederhana menggunakan HTML5, CSS3, dan Javascript</p>
                            <ul>
                                <li>Hypertext Markup Language (HTML5)</li>
                                <li>Cascade Style Sheet (CSS3)</li>
                                <li>Javascript</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Backend Engineer</h4>
                            <h5>2021 - Sekarang</h5>
                            <p><em>Mahasiswa - Politeknik Negeri Sambas</em></p>
                            <p>Membuat database menggunakan MysQL dan merelasikannya ke dalam website CRUD</p>
                            <ul>
                                <li>Project CRUD Bioskop</li>
                                <li>Project CRUD Apotek</li>
                                <li>Project CRUD Mahasiswa</li>
                                <li>Cloning Website Manajemen Informatika</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portofolio</h2>
                    <p>Hasil dari project saya selama kuliah yang sudah dibuat, kemudian didokumentasikan ke dalam
                        bentuk portfolio</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/portfolio/portfolio-1.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/1.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('kyy') }}/assets/img/1.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/portfolio/portfolio-4.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/2.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('kyy') }}/assets/img/2.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/portfolio/portfolio-6.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/portfolio/portfolio-7.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/portfolio/portfolio-8.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('kyy') }}/assets/img/3.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('kyy') }}/assets/img/3.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="{{ asset('kyy') }}/portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Hubungi Saya</h2>
                    <p>Jika ingin melakukan kerja sama dalam project atau mengajukan pertanyaan kepada saya. Silahkan
                        tulis pertanyaan di kolom bawah ini</p>
                </div>
                <div class="row" data-aos="fade-in">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi</h4>
                                <p>Sambas, Kalimantan Barat 79462</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email</h4>
                                <p>{{ get_meta_value('_email') }}</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>No. Telp</h4>
                                <p>{{ get_meta_value('_nohp') }}</p>
                            </div>
                            <iframe src="https://goo.gl/maps/49WvXsejpuGGbiH26" frameborder="0"
                                style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Anda</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email Anda</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesanmu berhasil dikirim. Terima kasih</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('kyy') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/typed.js/typed.min.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('kyy') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('kyy') }}/assets/js/main.js"></script>

</body>

</html>
