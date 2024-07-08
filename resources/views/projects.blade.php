@extends('layouts.frontend')
@section('content')
    {{-- hero section --}}
    <div class="p-0">
        <div class="max-w-screen-xl pt-12 mx-auto space-y-6 text-center lg:pt-0 md:space-y-8 lg:space-y-8">
            <img src="{{ asset('img/bg-one.png') }}" alt="{{ env('APP_NAME') }}" class="block object-cover w-full h-auto">
            <di class="py-4 space-y-4 font-libre">
                <h1 class="pt-4 text-3xl lg:text-4xl">L.A</h1>
                <p class="text-2xl lg:text-3xl"><span class="font-bold">Location:</span> Jahi, Abuja</p>
            </di>
        </div>
    </div>
@endsection
