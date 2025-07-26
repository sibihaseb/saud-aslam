@extends('layouts.front-header')
@section('content')
    <!-- Hero Slick Slider -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img class="album-image" style="object-fit:fit" src="{{ asset('images/1.jpg') }}"
                    alt="Image"></div>
            <div class="swiper-slide"><img class="album-image" style="object-fit:fit" src="{{ asset('images/2.jpg') }}"
                    alt="Image"></div>
            <div class="swiper-slide"><img class="album-image" style="object-fit:fit" src="{{ asset('images/3.jpg') }}"
                    alt="Image"></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <!-- Existing Masonry Content -->
    <div class="content">
        <div class="row" id="js-macy">
            @foreach ($projects as $project)
                <div class="album-item">
                    <a class="album-link" href="{{ route('project.display', $project->id) }}">
                        <img class="album-image" src="{{ asset('storage/' . $project->images) }}" alt="Image">
                        <div class="album-inner">
                            <div class="album-title title-font">{{ $project->name }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
