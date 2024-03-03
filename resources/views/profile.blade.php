@extends('layout')
@section('content')
<section class="mt-10">
    <h1 class="text-[40px] text-center text-black  font-fontutama"></h1>
</section>
<section>
    <div class="flex items-center justify-center w-full pt-8">
        <div class="flex items-center justify-center">
            <img src="{{ asset('foto_profile/' . auth()->user()->picture) }}" alt="" class="w-24 h-24 border-2 rounded-full">
        </div>
    </div>
    <div class="flex flex-col">
        <div class="flex-row">
            <p class="text-2xl text-center text-black">{{ auth()->user()->username }}</p>
            <p class="text-sm text-center text-black">
                {{ auth()->user()->bio }}
            </p>

        </div>
    </div>
    <!-- button -->
    <!-- button -->
    <div class="flex mx-auto justify-center">
        <div class="flex text-center justify-center">
            <div class="w-[102px] h-[30px] rounded-[15px] bg-blue-700  text-white mt-4 mr-2 ">
                <button type="button"><a href="/edit_profile">Edit Profile</a></button>
            </div>
        </div>
        <div class="flex text-center justify-center">
            <div class="w-[102px] h-[30px] rounded-[15px] bg-blue-700  text-white mt-4">
                <button type="submit"><a href="/album">Album</a></button>
            </div>
        </div>
    </div>
</section>


<div class="mt-4"></div>
<div class="flex max-w-screen-md mx-auto flex-wrap">
    @foreach ($unggahan as $foto)
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
<!-- <div class="mt-4"></div>
<div class="flex max-w-screen-md mx-auto flex-wrap">
    @foreach ($unggahan as $foto)
    <div class="lg:w-1/2 mx-auto">
        <div class="flex flex-col">
            <div class="w-[363px] h-[192px] mt-4 bg-slate-500 overflow-hidden">
                <img src="/foto/{{ $foto->lokasi_file }}" alt="" class="">
                <div></div>
            </div>
        </div>
    </div>
    @endforeach
</div> -->



@include('sweetalert::alert')

<!-- end -->
<!-- end Konten -->
@endsection