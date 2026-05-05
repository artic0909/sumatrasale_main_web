<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sumatra Sales Pvt. Ltd. | Transforming Healthcare & Education through Innovation</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Sumatra Sales Pvt. Ltd. | Leading Digital Innovation in Healthcare & Education" />
    <meta name="description" content="Sumatra Sales Pvt. Ltd. is a premier technology firm in India, powering the Doctorwala Medical Ecosystem and Schoolwala E-learning platform. We deliver cutting-edge software solutions, healthcare IT, and digital education tools to empower millions." />
    <meta name="keywords" content="Sumatra Sales Pvt Ltd, Doctorwala Medical Ecosystem, Schoolwala E-learning, Healthcare IT Solutions India, WBBSE Digital Education, Madhyamik Preparation App, Digital Health Records India, Software Development Howrah, EdTech Startups India" />
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
      "description": "Sumatra Sales Pvt. Ltd. is a leading digital innovation company in India, specializing in healthcare and education technology through platforms like Doctorwala and Schoolwala."
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
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page"
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
                                <h2 class="fw-bold service-title-text fs-3 col-12 m-0 text-uppercase tracking-wider">Our Leading Digital Ecosystems</h2>
                            </div>

                            <div class="card-container2 gap-4">
                                <!-- Doctorwala Project -->
                                <div class="product-card shadow-sm border p-4 rounded-4 bg-white d-flex flex-column h-100">
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

                                <!-- Schoolwala Project -->
                                <div class="product-card shadow-sm border p-4 rounded-4 bg-white d-flex flex-column h-100">
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

                    <!-- Fixed Section Start====================================================== -->
                    <section class="video-fixed-section mt-4">
                        <div class="shadow border p-3 vfs-inner">
                            <div style="border-radius: 10px"
                                class="img-container bg-white pt-2 d-flex justify-content-center align-items-center">
                                <video src="{{asset('./Video/demoo.mp4')}}" autoplay muted loop class="border video-part img-fluid"
                                    style="border-radius: 15px"></video>
                            </div>

                            <div class="card-content mt-2" style="padding: 16px;">
                                @foreach($videos as $video)
                                <h1 class="fw-bold fs-3 text-start m-0 video-title mb-2">
                                    Revolutionizing <span class="clr-bl">India's Digital Landscape</span>
                                </h1>
                                <p class="fs-6 m-0 video-desc" style="text-align: justify; opacity: 0.85;">
                                    {{ $video->desc }}
                                </p>
                                @endforeach
                            </div>

                            <div class="buttons video-buttons d-flex justify-content-between" style="padding: 16px;">
                                @foreach($videos as $video)
                                <a href="https://wa.me/{{ $video->contact }}" class="btn btn-danger btns-1 fw-semibold p-3 px-4"><img src="{{asset('./icon/whatsapp.png')}}" width="20"
                                        alt="" />
                                    Whatsapp</a>
                                <a href="tel:{{ $video->contact }}" class="btn btn-org-01 btns-2 fw-semibold p-3 px-4"><img src="{{asset('./icon/call.png')}}" width="20"
                                        alt="" /> Make a
                                    Call</a>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- Fixed Section End====================================================== -->
                </div>
                <!-- Service + Video End========================================================================================== -->













                <!-- =============================MID ROW Start================================================================ -->
                <div class="main-mid-row gap-3">
                    <!-- Blogs Start======================================================================================================== -->
                    <section class="main-section mt-4">
                        <div class="shadow border p-3">
                            <div class="inner-items-center">
                                <h2 class="fw-bold fs-4 service-title-text col-6">Latest Blogs</h2>
                                <a href="/blogs" class="fw-bold fs-6 col-6 clr-bl text-end" style="cursor: pointer; text-decoration: none;">
                                    See All
                                    <img src="{{asset('./icon/arrow.png')}}" alt="" width="20" />
                                </a>
                            </div>

                            <div class="scroll-container">
                                <div class="scroll-lists">
                                    <!-- Repeat the .lists-item as needed -->
                                    @foreach($blogs as $blog)
                                    <div class="lists-item blog-card d-flex align-items-center justify-content-between p-4 mb-4 border rounded-4 shadow-sm">
                                        <div class="d-flex align-items-center gap-4 flex-grow-1">
                                            <div class="blog-img-container rounded-4 overflow-hidden border shadow-sm">
                                                <img src="{{ asset('storage/' . $blog->image) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $blog->title }}" />
                                            </div>
                                            <div class="blog-text-content">
                                                <h5 class="fw-bold blog-title-text mb-1">
                                                    {{ $blog->title }}
                                                </h5>
                                                <p class="blog-desc-text mb-2">
                                                    {{ strip_tags($blog->desc) }}
                                                </p>
                                                <p class="m-0 text-secondary small d-flex align-items-center fw-semibold">
                                                    <i class="far fa-calendar-alt me-2 text-primary"></i> {{ $blog->date }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="buttons ms-3">
                                            <a href="{{ url('/blog-details/' . $blog->title) }}" class="btn btn-view-blog text-white fw-bold shadow-sm">
                                                Continue
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Blogs End======================================================================================================== -->
                </div>
                <!-- =============================MID ROW End================================================================ -->











                <!-- =============================Our Partners Start======================================================= -->
                <div class="row">
                    <section class="main-section col-12 mt-4">
                        <div class="shadow border p-3">
                            <div class="inner-items-center">
                                <h2 class="fw-bold fs-4 col-6 service-title-text">Our Partners</h2>
                                <!-- <span class="fw-bold fs-6 col-6 clr-bl text-end" style="cursor: pointer">
                                    See All
                                    <img src="{{asset('./icon/arrow.png')}}" alt="" width="20" />
                                </span> -->
                            </div>

                            <div class="scr" style="overflow: hidden">
                                <div class="partners-container mt-2 mb-2 d-flex align-items-center gap-3">
                                    @foreach($partners as $partner)
                                    <div class="partner-item p-2 bg-white border rounded">
                                        <img src="{{ asset('storage/' . $partner->partner_logo) }}" alt="Partner Logo" width="120" style="height: auto; max-height: 80px; object-fit: contain;" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- =============================Our Partners End======================================================= -->














                <!-- =============================FAQ Section + Join + Recomendation Start======================================================= -->
                <div class="faq-row gap-3">
                    <section class="main-section mt-4">
                        <div class="shadow border p-3">
                            <div class="mb-2 ready-text">
                                <span class="fw-bold fs-4 service-title-text">Ready for the Digital Revolution ?</span>
                            </div>

                            <div class="card-container2 p-2">
                                <!-- card 1 -->
                                @foreach($nums as $num)
                                <div class="p-3" style="background: #cecdd891; border-radius: 15px">
                                    <div style="border-radius: 10px"
                                        class="numbers-container bg-white p-3 d-flex flex-column align-items-center">
                                        <span class="fs-4 fw-bold clr-bl">{{ $num->n_num }}+</span>
                                        <span class="fs-6 fw-bold clr-org text-center">{{ $num->n_title }}</span>
                                    </div>
                                </div>
                                @endforeach


                                @foreach($videos as $video)
                                <a href="mailto:{{ $video->email }}" class="btn btn-danger fs-5 fw-bold d-flex flex-column align-items-center gap-3"
                                    style="border-radius: 10px">
                                    <span class="service-title-text">Talk to Our Experts</span>
                                    <img src="{{asset('./icon/technical-support.png')}}" width="60" alt="" />
                                </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="shadow border p-3 mt-4">
                            <div class="mb-2 d-flex flex-column together-text">
                                <span class="fw-bold text-start fs-4 service-title-text">Let's Get Success Together</span>
                                <span class="fw-bold fs-4 text-start clr-bl service-title-text">Join Us <span class="clr-org">Now</span></span>
                            </div>

                            <div class="p-2">
                                <!-- card 1 -->
                                <div class="p-3" style="background: #cecdd891; border-radius: 15px">
                                    <div style="border-radius: 10px"
                                        class="numbers-container bg-white p-3 d-flex flex-column align-items-center">
                                        @foreach($marquees as $marquee)
                                        <marquee behavior="" direction="" class="fs-5 fw-semibold service-title-text clr-bl" style="opacity: 0.9">
                                            {{$marquee->marquee_text}}
                                        </marquee>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="main-section mt-4">
                        <div class="shadow border p-3">
                            <div class="text-end faq-title">
                                <h2 class="fw-bold fs-4 service-title-text">Frequently Asked Questions</h2>
                            </div>

                            <div class="accordian-main gap-3 mt-2" style="padding: 16px;">
                                <div style="background: #cecdd891; border-radius: 15px; padding: 16px;">
                                    <!-- Accordions -->
                                    <div class="accordion" id="accordionExample">


                                        <div class="accordion" id="accordionExample">
                                            @foreach($faqs as $index => $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading{{ $index }}">
                                                    <button class="accordion-button collapsed fs-6 fw-semibold" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                        aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>{{ $faq->answer }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <!-- =============================FAQ Section + Join + Recomendation End======================================================= -->

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