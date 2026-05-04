<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctorwala Medical Ecosystem | Sumatra Sales Pvt. Ltd.</title>

    <!-- Primary Meta Tags -->
    <meta name="description" content="Doctorwala is India's first comprehensive Medical Ecosystem, providing a unified platform for doctors, clinics, and healthcare providers with innovative digital solutions tailored for the Indian healthcare industry." />
    <meta name="keywords" content="Sumatra Sales Pvt Ltd, Doctorwala Medical Ecosystem, Schoolwala E-learning Platform, Healthcare IT India, Digital Education Platform, Doctorwala App, Schoolwala Learning, Software Development India, Sumatra Sales Projects" />
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"> -->

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Doctorwala Medical Ecosystem | Sumatra Sales Pvt. Ltd." />
    <meta property="og:description" content="Doctorwala is India's first comprehensive Medical Ecosystem, providing a unified platform for doctors, clinics, and healthcare providers with innovative digital solutions tailored for the Indian healthcare industry." />
    <meta property="og:image" content="{{ asset('sumatra2.png') }}" />
    <meta property="og:site_name" content="Sumatra Sales" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="Doctorwala Medical Ecosystem | Sumatra Sales Pvt. Ltd." />
    <meta property="twitter:description" content="Doctorwala is India's first comprehensive Medical Ecosystem, providing a unified platform for doctors, clinics, and healthcare providers with innovative digital solutions tailored for the Indian healthcare industry." />
    <meta property="twitter:image" content="{{ asset('sumatra2.png') }}" />
    <meta name="twitter:site" content="@SumatraSales" />
    <meta name="twitter:creator" content="@SumatraSales" />

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

</head>

