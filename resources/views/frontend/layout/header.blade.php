<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MADRASAH HEDAYATUL UMMAH DHAKA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    {{-- Google serch console link  --}}
    <meta name="google-site-verification" content="rKC569O9r6_c8CYbGQjc0vkNoq_oBAf3CjzSz8p4tVA" />
    <!-- Favicon -->
    <link href="{{ url('frontend/img/favicon.ico') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/lib/animate/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/admission.css') }}">
    {{-- Talwind css link is here  --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body style="font-family: Ubuntu, SolaimanLipi, sans-serif;">
    <!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>     <!-- Spinner End -->


   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-danger"><i class="fa fa-book me-3 text-success"></i>M H U D</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active fs-5">হোম</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link fs-5">আমাদের সম্পর্কে</a>
                <a href="{{ url('routine') }}" class="nav-item nav-link fs-5">ক্লাস রুটিন</a>
                <a href="{{ url('admission') }}" class="nav-item nav-link fs-5">ভর্তি ফরম</a>
                <div class="nav-item dropdown">
                    <a href="{{ url('/nuraniResult') }}" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">নুরানী রিজাল্ট</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5">প্লে জামাত</a>
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5"> নার্সারি জামাত</a>
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5">প্রথম শ্রেণী</a>
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5">দ্বিতীয় শ্রেণী</a>
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5">তৃতীয় শ্রেণী</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ url('/hifjoResult') }}" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">হিফয বিভাগ
                    </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5">নাজেরা বিভাগ</a>
                        <a href="{{ url('/error') }}" class="dropdown-item fs-5"> হিফয</a>
                    </div>
                </div>
                <a href="{{ url('contact') }}" class="nav-item nav-link fs-5">যোগাযোগ</a>
                <a href="{{ route('register') }}" class="nav-item nav-link fs-5">রেজিস্টার</a>
            </div>
            <a href="{{ url('pay') }}" class="btn btn-primary py-4 d-none d-lg-block fs-5">Pay Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    
