<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sumatra Sales Pvt. Ltd. | Home of Doctorwala, Schoolwala & Graphicode India</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Sumatra Sales | Doctorwala, Schoolwala & Graphicode India" />
    <meta name="description" content="Sumatra Sales Pvt. Ltd. drives digital transformation in India through three core pillars: Doctorwala Medical Ecosystem, Schoolwala E-learning, and Graphicode India Software Solutions." />
    <meta name="keywords" content="Doctorwala, Schoolwala, Graphicode India, Sumatra Sales Pvt Ltd, Healthcare IT Solutions, WBBSE E-learning Bengali, Software Development India, Digital Education West Bengal, Medical ID Card India" />
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />
    <meta name="language" content="English" />
    <meta name="geo.region" content="IN-WB" />
    <meta name="geo.placename" content="Howrah" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/about-responsive.css')}}" />

    <style>
        .blog-card-new {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .blog-card-new:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .blog-img-wrapper {
            height: 200px;
            overflow: hidden;
        }
        .blog-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .blog-card-new:hover .blog-img-wrapper img {
            transform: scale(1.1);
        }
        .blog-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-title {
            font-weight: 700;
            font-size: 1.25rem;
            color: #333;
            margin-bottom: 0.75rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.4;
        }
        .blog-text {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.6;
        }
        .blog-footer {
            margin-top: auto;
            border-top: 1px solid #eee;
            padding-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>


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
    <meta property="og:title" content="Sumatra Sales Pvt. Ltd. | Innovation in Healthcare & Education" />
    <meta property="og:description" content="Explore Doctorwala & Schoolwala - Our flagship platforms redefining medical access and digital learning in India." />
    <meta property="og:image" content="{{ asset('sumatra2.png') }}" />
    <meta property="og:site_name" content="Sumatra Sales" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="Sumatra Sales Pvt. Ltd. | Digital Revolution in India" />
    <meta property="twitter:description" content="Empowering millions through Doctorwala and Schoolwala. Leading the charge in Indian Healthcare IT and EdTech." />
    <meta property="twitter:image" content="{{ asset('sumatra2.png') }}" />
    <meta name="twitter:site" content="@SumatraSales" />
    <meta name="twitter:creator" content="@SumatraSales" />

    <!-- Canonical & Favicon -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/png" href="{{ asset('sumatra2.png') }}" />

    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Sumatra Sales Private Limited",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('sumatra2.png') }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+916292237205",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": "English, Bengali, Hindi"
      },
      "sameAs": [
        "https://www.facebook.com/SumatraSales",
        "https://twitter.com/SumatraSales",
        "https://www.linkedin.com/company/sumatra-sales"
      ],
      "description": "Sumatra Sales Pvt. Ltd. is a multi-sector technology firm specializing in healthcare (Doctorwala), education (Schoolwala), and high-end software development (Graphicode India)."
    }
    </script>

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
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" id="active-nav" href="/"><span>Home</span></a>
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
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page"
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
                <!-- Navbar End======================================================-->













                <!-- Service + Video start========================================================================================== -->
                <div class="service-row gap-3">
                    <!-- Featured Projects Section Start======================================================-->
                    <style>
                        .product-card {
                            transition: transform 0.3s ease, shadow 0.3s ease;
                        }
                        .product-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
                        }
                        .ss-container {
                            height: 200px;
                            overflow: hidden;
                        }
                        .hover-img {
                            transition: transform 0.5s ease;
                            object-fit: cover;
                            height: 100%;
                        }
                        .product-card:hover .hover-img {
                            transform: scale(1.1);
                        }
                        .feature-icon {
                            width: 24px;
                            height: 24px;
                            object-fit: contain;
                        }
                        .logo-3d {
                            transition: all 0.3s ease;
                            background: #fff !important;
                            border-bottom: 3px solid rgba(0,0,0,0.1) !important;
                        }
                        .logo-3d:hover {
                            transform: translateY(-3px) scale(1.05);
                            border-bottom-width: 5px !important;
                            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
                        }
                        .btn-visit {
                            background: linear-gradient(45deg, #0d6efd, #004085);
                            border: none;
                            transition: opacity 0.3s;
                        }
                        .btn-visit:hover {
                            opacity: 0.9;
                            color: white;
                        }

                        /* Blog Design Enhancements - Larger & Premium */
                        .blog-card {
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                            border: 1px solid rgba(0,0,0,0.08) !important;
                            background-color: #ffffff !important;
                            min-height: 100px;
                        }
                        .blog-card:hover {
                            transform: translateY(-3px);
                            border-color: var(--org) !important;
                            box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
                        }
                        .blog-img-container {
                            width: 140px;
                            height: 100px;
                            flex-shrink: 0;
                        }
                        .blog-title-text {
                            font-size: 1.25rem !important;
                            line-height: 1.3;
                            color: #111;
                        }
                        .blog-desc-text {
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            font-size: 0.9rem;
                            color: #636e72;
                            margin-top: 8px;
                            line-height: 1.5;
                        }
                        .btn-view-blog {
                            background: var(--org);
                            border: none;
                            padding: 8px 20px;
                            border-radius: 8px;
                            transition: all 0.3s;
                        }
                        .btn-view-blog:hover {
                            background: #e6560f;
                            transform: scale(1.05);
                        }
                        .product-card {
                            cursor: pointer;
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                        }
                        .product-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
                        }
                        
                        /* Responsive Fixes */
                        @media (max-width: 1200px) {
                            body {
                                margin-left: 5% !important;
                                margin-right: 5% !important;
                            }
                        }
                        @media (max-width: 991px) {
                            .card-container2 {
                                grid-template-columns: 1fr !important;
                                gap: 20px !important;
                            }
                        }
                        @media (min-width: 992px) {
                            .card-container2 {
                                grid-template-columns: 1fr 1fr 1fr !important;
                                gap: 25px !important;
                            }
                        }
                            body {
                                margin-left: 0 !important;
                                margin-right: 0 !important;
                            }
                            .service-row {
                                display: flex !important;
                                flex-direction: column-reverse !important;
                            }
                            .video-fixed-section {
                                width: 100% !important;
                            }
                        }
                        @media (max-width: 768px) {
                            .blog-card {
                                flex-direction: column !important;
                                align-items: stretch !important;
                                padding: 1.25rem !important;
                                gap: 1rem !important;
                            }
                            .blog-card > .d-flex {
                                flex-direction: column !important;
                                align-items: stretch !important;
                                gap: 1rem !important;
                            }
                            .blog-img-container {
                                width: 100% !important;
                                height: 180px !important;
                            }
                            .blog-text-content {
                                padding-right: 0 !important;
                            }
                            .blog-card .buttons {
                                margin-left: 0 !important;
                                width: 100% !important;
                            }
                            .blog-card .btn-view-blog {
                                width: 100% !important;
                                padding: 12px !important;
                                text-align: center !important;
                            }
                        }
                    </style>

                    <section class="main-section mt-4">
                        <div class="shadow border p-4 rounded-3 bg-light">
                            <div class="inner-items-center mb-4">
                                <h2 class="fw-bold service-title-text fs-3 col-12 m-0 tracking-wider">Our Products & Software Solutions</h2>
                            </div>

                            <div class="card-container2 gap-4">
                                <!-- Doctorwala Project -->
                                <div class="product-card shadow-sm border p-4 rounded-4 bg-white d-flex flex-column h-100" onclick="window.open('https://www.doctorwala.info/', '_blank')">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-white p-2 rounded-3 shadow-sm border border-light-subtle logo-3d" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                            <img src="{{asset('img/products/doctorwala.png')}}" alt="Doctorwala Logo" width="45" class="rounded-1">
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="fw-bold fs-4 mb-0">Doctorwala</h3>
                                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Medical Ecosystem</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex-grow-1">
                                        <div class="description-text mb-3" style="text-align: justify; line-height: 1.5; font-size: 0.9rem;">
                                            <p class="mb-2">When someone in your family needs a doctor, every second feels important. Searching, calling, waiting — it shouldn’t be this hard.</p>
                                            <p class="mb-2">Doctorwala connects you to nearby doctors, clinics, OPDs, and medical shops across India — from busy cities to the smallest villages.</p>
                                            <p class="mb-2">We also provide a secure <strong>Personal Medical ID</strong>, so your history stays organized. Better records mean better diagnosis.</p>
                                            <div class="mission-box p-2 bg-light border-start border-primary border-4 rounded-1 mb-2">
                                                <small class="fw-bold text-primary">OUR MISSION:</small><br>
                                                <small class="fst-italic text-dark">To make healthcare reachable, reliable, and timely for everyone.</small>
                                            </div>
                                            <p class="mb-0 fw-bold clr-bl text-center">Your Health. Your Records. Your Lifeline.</p>
                                        </div>
                                        
                                        <div class="features-grid mb-3">
                                            <div class="row g-2">
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/doctor.png')}}" width="18" class="me-2" alt=""> Find Doctors</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/services.png')}}" width="18" class="me-2" alt=""> Pathologists</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/location.png')}}" width="18" class="me-2" alt=""> Best Clinics</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/call.png')}}" width="18" class="me-2" alt=""> Single Call</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/technical-support.png')}}" width="18" class="me-2" alt=""> 24/7 Opened</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/arrow.png')}}" width="18" class="me-2" alt=""> Fair Prices</div>
                                            </div>
                                        </div>

                                        <div class="ss-container rounded-3 border mb-3">
                                            <img src="{{asset('img/products/docss.png')}}" alt="Doctorwala Screenshot" class="w-100 hover-img">
                                        </div>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="https://www.doctorwala.info/" target="_blank" class="btn btn-visit w-100 py-2 fw-bold text-white rounded-3 shadow-sm">Visit Doctorwala Website</a>
                                    </div>
                                </div>

                                <!-- Graphicode India -->
                                <div class="product-card shadow-sm border p-4 rounded-4 bg-white d-flex flex-column h-100" onclick="window.open('https://graphicodeindia.com/', '_blank')">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-white p-2 rounded-3 shadow-sm border border-light-subtle logo-3d" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                            <img src="{{asset('img/products/gci.png')}}" alt="Graphicode India Logo" width="45" class="rounded-1">
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="fw-bold fs-4 mb-0">Graphicode India</h3>
                                            <span class="badge bg-info-subtle text-info border border-info-subtle" style="color: #6f42c1 !important; border-color: #6f42c1 !important; background-color: rgba(111, 66, 193, 0.1) !important;">Your Vision Our Code</span>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="description-text mb-3" style="text-align: justify; line-height: 1.5; font-size: 0.9rem;">
                                            <p class="mb-2">In the digital age, your business is only as strong as your technology. Off-the-shelf solutions don't always fit your unique vision.</p>
                                            <p class="mb-2">Graphicode India builds custom software that works for you. From high-performance websites to scalable mobile applications.</p>
                                            <p class="mb-2">We combine <strong>cutting-edge tech</strong> with human-centric design to create digital products that drive growth and engagement.</p>
                                            
                                            <div class="mission-box p-2 bg-light border-start border-4 rounded-1 mb-2" style="border-color: #6f42c1 !important;">
                                                <small class="fw-bold" style="color: #6f42c1;">OUR MISSION:</small><br>
                                                <small class="fst-italic text-dark">To transform businesses through innovative, scalable, and high-quality software engineering.</small>
                                            </div>
                                            <p class="mb-2 fw-bold text-center" style="color: #6f42c1;">Innovate. Develop. Scale. — Engineering Your Success.</p>
                                        </div>

                                        <div class="features-grid mb-3">
                                            <div class="row g-2">
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/website.png')}}" width="18" class="me-2" alt=""> Web Dev</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/appdevelopment.png')}}" width="18" class="me-2" alt=""> App Dev</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/graphic-designer.png')}}" width="18" class="me-2" alt=""> UI/UX Design</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/social-media.png')}}" width="18" class="me-2" alt=""> Digital Marketing</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/technical-support.png')}}" width="18" class="me-2" alt=""> IT Consulting</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/laravel.png')}}" width="18" class="me-2" alt=""> Tech Stack</div>
                                            </div>
                                        </div>

                                        <div class="ss-container rounded-3 border mb-3">
                                            <img src="{{asset('img/proj-1.png')}}" alt="Graphicode Project" class="w-100 hover-img">
                                        </div>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="https://graphicodeindia.com/" target="_blank" class="btn w-100 py-2 fw-bold text-white rounded-3 shadow-sm" style="background: linear-gradient(45deg, #6f42c1, #4b2c85); border: none;">Visit Graphicode India</a>
                                    </div>
                                </div>

                                <!-- Schoolwala Project -->
                                <div class="product-card shadow-sm border p-4 rounded-4 bg-white d-flex flex-column h-100" onclick="window.open('https://schoolwala.info/', '_blank')">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-white p-2 rounded-3 shadow-sm border border-light-subtle logo-3d" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                            <img src="{{asset('img/products/Schoolwala.jpg')}}" alt="Schoolwala Logo" width="45" class="rounded-1">
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="fw-bold fs-4 mb-0">Schoolwala</h3>
                                            <span class="badge bg-success-subtle text-success border border-success-subtle">Education for all</span>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="description-text mb-3" style="text-align: justify; line-height: 1.5; font-size: 0.9rem;">
                                            <p class="mb-2">Empowering the next generation with accessible and quality education resources for everyone, everywhere. Bridging the gap between knowledge and accessibility.</p>
                                            <p class="mb-2">Our platform provides a unique path for every student, combining animated <strong>lessons</strong> with interactive quizzes that make learning fun and effective.</p>
                                            
                                            <div class="mission-box p-2 bg-light border-start border-success border-4 rounded-1 mb-2">
                                                <small class="fw-bold text-success">OUR MISSION:</small><br>
                                                <small class="fst-italic text-dark">To bridge the gap between quality education and accessibility for every student.</small>
                                            </div>
                                            <p class="mb-2 fw-bold text-success text-center">Learn. Grow. Succeed. — Your Education, Simplified.</p>
                                        </div>

                                        <div class="features-grid mb-3">
                                            <div class="row g-2">
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/blogs.png')}}" width="18" class="me-2" alt=""> Learning Roadmap</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/video-edition.png')}}" width="18" class="me-2" alt=""> Animated Lessons</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/about.png')}}" width="18" class="me-2" alt=""> Practical Activities</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/technical-support.png')}}" width="18" class="me-2" alt=""> Mentor Support</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/graphic-designer.png')}}" width="18" class="me-2" alt=""> Interactive Classes</div>
                                                <div class="col-6 small text-dark fw-semibold d-flex align-items-center"><img src="{{asset('./icon/graduation.png')}}" width="18" class="me-2" alt=""> School Curriculum</div>
                                            </div>
                                        </div>

                                        <div class="ss-container rounded-3 border mb-3">
                                            <img src="{{asset('img/products/scss.png')}}" alt="Schoolwala Screenshot" class="w-100 hover-img">
                                        </div>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="https://schoolwala.info/" target="_blank" class="btn btn-success w-100 py-2 fw-bold text-white rounded-3 shadow-sm" style="background: linear-gradient(45deg, #198754, #0f5132); border: none;">Visit Schoolwala Website</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </section>
                    <!-- Featured Projects Section End======================================================-->

                </div>
                <!-- Service + Video End========================================================================================== -->













                <!-- =============================MID ROW Start================================================================ -->
                <!-- <div class="main-mid-row gap-3">
                    <section class="main-section mt-4">
                        <div class="shadow border p-3 rounded-4 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-4 px-2">
                                <h2 class="fw-bold fs-4 service-title-text m-0">Latest Blogs</h2>
                                <a href="/blogs" class="fw-bold fs-6 clr-bl text-decoration-none d-flex align-items-center gap-2">
                                    See All
                                    <i class="bi bi-arrow-right fs-5"></i>
                                </a>
                            </div>

                            <div class="row g-4">
                                @foreach($blogs->take(3) as $blog)
                                <div class="col-md-4">
                                    <div class="card blog-card-new bg-white border">
                                        <div class="blog-img-wrapper">
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                        </div>
                                        <div class="blog-body">
                                            <h3 class="blog-title">{{ $blog->title }}</h3>
                                            <p class="blog-text">
                                                {{ Str::limit(strip_tags($blog->desc), 120) }}
                                            </p>
                                            <div class="blog-footer">
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="bi bi-calendar3 text-danger small"></i>
                                                    <span class="small text-muted">{{ $blog->date }}</span>
                                                </div>
                                                <a href="{{ route('blog.details', $blog->slug) }}" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div> -->
                <!-- =============================MID ROW End================================================================ -->






















                

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