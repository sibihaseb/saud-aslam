<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saud-Aslam - {{ $project['name'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/landing.css') }}">
</head>

<body>
    <div class="fixed inset-y-0 left-0 w-12 bg-white z-50 white-bar-container">
        <!-- Bottom Section: Hicham Habchi -->
        <div class="text-2xl font-bold pb-4" style="margin-top: 50px; margin-left: 10px">
            <a href="/" class="white-bar text-black sidebar-text">Saud Aslam</a>
        </div>
        <!-- Top Section: MENU and Hamburger -->
        <div class="flex flex-col items-center pt-4" style="margin-top: 250px">
            <button id="hamburger" class="p-2 focus:outline-none flex flex-col items-center">
                <span class="white-bar text-black text-sm font-medium mb-4">MENU</span>
                <svg viewBox="0 0 24 24" class="w-6 h-6 text-black transition-colors duration-300" fill="none"
                    xmlns="http://www.w3.org/2000/svg" transform="rotate(90)">
                    <g>
                        <path d="M4 18L20 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M4 12L20 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M4 6L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div id="sidebar" class="fixed inset-y-0 left-12 w-64 sidebar-bg text-white shadow-lg z-40 text-center">
        <div class="flex flex-col h-full p-6">
            <!-- Menu Items -->
            <nav class="flex flex-col space-y-2">
                <a href="/" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Home
                    page</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Resume</a>
                <a href="#"
                    class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Portfolio</a>
                <a href="#"
                    class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Instagram</a>
                <a href="#"
                    class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Artbook</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Prints</a>
                <a href="#"
                    class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Contact</a>
            </nav>
        </div>
    </div>
    <div class="content">
        <button
            class="absolute left-0 top-[400px] left-[15px] bg-gray-800 text-white p-3 rounded-full shadow hover:bg-gray-600">
            &#10094;
        </button>
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
                <h1 class="text-3xl font-bold">{{ $project['name'] }}</h1>
                <p class="mt-2 text-gray-600">{!! $project['description'] !!}</p>

                <p class="mt-4 text-sm text-gray-500">Date: {{ $project['ended_on'] }}</p>

                <div class="mt-4 flex space-x-4">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">Share</button>
                    <button class="bg-red-600 text-white px-4 py-2 rounded">Pin</button>
                    <button class="bg-blue-400 text-white px-4 py-2 rounded">Tweet</button>
                </div>
            </div>


        </div>
        <!-- Right Arrow -->
        <button class="absolute right-0 top-[400px] bg-gray-800 text-white p-3 rounded-full shadow hover:bg-gray-600">
            &#10095;
        </button>
    </div>

    <script>
        window.onscroll = function() {
            var header = document.querySelector("header");
            if (window.pageYOffset > 0) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };

        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            hamburger.classList.toggle('open');
        });
    </script>
</body>

</html>
