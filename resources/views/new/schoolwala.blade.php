<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schoolwala E-learning | Premier WBBSE Bengali Medium Learning Platform</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Schoolwala E-learning | WBBSE Board Animated Lessons & Madhyamik Suggestions" />
    <meta name="description" content="Schoolwala is the leading digital education platform for West Bengal Board (WBBSE) students. Get high-quality animated lessons, Madhyamik suggestion papers, and interactive quizzes in Bengali medium." />
    <meta name="keywords" content="Schoolwala, WBBSE E-learning, Madhyamik Suggestions 2025, West Bengal Board Bengali Medium, Animated School Lessons, Online Classes WBBSE, Madhyamik Preparation App, Sumatra Sales Education" />
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="7 days" />

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Schoolwala | Digital Education for West Bengal Students" />
    <meta property="og:description" content="Empowering WBBSE students with premium animated content and expert guidance. Join Schoolwala today!" />
    <meta property="og:image" content="{{ asset('img/products/Schoolwala.jpg') }}" />
    <meta property="og:site_name" content="Sumatra Sales" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="Schoolwala - The Future of Learning for West Bengal" />
    <meta property="twitter:description" content="Quality education made accessible with Schoolwala's animated curriculum for WBBSE board." />
    <meta property="twitter:image" content="{{ asset('img/products/Schoolwala.jpg') }}" />

    <!-- Canonical & Icons -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/jpg" href="{{ asset('img/products/Schoolwala.jpg') }}" />

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Schoolwala",
      "url": "{{ url('/schoolwala') }}",
      "logo": "{{ asset('img/products/Schoolwala.jpg') }}",
      "description": "An innovative e-learning platform dedicated to providing high-quality Bengali medium education for WBBSE board students.",
      "parentOrganization": {
        "@type": "Organization",
        "name": "Sumatra Sales Private Limited"
      }
    }
    </script>

    <style>
        :root {
            --school-primary: #ff9a00;
            --school-secondary: #ffc107;
            --school-dark: #cc7a00;
        }
        .text-school { color: var(--school-primary) !important; }
        .bg-school { background-color: var(--school-primary) !important; }
        .border-school { border-color: var(--school-primary) !important; }
        .btn-school {
            background-color: var(--school-primary);
            color: white;
            border: none;
            transition: all 0.3s;
        }
        .btn-school:hover {
            background-color: var(--school-dark);
            color: white;
            transform: translateY(-2px);
        }
        
        body {
            margin-left: 0 !important;
            margin-right: 0 !important;
            background-color: #fffaf0;
            overflow-x: hidden !important;
            width: 100% !important;
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
        .schoolwala-hero-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.08);
            padding: 4rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .schoolwala-hero-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(to right, var(--school-primary), var(--school-secondary));
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
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            font-weight: bold;
        }

        .app-ss-card-new {
            width: 240px;
            height: 480px;
            border-radius: 35px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
            border: 6px solid #1a1a1a;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            font-weight: bold;
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

        .visit-btn-new {
            transition: all 0.3s;
            border: 2px solid var(--school-primary) !important;
            color: var(--school-primary) !important;
        }
        .visit-btn-new:hover {
            background-color: var(--school-primary) !important;
            color: white !important;
        }

        .transition-hover {
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        .transition-hover:hover {
            background: rgba(255, 154, 0, 0.08) !important;
            border-color: rgba(255, 154, 0, 0.1);
            transform: translateY(-2px);
        }

        /* Floating Background Icons */
        .floating-school-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
            opacity: 0.2; /* Lowered global opacity */
        }
        .school-icon {
            position: absolute;
            color: rgba(255, 154, 0, 0.05); /* Very faint icons for readability */
            animation: schoolFloat 20s infinite ease-in-out;
        }
        @keyframes schoolFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-40px) rotate(15deg); }
        }

        @media (max-width: 1200px) {
            .hero-row { grid-template-columns: 7fr 5fr; }
            .schoolwala-hero-card { padding: 3rem; }
        }

        @media (max-width: 991px) {
            .hero-row { 
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .schoolwala-hero-card { 
                padding: 2rem;
                text-align: center !important;
            }
            .schoolwala-hero-card h1 { 
                font-size: 2.5rem !important; 
            }
            .schoolwala-hero-card p {
                max-width: 100% !important;
                margin-bottom: 2rem !important;
            }
            .video-section-col {
                width: 100% !important;
            }
            .video-fixed-section {
                position: relative !important;
                width: 100% !important;
            }
            .carousel-track {
                gap: 15px;
            }
            .web-ss-card {
                width: 300px;
                height: 180px;
            }
            .app-ss-card-new {
                width: 180px;
                height: 360px;
            }
        }

        @media (max-width: 768px) {
            .navbar-brand span {
                font-size: 1.1rem !important;
            }
            .schoolwala-hero-card h1 {
                font-size: 1.8rem !important;
            }
            .promo-container {
                padding: 0 5px;
            }
            .shadow-sm.p-5 {
                padding: 1.2rem !important;
            }
            .fixed-robot {
                width: 120px !important;
                top: 15% !important;
                opacity: 1 !important;
                pointer-events: none;
            }
            .fixed-shape {
                width: 60px !important;
                bottom: 50px !important;
                opacity: 1 !important;
            }
            .btn-app-download {
                font-size: 0.9rem !important;
                padding: 12px 20px !important;
            }
        }
    </style>
</head>

<body>
    <!-- Loader Start -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white navbar_container sticky-top shadow border p-3">
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="/">
                            <img src="{{asset('./sumatra2.png')}}" alt="Sumatra Sales Logo" class="me-2 nav-logo" width="80" />
                            <span class="fw-bold fs-4 clr-bl">Private</span>&nbsp;
                            <span class="fw-bold fs-4 clr-org"> Limited</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarDefault">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/"><span>Home</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/about"><span>About</span></a>
                                </li>

                                
                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/blogs"><span>Blogs</span></a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page"
                                        href="/doctorwala"><span>Doctorwala</span>&nbsp;<img class="nav-img" src="{{asset('./icon/doctor.png')}}" width="19" alt="Doctorwala Icon" /></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page" id="active-nav"
                                        href="/schoolwala"><span>Schoolwala</span>&nbsp;<img class="nav-img" src="{{asset('./icon/graduation.png')}}" width="19" alt="Schoolwala Icon" /></a>
                                </li>

                                <li class="nav-item btn-org">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="mailto:sumatra.sales2424@gmail.com">Contact Us &nbsp;
                                        <img class="nav-img hide" src="{{asset('./icon/arrow-talk.png')}}" width="15" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Floating Background -->
                <div class="floating-school-bg">
                    <!-- Large Icons -->
                    <i class="bi bi-book school-icon" style="top: 10%; left: 5%; font-size: 6rem;"></i>
                    <i class="bi bi-mortarboard school-icon" style="top: 60%; right: 5%; font-size: 7rem; animation-delay: 3s;"></i>
                    <i class="bi bi-pencil school-icon" style="bottom: 20%; right: 15%; font-size: 6rem; animation-delay: 1s;"></i>
                    
                    <!-- Small Icons -->
                    <i class="bi bi-journal-text school-icon" style="top: 5%; left: 25%; font-size: 2.5rem; animation-delay: 2s;"></i>
                    <i class="bi bi-award school-icon" style="top: 20%; left: 15%; font-size: 2rem; animation-delay: 4s;"></i>
                    <i class="bi bi-lightbulb school-icon" style="top: 35%; right: 25%; font-size: 3rem; animation-delay: 1.5s;"></i>
                    <i class="bi bi-backpack school-icon" style="top: 50%; left: 8%; font-size: 2.5rem; animation-delay: 6s;"></i>
                    <i class="bi bi-calculator school-icon" style="bottom: 10%; left: 30%; font-size: 2rem; animation-delay: 2.5s;"></i>
                    <i class="bi bi-puzzle school-icon" style="top: 15%; right: 20%; font-size: 2.2rem; animation-delay: 7s;"></i>
                    <i class="bi bi-globe school-icon" style="bottom: 30%; left: 20%; font-size: 3rem; animation-delay: 3.5s;"></i>
                    <i class="bi bi-patch-check school-icon" style="top: 40%; left: 40%; font-size: 2.5rem; animation-delay: 5.5s;"></i>
                    <i class="bi bi-mortarboard-fill school-icon" style="bottom: 5%; right: 35%; font-size: 2.8rem; animation-delay: 0.5s;"></i>
                    <i class="bi bi-pen school-icon" style="top: 70%; left: 15%; font-size: 2.3rem; animation-delay: 8s;"></i>
                    <i class="bi bi-journal-bookmark school-icon" style="top: 80%; right: 25%; font-size: 3.5rem; animation-delay: 4.5s;"></i>
                    <i class="bi bi-laptop school-icon" style="bottom: 45%; right: 8%; font-size: 2.4rem; animation-delay: 9s;"></i>
                </div>

                <div class="promo-container">
                    <div class="hero-row">
                        <!-- Left: Hero -->
                        <div class="schoolwala-hero-card shadow-sm border rounded-4 text-center text-lg-start" style="justify-content: flex-start !important;">
                            <div class="mb-4">
                                <img src="{{asset('img/products/Schoolwala.jpg')}}" alt="Schoolwala Logo" width="130" class="img-fluid rounded-3 shadow-sm">
                            </div>
                            <h1 class="fw-bold mb-3" style="font-size: 3.5rem; line-height: 1.1; color: var(--school-dark);">Schoolwala <br><span class="text-school">WBBSE Board Specialist</span></h1>
                            <p class="fs-5 text-secondary mb-5" style="text-align: justify; max-width: 90%; line-height: 1.6;">Leading the way in <strong>WBBSE Board</strong> education. We provide the highest quality Bengali medium resources for students across West Bengal. From Class 8 to Madhyamik, we make learning easy, affordable, and effective for every child.</p>
                            
                            <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start mb-5">
                                <a href="https://schoolwala.info/" class="btn bg-white border-2 px-5 py-3 fw-bold rounded-pill shadow-sm fs-5 visit-btn-new">Start Learning <i class="bi bi-arrow-right ms-2"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.schoolwala.schoolwalaapp&pcampaignid=web_share" class="btn-app-download">
                                    <i class="bi bi-play-fill me-3 fs-4"></i> Get it on Play Store
                                </a>
                            </div>

                            <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start border-top pt-4 mb-4">
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/graduation.png')}}" width="25" class="me-2"> Madhyamik Ready</div>
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/technical-support.png')}}" width="25" class="me-2"> Bengali Medium</div>
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/about.png')}}" width="25" class="me-2"> WBBSE Syllabus</div>
                                <div class="d-flex align-items-center fw-semibold"><img src="{{asset('./icon/projects.png')}}" width="25" class="me-2"> Expert Guidance</div>
                            </div>

                            <!-- Additional Content Grid -->
                            <div class="row g-4 text-start">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(255, 154, 0, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-play-circle-fill text-school fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1">Bengali Medium Lessons</h6>
                                            <p class="small text-secondary m-0">All core subjects explained in simple Bengali by top educators from West Bengal.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(255, 154, 0, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-journal-check text-school fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1">Interactive Quizzes</h6>
                                            <p class="small text-secondary m-0">Real-time assessments to track progress and identify areas for improvement.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(255, 154, 0, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-person-workspace text-school fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1">Teacher Support</h6>
                                            <p class="small text-secondary m-0">Direct access to expert teachers for doubt clearing and guidance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3 p-3 rounded-4 transition-hover" style="background: rgba(255, 154, 0, 0.03);">
                                        <div class="icon-box bg-white shadow-sm rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-graph-up-arrow text-school fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1">Progress Reports</h6>
                                            <p class="small text-secondary m-0">Detailed analysis of student performance for parents and teachers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Video -->
                        <div class="video-section-col">
                            <section class="video-fixed-section">
                                <div class="shadow border p-3 vfs-inner bg-white h-100">
                                    <div style="border-radius: 15px; overflow: hidden;" class="img-container bg-black shadow-sm">
                                        <iframe 
                                            width="100%" 
                                            src="https://www.youtube.com/embed/yC-ToWidSsE?autoplay=1&mute=0&loop=1&playlist=yC-ToWidSsE&controls=0&modestbranding=1" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                            allowfullscreen 
                                            style="aspect-ratio: 9/16; width: 100%; border: none;">
                                        </iframe>
                                    </div>
                                    <div class="card-content mt-3 text-center">
                                        <h1 class="fw-bold fs-5 m-0 text-school mb-1">Schoolwala Experience</h1>
                                        <p class="small text-secondary">Revolutionizing digital education</p>
                                    </div>
                                    <div class="buttons video-buttons d-flex justify-content-between gap-2" style="padding: 16px;">
                                        <a href="#" class="btn btn-danger fw-semibold p-3 px-4 flex-grow-1 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('./icon/whatsapp.png')}}" width="20" class="me-2"> Whatsapp
                                        </a>
                                        <a href="#" class="btn btn-warning fw-semibold p-3 px-4 flex-grow-1 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('./icon/call.png')}}" width="20" class="me-2"> Call
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- Website Showcase -->
                    <div class="shadow-sm border p-5 rounded-4 bg-white mb-5">
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <h2 class="fw-bold fs-1 mb-2" style="color: var(--school-dark);">Interactive Web Portal</h2>
                                <p class="text-secondary fs-5">A world-class learning experience on the web</p>
                            </div>
                        </div>
                        <div class="carousel-track-wrapper">
                            <div class="carousel-track">
                                @for($i = 1; $i <= 15; $i++)
                                <div class="web-ss-card"><img src="{{asset('img/products/s'.$i.'.png')}}" alt="Schoolwala Web" class="w-100 h-100 object-fit-cover"></div>
                                @endfor
                                @for($i = 1; $i <= 15; $i++)
                                <div class="web-ss-card"><img src="{{asset('img/products/s'.$i.'.png')}}" alt="Schoolwala Web" class="w-100 h-100 object-fit-cover"></div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <!-- App Showcase -->
                    <div class="shadow-sm border p-5 rounded-4 bg-white mb-5 overflow-hidden">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-5">
                                <h2 class="fw-bold clr-bl mb-4" style="font-size: 3rem;">Education for <span class="text-school">Every All</span></h2>
                                <p class="text-secondary mb-5 fs-5">Designed specifically for the <strong>WBBSE curriculum</strong>. We've made the entire syllabus easy to grasp with visual learning and simple explanations.</p>
                                <div class="features-list mb-5">
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-warning bg-opacity-10 rounded-circle me-3"><i class="bi bi-camera-video text-school"></i></div> WBBSE Concept Videos</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-warning bg-opacity-10 rounded-circle me-3"><i class="bi bi-file-earmark-text text-school"></i></div> Suggestion Papers & Notes</div>
                                    <div class="d-flex align-items-center mb-4 fs-5"><div class="p-2 bg-warning bg-opacity-10 rounded-circle me-3"><i class="bi bi-graph-up-arrow text-school"></i></div> Result Improvement Track</div>
                                </div>
                                <a href="https://play.google.com/store/apps/details?id=com.schoolwala.schoolwalaapp&pcampaignid=web_share" class="btn-app-download w-100 justify-content-center py-4 fs-4">
                                    <i class="bi bi-play-fill me-3"></i> Download Student App
                                </a>
                            </div>
                            <div class="col-lg-7">
                                <div class="carousel-track-wrapper">
                                    <div class="carousel-track" style="animation-duration: 45s;">
                                        @for($i = 1; $i <= 21; $i++)
                                        <div class="app-ss-card-new"><img src="{{asset('img/products/sa'.$i.'.jpeg')}}" alt="App SS" class="w-100 h-100 object-fit-cover"></div>
                                        @endfor
                                        @for($i = 1; $i <= 21; $i++)
                                        <div class="app-ss-card-new"><img src="{{asset('img/products/sa'.$i.'.jpeg')}}" alt="App SS" class="w-100 h-100 object-fit-cover"></div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission -->
                    <div class="p-5 rounded-4 border-0 bg-warning bg-opacity-10 shadow-sm mb-5">
                        <div class="row align-items-center g-4">
                            <div class="col-md-7">
                                <h3 class="fw-bold text-school mb-3 fs-2">Our Bengal Mission</h3>
                                <p class="fst-italic text-secondary fs-5 m-0" style="line-height: 1.6;">"To ensure that no student in West Bengal is left behind by providing the most accessible WBBSE Board preparation in their mother tongue."</p>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex justify-content-center justify-content-md-end gap-5">
                                    <div class="text-center">
                                        <div class="bg-white p-3 rounded-circle shadow-sm mb-2" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                            <i class="bi bi-book fs-1 text-school"></i>
                                        </div>
                                        <span class="fw-bold">Knowledge</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="bg-white p-3 rounded-circle shadow-sm mb-2" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                            <i class="bi bi-laptop fs-1 text-school"></i>
                                        </div>
                                        <span class="fw-bold">Access</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="row mt-5 mb-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="footer-logo">
                                    <img src="{{asset('./sumatra1.png')}}" width="60" />
                                    <p class="opacity-75 footer-text">
                                        <span class="text-school fs-5">©</span> 2025 All rights reserved by <span class="text-school fs-4">♥</span> Sumatra Sales Private Limited
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <ul class="list-unstyled d-inline-flex gap-3 m-0">
                                    <!-- <li><a href="/privacy-policy" class="text-decoration-none text-dark opacity-75">Privacy</a></li>
                                    <li><a href="/services" class="text-decoration-none text-dark opacity-75">Services</a></li>
                                    <li><a href="/contact" class="text-decoration-none text-dark opacity-75">Contact</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- Fixed Shapes -->
                <img src="{{asset('./img/rob2.png')}}" class="fixed-robot" alt="" style="position: fixed; top: 80px; width: 300px; left: 0; filter: drop-shadow(1px 1px 1px rgba(199, 201, 204, 0.747)); z-index: 1000;" />
                <img src="{{asset('./icon/8992340.webp')}}" class="fixed-shape" alt="" style="position: fixed; bottom: 80px; width: 150px; right: 0; z-index: 1000;" />
            </div>
        </div>
    </div>

    <script src="{{asset('./js/loader.js')}}"></script>
</body>
</html>
