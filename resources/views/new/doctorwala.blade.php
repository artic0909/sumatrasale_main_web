<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctorwala Medical Ecosystem | Unified Healthcare Solutions in India</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Doctorwala Medical Ecosystem | Find Doctors, Clinics & Manage Health Records" />
    <meta name="description" content="Doctorwala is India's premier Medical Ecosystem. Connect with verified doctors, book clinic appointments, find nearby medical shops, and manage your secure digital health records in one unified platform." />
    <meta name="keywords" content="Doctorwala, Medical Ecosystem India, Find Doctors Online, Online Doctor Appointment, Digital Health Records, Personal Medical ID, Nearby Clinics Howrah, Healthcare Management System, Sumatra Sales Healthcare" />
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Doctorwala | Your Family's Digital Healthcare Partner" />
    <meta property="og:description" content="Book appointments, store prescriptions, and access verified medical services across India with Doctorwala." />
    <meta property="og:image" content="{{ asset('img/products/doctorwala.png') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="Doctorwala - India's First Comprehensive Medical Ecosystem" />
    <meta property="twitter:description" content="Revolutionizing healthcare access with digital prescriptions and verified doctor networks." />
    <meta property="twitter:image" content="{{ asset('img/products/doctorwala.png') }}" />

    <!-- Canonical & Icons -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/products/doctorwala.png') }}" />

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Doctorwala",
      "alternateName": "Doctorwala Medical Ecosystem",
      "url": "{{ url('/doctorwala') }}",
      "image": "{{ asset('img/products/doctorwala.png') }}",
      "description": "A comprehensive medical ecosystem connecting patients with doctors, clinics, and pharmacies across India.",
      "applicationCategory": "HealthApplication",
      "operatingSystem": "Web, Android",
      "author": {
        "@type": "Organization",
        "name": "Sumatra Sales Private Limited"
      }
    }
    </script>

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"> -->

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
                <nav class="navbar navbar-expand-lg navbar-light bg-white navbar_container sticky-top shadow border p-3">
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
                                        href="/doctorwala"><img class="nav-img" src="{{asset('./icon/doctor.png')}}" width="19" alt="Doctorwala Icon" />&nbsp;<span>Doctorwala</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page"
                                        href="/schoolwala"><img class="nav-img" src="{{asset('./icon/graduation.png')}}" width="19" alt="Schoolwala Icon" />&nbsp;<span>Schoolwala</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/about"><img class="nav-img"
                                            src="{{asset('./icon/about.png')}}" width="19" alt="About Icon" />&nbsp;<span>About</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/blogs"><img class="nav-img"
                                            src="{{asset('./icon/blogs.png')}}" width="20" alt="" />&nbsp;<span>Blogs</span></a>
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
                        animation: scroll 60s linear infinite;
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

                    /* Floating Background Icons */
                    .floating-medical-bg {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        pointer-events: none;
                        z-index: -1;
                        overflow: hidden;
                        opacity: 0.4;
                    }
                    .med-icon {
                        position: absolute;
                        color: rgba(46, 74, 159, 0.08);
                        animation: medFloat 20s infinite ease-in-out;
                    }
                    @keyframes medFloat {
                        0%, 100% { transform: translateY(0) rotate(0deg); }
                        50% { transform: translateY(-40px) rotate(15deg); }
                    }
                </style>

                <!-- Floating Background Elements -->
                <div class="floating-medical-bg">
                    <!-- Large Icons -->
                    <i class="bi bi-heart-pulse med-icon" style="top: 10%; left: 5%; font-size: 6rem; animation-delay: 0s;"></i>
                    <i class="bi bi-hospital med-icon" style="top: 60%; right: 5%; font-size: 7rem; animation-delay: 3s;"></i>
                    <i class="bi bi-lungs med-icon" style="bottom: 20%; right: 15%; font-size: 6rem; animation-delay: 1s;"></i>

                    <!-- Many Small Icons Scattered -->
                    <i class="bi bi-capsule med-icon" style="top: 5%; left: 25%; font-size: 2.5rem; animation-delay: 2s;"></i>
                    <i class="bi bi-thermometer-half med-icon" style="top: 20%; left: 15%; font-size: 2rem; animation-delay: 4s;"></i>
                    <i class="bi bi-activity med-icon" style="top: 35%; right: 25%; font-size: 3rem; animation-delay: 1.5s;"></i>
                    <i class="bi bi-clipboard2-pulse med-icon" style="top: 50%; left: 8%; font-size: 2.5rem; animation-delay: 6s;"></i>
                    <i class="bi bi-droplet med-icon" style="bottom: 10%; left: 30%; font-size: 2rem; animation-delay: 2.5s;"></i>
                    <i class="bi bi-bandaid med-icon" style="top: 15%; right: 20%; font-size: 2.2rem; animation-delay: 7s;"></i>
                    <i class="bi bi-heart med-icon" style="bottom: 30%; left: 20%; font-size: 3rem; animation-delay: 3.5s;"></i>
                    <i class="bi bi-patch-plus med-icon" style="top: 40%; left: 40%; font-size: 2.5rem; animation-delay: 5.5s;"></i>
                    <i class="bi bi-shield-plus med-icon" style="bottom: 5%; right: 35%; font-size: 2.8rem; animation-delay: 0.5s;"></i>
                    <i class="bi bi-virus med-icon" style="top: 70%; left: 15%; font-size: 2.3rem; animation-delay: 8s;"></i>
                    <i class="bi bi-prescription med-icon" style="top: 80%; right: 25%; font-size: 3.5rem; animation-delay: 4.5s;"></i>
                    <i class="bi bi-person-badge med-icon" style="bottom: 45%; right: 8%; font-size: 2.4rem; animation-delay: 9s;"></i>
                    <i class="bi bi-heart-pulse-fill med-icon" style="top: 55%; left: 45%; font-size: 2.1rem; animation-delay: 10s;"></i>
                    <i class="bi bi-capsule-pill med-icon" style="top: 28%; left: 60%; font-size: 2.6rem; animation-delay: 11s;"></i>
                    <i class="bi bi-ear-fill med-icon" style="bottom: 15%; left: 55%; font-size: 2.2rem; animation-delay: 12s;"></i>
                    <i class="bi bi-eyedropper med-icon" style="top: 12%; left: 80%; font-size: 2.4rem; animation-delay: 13s;"></i>
                </div>

                <div class="promo-container">
                    <div class="hero-row">
                        <!-- Left: Hero Intro -->
                        <div class="doctorwala-hero-card shadow-sm border rounded-4 text-center text-lg-start" style="justify-content: flex-start !important;">
                            <div class="mb-4">
                                <img src="{{asset('img/products/doctorwala.png')}}" alt="Doctorwala Logo" width="130" class="img-fluid">
                            </div>
                            <h1 class="fw-bold clr-bl mb-3" style="font-size: 3.5rem; line-height: 1.1;">Doctorwala <br><span class="text-primary">Medical Ecosystem</span></h1>
                            <p class="fs-5 text-secondary mb-5" style="text-align: justify; max-width: 90%; line-height: 1;">When someone in your family needs a doctor, every second feels important. Searching, calling, waiting — it shouldn’t be this hard.</p>
                            <p class="fs-5 text-secondary mb-5" style="text-align: justify; max-width: 90%; line-height: 1;">Doctorwala connects you to nearby doctors, clinics, OPDs, and medical shops across India — from busy cities to the smallest villages. With just a few clicks, patients can find the right doctor and connect instantly.</p>
                            <p class="fs-5 text-secondary mb-5" style="text-align: justify; max-width: 90%; line-height: 1;">We also provide a secure Personal Medical ID, so your medical history stays organized and accessible whenever you need it. Because better records mean better diagnosis. And better diagnosis means better care.</p>
                            
                            <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start mb-5">
                                <a href="https://www.doctorwala.info/" target="_blank" class="btn bg-white border-2 border-primary clr-bl px-5 py-3 fw-bold rounded-pill shadow-sm fs-5 visit-btn-new">Visit Website <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.doctorwala.dochealth&pcampaignid=web_share" class="btn-app-download">
                                    <i class="bi bi-play-fill me-3 fs-4"></i> Get it on Play Store
                                </a>
                            </div>

                            <style>
                                .visit-btn-new {
                                    transition: all 0.3s;
                                    border: 2px solid var(--bl) !important;
                                }
                                .visit-btn-new:hover {
                                    background-color: var(--bl) !important;
                                    color: white !important;
                                }
                            </style>

                            <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start border-top pt-4 mb-4">
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/doctor.png')}}" width="25" class="me-2" alt=""> Patient App</div>
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/technical-support.png')}}" width="25" class="me-2" alt=""> Doctor App</div>
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/location.png')}}" width="25" class="me-2" alt=""> Clinic Management</div>
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/services.png')}}" width="25" class="me-2" alt=""> Health Records</div>
                            </div>

                            <!-- Additional Content Grid -->
                            <div class="row g-4 text-start">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(46, 74, 159, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-patch-check-fill text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold clr-bl mb-1">Verified Network</h6>
                                            <p class="small text-secondary m-0" style="font-size: 0.85rem;">Connecting you with 5000+ certified doctors and verified clinics across India.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(46, 74, 159, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-shield-lock-fill text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold clr-bl mb-1">Secure Records</h6>
                                            <p class="small text-secondary m-0" style="font-size: 0.85rem;">Your medical history is encrypted and accessible only to you and your doctor.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(46, 74, 159, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold clr-bl mb-1">Hyper-Local Search</h6>
                                            <p class="small text-secondary m-0" style="font-size: 0.85rem;">Find the nearest medical shops and diagnostic centers in just a few taps.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(46, 74, 159, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-headset text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold clr-bl mb-1">24/7 Priority Help</h6>
                                            <p class="small text-secondary m-0" style="font-size: 0.85rem;">Our dedicated support team is always ready to assist with your medical bookings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .transition-hover {
                                    transition: all 0.3s ease;
                                    border: 1px solid transparent;
                                }
                                .transition-hover:hover {
                                    background: rgba(46, 74, 159, 0.08) !important;
                                    border-color: rgba(46, 74, 159, 0.1);
                                    transform: translateY(-2px);
                                }
                            </style>
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
                                        <a href="https://wa.me/916292237207" class="btn btn-danger btns-1 fw-semibold p-3 px-4 flex-grow-1 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('./icon/whatsapp.png')}}" width="20" class="me-2" alt="" />
                                            Whatsapp
                                        </a>
                                        <a href="tel:916292237207" class="btn btn-org-01 btns-2 fw-semibold p-3 px-4 flex-grow-1 d-flex align-items-center justify-content-center">
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
                                @foreach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,16,17,18,19] as $i)
                                <div class="web-ss-card"><img src="{{asset('img/products/d'.$i.'.png')}}" alt="Web SS" class="w-100 h-100 object-fit-cover"></div>
                                @endforeach
                                @foreach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,16,17,18,19] as $i)
                                <div class="web-ss-card"><img src="{{asset('img/products/d'.$i.'.png')}}" alt="Web SS" class="w-100 h-100 object-fit-cover"></div>
                                @endforeach
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
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-primary bg-opacity-10 rounded-circle me-3"><i class="bi bi-calendar-check text-primary"></i></div> Book Appointments Instantly</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-primary bg-opacity-10 rounded-circle me-3"><i class="bi bi-person-badge text-primary"></i></div> Universal Medical ID Card</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-primary bg-opacity-10 rounded-circle me-3"><i class="bi bi-file-earmark-medical text-primary"></i></div> Digital Prescription Storage</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-primary bg-opacity-10 rounded-circle me-3"><i class="bi bi-headset text-primary"></i></div> 24/7 Priority Support</div>
                                </div>
                                <a href="https://play.google.com/store/apps/details?id=com.doctorwala.dochealth&pcampaignid=web_share" class="btn-app-download w-100 justify-content-center py-4 fs-4">
                                    <i class="bi bi-play-fill me-3"></i> Download Patient App
                                </a>
                            </div>
                            <div class="col-lg-7">
                                <div class="carousel-track-wrapper">
                                    <div class="carousel-track" style="animation-duration: 45s;">
                                        @for($i = 1; $i <= 29; $i++)
                                        <div class="app-ss-card-new"><img src="{{asset('img/products/da'.$i.'.png')}}" alt="App SS" class="w-100 h-100 object-fit-cover"></div>
                                        @endfor
                                        @for($i = 1; $i <= 8; $i++)
                                        <div class="app-ss-card-new"><img src="{{asset('img/products/da'.$i.'.png')}}" alt="App SS" class="w-100 h-100 object-fit-cover"></div>
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
                                    <div class="text-center">
                                        <div class="bg-white p-3 rounded-circle shadow-sm mb-2" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                            <i class="bi bi-geo-alt fs-1 text-primary"></i>
                                        </div>
                                        <span class="fw-bold">Reachable</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="bg-white p-3 rounded-circle shadow-sm mb-2" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                            <i class="bi bi-shield-check fs-1 text-primary"></i>
                                        </div>
                                        <span class="fw-bold">Reliable</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="bg-white p-3 rounded-circle shadow-sm mb-2" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                            <i class="bi bi-clock-history fs-1 text-primary"></i>
                                        </div>
                                        <span class="fw-bold">Timely</span>
                                    </div>
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
                                        <!-- <li>
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
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- =============================Footer Section End====================================================================== -->

                <!-- ====================================Fixed Shapes Start================================================================ -->
                <img src="{{asset('./img/rob.png')}}" class="fixed-robot" alt="" style="
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