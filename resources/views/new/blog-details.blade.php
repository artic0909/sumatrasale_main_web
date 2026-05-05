<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Page Title -->
    <title>{{ $blog->title }} | Sumatra Sales Pvt. Ltd.</title>

    <!-- Dynamic Meta Description -->
    <meta name="description" content="{{ Str::limit(strip_tags($blog->desc), 160) }}" />

    <!-- Meta Keywords -->
    <meta name="keywords" content="Sumatra Sales, {{ $blog->title }}, Marketing, Software, Design, Business Growth" />

    <!-- Author -->
    <meta name="author" content="Sumatra Sales Pvt. Ltd." />

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($blog->desc), 160) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('storage/' . $blog->image) }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $blog->title }}" />
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($blog->desc), 160) }}" />
    <meta name="twitter:image" content="{{ asset('storage/' . $blog->image) }}" />

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
        .blog-content-full {
            line-height: 1.9;
            font-size: 1.15rem;
            color: #333;
        }
        .blog-content-full p {
            margin-bottom: 1.8rem;
        }
        .blog-content-full img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .blog-detail-image {
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 2.5rem;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .blog-meta {
            font-size: 1rem;
            color: #666;
            margin-bottom: 1.5rem;
            background: #f8f9fa;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-flex;
            gap: 20px;
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #ff4d4d;
            text-decoration: none;
            font-weight: 700;
            margin-bottom: 2rem;
            transition: 0.3s;
            padding: 8px 15px;
            border-radius: 50px;
            background: rgba(255, 77, 77, 0.05);
        }
        .btn-back:hover {
            background: rgba(255, 77, 77, 0.1);
            transform: translateX(-5px);
        }
        .article-header {
            margin-bottom: 3rem;
        }
        .share-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: white;
            transition: 0.3s;
            text-decoration: none;
        }
        .share-btn:hover {
            transform: translateY(-5px);
            opacity: 0.9;
            color: white;
        }
        .facebook { background: #3b5998; }
        .twitter { background: #1da1f2; }
        .linkedin { background: #0077b5; }
        .whatsapp { background: #25d366; }
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


                <!-- Blog Detail Content Start========================================================================================== -->
                <div class="row justify-content-center mt-5">

                    <!-- Blog Details Section Start======================================================-->
                    <article class="col-lg-9 col-md-11 mb-5">
                        <div class="bg-white p-2">
                            <a href="/blogs" class="btn-back">
                                <i class="bi bi-arrow-left"></i> Back to Blog Collection
                            </a>

                            <div class="article-header">
                                <h1 class="fw-bold mb-4 display-5" style="color: #222; line-height: 1.2;">{{ $blog->title }}</h1>
                                
                                <div class="blog-meta">
                                    <span><i class="bi bi-calendar3 text-danger me-2"></i> {{ $blog->date }}</span>
                                    <span><i class="bi bi-person-lines-fill text-danger me-2"></i> SSPL EDITORIAL TEAM</span>
                                    <span><i class="bi bi-bookmark-star text-danger me-2"></i> Insight</span>
                                </div>
                            </div>

                            <div class="blog-detail-image">
                                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid w-100" alt="{{ $blog->title }}" style="object-fit: cover; max-height: 550px;">
                            </div>

                            <div class="blog-content-full">
                                {!! $blog->desc !!}
                            </div>
                            
                            <hr class="my-5" style="border-top: 2px solid #eee;">
                            
                            <div class="share-section d-flex flex-column flex-md-row align-items-center justify-content-between gap-4 p-4 bg-light rounded-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{asset('./sumatra1.png')}}" width="40" alt="">
                                    <h5 class="m-0 fw-bold">Did you find this helpful? Share it!</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="share-btn facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $blog->title }}" target="_blank" class="share-btn twitter"><i class="bi bi-twitter-x"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" target="_blank" class="share-btn linkedin"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://wa.me/?text={{ $blog->title }}%20{{ url()->current() }}" target="_blank" class="share-btn whatsapp"><i class="bi bi-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Blog Details Section End======================================================-->

                </div>
                <!-- Blog Detail Content End========================================================================================== -->


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
