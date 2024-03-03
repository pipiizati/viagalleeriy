@extends('layout')
@push('cssjsexternal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('content')
<div class="flex justify-center gap-8 flex-wrap overflow-hidden mx-auto mt-[50px] ">
    <div class="">
        <div class="w-[363px] h-[180px] overflow-hidden rounded-lg">
            <img src="" alt="ass" id="fotodetail">
        </div>
        <div class="flex flex-col px-2">
            <div class="font-semibold" id="judulfoto">
            </div>
            <div>
                <small class="text-abuabu" id="deskripsifoto"> </small>
            </div>
        </div>
    </div>
    <div class=" max[480px]:w-full">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex flex-row items-center  gap-2">

                <div class=" flex flex-col mr-2">
                    <div class="flex">
                        <img src="" alt="" id="profile" class="w-8 h-auto rounded-full">
                        <h5 class="text-sm ml-2  rounded-full" id="username"></h5>
                    </div>
                    <div class="mt-5">
                        Komentar Foto
                    </div>
                    <div class="relative flex flex-col overflow-y-auto h-[200px] scrollbar-hidden" id="listkomentar">


                    </div>

                    <div class="flex gap-2 mt-5">
                        @csrf
                        <div class="w-3/4">
                            <input type="text" name="isi_komentar" id="" class="w-full px-2 py-1 rounded-full bg-white  border black" placeholder="Tulis Komentar">
                        </div>
                        <button type="submit" onclick="kirimkomentar()" class="px-4 rounded-full bg-gray-400"><span class="text-black bg-gray-400 bi bi-send"></span> </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>



<!-- End Konten -->



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection
@push('footerjsexternal')
<script src="/javascript/exploredetail.js"></script>
@endpush