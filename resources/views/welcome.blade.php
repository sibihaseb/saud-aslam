<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
        }

        .row {
            width: 100%;
        }

        .album-item {
            position: relative;
            overflow: hidden;
        }

        .album-link {
            display: block;
            text-decoration: none;
            color: inherit;
            position: relative;
        }

        .album-image {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        /* Hover Effect for Image */
        .album-link:hover .album-image {
            transform: scale(1.05);
        }

        /* Overlay */
        .album-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(245, 197, 24, 0.8); /* Yellow with opacity */
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        /* Title Style */
        .album-title {
            font-size: 20px;
            color: #fff;
            text-align: center;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        /* Hover Effect */
        .album-link:hover .album-inner {
            opacity: 1;
        }

        .album-link:hover .album-title {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <div class="row" id="js-macy">
        @foreach ($allimages as $image)
        <div class="album-item">
            <a class="album-link" href="#">
                <img class="album-image" src="{{ asset('storage/' . $image) }}" alt="Image">
                <div class="album-inner">
                    <div class="album-title title-font">Image Title</div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <script>
        var macy = Macy({
            container: '#js-macy',
            trueOrder: false,
            waitForImages: true,
            columns: 6,
            margin: 0
        });
    </script>
</body>

</html>
