<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/output.css" rel="stylesheet">
    <title>Document</title>
</head>

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


    <div class="mt-4"></div>
    <div class="flex max-w-screen-md mx-auto flex-wrap">
        @foreach ($album->foto as $foto)
        <div class="lg:w-1/2 mx-auto">
            <div class="flex flex-col">
                <div class="w-[363px] h-[192px] bg-slate-500 overflow-hidden">
                    <img src="/foto/{{ $foto->lokasi_file }}" alt="">
                </div>
                <div>
                    <div class="flex items-center justify-between mr-6">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    <span class="">{{ $foto->judul_foto }}</span>
                                </div>
                                <div>
                                    <span class="text-xs text-gray-500">{{ $foto->deskripsi_foto }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <!-- <div class="flex max-w-screen-md mx-auto flex-wrap mt-4">
        @foreach ($album->foto as $foto)
        <div class="lg:w-1/2 mx-auto">
            <div class="flex flex-col">
                <div class="w-[363px] h-[192px] bg-slate-500 overflow-hidden mt-4">
                    <img src="/foto/{{ $foto->lokasi_file }}" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </div> -->

</body>

</html>