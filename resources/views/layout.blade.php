<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
@stack('cssjsexternal')

<body>


    <nav class="text-black bg-white-800 rounded-md shadow-md">
        <div class="flex flex-col items-center justify-between mx-auto container lg:flex-row">
            <div class="flex justify-center items-center py-4">
                <img src="/asset/pipi.png" alt="" class="w-12 h-10">
                <h2 class="text-3xl ">ViyGallery</h2>
            </div>
            <div class="flex gap-4">
                <a href="/exsplore"><button class="px-4 text-black rounded-full mt-2">Beranda</button></a>
                <a href="/upload"><button class="px-4 text-black rounded-full mt-2">Upload </button></a>
                <a href="/index"><button class="px-4 text-black rounded-full mt-2">Keluar </button></a>
                <a href="/profile"><button class="px-4 text-black rounded-full mt-2">Profile </button></a>
            </div>
        </div>
        </div>
    </nav>

    @yield('content')
</body>
@stack('footerjsexternal')

</html>