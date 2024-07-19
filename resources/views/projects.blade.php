@extends('layouts.frontend')
@section('content')
    {{-- hero section --}}
    <div class="p-0">
        <div
            class="max-w-screen-xl pt-12 mx-auto space-y-6 text-center bg-fixed bg-center bg-contain lg:pt-0 md:space-y-8 lg:space-y-8">
            <img src="{{ asset('img/hero.jpg') }}" alt="{{ env('APP_NAME') }}" class="block object-cover w-full h-auto">
            <div class="w-full py-8 space-y-20 bg-fixed bg-center bg-no-repeat bg-cover lg:space-y-24">
                <div class="py-12 space-y-6 bg-cover lg:py-24"
                    style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('/img/spiral-bg.png')">
                    <div class="py-4 space-y-4 font-libre">
                        <h1 class="pt-4 text-3xl lg:text-4xl">L.A</h1>
                        <p class="text-2xl lg:text-3xl">
                            <span class="font-bold">Location:</span> Jahi, Abuja
                        </p>
                    </div>

                    {{-- about --}}
                    <div class="space-y-6">
                        <h1 class="text-2xl font-libre">About L.A</h1>
                        <p class="max-w-5xl mx-auto">Nestled in the cosmopolitan Abuja, Jahi. L.A Jahi presents a unique
                            opportunity to experience the
                            best of fine living. Our newest development, 'Los Angeles, boasts exclusivity and serenity, with
                            breathtaking views of the capital. Los Angeles delivers a boutique lifestyle that is second to
                            none.
                            This residence provides an exclusive and safe living experience in the core of Abuja, allowing
                            you
                            to escape the hustle and bustle of the city and immerse yourself in the tranquillity and
                            sophistication.</p>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto space-y-20 text-center">
                    <h1 class="text-2xl md:text-4xl font-libre">Gallery</h1>
                    <img src="{{ asset('img/gallery1.jpg') }}" alt="{{ env('APP_NAME') }}" class="block w-full">
                    <img src="{{ asset('img/gallery2.jpg') }}" alt="{{ env('APP_NAME') }}" class="block w-full">
                    <img src="{{ asset('img/gallery3.jpg') }}" alt="{{ env('APP_NAME') }}" class="block w-full">
                </div>
            </div>
            <div class="max-w-5xl mx-auto space-y-20 text-center bg-white">
                <h1 class="text-2xl md:text-4xl font-libre">Floor Plans</h1>
                <img src="{{ asset('img/floor.png') }}" alt="{{ env('APP_NAME') }}" class="block w-full border-dashed">

                <div class="space-y-6">
                    <h1 class="text-2xl font-libre"> About: L.A</h1>
                    <p class="max-w-5xl mx-auto"> L.Ai is our pioneer project designed for working professionals. A block of
                        8 units of 3 bedroom + BQ in
                        Jahi. The unit is distinctively designed to create a flexible unit of 2 bedroom + BQ and a studio
                        unit
                        for sub-let for short stay. In this way, you work, live and earn from a single unit.</p>
                </div>
            </div>

            <div class="w-full pt-16 space-y-16 text-center md:space-y-32">
                <h1 class="text-2xl md:text-4xl font-libre">Map</h1>
                <div class="flex flex-wrap justify-center pb-8 gap-y-24 md:justify-between md:pb-16">
                    <div class="max-w-[350px] space-y-5 mx-auto flex flex-col items-center">
                        <img src="{{ asset('img/plane.png') }}" alt="map" class="block w-8 mx-auto">
                        <div class="space-y-3 text-2xl text-gray-700 uppercase font-libre">
                            <p>40</p>
                            <p class="font-medium">MINS</p>
                            <p class="text-lg md:text-2xl">international airport</p>
                            <hr class="p-[2px] mx-auto bg-primary w-[100px]">
                        </div>

                    </div>
                    <div class="max-w-[350px]  space-y-5  mx-auto flex flex-col items-center">
                        <img src="{{ asset('img/bag.png') }}" alt="map" class="block w-8 mx-auto">
                        <div class="space-y-3 text-2xl text-gray-700 uppercase font-libre">
                            <p>10</p>
                            <p class="font-medium">MINS</p>
                            <p class="text-lg md:text-2xl">central business district</p>
                            <hr class="p-[2px] mx-auto bg-primary w-[100px]">
                        </div>
                    </div>
                    <div class="max-w-[350px]  space-y-5  mx-auto flex flex-col items-center">
                        <img src="{{ asset('img/cap.png') }}" alt="map" class="block w-8 mx-auto">
                        <div class="space-y-3 text-2xl text-gray-700 uppercase font-libre">
                            <p>10</p>
                            <p class="font-medium">MINS</p>
                            <p class="text-lg md:text-2xl">education and institution</p>
                            <hr class="p-[2px] mx-auto bg-primary w-[100px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full pb-20 space-y-6 text-center md:space-y-12">
            <h1 class="text-3xl font-libre">Progress</h1>
            <div class="max-w-5xl mx-auto">


                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96 lg:h-[500px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/progress.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/progress2.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/progress3.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/progress4.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/progress5.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
