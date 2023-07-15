@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Santap Rasa</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="{{ asset('web/assets/img/favicon.png') }}') }}" rel="icon" />
        <link href="{{ asset('web/assets/img/apple-touch-icon.png') }}') }}" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="{{ asset('web/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('web/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('web/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
        <link href="{{ asset('web/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="{{ asset('web/assets/css/main.css') }}" rel="stylesheet" />
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-lg-0">
                    <h1>Santap Rasa<span></span></h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#chefs">Chefs</a></li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>
                <!-- .navbar -->
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div
                        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">Enjoy Your<br />Delicious Food</h2>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Santap Rasa: Cita rasa tradisional dan sentuhan modern yang
                            memikat. Nikmati hidangan lezat dengan bahan segar dan berkualitas
                            tinggi dalam pengalaman kuliner yang unik.
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#menu" class="btn-book-a-table">Lihat Menu</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="{{ asset('web/assets/img/hero-img.png') }}" class="img-fluid" alt=""
                            data-aos="zoom-out" data-aos-delay="300" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>About Us</h2>
                        <p>Description <span>Restaurant</span></p>
                    </div>

                    <div class="row gy-4">
                        <div class="col-lg-7 position-relative about-img"
                            style="background-image: url('{{ asset('web/assets/img/about.jpg') }}')" data-aos="fade-up"
                            data-aos-delay="150">
                            <div class="call-us position-absolute">
                                <h4>Pesan Disini</h4>
                                <p>+628123456789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                            <div class="content ps-0 ps-lg-5">
                                <p class="fst-italic">
                                    Santap Rasa adalah tempat makan yang menggabungkan cita rasa
                                    tradisional dan sentuhan modern dalam setiap hidangannya.
                                    Restoran kami menawarkan pengalaman kuliner yang unik, di mana
                                    para tamu dapat menikmati beragam hidangan lezat dengan
                                    bahan-bahan segar dan berkualitas tinggi.
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all"></i> Suasana hangat dan elegan.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i> Makanan berkualitas dengan
                                        layanan pelanggan yang ramah.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i> Hidangan khas lokal dan
                                        internasional dengan sentuhan kreatif.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i> Menggunakan bahan segar dan
                                        rempah-rempah yang tepat.
                                    </li>
                                </ul>
                                <p>
                                    Menu kami terdiri dari berbagai hidangan khas dari berbagai
                                    penjuru dunia, mulai dari hidangan lokal dengan cita rasa
                                    autentik hingga hidangan internasional dengan sentuhan
                                    kreatif. Dengan menggunakan bahan-bahan segar dan pilihan
                                    rempah-rempah yang tepat, kami berkomitmen untuk menyajikan
                                    hidangan yang menggugah selera dan memuaskan.
                                </p>

                                <div class="position-relative mt-4">
                                    <img src="{{ asset('web/assets/img/about-2.jpg') }}" class="img-fluid"
                                        alt="" />
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="why-box">
                                <h3>Why Choose Santap Rasa</h3>
                                <p>
                                    Santap Rasa juga memperhatikan kebutuhan diet khusus, seperti
                                    vegetarian, vegan, dan gluten-free. Kami selalu berupaya
                                    memenuhi kebutuhan dan preferensi pelanggan kami, sehingga
                                    setiap kunjungan ke Santap Rasa akan memberikan pengalaman
                                    kuliner yang sempurna bagi semua orang.
                                </p>
                            </div>
                        </div>
                        <!-- End Why Box -->

                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="row gy-4">
                                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                        <i class="bi bi-clipboard-data"></i>
                                        <h4>Cita Rasa</h4>
                                        <p>
                                            Cita rasa menyelaraskan tradisi dan modernitas yang
                                            menciptakan harmoni kuliner tak terlupakan.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                        <i class="bi bi-gem"></i>
                                        <h4>Pengalaman Kuliner</h4>
                                        <p>
                                            Pengalaman kuliner yang menyenangkan dengan suasana yang
                                            hangat dan layanan yang ramah.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                        <i class="bi bi-inboxes"></i>
                                        <h4>Keanekaragaman Menu</h4>
                                        <p>
                                            Keanekaragaman menu untuk setiap selera dan perhatian
                                            terhadap kebutuhan diet khusus.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Why Us Section -->

            <!-- ======= Stats Counter Section ======= -->
            <section id="stats-counter" class="stats-counter">
                <div class="container" data-aos="zoom-out">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="10000"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pelanggan</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Menu</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Rating</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Karyawan</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->
                    </div>
                </div>
            </section>
            <!-- End Stats Counter Section -->

            <!-- ======= Menu Section ======= -->
            <section id="menu" class="menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Our Menu</h2>
                        <p>Check Our <span>Delicious Menu</span></p>
                    </div>


                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade active show" id="menu-starters">

                            <div class="row gy-5">
                                @foreach ($produk as $p)
                                    <div class="col-lg-4 menu-item">
                                        <a href="https://img2.cgtrader.com/items/3786581/3e3f94ea12/food-g03-3d-model-obj-fbx.jpg"
                                            class="glightbox"><img
                                                src="https://img2.cgtrader.com/items/3786581/3e3f94ea12/food-g03-3d-model-obj-fbx.jpg"
                                                class="menu-img img-fluid" alt="" /></a>
                                        <h4>{{ $p->nama }}</h4>
                                        <p class="ingredients">
                                            {{ $p->nama_kategori }}
                                        </p>
                                        <p class="price">Rp.{{ $p->harga_jual }}</p>
                                    </div>
                                @endforeach
                                <!-- Menu Item -->
                            </div>
                        </div>
                        <!-- End Menu Content -->
                    </div>
                </div>
            </section>
            <!-- End Menu Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Testimonials</h2>
                        <p>What Are They <span>Saying About Us</span></p>
                    </div>

                    <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Restoran Santap Rasa adalah tempat terbaik untuk
                                                    menikmati hidangan autentik. Saya sangat terkesan
                                                    dengan cita rasa dan keanekaragaman menu mereka.
                                                    Setiap kunjungan ke sini selalu memberikan pengalaman
                                                    kuliner yang tak terlupakan.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>Ahmad Abdullah</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('web/assets/img/testimonials/testimonials-1.jpg') }}"
                                                class="img-fluid testimonial-img" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Santap Rasa benar-benar memperhatikan kebutuhan diet
                                                    saya. Sebagai seorang vegetarian, saya senang
                                                    menemukan pilihan hidangan yang lezat dan kreatif di
                                                    menu mereka. Tempat ini adalah surga bagi para pecinta
                                                    makanan sehat!.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>Rina Fitriani</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('web/assets/img/testimonials/testimonials-2.jpg') }}"
                                                class="img-fluid testimonial-img" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Santap Rasa benar-benar memukau! Hidangan lezat,
                                                    suasana yang nyaman, dan layanan yang ramah. Saya
                                                    merasa diperlakukan istimewa setiap kali mengunjungi
                                                    restoran ini. Terima kasih, Santap Rasa!.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>Siti Nuraini</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('web/assets/img/testimonials/testimonials-3.jpg') }}"
                                                class="img-fluid testimonial-img" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <!-- End Testimonials Section -->

            <!-- ======= Chefs Section ======= -->
            <section id="chefs" class="chefs section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Chefs</h2>
                        <p>Our <span>Proffesional</span> Chefs</p>
                    </div>

                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{ asset('web/assets/img/chefs/altaf.jpg') }}" class="img-fluid"
                                        alt="" />
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Althaf Sulistyo</h4>
                                    <span>Master Chef</span>
                                    <p>
                                        Master chef yang berpengalaman dan penuh dengan pengetahuan kuliner yang luas.
                                        Dengan keahliannya yang mendalam dalam berbagai jenis masakan, dia mampu menciptakan
                                        hidangan-hidangan istimewa yang menggugah selera dan menjadikan Santap Rasa sebagai
                                        destinasi kuliner yang tak terlupakan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Chefs Member -->

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{ asset('web/assets/img/chefs/ikma.jpg') }}" class="img-fluid"
                                        alt="" />
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Ikma Nur Illahi</h4>
                                    <span>Patissier</span>
                                    <p>
                                        Pattisier berbakat dengan keahlian dalam mempersiapkan berbagai kue dan pastry yang
                                        lezat. Dengan sentuhan kreatifnya, dia mampu menciptakan kreasi yang indah dan
                                        menggugah selera. Keahlian Chef Ikma dalam memadukan rasa dan memperhatikan detail
                                        menjadikannya penambah nilai yang tak tergantikan bagi tim Santap Rasa.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{ asset('web/assets/img/chefs/farras.jpg') }}" class="img-fluid"
                                        alt="" />
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Farras Zuhdiyyah</h4>
                                    <span>Patissier</span>
                                    <p>
                                        Pattisier berbakat dengan dedikasi yang tinggi terhadap seni kue dan pastry.
                                        Keahliannya dalam menciptakan hidangan manis yang lezat dan tampilan yang menawan
                                        membuatnya menjadi aset berharga bagi tim Santap Rasa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{ asset('web/assets/img/chefs/ibnu.jpg') }}" class="img-fluid"
                                        alt="" />
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Ibnu Putra</h4>
                                    <span>Cook</span>
                                    <p>
                                        Cook yang handal dan berdedikasi tinggi dalam memasak hidangan-hidangan lezat.
                                        Dengan keahliannya dalam mengolah berbagai bahan makanan, Chef Ibnu mampu
                                        menghadirkan hidangan yang berkualitas dan menyajikannya dengan presentasi yang
                                        menarik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Chefs Section -->
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-3 col-md-6 d-flex">
                        <i class="bi bi-geo-alt icon"></i>
                        <div>
                            <h4>Address</h4>
                            <p>
                                Jalan Mawar Merah No. 17 <br />
                                Depok, Jawa Barat, Indonesia<br />
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                        <i class="bi bi-telephone icon"></i>
                        <div>
                            <h4>Reservations</h4>
                            <p>
                                <strong>Phone:</strong> +628123456789<br />
                                <strong>Email:</strong> info@example.com<br />
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                        <i class="bi bi-clock icon"></i>
                        <div>
                            <h4>Opening Hours</h4>
                            <p>
                                <strong>Mon-Sat: 11AM</strong> - 23PM<br />
                                Sunday: Closed
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Follow Us</h4>
                        <div class="social-links d-flex">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Santap Rasa</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- <div id="preloader"></div> -->

        <!-- Vendor JS Files -->
        <script src="{{ asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('web/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('web/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('web/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('web/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('web/assets/js/main.js') }}"></script>
    </body>

    </html>
@endsection
