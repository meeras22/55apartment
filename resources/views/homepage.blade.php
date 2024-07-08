@extends('layouts.frontend')
@section('content')
    {{-- hero section --}}
    <div class="p-0">
        <header class="w-full px-4 py-20 bg-center bg-cover bg-one lg:px-0 md:py-60 lg:py-80 xl:py-96"
            style="background-image: url('/img/bg-one.png')">
            <div class="max-w-screen-xl pt-12 mx-auto space-y-6 text-center lg:pt-0 md:space-y-8 lg:space-y-12">
                <h2 class="text-xl uppercase font-monserat text-primary">Premium</h2>
                <h1 class="font-monserat font-medium w-[80%] lg:max-w-[1000px] mx-auto  text-white text-2xl lg:text-6xl">
                    Semi-Finished 3
                    Bedroom +BQ
                    Apartment at
                    ₦55
                    MILLION</h1>
                <a href="#"
                    class="inline-block px-6 py-2 mx-auto text-white border-2 border-white rounded-full font-monserat">About
                    Us</a>
            </div>
        </header>

        {{-- another sections --}}

        <div class="grid grid-cols-1 py-8 bg-white lg:grid-cols-2 lg:py-12">
            <div class="p-6 space-y-4 text-center sm:p-16 md:pr-24 md:pl-30 lg:pl-40 lg:pr-32">
                <h1 class="text-2xl md:text-4xl font-libre">ABOUT 55 APARTMENTS</h1>
                <p class="text-left lg:text-lg">55 Apartments is a premier subsidiary of <span
                        class="font-medium text-primary">LeadRoyale Investment Limited</span>, an
                    esteemed
                    real estate firm with
                    operations in Abuja and London. With a core vision of crafting ultra- luxury housing, driven by our
                    unwavering commitment to Irresistible Excellence, Fine Living, and Unmatched Returns on Investment.
                    At 55 Apartments, we stand apart in the real estate market by setting our own standards. Each of our
                    exclusive properties is meticulously constructed in limited quantities and located in highly
                    sought-after areas. We offer these semi-finished apartments at a fixed price of ₦55 Million, which we
                    believe represents the true value of semi-finished Apartments in Nigeria.
                    Our philosophy is simple: Start at ₦55 Million, then choose your journey. Whether you decide to resell
                    or make it your home, you are guaranteed an incredible design experience that epitomizes luxury and
                    sophistication.</p>
            </div>
            <d class="w-full bg-center bg-cover" style="background-image: url('/img/bg-two.png')">
            </d>
        </div>

        {{-- another segment --}}
        <div class="w-full p-6 py-8 pb-40 space-y-16 bg-center bg-cover md:pt-16 lg:pb-72"
            style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('/img/spiral-bg.png')">
            <h1 class="text-2xl text-center md:text-4xl font-libre">Signature</h1>
            <div class="flex flex-col justify-between w-full max-w-5xl gap-12 mx-auto xl:max-w-6xl md:flex-row">
                <div class="space-y-4 md:space-y-6 flex flex-col items-center w-full md:w-2/5 lg:w-[25%]">
                    <span class="inline-block mx-auto">
                        <img src="{{ asset('img/return_icon.png') }}" alt="" class="w-12 xl:w-16">
                    </span>
                    <div class="space-y-2 lg:space-y-3">
                        <h1 class="text-lg font-libre">Return On Investment</h1>
                        <p>Any product with inherent value at the right price is a formidable asset especially one delivered
                            in limited quantity like our apartments. Our pricing remains highly competitive in the market.
                            Our pledge to maintaining a stable pricing of 55 Million today, tomorrow and forever assures
                            investors a guaranteed re-sell value in the secondary market.</p>
                    </div>
                </div>
                <div class="space-y-4 md:space-y-6 flex flex-col items-center w-full md:w-2/5 lg:w-[25%]">
                    <span class="inline-block mx-auto">
                        <img src="{{ asset('img/quality_icon.png') }}" alt="" class="w-12 xl:w-16">
                    </span>
                    <div class="space-y-2 lg:space-y-3">
                        <h1 class="text-lg font-libre">Quality and Space</h1>
                        <p>We apply the best building practices in our construction. We have a team of experienced engineers
                            and architects dedicated to building lifetime homes to our clients. Visit us anytime for
                            inspection.</p>
                    </div>
                </div>
                <div class="space-y-4 md:space-y-6 flex flex-col items-center w-full md:w-2/5 lg:w-[25%]">
                    <span class="inline-block mx-auto">
                        <img src="{{ asset('img/forward_icon.png') }}" alt="" class="w-12 xl:w-16">
                    </span>
                    <div class="space-y-2 lg:space-y-3">
                        <h1 class="text-lg font-libre">Forward Thinking Innovation</h1>
                        <p>At 55 Apartments, we are driven by a penchant for delivering irresistible excellence in every
                            sqm. From a world class design to picking the right premium location to a pristine construction,
                            we strive to consistently raise our bar, no matter how high it was.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- image segment --}}
        <div class="w-full">
            <img src="{{ asset('img/bg-three.png') }}" class="block w-full" alt="{{ env('APP_NAME') }}">
        </div>
    </div>

    {{-- aprtments --}}
    <div class="w-full p-4 py-8 mx-auto space-y-20 bg-white md:py-20 lg:py-28 lg:space-y-36">
        <div class="max-w-screen-xl mx-auto space-y-6 text-center">
            <h1 class="text-2xl md:text-4xl font-libre">Our Apartments</h1>
            <p>Discover the essence of luxury living with 55 Apartments. Each of our meticulously crafted Apartments offers
                a blend of Comfort, Style and Exclusivity. Explore our projects to find your next home in some of the most
                sought-after locations.</p>
        </div>

        {{-- aprt --}}
        <div class="grid gap-8 mx-auto max-w-screen-2xl grid-col-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="relative">
                <img class="block object-cover w-full h-full " src="{{ asset('img/section1.png') }}"
                    alt="{{ env('APP_NAME') }}">
                <span class="absolute bottom-0 left-0 right-0 w-full p-4 pb-6 text-white bg-black bg-opacity-50 ">L.Ai is
                    our
                    pioneer project
                    designed for working professionals. A block of 8 units of 3 bedroom + BQ in Jahi.</span>
            </div>
            <div class="relative">
                <img class="block object-cover w-full h-full " src="{{ asset('img/section2.png') }}"
                    alt="{{ env('APP_NAME') }}">
                <span class="absolute bottom-0 left-0 right-0 w-full p-4 pb-6 text-white bg-black bg-opacity-50"> L.Aii is
                    an
                    8unit apartment
                    block beautiful designed to cater for a modern family on an investment journey.</span>
            </div>
            <div class="relative">
                <img class="block object-cover w-full h-full " src="{{ asset('img/section3.png') }}"
                    alt="{{ env('APP_NAME') }}">
                <span class="absolute bottom-0 left-0 right-0 w-full p-4 pb-6 text-white bg-black bg-opacity-50">N.Yi is a
                    unit
                    designed with a
                    lot of comfort and art. A very elegant home for a cosmopolitan family.</span>
            </div>
        </div>

        {{-- --}}
    </div>
@endsection
