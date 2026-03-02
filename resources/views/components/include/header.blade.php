<?php

use Livewire\Component;

new class extends Component {};
?>

<header
    x-cloak
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 10)"
    :class="scrolled ? 'shadow-sm' : ''"
    class="sticky top-0 z-50 w-full bg-background border-b border-border transition-all duration-300">
    <!-- ================= DESKTOP HEADER ================= -->
    <div class="container-custom h-16 flex items-center justify-between">

        <!-- LOGO -->
        <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3">
            <img
                src="/images/logo.png"
                alt="Samar Infra Logo"
                class="h-10 w-auto object-contain">
            <div class="flex flex-col leading-tight">
                <span class="text-base font-bold uppercase tracking-tight text-primary">
                    Samar <span class="text-accent">Infra</span>
                </span>
                <span class="text-[9px] uppercase tracking-[0.25em] text-secondary">
                    Honesty With Compassion
                </span>
            </div>
        </a>

        <!-- DESKTOP NAV -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold uppercase tracking-wider">
            <a href="{{ route('home') }}" wire:navigate class="{{ request()->routeIs('home') ? 'text-accent' : 'text-secondary hover:text-accent' }} transition">Home</a>
            <a href="{{ route('service') }}" wire:navigate class="{{ request()->routeIs('service') ? 'text-accent' : 'text-secondary hover:text-primary' }} transition">Services</a>
            <a href="{{ route('about') }}" wire:navigate class="{{ request()->routeIs('about') ? 'text-accent' : 'text-secondary hover:text-primary' }} transition">About</a>
            <a href="{{ route('contact') }}" wire:navigate class="{{ request()->routeIs('contact') ? 'text-accent' : 'text-secondary hover:text-primary' }} transition">Contact</a>
        </nav>

        <!-- DESKTOP ACTIONS -->
        <div class="hidden md:flex items-center gap-3">
            <a
                href="{{ route('contact') }}"
                wire:navigate
                class="px-5 py-2 text-sm font-medium border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition">
                Inquiry
            </a>
            <a
                href="{{ route('service') }}"
                wire:navigate
                class="px-5 py-2 text-sm font-medium bg-accent text-white rounded-md hover:bg-accent-dark transition">
                Projects
            </a>
        </div>

        <!-- MOBILE TOGGLE -->
        <button @click="open = true" class="md:hidden p-2 text-primary">
            <i class="ri-menu-3-line text-2xl"></i>
        </button>
    </div>

    <!-- ================= FULL SCREEN MOBILE MENU ================= -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-0 z-50 bg-background md:hidden">
        <!-- Mobile Header -->
        <div class="h-16 flex items-center justify-between px-6 border-b border-border">
            <span class="text-sm font-bold uppercase tracking-wider text-primary">
                Menu
            </span>
            <button @click="open = false">
                <i class="ri-close-line text-2xl text-primary"></i>
            </button>
        </div>

        <!-- Mobile Links -->
        <div class="flex flex-col items-center justify-center h-[80vh] gap-8 text-lg font-semibold uppercase tracking-wider">
            <a href="{{ route('home') }}" @click="open=false" wire:navigate class="{{ request()->routeIs('home') ? 'text-accent' : 'text-secondary' }}">Home</a>
            <a href="{{ route('service') }}" @click="open=false" wire:navigate class="{{ request()->routeIs('service') ? 'text-accent' : 'text-secondary' }}">Services</a>
            <a href="{{ route('about') }}" @click="open=false" wire:navigate class="{{ request()->routeIs('about') ? 'text-accent' : 'text-secondary' }}">About</a>
            <a href="{{ route('contact') }}" @click="open=false" wire:navigate class="{{ request()->routeIs('contact') ? 'text-accent' : 'text-secondary' }}">Contact</a>

            <div class="pt-6 flex flex-col gap-4 w-48">
                <a
                    href="{{ route('contact') }}"
                    wire:navigate
                    class="text-center px-4 py-2 border border-primary text-primary rounded-md">
                    Inquiry
                </a>
                <a
                    href="{{ route('service') }}"
                    wire:navigate
                    class="text-center px-4 py-2 bg-accent text-white rounded-md">
                    Projects
                </a>
            </div>
        </div>
    </div>
</header>