<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    @wireUiScripts

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">

    <x-jet-banner />
    <x-notifications />
    <x-dialog />

    <div class="min-h-screen bg-gray-100">

        @livewire('navigation-menu')

        <div class="flex">

            @auth
                <x-aside />
            @endauth
            
            <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">

                @if (isset($header))
                    <header class="bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <main class="">
                    {{ $slot }}
                </main>

            </div>
        </div>

        <x-footer />

    </div>

    @stack('modals')

    @livewireScripts
    @stack('script')

</body>

</html>