<body>
    <!-- Loader Start===================================================================== -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <!-- Loader End===================================================================== -->

    <!-- Main Contrainer Start=========================================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-12">






                <!-- Navbar Start===================================================-->
                <nav class="navbar navbar-expand-lg navbar-light bg-white navbar_container shadow border p-3">
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="/">
                            <img src="{{asset('./sumatra2.png')}}" alt="Sumatra Sales Logo" class="me-2 nav-logo" width="80" />
                            <span class="fw-bold fs-4 clr-bl">Private</span>&nbsp;
                            <span class="fw-bold fs-4 clr-org"> Limited</span>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
                            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarDefault">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 align-items-center">

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page" id="active-nav"
                                        href="/"><img class="nav-img" src="{{asset('./icon/doctor.png')}}" width="19" alt="Doctorwala Icon" />&nbsp;<span>Doctorwala</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page"
                                        href="/"><img class="nav-img" src="{{asset('./icon/graduation.png')}}" width="19" alt="Schoolwala Icon" />&nbsp;<span>Schoolwala</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/about"><img class="nav-img"
                                            src="{{asset('./icon/about.png')}}" width="19" alt="About Icon" />&nbsp;<span>About</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/blogs"><img class="nav-img"
                                            src="{{asset('./icon/blogs.png')}}" width="20" alt="" />&nbsp;<span>Blogs</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold hide inner-items-center" aria-current="page" href="/contact"><img class="nav-img"
                                            src="{{asset('./icon/contactus.png')}}" width="23" alt="" />&nbsp;<span>Contact</span></a>
                                </li>

                                <li class="nav-item btn-org">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="mailto:sumatra.sales2424@gmail.com">Let's Talk &nbsp;
                                        <img class="nav-img hide" src="{{asset('./icon/arrow-talk.png')}}" width="15" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End======================================================-->













                <!-- Doctorwala Promotional Content Start========================================================================================== -->
                <style>
                    /* Force full width and clean layout for Doctorwala page */
                    body {
                        margin-left: 0 !important;
                        margin-right: 0 !important;
                        background-color: #fcfcfc;
                        overflow-x: hidden;
                    }
                    .container {
                        max-width: 1400px !important;
                    }
                    /* Reset any previous service-row grid for this page */
                    .service-row {
                        display: block !important;
                        width: 100% !important;
                    }

                    .promo-container {
                        margin-top: 2rem;
                        width: 100%;
                    }
                    .hero-row {
                        display: grid;
                        grid-template-columns: 8fr 4fr;
                        gap: 30px;
                        margin-bottom: 2.5rem;
                    }
                    .doctorwala-hero-card {
                        background: white;
                        border: 1px solid rgba(0,0,0,0.08);
                        padding: 4rem;
                        position: relative;
                        overflow: hidden;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                    }
                    .doctorwala-hero-card::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 6px;
                        background: linear-gradient(to right, #2e4a9f, #ff6011);
                    }
                    
                    /* Auto-Scroll Carousel Styles */
                    .carousel-track-wrapper {
                        overflow: hidden;
                        width: 100%;
                        position: relative;
                        padding: 20px 0;
                    }
                    .carousel-track {
                        display: flex;
                        gap: 30px;
                        width: max-content;
                        animation: scroll 40s linear infinite;
                    }
                    .carousel-track:hover {
                        animation-play-state: paused;
                    }
                    @keyframes scroll {
                        0% { transform: translateX(0); }
                        100% { transform: translateX(-50%); }
                    }
                    
                    .web-ss-card {
                        width: 450px;
                        height: 280px;
                        border-radius: 20px;
                        overflow: hidden;
                        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
                        border: 1px solid #f0f0f0;
                        transition: transform 0.3s;
                    }
                    .web-ss-card:hover {
                        transform: translateY(-5px);
                    }

                    .app-ss-card-new {
                        width: 240px;
                        height: 480px;
                        border-radius: 35px;
                        overflow: hidden;
                        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
                        border: 6px solid #1a1a1a; /* Phone frame effect */
                        background: #000;
                    }
                    
                    .btn-app-download {
                        background: linear-gradient(45deg, #1a1a1a, #333);
                        color: white !important;
                        padding: 15px 40px;
                        border-radius: 50px;
                        font-weight: bold;
                        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                        transition: all 0.3s;
                        text-decoration: none;
                        display: inline-flex;
                        align-items: center;
                        font-size: 1.1rem;
                        border: 1px solid rgba(255,255,255,0.1);
                    }
                    .btn-app-download:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
                        filter: brightness(1.2);
                    }

                    @media (max-width: 1200px) {
                        .hero-row {
                            grid-template-columns: 7fr 5fr;
                        }
                    }
                    @media (max-width: 991px) {
                        .hero-row {
                            grid-template-columns: 1fr;
                        }
                        .doctorwala-hero-card {
                            padding: 2.5rem;
                        }
                    }
                </style>

                <div class="promo-container">
                    <div class="hero-row">
                        <!-- Left: Hero Intro -->
                        <div class="doctorwala-hero-card shadow-sm border rounded-4 text-center text-lg-start">
                            <div class="mb-4">
                                <img src="{{asset('img/products/doctorwala.png')}}" alt="Doctorwala Logo" width="130" class="img-fluid">
                            </div>
                            <h1 class="fw-bold clr-bl mb-3" style="font-size: 3.5rem; line-height: 1.1;">Doctorwala <br><span class="text-primary">Medical Ecosystem</span></h1>
                            <p class="fs-5 text-secondary mb-5" style="text-align: justify; max-width: 90%; line-height: 1.7;">India's first unified healthcare platform designed to connect millions of patients with verified doctors, clinics, and pharmacies. We bridge the gap between healthcare providers and seekers with cutting-edge technology.</p>
                            
                            <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start mb-5">
                                <a href="https://www.doctorwala.info/" target="_blank" class="btn btn-visit px-5 py-3 fw-bold text-white rounded-pill shadow-sm fs-5">Visit Website <i class="fas fa-external-link-alt ms-2"></i></a>
                                <a href="#" class="btn-app-download">
                                    <i class="fab fa-google-play me-3 fa-lg"></i> Get it on Play Store
                                </a>
                            </div>

                            <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start border-top pt-4">
                                <div class="d-flex align-items-center fw-semibold"><i class="fas fa-check-circle text-success me-2"></i> Patient App</div>
                                <div class="d-flex align-items-center fw-semibold"><i class="fas fa-check-circle text-success me-2"></i> Doctor App</div>
                                <div class="d-flex align-items-center fw-semibold"><i class="fas fa-check-circle text-success me-2"></i> Clinic Management</div>
                                <div class="d-flex align-items-center fw-semibold"><i class="fas fa-check-circle text-success me-2"></i> Health Records</div>
                            </div>
                        </div>

                        <!-- Right: Video Section (Reels Type) -->
                        <div class="video-section-col">
                            <section class="video-fixed-section">
                                <div class="shadow border p-3 vfs-inner bg-white h-100">
                                    <div style="border-radius: 15px; overflow: hidden;" class="img-container bg-black shadow-sm">
                                        <iframe 
                                            width="100%" 
                                            src="https://www.youtube.com/embed/s8kW-jRzNmM?autoplay=1&mute=1&loop=1&playlist=s8kW-jRzNmM&controls=0&modestbranding=1" 
                                            title="YouTube video player" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                            allowfullscreen 
                                            style="aspect-ratio: 9/16; width: 100%; border: none;">
                                        </iframe>
                                    </div>

                                    <div class="card-content mt-3 text-center">
                                        <h1 class="fw-bold fs-5 m-0 clr-bl mb-1">Doctorwala Experience</h1>
                                        <p class="small text-secondary">Watch how we are revolutionizing healthcare</p>
                                    </div>

                                    <div class="buttons video-buttons d-flex justify-content-between gap-2" style="padding: 16px;">
                                        @foreach($videos as $video)
                                        <a href="https://wa.me/{{ $video->contact }}" class="btn btn-danger btns-1 fw-semibold p-3 px-4 flex-grow-1 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('./icon/whatsapp.png')}}" width="20" class="me-2" alt="" />
                                            Whatsapp
                                        </a>
                                        <a href="tel:{{ $video->contact }}" class="btn btn-org-01 btns-2 fw-semibold p-3 px-4 flex-grow-1 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('./icon/call.png')}}" width="20" class="me-2" alt="" />
                                            Call
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- Website Showcase -->
                    <div class="shadow-sm border p-5 rounded-4 bg-white mb-5">
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <h2 class="fw-bold fs-1 mb-2">Powerful Web Platform</h2>
                                <p class="text-secondary fs-5">A comprehensive dashboard for healthcare management</p>
                            </div>
                        </div>
                        <div class="carousel-track-wrapper">
                            <div class="carousel-track">
                                @for($i = 1; $i <= 4; $i++)
                                <div class="web-ss-card"><img src="{{asset('img/products/doc-web-'.$i.'.png')}}" alt="Web SS" class="w-100 h-100 object-fit-cover"></div>
                                @endfor
                                @for($i = 1; $i <= 4; $i++)
                                <div class="web-ss-card"><img src="{{asset('img/products/doc-web-'.$i.'.png')}}" alt="Web SS" class="w-100 h-100 object-fit-cover"></div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <!-- App Showcase -->
                    <div class="shadow-sm border p-5 rounded-4 bg-white mb-5 overflow-hidden">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-5">
                                <h2 class="fw-bold clr-bl mb-4" style="font-size: 3rem;">Health in Your <span class="text-primary">Pocket</span></h2>
                                <p class="text-secondary mb-5 fs-5">The Doctorwala mobile app provides instant access to verified healthcare services. Manage your life with ease.</p>
                                <div class="features-list mb-5">
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-success bg-opacity-10 rounded-circle me-3"><i class="fas fa-check text-success"></i></div> Book Appointments Instantly</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-success bg-opacity-10 rounded-circle me-3"><i class="fas fa-check text-success"></i></div> Universal Medical ID Card</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-success bg-opacity-10 rounded-circle me-3"><i class="fas fa-check text-success"></i></div> Digital Prescription Storage</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-success bg-opacity-10 rounded-circle me-3"><i class="fas fa-check text-success"></i></div> 24/7 Priority Support</div>
                                </div>
                                <a href="#" class="btn-app-download w-100 justify-content-center py-4 fs-4">
                                    <i class="fab fa-google-play me-3"></i> Download Patient App
                                </a>
                            </div>
                            <div class="col-lg-7">
                                <div class="carousel-track-wrapper">
                                    <div class="carousel-track" style="animation-duration: 25s;">
                                        @for($i = 1; $i <= 4; $i++)
                                        <div class="app-ss-card-new"><img src="{{asset('img/products/doc-app-'.$i.'.png')}}" alt="App SS" class="w-100 h-100 object-fit-cover"></div>
                                        @endfor
                                        @for($i = 1; $i <= 4; $i++)
                                        <div class="app-ss-card-new"><img src="{{asset('img/products/doc-app-'.$i.'.png')}}" alt="App SS" class="w-100 h-100 object-fit-cover"></div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission Footer -->
                    <div class="p-5 rounded-4 border-0 bg-primary bg-opacity-10 shadow-sm mb-5">
                        <div class="row align-items-center g-4">
                            <div class="col-md-7">
                                <h3 class="fw-bold clr-bl mb-3 fs-2">Our Core Mission</h3>
                                <p class="fst-italic text-secondary fs-5 m-0" style="line-height: 1.6;">"To bridge the gap between patients and reliable healthcare providers through innovative technology that works for everyone across India."</p>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex justify-content-center justify-content-md-end gap-5">
                                    <div class="text-center"><img src="{{asset('./icon/location.png')}}" width="60" alt="" class="mb-2 shadow-sm rounded-circle"><br><span class="fw-bold">Reachable</span></div>
                                    <div class="text-center"><img src="{{asset('./icon/call.png')}}" width="60" alt="" class="mb-2 shadow-sm rounded-circle"><br><span class="fw-bold">Reliable</span></div>
                                    <div class="text-center"><img src="{{asset('./icon/technical-support.png')}}" width="60" alt="" class="mb-2 shadow-sm rounded-circle"><br><span class="fw-bold">Timely</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =============================Footer Section Start====================================================================== -->
                <footer class="row mt-5 mb-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="footer-logo">
                                    <img src="{{asset('./sumatra1.png')}}" width="60" alt="" />
                                    <p class="opacity-75 footer-text">
                                        <span class="clr-bl fs-5">©</span> 2025 All rights
                                        reserved by <span class="clr-bl fs-4">♥</span> Sumatra Sales Private Limited
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="footer-links">
                                    <ul class="footer-ul d-flex justify-content-end align-items-center gap-3">
                                        <li>
                                            <a href="/privacy-policy" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Privacy <span class="hidee"> & Policy</span></a>
                                        </li>
                                        <li>
                                            <a href="/services" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Services</a>
                                        </li>
                                        <li>
                                            <a href="/contact" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- =============================Footer Section End====================================================================== -->

                <!-- ====================================Fixed Shapes Start================================================================ -->
                <img src="{{asset('./icon/8967136.webp')}}" class="fixed-robot" alt="" style="
              position: fixed;
              top: 80px;
              width: 300px;
              left: 0;
              filter: drop-shadow(1px 1px 1px rgba(199, 201, 204, 0.747));
            " />
                <img src="{{asset('./icon/8992340.webp')}}" class="fixed-shape" alt=""
                    style="position: fixed; bottom: 80px; width: 150px; right: 0" />
                <!-- ====================================Fixed Shapes End================================================================ -->
            </div>
        </div>
    </div>
    <!-- Main Contrainer End=========================================================================== -->

    <!--JS -->
    <script src="{{asset('./js/loader.js')}}"></script>
    <script src="{{asset('./js/scroll-project.js')}}"></script>
    <script src="{{asset('./js/scroll-blogs.js')}}"></script>
    <script src="{{asset('./js/scroll-partner.js')}}"></script>
</body>

</html>