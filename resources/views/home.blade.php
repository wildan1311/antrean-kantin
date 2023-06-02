<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MasBro-Canteen</title>

    {{-- ==== Bootstrap ==== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- ==== StyleCss ==== --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- ==== FontAwesome ==== --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    {{-- ==== JavaScript ==== --}}
    <script src="{{ asset('javascript/script.js') }}"></script>
</head>

<body>
    <!--==== Navbar Section ====-->
    <nav class="navbar color-primary">
        <div class="container">
            <span class="margin-logo navbar-brand text-light fw-bold logo-size">
                Mas<span class="logo-bro">Bro</span>
            </span>
            <a href="#download" class="btn bg-light text-dark px-2 rounded-pill fw-bold">Download now!</a>
        </div>
    </nav>
    <!-- End Navbar Section -->

    <!--==== Hero Section ====-->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Mau ke kantin tapi mager?</h1>
                    <h2>Tenang sekarang ada aplikasi masbro canteen!</h2>
                    <div><a href="#download" class="btn-download-now scrollto">Download now!</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('images/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
            <path fill="#274F73" fill-opacity="1"
                d="M0,128L60,128C120,128,240,128,360,117.3C480,107,600,85,720,74.7C840,64,960,64,1080,74.7C1200,85,1320,107,1380,117.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
    </section>
    <!-- End Hero -->

    <!--==== About Section ====-->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/pict-about.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-5 content">
                    <h3>Sebenarnya apa sih masbro canteen itu?</h3>
                    <p class="fst-italic">
                        Masbro Canteen adalah aplikasi kantin online yang terletak di kampus PENS. Aplikasi ini
                        memudahkan mahasiswa dan staf kampus untuk memesan makanan dan minuman secara online. Pengguna
                        dapat menjelajahi menu dari berbagai tenant makanan yang bekerja sama dengan aplikasi ini dan
                        memesan makanan dengan mudah dan cepat.

                    <ul>
                        <li><i class="fa fa-check"></i> Dosen atau mahasiswa dapat mengakses aplikasi ini melalui
                            perangkat mereka dan dengan mudah menyelesaikan proses pemesanan.</li>
                        <li><i class="fa fa-check"></i> Memberikan fleksibilitas dalam waktu pemesanan.</li>
                        <li><i class="fa fa-check"></i> Bagi dosen juga mendapatkan fasilitas pengantaran makanan untuk
                            meningkatkan efisiensi mengajar.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!--==== Services Section ====-->
    <section id="services" class="services section-bg">
        <div class="container p-5">

            <div class="section-title">
                <span>Masbro Canteen</span>
                <h2>Apa sih kelebihan dari Masbro Canteen?</h2>
                <p>Pada aplikasi Masbro Canteen ini menawarkan beberapa kelebihan yang akan membantu kamu!</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-book"></i></div>
                        <h4><a href="#services">Tampilan Menu</a></h4>
                        <p>Aplikasi Masbro canteen memeiliki tampilan menu sehingga dapat memudahkan proses pemesanan
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-clock"></i></div>
                        <h4><a href="#services">Waktu Antar</a></h4>
                        <p>Bisa mengatur jadwal pengantaran ke ruangan dari aplikasi Masbro Canteen</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-credit-card"></i></div>
                        <h4><a href="#services">Pembayaran Cashless</a></h4>
                        <p>Ada beberapa cara pembayaran yang ditawarkan oleh aplikasi Masbro Canteen ini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ==== Download Section ==== -->
    <section id="download" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1>Download Masbro Canteen Sekarang!</h1>
                        <h2>Aplikasi yang akan membantu para pembeli kantin PENS dengan fitur yang mudah digunakan dan tampilan yang interaktif</h2>
                        <a href="https://play.google.com/store/apps/details?id=com.masbro.canteen" class="download-btn"><i class="bi bi-google-play"></i> Google Play</a>
                        {{-- <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 download-img"
                    data-aos="fade-up">
                    <img src="{{ asset('images/phone-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Download section -->

    <!--==== Testimonial Section ====-->
    <section id="testimonial" class="testimonial section-bg">
        <div class="container p-5">

            <div class="section-title">
                {{-- <span>Testimonial</span> --}}
                <h2>Testimonial</h2>
                <p>Berikut adalah testimonial user yang telah menggunakan Aplikasi Masbro Canteen</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="card-image">
                            <img class="img-fluid d-flex mx-auto test-img" src="{{ asset('images/yi-jin.png') }}">
                        </div>
                        <h4>Dosen 1</h4>
                        <p>Saya sangat senang menggunakan aplikasi Masbro Canteen Pens! Aplikasi ini benar-benar
                            memberikan pengalaman yang luar biasa dalam memesan makanan. Dengan tampilan yang intuitif
                            dan mudah digunakan, saya dapat dengan cepat menelusuri menu, memilih hidangan favorit saya,
                            dan memesannya dalam hitungan detik.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="card-image">
                            <img class="img-fluid d-flex mx-auto test-img" src="{{ asset('images/yi-jin.png') }}">
                        </div>
                        <h4>Dosen 2</h4>
                        <p>Saya sangat senang menggunakan aplikasi Masbro Canteen Pens! Aplikasi ini benar-benar
                            memberikan pengalaman yang luar biasa dalam memesan makanan. Dengan tampilan yang intuitif
                            dan mudah digunakan, saya dapat dengan cepat menelusuri menu, memilih hidangan favorit saya,
                            dan memesannya dalam hitungan detik.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="card-image">
                            <img class="img-fluid d-flex mx-auto test-img" src="{{ asset('images/yi-jin.png') }}">
                        </div>
                        <h4>Driver</h4>
                        <p>Saya sangat senang menggunakan aplikasi Masbro Canteen Pens! Aplikasi ini benar-benar
                            memberikan pengalaman yang luar biasa dalam memesan makanan. Dengan tampilan yang intuitif
                            dan mudah digunakan, saya dapat dengan cepat menelusuri menu, memilih hidangan favorit saya,
                            dan memesannya dalam hitungan detik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    {{-- ==== footer section ==== --}}
    <footer class="text-white pt-5 pb-4 color-primary">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">MasBro Canteen</h5>
                    <p>Aplikasi mobile untuk memesan makanan dan minuman di kantin Politeknik Elektronika Negeri
                        Surabaya. Pengguna dapat menentukan waktu dan lokasi pengantaran. Pembayaran dilakukan saat
                        pesanan tiba, meningkatkan efisiensi pemesanan makanan oleh dosen di kampus.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Produk</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> MasBro Canteen</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> MasBro Canteen</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> MasBro Canteen</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> MasBro Canteen</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Kelebnihan Kami</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Cepat</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Tepat Waktu</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Banyak pilihan</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Mudah Digunakan</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">hubungi kami</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>&nbsp;Team B1
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>&nbsp;teamb1@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>&nbsp;+62 8162859445
                    </p>
                    <p>
                        <i class="fas fa-print	 mr-3"></i>&nbsp;+62 8132873892
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p> Copyright ©2023 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-warning">MasBro Canteen</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">

                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            {{-- <li class="list-inline-item">
								<a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
										class="fab fa-google-plus"></i></a>
							</li> --}}
                            {{-- <li class="list-inline-item">
								<a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
										class="fab fa-linkedin-in"></i></a>
							</li> --}}
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- ====== End footer section ====== --}}

</body>
</html>
