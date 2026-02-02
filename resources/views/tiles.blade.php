@extends('layouts.app')

@section('meta_title', $categories->meta_title ?? '')
@section('meta_description', $categories->meta_description ?? '')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">{{ $categories->name }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $categories->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section    S T A R T -->
    <div class="project-section section-padding fix">
        <div class="container-fluid">
            <div class="row gy-30 gx-30">
                <div class="col-xl-4 col-md-6">
                    <div class="project-card style4">
                        <div class="project-thumb">
                            <img class="w-100 " src="{{ Storage::url($tiles->image) }}" alt="{{ $tiles->name }}">

                            <div class="content">
                                <h3>
                                    <a href="{{ route('varient', ['tiles' => $tiles->slug]) }}">
                                        {{ $tiles->name }}
                                    </a>
                                </h3>

                                <div class="btn-wrap">
                                    <a class="link-btn style3" href="{{ route('varient', ['tiles' => $tiles->slug]) }}">
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
