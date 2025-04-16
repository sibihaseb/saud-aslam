<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saud-Aslam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/landing.css') }}">
    @yield('styles')
</head>

<body>
    <!-- Header Section -->
    <header class="flex justify-between items-center p-4 bg-white shadow-md z-50">
        <!-- Menu (Left) -->
        <div class="flex items-center">
            <button id="hamburger" class="p-2 focus:outline-none flex flex-row items-center">
                <svg viewBox="0 0 24 24" class="w-6 h-6 text-black transition-colors duration-300" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M4 18L20 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M4 12L20 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M4 6L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                    </g>
                </svg>
                <span class="text-black text-sm font-medium">MENU</span>
            </button>


            <!-- Sidebar (Initially hidden on mobile) -->
            <div id="sidebar" class="hidden md:flex flex-row space-x-4 text-black">
                <a href="/" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Home page</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Resume</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Portfolio</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Instagram</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Artbook</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Prints</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-200 rounded transition duration-200">Contact</a>
            </div>
        </div>

        <!-- Title (Right) -->
        <div class="absolute left-1/2 transform -translate-x-1/2 text-2xl font-bold">
        <a href="/" class="text-black">Saud Aslam</a>
    </div>
    </header>

    <!-- Sidebar that appears when Hamburger is clicked -->
    <div id="sidebar-mobile" class="fixed inset-y-14 left-0 w-64 sidebar-bg text-white z-40  text-left hidden">
        <div class="flex flex-col h-full p-6">
            <!-- Menu Items -->
            <nav class="flex flex-col space-y-2">
                <a href="/admin/projects" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Home page</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Resume</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Portfolio</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Instagram</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Artbook</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Prints</a>
                <a href="#" class="py-2 px-4 text-lg hover:bg-gray-800 rounded transition duration-200">Contact</a>
            </nav>
        </div>
    </div>

    @yield('content')

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
        const sidebarMobile = document.getElementById('sidebar-mobile');

        hamburger.addEventListener('click', () => {
            sidebarMobile.classList.toggle('hidden');
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>