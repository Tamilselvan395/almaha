@extends('layouts.app')

@section('meta_title', 'Shop List')
@section('meta_description', 'Shop List')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Shop List</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.php">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Shop List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Shop Section S T A R T -->
    <div class="shop-section section-padding fix">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <div class="shop-cards-wrapper style3">
                            <div class="row gy-30 gx-30">

                                @foreach ($categories as $category)
                                    <div class="col-lg-6">
                                        {{-- <div class="shop-card-items overlay-card"
                                            onclick="window.location='{{ route('tiles', ['categories' => $category->slug]) }}'"> --}}
                                        <a href="{{ $category->pdf_image }}" target="_blank">
                                            <div class="shop-card-items overlay-card">

                                                <div class="thumb">
                                                    <img class="w-100" src="{{ Storage::url($category->image) }}"
                                                        alt="{{ $category->name }}">
                                                </div>

                                                <div class="content">
                                                    <h3>{{ $category->name }}</h3>
                                                    <p>{{ Str::limit($category->description, 100) }}</p>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                                @if ($categories->isEmpty())
                                    <p>No categories found.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
