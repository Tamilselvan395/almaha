@extends('layouts.app')

@section('meta_title', $meta_details->blog_meta_title ?? '')
@section('meta_description', $meta_details->blog_meta_description ?? '')
@section('schema')
    {!! $meta_details->blog_schema ?? '' !!}
@endsection

@section('content')
    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Blogs</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section  S T A R T -->
    <div class="blog-grid-section section-padding fix">
        <div class="container">
            <div class="row gy-4">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{ route('blog.detail',$blog->slug) }}">
                            <div class="blog-card-items style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".2s">
                                <div class="blog-image">
                                    <img src="{{ Storage::url($blog->image) }}" alt="img">
                                    <img src="{{ Storage::url($blog->image) }}" alt="img">
                                </div>
                                <div class="blog-meta">
                                    <div class="day">{{ $blog->created_at->format('d') }}</div>
                                    <div class="month text-uppercase">{{ $blog->created_at->format('M') }}</div>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="{{ route('blog.detail',$blog->slug) }}">{{ $blog->title }}</a></h3>
                                    <ul>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M14.5442 5.19275C14.5442 7.69093 12.4996 9.7355 10.0014 9.7355C7.50327 9.7355 5.45869 7.69093 5.45869 5.19275C5.45869 2.69457 7.50323 0.65 10.0014 0.65C12.4996 0.65 14.5442 2.69458 14.5442 5.19275Z"
                                                    stroke="#C7844F" stroke-width="1.3" />
                                                <path
                                                    d="M18.265 14.6706C18.1058 14.9458 17.9247 15.2073 17.7176 15.4766L17.7174 15.4765L17.7095 15.4873C17.421 15.8788 17.0852 16.2373 16.7301 16.5924C16.4332 16.8892 16.0939 17.186 15.7574 17.4385C14.0801 18.6911 12.0628 19.3499 9.97879 19.3499C7.89901 19.3499 5.88571 18.6938 4.21041 17.4461C3.84652 17.1504 3.51432 16.8792 3.22751 16.5924L3.22054 16.5854L3.21337 16.5787C2.85728 16.2436 2.54303 15.8877 2.2481 15.4874L2.24812 15.4873L2.24478 15.4829C2.06257 15.24 1.87385 14.9756 1.71984 14.7169C1.83683 14.4559 1.98519 14.1847 2.14586 13.9526L2.14597 13.9527L2.15349 13.9413C3.07049 12.5556 4.5377 11.6388 6.16707 11.4148L6.18665 11.4121L6.20603 11.4082C6.23151 11.4031 6.29559 11.4117 6.34612 11.4496L6.34611 11.4496L6.35012 11.4525C7.41715 12.2401 8.68694 12.6453 10.0014 12.6453C11.3159 12.6453 12.5857 12.2401 13.6528 11.4525L13.6528 11.4525L13.6568 11.4496C13.6722 11.438 13.741 11.408 13.8498 11.4167C15.4695 11.6435 16.9128 12.5568 17.8531 13.9468L17.853 13.9469L17.857 13.9526C18.0172 14.1839 18.1563 14.4231 18.265 14.6706Z"
                                                    stroke="#C7844F" stroke-width="1.3" />
                                            </svg>
                                            By Admin
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_111_92)">
                                                    <path
                                                        d="M8.05669 18.75H8.05507C7.46835 18.7495 6.9166 18.5207 6.5019 18.1052L0.660372 12.2553C-0.194042 11.3994 -0.194042 10.0065 0.660372 9.15058L8.53481 1.26102C9.34633 0.44792 10.4261 0 11.5751 0H16.571C17.7825 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5085 10.2167L9.60954 18.1074C9.19458 18.5218 8.64309 18.75 8.05669 18.75ZM11.5751 1.46484C10.8179 1.46484 10.1064 1.75998 9.57166 2.29579L1.6971 10.1853C1.41225 10.4708 1.41225 10.9349 1.6971 11.2203L7.5386 17.0702C7.67674 17.2086 7.86054 17.285 8.05622 17.2851H8.0568C8.15293 17.2854 8.24815 17.2666 8.33698 17.2299C8.4258 17.1931 8.50646 17.1391 8.5743 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.571 1.46484H11.5751ZM13.4581 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.4581 3.03955C14.6697 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6697 7.43408 13.4581 7.43408ZM13.4581 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.4581 5.96924C13.8621 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.8621 4.50439 13.4581 4.50439Z"
                                                        fill="#C7844F" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_111_92">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Tiels
                                        </li>
                                    </ul>
                                    <p class="mt-3">{{ $blog->short_description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
