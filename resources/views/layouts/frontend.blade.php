<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/sass/main.scss', 'resources/js/app.js'])
    <title>55- Appartments</title>
    {{-- @livewireStyles --}}
    <style>
        [x-cloak] {
            display: none;
        }

        a.hover,
        a.underline {
            color: black !important;
            text-decoration: underline !important;
        }

        body {
            font-weight: 300;
        }

        @media (max-width: 600px) {
            #navbar-default {
                background-color: white !important;
                /* background-size: cover; */
            }
        }
    </style>
    {{-- @livewireStyles --}}
    @stack('styles')
</head>

{{-- @php
    $permissions = currentUserPermissions();
@endphp --}}

<body class="font-monserat">
    {{-- navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 w-screen border-gray-200 navbar">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ request()->is('/') ? asset('img/whitelogo.png') : asset('img/colorlogo.png') }}"
                    class="h-auto w-[130px] md:w-[150px] py-3 md:py-4 logo" alt="{{ env('APP_NAME') }}" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span> --}}
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm rounded-lg button md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full uppercase md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block px-3 py-2 rounded hover:text-primary md:bg-transparent md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/#projects"
                            class="block px-3 py-2 rounded md:border-0 md:p-0 hover:text-primary">project</a>
                    </li>
                    <li>
                        <a href="/#about" class="block px-3 py-2 rounded md:border-0 md:p-0 hover:text-primary">About
                            us</a>
                    </li>
                    <li>

                    <li>
                        <a href="/#contact"
                            class="block px-3 py-2 rounded md:border-0 md:p-0 hover:text-primary">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- @yield('header') --}}

    <main class="">
        <div class="text-black rounded-lg">
            @yield('content')

            {{ $slot ?? '' }}
        </div>
    </main>

    <footer id="contact" class="w-full pt-12 bg-[#F7F7F7]">
        <div
            class="flex flex-col flex-wrap max-w-screen-xl p-4 pb-24 mx-auto mt-4 space-y-8 md:pb-40 md:flex-row md:justify-between">
            <div class="w-4/5 md:w-2/5 lg:w-1/4">
                <img src="{{ asset('img/colorlogo.png') }}" alt="" class="block w-auto h-20 lg:h-24">
            </div>

            <div class="w-4/5 space-y-6 md:w-2/5 lg:w-1/4">
                <h1 class="text-xl font-libre">Links</h1>
                <ul class="space-y-4">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/#projects">Projects</a>
                    </li>
                    <li>
                        <a href="/#about">About Us</a>
                    </li>
                    <li>
                        <a href="/#contact">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="w-4/5 space-y-6 md:w-2/5 lg:w-1/4">
                <h1 class="text-xl font-libre">Contact us</h1>
                <div class="flex flex-col space-y-2">
                    <p class="">Plot 1397 Walter Ofonagoro Cl, Guzape, Federal Capital Territory.</p>
                    <p class="">
                        <span class="font-medium text-primary">Contact:</span>
                        <a href="tel:+2347047000152" class=""> + 234 704 700 0152</a>
                    </p>
                    <p class="">
                        <span class="font-medium text-primary">Email:</span>
                        <a href="mailto:Contact@55apartment.com" class=""> Contact@55apartment.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col items-center justify-center w-full max-w-screen-xl py-3 pb-6 mx-auto space-y-6 text-sm text-center md:flex-row md:justify-between ">
            <p class="">
                &copy; 2020-{{ date('Y') }}
                <a href="https://bowofade.com" class="font-semibold text-primary hover:underline"
                    target="_blank">{{ env('APP_NAME') }}</a>
            </p>
            <ul class="flex justify-center pb-6 space-x-4">
                <li class="">
                    <a href="">
                        <i class="text-xl fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li class="">
                    <a href=""><i class="text-xl fa-brands fa-x-twitter"></i></a>
                </li>
                <li class="">
                    <a href=""><i class="text-xl fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="">
                    <a href=""><i class="text-xl fa-brands fa-youtube"></i></a>
                </li>
                <li class="">
                    <a href="">
                        <i class="text-xl fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const button = document.querySelector('.button');
            const image = document.querySelector('.logo');
            navbar.style.color = '#fff';
            if (window.scrollY >= 50) {
                navbar.style.backgroundColor = '#fff'; // Change to your desired color
                navbar.style.color = '#000'; // Change to your desired color
                button.style.color = '#bba260'; // Change to your desired color
                image.src = './img/colorlogo.svg';
            } else {
                navbar.style.backgroundColor = 'transparent'; // Reset to transparent
                navbar.style.color = '#fff'; // Reset to transparent
                image.src = './img/whitelogo.svg';
            }
        });
    </script>
    @stack('scripts')
    <script>
        window.addEventListener('swal:success', function(e) {
            Swal.fire(e.detail);
        });

        // confirm single deleted
        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won\'t be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#f11',
                confirmButtonColor: ''
                confirmButtonText: 'Yes delete it'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteConfirm');
                    // Swal.fire(
                    //   'Deleted!'
                    //   , 'Your file has been deleted'
                    //   , 'success'
                    // )
                }
            });
        });

        // confirm multiple delete
        window.addEventListener('swal:multiple', event => {
            Swal.fire({
                title: 'Are you sure you?',
                text: "You are deleting buck records at once, you won\'t be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#f11',
                confirmButtonText: 'Go Ahead'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteMutipleConfirm');
                    // Swal.fire(
                    //   'Deleted!'
                    //   , 'Your file has been deleted'
                    //   , 'success'
                    // )
                }
            });
        });
    </script>
    <script>
        // JavaScript function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
    {{-- Fdas --}}
    {{-- <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script> --}}
</body>

</html>
