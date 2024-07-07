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

<body class="font-monserat">
    {{-- navigation --}}
    <nav class="bg-transparent fixed top-0 right-0 left-0 w-screen z-50 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/whitelogo.png') }}" class="h-20 md:h-24" alt="{{ env('APP_NAME') }}" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span> --}}
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden uppercase w-full md:block md:w-auto bg-transparent" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block hover:text-primary py-2 px-3 text-white rounded md:bg-transparent md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/projects"
                            class="block py-2 px-3 text-white rounded md:border-0 md:p-0 hover:text-primary">project</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded md:border-0 md:p-0 hover:text-primary">About
                            us</a>
                    </li>
                    <li>

                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded md:border-0 md:p-0 hover:text-primary">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- @yield('header') --}}

    <main class="">
        <div class="rounded-lg text-black">
            @yield('content')

            {{ $slot ?? '' }}
        </div>
    </main>

    <div class=" bottom-0 w-full py-3 text-sm text-center text-white bg-black">
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
