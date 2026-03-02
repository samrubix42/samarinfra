<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- ================= FONTS ================= -->
    <!-- Inter (Corporate + Infrastructure Friendly) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="flex flex-col min-h-screen font-sans antialiased bg-background text-primary">

    <!-- HEADER -->
    <livewire:include.header />

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <livewire:include.footer />

    @livewireScripts
</body>

</html>