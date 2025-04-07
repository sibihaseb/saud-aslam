<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saud-Aslam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
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
    {{-- @vite('resources/js/app.js') --}}
    <script>
        var macy = Macy({
            container: '#js-macy',
            trueOrder: false,
            waitForImages: true,
            columns: 6,
            margin: 0
        });

        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            hamburger.classList.toggle('open');
        });
    </script>
</body>

</html>
