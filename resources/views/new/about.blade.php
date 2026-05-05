<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | Sumatra Sales Private Limited</title>

    <!-- Primary Meta Tags -->
    <meta name="description" content="Sumatra Sales Pvt. Ltd. is a leading technology and service provider in India, dedicated to revolutionizing the healthcare and education sectors through our platforms Doctorwala and Schoolwala." />
    <meta name="keywords" content="Sumatra Sales Pvt Ltd, About Sumatra Sales, Doctorwala, Schoolwala, Technology Company India, Healthcare Innovation, Digital Education" />
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary-blue: #2e4a9f;
            --primary-orange: #ff9a00;
        }
        body {
            background-color: #fcfcfc;
            overflow-x: hidden;
        }
        .about-hero {
            padding: 6rem 0;
            background: linear-gradient(135deg, #fff 0%, #f0f4ff 100%);
            position: relative;
            overflow: hidden;
        }
        .about-hero::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(46, 74, 159, 0.05);
            border-radius: 50%;
            z-index: 0;
        }
        .about-card {
            border: none;
            border-radius: 20px;
            transition: all 0.3s ease;
            height: 100%;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .mission-vision-icon {
            width: 70px;
            height: 70px;
            background: rgba(46, 74, 159, 0.1);
            color: var(--primary-blue);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        .platform-card {
            border-radius: 25px;
            padding: 3rem;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .platform-card.doctorwala {
            background: linear-gradient(to right bottom, #ffffff, #f0f7ff);
            border-left: 6px solid var(--primary-blue);
        }
        .platform-card.schoolwala {
            background: linear-gradient(to right bottom, #ffffff, #fff9f0);
            border-left: 6px solid var(--primary-orange);
        }
        .platform-card.graphicode {
            background: linear-gradient(to right bottom, #ffffff, #f9f0ff);
            border-left: 6px solid #6f42c1;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-blue);
            line-height: 1;
        }
        .floating-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            opacity: 0.3;
        }
        .float-icon {
            position: absolute;
            color: rgba(46, 74, 159, 0.1);
            animation: float 15s infinite ease-in-out;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(10deg); }
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
                <nav class="navbar navbar-expand-lg navbar-light bg-white navbar_container shadow border p-3">
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
                                    <a class="nav-link fw-bold inner-items-center text-secondary" href="/doctorwala"><img class="nav-img" src="{{asset('./icon/doctor.png')}}" width="19" />&nbsp;<span>Doctorwala</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" href="/schoolwala"><img class="nav-img" src="{{asset('./icon/graduation.png')}}" width="19" />&nbsp;<span>Schoolwala</span></a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" id="active-nav" aria-current="page" href="/about"><img class="nav-img"
                                            src="{{asset('./icon/about.png')}}" width="19" alt="About Icon" />&nbsp;<span>About</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page" href="/blogs"><img class="nav-img"
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

                <!-- Floating Background -->
                <div class="floating-bg">
                    <i class="bi bi-briefcase float-icon" style="top: 10%; left: 5%; font-size: 5rem;"></i>
                    <i class="bi bi-gear float-icon" style="top: 60%; right: 5%; font-size: 6rem; animation-delay: 2s;"></i>
                    <i class="bi bi-graph-up float-icon" style="bottom: 20%; left: 15%; font-size: 4rem; animation-delay: 4s;"></i>
                    <i class="bi bi-cpu float-icon" style="top: 30%; right: 20%; font-size: 5rem; animation-delay: 6s;"></i>
                </div>

                <!-- Hero Section -->
                <section class="about-hero rounded-4 shadow-sm border bg-white mb-5 mt-4 text-center text-lg-start px-4 px-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3 fw-bold">Established 2024</span>
                            <h1 class="fw-bold mb-4" style="font-size: 4rem; line-height: 1; color: var(--primary-blue);">Building Tomorrow's <br><span class="clr-org">Digital Ecosystem</span></h1>
                            <p class="fs-5 text-secondary mb-5" style="text-align: justify; line-height: 1.8;">
                                Sumatra Sales Private Limited is a pioneering technology-driven company committed to solving real-world problems. We specialize in creating high-impact digital platforms that bridge the gap between essential services and the common man. From revolutionary healthcare management with Doctorwala to accessible quality education with Schoolwala, we are redefining how India interacts with technology.
                            </p>
                            <div class="row g-4 text-center text-lg-start">
                                <div class="col-md-4">
                                    <div class="stat-number clr-bl">10+</div>
                                    <div class="text-secondary fw-bold">Major Projects</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-number clr-org">50k+</div>
                                    <div class="text-secondary fw-bold">Happy Users</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-number clr-bl">24/7</div>
                                    <div class="text-secondary fw-bold">Active Support</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-5 mt-lg-0 text-center">
                            <img src="{{asset('./sumatra2.png')}}" alt="Sumatra Sales" class="img-fluid" width="400" style="filter: drop-shadow(0 20px 40px rgba(46,74,159,0.1));">
                        </div>
                    </div>
                </section>

                <!-- Mission & Vision -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="about-card p-5 border shadow-sm">
                            <div class="mission-vision-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h2 class="fw-bold mb-3">Our Mission</h2>
                            <p class="text-secondary fs-5" style="line-height: 1.6;">To empower every individual by providing seamless access to quality healthcare and education through innovative, user-friendly, and affordable digital solutions. We strive to be the catalyst for positive change in India's digital landscape.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-card p-5 border shadow-sm" style="background: linear-gradient(135deg, #ffffff 0%, #fff9f0 100%);">
                            <div class="mission-vision-icon" style="background: rgba(255, 154, 0, 0.1); color: var(--primary-orange);">
                                <i class="bi bi-eye"></i>
                            </div>
                            <h2 class="fw-bold mb-3">Our Vision</h2>
                            <p class="text-secondary fs-5" style="line-height: 1.6;">To build a future where geography and socioeconomic status are no longer barriers to essential services. We envision a fully integrated digital ecosystem where healthcare and education are available at the click of a button for every citizen.</p>
                        </div>
                    </div>
                </div>

                <!-- Our Platforms -->
                <div class="mb-5">
                    <h2 class="fw-bold text-center mb-5 fs-1">Our Leading <span class="clr-org">Platforms</span></h2>
                    <div class="row g-4">
                        <!-- Doctorwala -->
                        <div class="col-12">
                            <div class="platform-card doctorwala shadow-sm mb-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 text-center mb-4 mb-lg-0">
                                        <img src="{{asset('img/products/doctorwala.png')}}" alt="Doctorwala" width="150" class="img-fluid rounded-3 shadow-sm">
                                    </div>
                                    <div class="col-lg-7">
                                        <h3 class="fw-bold clr-bl mb-3">Doctorwala Medical Ecosystem</h3>
                                        <p class="text-secondary fs-5 mb-0">A comprehensive healthcare platform connecting patients with doctors, diagnostic centers, and pharmacies. Doctorwala simplifies the medical journey by offering digital prescriptions, appointment booking, and health record management all in one place.</p>
                                    </div>
                                    <div class="col-lg-3 text-lg-end mt-4 mt-lg-0">
                                        <a href="/doctorwala" class="btn btn-outline-primary fw-bold px-4 py-2 rounded-pill">Explore Platform <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Schoolwala -->
                        <div class="col-12">
                            <div class="platform-card schoolwala shadow-sm">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 text-center mb-4 mb-lg-0">
                                        <img src="{{asset('img/products/Schoolwala.jpg')}}" alt="Schoolwala" width="150" class="img-fluid rounded-3 shadow-sm">
                                    </div>
                                    <div class="col-lg-7">
                                        <h3 class="fw-bold clr-org mb-3">Schoolwala E-learning</h3>
                                        <p class="text-secondary fs-5 mb-0">Dedicated to the WBBSE curriculum, Schoolwala provides Bengali medium students with high-quality animated lessons, suggestion papers, and interactive learning tools. We are committed to making education engaging and accessible for every student in Bengal.</p>
                                    </div>
                                    <div class="col-lg-3 text-lg-end mt-4 mt-lg-0">
                                        <a href="/schoolwala" class="btn btn-outline-warning fw-bold px-4 py-2 rounded-pill">Explore Platform <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Graphicode India -->
                        <div class="col-12">
                            <div class="platform-card graphicode shadow-sm">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 text-center mb-4 mb-lg-0">
                                        <img src="{{asset('img/products/gci.png')}}" alt="Graphicode India" width="150" class="img-fluid rounded-3 shadow-sm p-3 bg-white">
                                    </div>
                                    <div class="col-lg-7">
                                        <h3 class="fw-bold mb-3" style="color: #6f42c1;">Graphicode India</h3>
                                        <p class="text-secondary fs-5 mb-0">Our dedicated Software Solution wing. We specialize in making all kinds of modern websites, digital marketing services, mobile apps, and full-scale tech integrations to power businesses in the digital age.</p>
                                    </div>
                                    <div class="col-lg-3 text-lg-end mt-4 mt-lg-0">
                                        <a href="https://graphicodeindia.com/" class="btn btn-outline-dark fw-bold px-4 py-2 rounded-pill" style="border-color: #6f42c1; color: #6f42c1;">Learn More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate Info -->
                <div class="bg-white p-5 rounded-4 border shadow-sm mb-5 text-center">
                    <h2 class="fw-bold mb-4">Corporate Office</h2>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center">
                                <div class="p-3 bg-primary bg-opacity-10 rounded-circle text-primary mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-geo-alt-fill fs-3"></i>
                                </div>
                                <h5 class="fw-bold">Address</h5>
                                <p class="text-secondary">Sumatra Sales Pvt. Ltd.<br>Ranihati, Howrah, West Bengal, India - 711302</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center">
                                <div class="p-3 bg-primary bg-opacity-10 rounded-circle text-primary mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-envelope-at-fill fs-3"></i>
                                </div>
                                <h5 class="fw-bold">Email</h5>
                                <p class="text-secondary">sumatra.sales2424@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center">
                                <div class="p-3 bg-primary bg-opacity-10 rounded-circle text-primary mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-telephone-fill fs-3"></i>
                                </div>
                                <h5 class="fw-bold">Contact</h5>
                                <p class="text-secondary">+91 6292237205</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="row mt-5 mb-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <div class="footer-logo">
                                    <img src="{{asset('./sumatra1.png')}}" width="60" />
                                    <p class="opacity-75 footer-text m-0">
                                        <span class="clr-bl fs-5">©</span> 2025 All rights reserved by <span class="clr-org fs-4">♥</span> Sumatra Sales Private Limited
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <ul class="list-unstyled d-inline-flex gap-4 m-0">
                                    <li><a href="/privacy-policy" class="text-decoration-none text-dark opacity-75 fw-semibold">Privacy Policy</a></li>
                                    <li><a href="/services" class="text-decoration-none text-dark opacity-75 fw-semibold">Our Services</a></li>
                                    <li><a href="/contact" class="text-decoration-none text-dark opacity-75 fw-semibold">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="{{asset('./js/loader.js')}}"></script>
</body>

</html>
