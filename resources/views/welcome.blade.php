<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saud-Aslam</title>
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/landing.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header>
        <nav>
            <a href="{{ url('/landing') }}">Home</a>
            <a href="#press">Press</a>
            <a href="#shop">Shop</a>
            <a href="#about">About</a>
        </nav>
    </header>
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

        window.onscroll = function() {
            var header = document.querySelector("header");
            if (window.pageYOffset > 0) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };
    </script>
</body>

</html>
