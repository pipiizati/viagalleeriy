@extends('layout')
@section('content')
<!-- <div class="flex items-center justify-center w-full pt-8">
        <div class="flex items-center justify-center">
            <img src="/asset/o.jpg" class="w-[150px] h-[95px] object-cover rounded-full" />
        </div>
    </div>
    <div class="flex flex-col">
        <div class="flex-row">
            <p class="text-2xl text-center text-black">Alifyaaaaa_</p>
            <p class="text-sm text-center text-black">
                Smile makes your life happy
            </p>

        </div>
    </div>
    button -->
<!-- <div class="flex text-center justify-center">
        <div class="w-[102px] h-[30px] rounded-[15px] bg-[#675a5a] text-white mt-4">
            <button type="submit"><a href="/src/explore.html">Upload</a></button>
        </div>
    </div> -->






<section class="mt-20 mb-8 mx-auto justify-center">
     <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-4 lg:grid-cols-5 gap-3 mx-auto px-4 lg:max-w-screen-md">
          <!-- @foreach ($tampilAlbum as $album)
    <a href="{{ route('album.show', $album->id) }}">
                       <div class="bg-green-200 min-h-[200px] p-10 shadow-xl">
                            Tampilkan informasi album, misalnya judul album -->
          <!-- <h3>{{ $album->judul }}</h3> -->
          <!-- </div> -->
          <!-- </a> -->
          <!--
    @endforeach -->

          @foreach ($tampilAlbum as $album)
          <a href="{{ route('album.show', $album->id) }}">
               <div class="mx-auto">
                    <div class="flex flex-col mx-auto justify-center items-center">
                         <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                              <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                         </div>
                         <div>
                              {{ $album->nama_album }}
                         </div>
                    </div>
               </div>
          </a>
          @endforeach
          <!-- <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500 ">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden  ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden  ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div>
                  <div class="mx-auto">
                       <div class="flex flex-col mx-auto justify-center items-center">
                            <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                                 <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                            </div>
                            <div>
                                 Nama Album
                            </div>
                       </div>
                  </div> -->
          <!-- <div class="flex flex-col mx-auto justify-center items-center">
                       <div class="overflow-hidden ease-in-out hover:scale-105 transition duration-500">
                            <img src="/asset/th__1.png" alt="" class="w-32 h-auto">
                       </div>
                       <div>
                            Nama Album
                       </div>
                  </div> -->
     </div>
     </div>
</section>
@endsection