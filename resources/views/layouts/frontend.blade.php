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

    <div>
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
    </div>
    {{-- toaster --}}
    {{-- <x-toaster-hub /> <!-- 👈 --> --}}
    {{-- @livewireScripts --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{--
    <x-livewire-alert::scripts /> --}}
    {{-- <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> --}}
    {{--
    <x-livewire-alert::flash /> --}}
    {{-- alert conponent --}}
    <x-livewire-alert::scripts />
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
