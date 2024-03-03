@extends('layout')
@section('content')
<form action="/updateprofile" method="post" enctype="multipart/form-data">
    @csrf
    <section class="mt-[50px] lg:px-80 py-4 flex flex-col lg:flex-row">
        <div class="flex flex-col mx-auto">
            <div class="lg:w-[280px] w-full h-[200px] rounded-xl bg-[#d9d9d9]" style="box-shadow: 0px 4px 4px 0 rgba(0,0,0,0.25);">
                <div class="flex justify-center items-center py-7">
                    <img src="{{ asset('foto_profile/' . auth()->user()->picture) }}" alt="" class="rounded-full w-24 h-24 hover tra">
                </div>
                <input type="file" name="picture" class="ml-10">
            </div>
        </div>
        <div class="px-3 mt-6"></div>
        <section class="">
            <div class="w-[364px] bg-[#d9d9d9] rounded-md shadow-xl mx-auto px-10 py-5">
                <div class="flex flex-col">
                    <!-- header login -->
                    <span class="mt-2 text-3xl font-inter mx-auto"></span>
                    <!-- end -->
                    <!-- input login -->
                    <span class="text-sm mb-1">Nama Lengkap</span>
                    <input type="text" name="nama_lengkap" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="" value="{{ $dataprofile->nama_lengkap }}" required />
                    <span class="text-sm mt-4 mb-1">Alamat</span>
                    <input type="text" id="password" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="" value="{{ $dataprofile->alamat }}" required />
                    <span class="text-sm mt-4 mb-1">Username</span>
                    <input type="text" name="username" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="" value="{{ $dataprofile->username }}" required />
                    <span class="text-sm mt-4 mb-1">Bio</span>
                    <input type="text" name="bio" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="" value="{{ $dataprofile->bio }}" required />

                    <!-- button -->
                    <div class="flex">
                        <button type="submit" class="mt-5 text-white bg-blue-600 hover:bg-blue-600 focus:ring-2 focus:outline-none focus:ring-blue-300  rounded-xl text-md w-[200px] h-[30px] mr-3 ml-20  sm:w-25 px-1 py-0 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="/ubah_password">Edit password</a>
                        </button>
                        <button type="submit" class="mt-5 text-white bg-blue-600 hover:bg-blue-600 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-xl text-md w-[100px] h-[30px]  sm:w-25 px-1 py-0 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Perbaharui
                        </button>
                    </div>


                    <span class="mt-3 text-center text-sm">
                        <a href="/src/pages/sign_in.html" class="underline text-sky-500"></a></span>
                    <!-- end -->
                </div>
            </div>
        </section>
        </div>
    </section>
</form>
@endsection