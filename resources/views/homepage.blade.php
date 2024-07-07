@extends('layouts.frontend')
@section('content')
    {{-- hero section --}}
    <header class="bg-one w-full bg-center bg-cover px-4 lg:px-0 py-20 md:py-40 lg:py-96"
        style="background-image: url('/img/bg-one.png')">
        <div class="max-w-screen-xl text-center mx-auto pt-12 lg:pt-0 space-y-3 md:space-y-6">
            <h2 class="uppercase font-monserat text-xl text-primary">Premium</h2>
            <h1 class="font-monserat font-medium w-[80%] lg:max-w-[1000px] mx-auto  text-white text-2xl lg:text-6xl">
                Semi-Finished 3
                Bedroom +BQ
                Apartment at
                ₦55
                MILLION</h1>
            <a href="#"
                class="rounded-full font-monserat border-2 px-6 py-2 inline-block mx-auto border-white text-white">About
                Us</a>
        </div>
    </header>
@endsection
