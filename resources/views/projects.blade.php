@extends('layouts.frontend')
@section('content')
    {{-- hero section --}}
    <div class="p-0">
        <div
            class="max-w-screen-xl pt-12 mx-auto space-y-6 text-center bg-fixed bg-center bg-contain lg:pt-0 md:space-y-8 lg:space-y-8">
            <img src="{{ asset('img/bg-one.png') }}" alt="{{ env('APP_NAME') }}" class="block object-cover w-full h-auto">
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
                    <img src="{{ asset('img/gallery1.png') }}" alt="{{ env('APP_NAME') }}" class="block w-full">
                    <img src="{{ asset('img/gallery2.png') }}" alt="{{ env('APP_NAME') }}" class="block w-full">
                    <img src="{{ asset('img/gallery3.png') }}" alt="{{ env('APP_NAME') }}" class="block w-full">
                </div>
            </div>
            <div class="mx-auto space-y-20 text-center bg-white max-w-7xl">
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
                    <div class="max-w-[250px] space-y-5 mx-auto flex flex-col items-center">
                        <img src="{{ asset('img/plane.png') }}" alt="map" class="block w-8 mx-auto">
                        <div class="space-y-3 text-2xl text-gray-700 uppercase font-libre">
                            <p>40</p>
                            <p class="font-medium">MINS</p>
                            <p class="t">international airport</p>
                            <hr class="p-[2px] mx-auto bg-primary w-[100px]">
                        </div>

                    </div>
                    <div class="max-w-[250px]  space-y-5  mx-auto flex flex-col items-center">
                        <img src="{{ asset('img/bag.png') }}" alt="map" class="block w-8 mx-auto">
                        <div class="space-y-3 text-2xl text-gray-700 uppercase font-libre">
                            <p>10</p>
                            <p class="font-medium">MINS</p>
                            <p class="t">central business district</p>
                            <hr class="p-[2px] mx-auto bg-primary w-[100px]">
                        </div>
                    </div>
                    <div class="max-w-[250px]  space-y-5  mx-auto flex flex-col items-center">
                        <img src="{{ asset('img/cap.png') }}" alt="map" class="block w-8 mx-auto">
                        <div class="space-y-3 text-2xl text-gray-700 uppercase font-libre">
                            <p>10</p>
                            <p class="font-medium">MINS</p>
                            <p class="t">education and institution</p>
                            <hr class="p-[2px] mx-auto bg-primary w-[100px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full pb-12 space-y-6 text-center md:space-y-12">
            <h1 class="text-3xl font-libre">Progress</h1>
            <div class="max-w-5xl mx-auto">
                <img src="{{ asset('img/progress.png') }}" alt="progress" class="block w-full">
            </div>
        </div>
    </div>
@endsection
