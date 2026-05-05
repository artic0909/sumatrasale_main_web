<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Page Title -->
    <title>Blog | Sumatra Sales - Latest Insights in Tech, Health & Education</title>
 
    <!-- Primary Meta Tags -->
    <meta name="title" content="Sumatra Sales Blog | Insights on Doctorwala, Schoolwala & Digital Innovation" />
    <meta name="description" content="Stay updated with the latest trends in healthcare IT, e-learning, and software development. Read insights and stories from the creators of Doctorwala and Schoolwala." />
    <meta name="keywords" content="Sumatra Sales Blog, Healthcare IT News India, E-learning Trends, Doctorwala Updates, Schoolwala Insights, Technology Blog West Bengal" />
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />
    <meta name="robots" content="index, follow" />
 
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Sumatra Sales Blogs & Articles" />
    <meta name="twitter:description" content="Explore blogs from Sumatra Sales Pvt. Ltd. on marketing, software, and business growth including: {{ $blogTitles }}." />
    <meta name="twitter:image" content="{{ asset('img/blogs-og-image.jpg') }}" />

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/fixed.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/about-responsive.css')}}" />


    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .blog-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .blog-card:hover {
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
        .blog-card:hover .blog-img-wrapper img {
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
        .pagination .page-link {
            border-radius: 10px;
            margin: 0 5px;
            border: none;
            color: #333;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .pagination .page-item.active .page-link {
            background-color: #ff4d4d;
            color: white;
        }
        .pagination .page-link:hover {
            background-color: #eee;
        }
        .section-tag {
            background: rgba(255, 77, 77, 0.1);
            color: #ff4d4d;
            padding: 5px 15px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 15px;
        }
    </style>

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

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" href="/blogs" id="active-nav"><img class="nav-img"
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


                <!-- Header Section -->
                <div class="text-center mt-5 mb-5">
                    <span class="section-tag">Insights & Updates</span>
                    <h1 class="fw-bold display-4">Our Latest <span class="clr-org">Blogs & Articles</span></h1>
                    <p class="mx-auto mt-3 opacity-75 fs-5" style="max-width: 800px;">
                        Explore our collection of expert insights, industry news, and success stories. Stay updated with the latest trends in marketing and technology.
                    </p>
                </div>

                <!-- Blogs Grid Section -->
                <div class="row g-4 mb-5">
                    @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card blog-card bg-white border">
                            <div class="blog-img-wrapper">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                            <div class="blog-body">
                                <h3 class="blog-title">{{ $blog->title }}</h3>
                                <p class="blog-text">
                                    {{ strip_tags($blog->desc) }}
                                </p>
                                <div class="blog-footer">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-calendar3 text-danger"></i>
                                        <span class="small text-muted">{{ $blog->date }}</span>
                                    </div>
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                        Read More <i class="bi bi-arrow-right small ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination Section -->
                <div class="d-flex justify-content-center mt-5 mb-5">
                    {{ $blogs->links('pagination::bootstrap-5') }}
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
</body>

</html>