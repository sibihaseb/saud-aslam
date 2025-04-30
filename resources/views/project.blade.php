@extends('layouts.front-header')
@section('styles')
    <style>
        .cursor-pointer.img:hover {
            color: #23c1ff;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        @if ($previous)
            <a href="{{ route('project.display', $previous) }}" class="absolute top-[400px] left-[70px] cursor-pointer">
                <img src="{{ asset('left.svg') }}" class="w-6 h-6" />
            </a>
        @endif
        <div class="relative max-w-7xl mx-auto py-10 px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <!-- Left Arrow -->
            <!-- Left Side: Images -->
            <div class="w-full space-y-6">
                @foreach ($allimages as $index => $image)
                    <img src="{{ asset('storage/' . $image) }}" alt="Concept Art"
                        class="w-full rounded-lg shadow cursor-pointer">
                @endforeach
            </div>

            <!-- Right Side: Project Details -->
            <div class="sticky">
                <h1 class="text-3xl font-bold" style="margin-top: 80px">{{ $project['name'] }}</h1>
                <p class="text-gray-600" style="margin-top: 30px">{!! $project['description'] !!}</p>

                <p class="text-sm text-gray-500" style="margin-top: 30px">Date: {{ $project['ended_on'] }}</p>

                <div class="flex space-x-4 mt-4">
                    <a href="https://www.instagram.com/aslamsaud/" style="width: 30px">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <rect x="2" y="2" width="28" height="28" rx="6"
                                    fill="url(#paint0_radial_87_7153)"></rect>
                                <rect x="2" y="2" width="28" height="28" rx="6"
                                    fill="url(#paint1_radial_87_7153)"></rect>
                                <rect x="2" y="2" width="28" height="28" rx="6"
                                    fill="url(#paint2_radial_87_7153)"></rect>
                                <path
                                    d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                                    fill="white"></path>
                                <defs>
                                    <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                        <stop stop-color="#B13589"></stop>
                                        <stop offset="0.79309" stop-color="#C62F94"></stop>
                                        <stop offset="1" stop-color="#8A3AC8"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                        <stop stop-color="#E0E8B7"></stop>
                                        <stop offset="0.444662" stop-color="#FB8A2E"></stop>
                                        <stop offset="0.71474" stop-color="#E2425C"></stop>
                                        <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                        <stop offset="0.156701" stop-color="#406ADC"></stop>
                                        <stop offset="0.467799" stop-color="#6A45BE"></stop>
                                        <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop>
                                    </radialGradient>
                                </defs>
                            </g>
                        </svg>
                    </a>
                    <svg class="w-7 h-7" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>Pinterest-color</title>
                            <desc>Created with Sketch.</desc>
                            <defs> </defs>
                            <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Color-" transform="translate(-300.000000, -260.000000)" fill="#CC2127">
                                    <path
                                        d="M324.001411,260 C310.747575,260 300,270.744752 300,284.001411 C300,293.826072 305.910037,302.270594 314.368672,305.982007 C314.300935,304.308344 314.357382,302.293173 314.78356,300.469924 C315.246428,298.522491 317.871229,287.393897 317.871229,287.393897 C317.871229,287.393897 317.106368,285.861351 317.106368,283.59499 C317.106368,280.038808 319.169518,277.38296 321.73505,277.38296 C323.91674,277.38296 324.972306,279.022755 324.972306,280.987123 C324.972306,283.180102 323.572411,286.462515 322.852708,289.502205 C322.251543,292.050803 324.128418,294.125243 326.640325,294.125243 C331.187158,294.125243 334.249427,288.285765 334.249427,281.36532 C334.249427,276.10725 330.707356,272.170048 324.263891,272.170048 C316.985006,272.170048 312.449462,277.59746 312.449462,283.659905 C312.449462,285.754101 313.064738,287.227377 314.029988,288.367613 C314.475922,288.895396 314.535191,289.104251 314.374316,289.708238 C314.261422,290.145705 313.996119,291.21256 313.886047,291.633092 C313.725172,292.239901 313.23408,292.460046 312.686541,292.234256 C309.330746,290.865408 307.769977,287.193509 307.769977,283.064385 C307.769977,276.248368 313.519139,268.069148 324.921503,268.069148 C334.085729,268.069148 340.117128,274.704533 340.117128,281.819721 C340.117128,291.235138 334.884459,298.268478 327.165285,298.268478 C324.577174,298.268478 322.138649,296.868584 321.303228,295.279591 C321.303228,295.279591 319.908979,300.808608 319.615452,301.875463 C319.107426,303.724114 318.111131,305.575587 317.199506,307.014994 C319.358617,307.652849 321.63909,308 324.001411,308 C337.255248,308 348,297.255248 348,284.001411 C348,270.744752 337.255248,260 324.001411,260"
                                        id="Pinterest"> </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <svg class="w-7 h-7" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#0A66C2"
                                d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>


        </div>
        <!-- Right Arrow -->
        @if ($next)
            <a href="{{ route('project.display', $next) }}" class="absolute right-[40px] top-[400px] cursor-pointer">
                <img src="{{ asset('right.svg') }}" class="w-6 h-6" />
            </a>
        @endif
    </div>
@endsection
