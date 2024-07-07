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
    @vite(['resources/css/app.css', 'resources/scss/main.scss', 'resources/js/template.js', 'resources/js/app.js', 'resources/js/activity.js'])
    <title>Roomstatus</title>
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
    </style>
    {{-- @livewireStyles --}}
    @stack('styles')
</head>

{{-- @php
    $permissions = currentUserPermissions();
@endphp --}}

<body class="bg-background-50">
    {{-- navigation --}}


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/55apartment.png') }}" class="h-20 md:h-24" alt="{{ env('APP_NAME') }}" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> --}}
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="min-h-full bg-center bg-cover">
        <div class="w-full px-4 md:px-6">
            <div class="-mt-16 rounded-lg">
                @yield('content')
                {{ $slot ?? '' }}
            </div>
        </div>
    </main>
    <div class="absolute bottom-0 w-full py-3 mt-40 text-sm text-center text-white bg-black">
        &copy; 2020-{{ date('Y') }}
        <a href="https://bowofade.com" class="font-semibold text-primary hover:underline"
            target="_blank">{{ env('APP_NAME') }}</a>.
        All rights
        reserved.
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
