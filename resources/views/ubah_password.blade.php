@extends('layout')
@section('content')
    <div>
        <form action="/ubah_password" method="post">
            @csrf
            <section class="mt-[100px]">
                <div class="w-[364px] bg-white rounded-md shadow-xl mx-auto px-5 py-5">
                    <div class="flex flex-col">
                        <!-- header login -->
                        <span class="mt-0 text-3xl font-inter mx-auto">Ganti Password</span>
                        <!-- end -->
                        <!-- input login -->

                        <span class="text-sm mt-4 mb-1">Password Lama</span>
                        <input type="password" id="password" name="current_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="" required />
                        <span class="text-sm mt-4 mb-1">Password Baru</span>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="" required />
                        <span class="text-sm mt-4 mb-1">Password Konfirmasi</span>
                        <input type="password" id="password" name="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="" required />

                        <!-- button -->
                        <button type="submit"
                            class="mt-5 text-white bg-blue-600 hover:bg-blue-600 focus:ring-2 focus:outline-none focus:ring-blue-300  rounded-xl text-md w-[100px] h-[30px] ml-[200px] sm:w-25 px-1 py-0 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui
                        </button>


                        <!-- end -->
                    </div>
                </div>
            </section>
        </form>
    </div>
    </div>
    </section>

    @include('sweetalert::alert')




    <!--section gambar-->
@endsection
