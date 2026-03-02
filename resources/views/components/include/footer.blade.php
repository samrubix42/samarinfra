<?php

use Livewire\Component;

new class extends Component {};
?>

<footer class="bg-background-soft border-t border-border pt-20 pb-10">

    <div class="container-custom">

        <!-- TOP GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14 mb-16">

            <!-- BRAND -->
            <div>
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3 mb-6">
                    <img src="/images/logo.png" class="h-10 w-auto" alt="Samar Infra Logo">
                    <span class="text-lg font-bold uppercase tracking-tight text-primary">
                        Samar <span class="text-accent">Infra</span>
                    </span>
                </a>

                <p class="text-sm text-secondary leading-relaxed mb-6">
                    Building India’s infrastructure with strength, precision and integrity
                    since 2002. Delivering large-scale highway, railway and metro projects nationwide.
                </p>

                <!-- Social -->
                <div class="flex gap-4">
                    <a href="#" class="text-secondary hover:text-accent transition">
                        <i class="ri-linkedin-fill text-lg"></i>
                    </a>
                    <a href="#" class="text-secondary hover:text-accent transition">
                        <i class="ri-facebook-fill text-lg"></i>
                    </a>
                    <a href="#" class="text-secondary hover:text-accent transition">
                        <i class="ri-twitter-x-fill text-lg"></i>
                    </a>
                </div>
            </div>


            <!-- COMPANY -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-widest text-accent mb-6">
                    Company
                </h4>

                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" wire:navigate class="text-secondary hover:text-primary transition">Home</a></li>
                    <li><a href="{{ route('about') }}" wire:navigate class="text-secondary hover:text-primary transition">About Us</a></li>
                    <li><a href="{{ route('service') }}" wire:navigate class="text-secondary hover:text-primary transition">Services</a></li>
                    <li><a href="{{ route('contact') }}" wire:navigate class="text-secondary hover:text-primary transition">Contact</a></li>
                </ul>
            </div>


            <!-- OFFICES -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-widest text-accent mb-6">
                    Offices
                </h4>

                <div class="space-y-6 text-sm text-secondary">
                    <div>
                        <p class="font-medium text-primary mb-1">Corporate Office</p>
                        <p>NS VIP Complex, Greater Noida West, Noida – 201009</p>
                    </div>

                    <div>
                        <p class="font-medium text-primary mb-1">Registered Office</p>
                        <p>1, Dasna Bus Stand, Ghaziabad – 201302</p>
                    </div>
                </div>
            </div>


            <!-- CONTACT -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-widest text-accent mb-6">
                    Contact
                </h4>

                <ul class="space-y-4 text-sm text-secondary">

                    <li class="flex items-start gap-3">
                        <i class="ri-mail-line text-accent mt-1"></i>
                        <div>
                            <a href="mailto:samar@samarinfra.com" class="block hover:text-primary transition">
                                samar@samarinfra.com
                            </a>
                            <a href="mailto:samaryusuf88@gmail.com" class="block hover:text-primary transition">
                                samaryusuf88@gmail.com
                            </a>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <i class="ri-phone-line text-accent mt-1"></i>
                        <div>
                            <span class="block">+91 99998 65786</span>
                            <span class="block">+91 99537 91500</span>
                        </div>
                    </li>

                </ul>
            </div>

        </div>


        <!-- BOTTOM BAR -->
        <div class="border-t border-border pt-6 flex flex-col md:flex-row justify-between items-center text-xs text-secondary">

            <p class="mb-4 md:mb-0">
                © {{ date('Y') }} Samar Infra Pvt Ltd. All rights reserved.
            </p>

            <div class="flex gap-6">
                <a href="#" class="hover:text-primary transition">Privacy Policy</a>
                <a href="#" class="hover:text-primary transition">Terms of Service</a>
            </div>

        </div>

    </div>

</footer>