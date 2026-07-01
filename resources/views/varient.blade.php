@extends('layouts.app')

@section('meta_title', $tiles->meta_title ?? '')
@section('meta_description', $tiles->meta_description ?? '')

@section('content')
    <style>
        .shop-card-items img {
            padding: 50px 20px;
        }
    </style>
    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">{{ $tiles->name }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $tiles->name }}</li>
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
            @foreach ($varients->groupBy('size_id') as $sizeId => $sizeVarients)
                <div class="container">
                    <div class="section-title text-start mb-5">
                        <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                            <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                            QUALITY MATERIALS
                        </div>

                        <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s">
                            {{ $sizeVarients->first()->size->label }}
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                            <div class="shop-cards-wrapper style3">
                                <div class="row gy-30 gx-30">

                                    @foreach ($sizeVarients as $varient)
                                        <div class="col-xl-4 col-md-6">
                                            <a href="{{ route('product', ['detail' => $varient->slug]) }}">
                                                <div class="shop-card-items style2">
                                                    <img class="w-100" src="{{ Storage::url($varient->image[0]) }}"
                                                        alt="{{ $varient->name }}">

                                                    <h3>{{ $varient->name }}</h3>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
