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

    <script>
document.addEventListener('alpine:init', () => {
    Alpine.data('typingEffect', () => ({
        words: [
            "Built to Perform.",
            "Executed with Precision.",
            "Delivered with Integrity."
        ],
        wordIndex: 0,
        charIndex: 0,
        displayText: '',
        typingSpeed: 70,
        deletingSpeed: 40,
        delayBetweenWords: 1500,

        init() {
            this.type();
        },

        type() {
            const currentWord = this.words[this.wordIndex];

            if (this.charIndex < currentWord.length) {
                this.displayText += currentWord[this.charIndex];
                this.charIndex++;
                setTimeout(() => this.type(), this.typingSpeed);
            } else {
                setTimeout(() => this.delete(), this.delayBetweenWords);
            }
        },

        delete() {
            if (this.charIndex > 0) {
                this.displayText = this.displayText.slice(0, -1);
                this.charIndex--;
                setTimeout(() => this.delete(), this.deletingSpeed);
            } else {
                this.wordIndex = (this.wordIndex + 1) % this.words.length;
                setTimeout(() => this.type(), 300);
            }
        }
    }))
})
</script>

    @livewireScripts
</body>

</html>