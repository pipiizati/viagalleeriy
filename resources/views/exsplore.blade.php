@extends('layout')
@push('cssjsexternal')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @section('content')
        <!-- Konten -->
        <section class="mt-5 mb-8">
            @csrf
            <div class="flex max-w-screen-md mx-auto flex-wrap" id="exploredata">

            </div>
        </section>
        <!-- End Konten -->
    @endsection
    @push('footerjsexternal')
        <script src="/javascript/exsplore.js"></script>
    @endpush
