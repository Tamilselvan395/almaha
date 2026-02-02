@extends('layouts.app')

@section('meta_title', $blog->meta_title ?? '')
@section('meta_description', $blog->meta_description ?? '')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">{{ $blog->title }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $blog->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section    S T A R T -->
    <div class="blog-details-section section-padding fix">
        <div class="container">
            <div class="blog-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-4">
                        @if (count($blogs) >= 1)
                            <div class="main-sidebar2">
                                <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".6s">
                                    <div class="wid-title">
                                        <h3>Recent Post</h3>
                                    </div>
                                    <div class="recent-post-area">

                                        @foreach ($blogs as $recent_blog)
                                            <div class="recent-items">
                                                <div class="recent-thumb">
                                                    <img src="{{ Storage::url($recent_blog->image) }}" alt="img">
                                                </div>
                                                <div class="recent-content">
                                                    <ul>
                                                        <li>
                                                            <img src="{{ asset('assets/images/icon/calendarIcon.svg') }}"
                                                                alt="icon">
                                                            18 Dec, 2024
                                                        </li>
                                                    </ul>
                                                    <h6>
                                                        <a href="blog-details.html">
                                                            Top Flooring Trends for Modern Homes
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb background-image">
                                    <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M14.5441 5.19275C14.5441 7.69093 12.4995 9.7355 10.0013 9.7355C7.50317 9.7355 5.45859 7.69093 5.45859 5.19275C5.45859 2.69457 7.50313 0.65 10.0013 0.65C12.4995 0.65 14.5441 2.69458 14.5441 5.19275Z"
                                                    stroke="#C7844F" stroke-width="1.3" />
                                                <path
                                                    d="M18.265 14.6708C18.1058 14.946 17.9247 15.2075 17.7176 15.4769L17.7174 15.4768L17.7095 15.4875C17.421 15.8791 17.0852 16.2376 16.7301 16.5926C16.4332 16.8894 16.0939 17.1863 15.7574 17.4387C14.0801 18.6913 12.0628 19.3501 9.97879 19.3501C7.89901 19.3501 5.88571 18.694 4.21041 17.4463C3.84652 17.1507 3.51432 16.8795 3.22751 16.5927L3.22054 16.5857L3.21337 16.5789C2.85728 16.2438 2.54303 15.8879 2.2481 15.4876L2.24812 15.4876L2.24478 15.4831C2.06257 15.2402 1.87385 14.9758 1.71984 14.7172C1.83683 14.4561 1.98519 14.1849 2.14586 13.9529L2.14597 13.9529L2.15349 13.9416C3.07049 12.5559 4.5377 11.6391 6.16707 11.415L6.18665 11.4123L6.20603 11.4084C6.23151 11.4033 6.29559 11.4119 6.34612 11.4498L6.34611 11.4498L6.35012 11.4528C7.41715 12.2403 8.68694 12.6456 10.0014 12.6456C11.3159 12.6456 12.5857 12.2403 13.6528 11.4528L13.6528 11.4528L13.6568 11.4498C13.6722 11.4382 13.741 11.4082 13.8498 11.417C15.4695 11.6438 16.9128 12.557 17.8531 13.9471L17.853 13.9471L17.857 13.9529C18.0172 14.1842 18.1563 14.4234 18.265 14.6708Z"
                                                    stroke="#C7844F" stroke-width="1.3" />
                                            </svg>
                                            By Admin
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_315_1275)">
                                                    <path
                                                        d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                                        fill="#C7844F" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_315_1275">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Floor
                                        </li>
                                    </ul>
                                    <h3 class="wow fadeInUp" data-wow-delay=".4s">{{ $blog->title }}</h3>
                                    <div class="blog-detailed-content">{!! $blog->long_description !!}</div>
                                </div>
                            </div>
                            <div class="row tag-share-wrap mb-30 wow fadeInUp" data-wow-delay=".8s">
                                <div class="col-lg-12 text-end col-12 mt-3 mt-lg-0 text-lg-end wow fadeInUp"
                                    data-wow-delay="1.2s">
                                    <div class="social-share">
                                        <span class="me-3">Follow us:</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
