@extends('layout')
@section('content')
<div>
    <form action="/tambah_album" method="post">
        @csrf
        <div class="mt-7 gap-8">
            <div class="w-[364px] bg-white shadow-2xl mx-auto px-8 py-9">
                <div class="flex justify-center gap-4 flex-wrap overflow mx-auto mt-8">

                    <div class="flex justify-center gap-4 mb-8 mt-5">
                        <div>
                            <div class="flex flex-col gap-4 flax-warp">
                                <div class="">
                                    <span class="text-sm mt-5 mb-1"> Judul Album</span>
                                    <input type="text" id="text" name="nama_album" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 place  py-2" placeholder="" required />
                                </div>
                                <div class="">
                                    <span class="text-sm mt-5 mb-1"> Deskripsi</span>
                                    <input type="text" id="teks" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-2" placeholder="" required />
                                </div>
                            </div>
                            <button type="submit" class="mt-7 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat
                            </button>
                        </div>
                        </from>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection