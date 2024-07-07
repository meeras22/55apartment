@extends('layouts.frontend')
@section('content')
    {{-- hero section --}}
    <div class="p-0">
        <header class="bg-one w-full bg-center bg-cover px-4 lg:px-0 py-20 md:py-60 lg:py-80 xl:py-96"
            style="background-image: url('/img/bg-one.png')">
            <div class="max-w-screen-xl text-center mx-auto pt-12 lg:pt-0 md:space-y-8 lg:space-y-12 space-y-6">
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

        {{-- another sections --}}

        <div class="bg-white grid grid-cols-1 lg:grid-cols-2 py-8 lg:py-12">
            <div class="p-6 sm:p-16 md:pr-24 md:pl-30 lg:pl-40 lg:pr-32 text-center space-y-4">
                <h1 class="text-2xl md:text-4xl font-libre">ABOUT 55 APARTMENTS</h1>
                <p class="text-left lg:text-lg">55 Apartments is a premier subsidiary of <span
                        class="text-primary font-medium">LeadRoyale Investment Limited</span>, an
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
            <d class="w-full bg-cover bg-center" style="background-image: url('/img/bg-two.png')">
            </d>
        </div>

        {{-- another segment --}}
        <div class="py-8 w-full md:pt-16 space-y-16 p-6 pb-40 lg:pb-72 bg-cover bg-center"
            style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('/img/spiral-bg.png')">
            <h1 class="text-2xl md:text-4xl text-center font-libre">Signature</h1>
            <div class="w-full  mx-auto flex max-w-5xl xl:max-w-6xl flex-col md:flex-row justify-between">
                <div class="space-y-4 md:space-y-6 flex flex-col items-center w-full md:w-2/5 lg:w-[25%]">
                    <span class="inline-block mx-auto">
                        <img src="{{ asset('img/return_icon.png') }}" alt="" class="w-12 xl:w-16">
                    </span>
                    <div class="space-y-2 lg:space-y-3">
                        <h1 class="font-libre text-lg">Return On Investment</h1>
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
                        <h1 class="font-libre text-lg">Quality and Space</h1>
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
                        <h1 class="font-libre text-lg">Forward Thinking Innovation</h1>
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
@endsection
