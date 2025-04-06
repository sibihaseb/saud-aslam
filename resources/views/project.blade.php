<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saud-Aslam - {{ $project['name'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/landing.css') }}">
</head>

<body class="bg-white text-gray-900">
    <header>
        <nav>
            <a href="{{ url('/landing') }}">Home</a>
            <a href="#press">Press</a>
            <a href="#shop">Shop</a>
            <a href="#about">About</a>
        </nav>
    </header>
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
</body>

</html>
