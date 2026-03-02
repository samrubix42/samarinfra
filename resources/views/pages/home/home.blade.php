<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div>
    <!-- ================= HERO SECTION ================= -->
    <section class="pt-20 pb-24 bg-background">

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="max-w-xl">

                <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                    Samar Infra Pvt Ltd
                </span>

                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.15] tracking-tight text-primary">
                    Engineering Infrastructure <br>

                    <span
                        x-data="typingEffect"
                        x-text="displayText"
                        class="text-accent-dark font-extrabold">
                    </span>

                    <span class="ml-1 text-accent-dark animate-pulse">|</span>
                </h1>

                <p class="mt-6 text-lg text-secondary leading-relaxed">
                    Delivering highways, railways and large-scale infrastructure
                    projects across India with disciplined execution and operational excellence.
                </p>

                <div class="mt-8 flex gap-4">
                    <a href="{{ route('service') }}"
                        class="px-6 py-2.5 text-sm font-semibold bg-accent text-white rounded-md hover:bg-accent-dark transition">
                        Our Services
                    </a>

                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 text-sm font-semibold border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition">
                        Request Proposal
                    </a>
                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div>
                <div class="rounded-xl overflow-hidden">
                    <img
                        src="/images/construction-hero.jpg"
                        alt="Samar Infra Project"
                        class="w-full  object-contain">
                </div>
            </div>

        </div>
        <script>
            function typingEffect() {
                return {
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

                    start() {
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
                }
            }
        </script>

    </section>


    <section class="py-20 bg-background-soft border-t border-border">
        <div class="container-custom grid md:grid-cols-4 gap-10 text-center">

            <div>
                <h3 class="text-3xl font-bold text-primary">₹4000M+</h3>
                <p class="text-xs uppercase tracking-widest text-secondary mt-2">
                    Annual Turnover
                </p>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-primary">238+</h3>
                <p class="text-xs uppercase tracking-widest text-secondary mt-2">
                    Professionals
                </p>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-primary">200+</h3>
                <p class="text-xs uppercase tracking-widest text-secondary mt-2">
                    Heavy Machinery Fleet
                </p>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-primary">80 Acres</h3>
                <p class="text-xs uppercase tracking-widest text-secondary mt-2">
                    Mining Land
                </p>
            </div>

        </div>
    </section>
    <section class="py-24 bg-background">
        <div class="container-custom">

            <!-- SECTION HEADER -->
            <div class="max-w-2xl mb-20">
                <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                    What We Do
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary">
                    Core Capabilities
                </h2>

                <div class="w-16 h-[2px] bg-accent mt-6"></div>

                <p class="mt-6 text-secondary leading-relaxed">
                    End-to-end infrastructure execution across highways, railways,
                    expressways and industrial development projects.
                </p>
            </div>


            <!-- GRID -->
            <div class="grid md:grid-cols-3 gap-10">

                <!-- CARD 1 -->
                <div class="p-10 border border-border rounded-xl transition hover:border-primary">

                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-road-map-line text-lg"></i>
                    </div>

                    <h3 class="text-lg font-semibold text-primary mb-4">
                        Highway Construction
                    </h3>

                    <p class="text-sm text-secondary leading-relaxed">
                        Earthwork, Subgrade, GSB, WMM and full-scale NHAI
                        highway execution with precision and efficiency.
                    </p>
                </div>


                <!-- CARD 2 -->
                <div class="p-10 border border-border rounded-xl transition hover:border-primary">

                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-train-line text-lg"></i>
                    </div>

                    <h3 class="text-lg font-semibold text-primary mb-4">
                        Railway Infrastructure
                    </h3>

                    <p class="text-sm text-secondary leading-relaxed">
                        Ballast laying, EDFC corridor execution and
                        metro connectivity packages across India.
                    </p>
                </div>


                <!-- CARD 3 -->
                <div class="p-10 border border-border rounded-xl transition hover:border-primary">

                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-building-4-line text-lg"></i>
                    </div>

                    <h3 class="text-lg font-semibold text-primary mb-4">
                        Crushing & Material Supply
                    </h3>

                    <p class="text-sm text-secondary leading-relaxed">
                        20,000–25,000 MT daily aggregate supply capacity
                        backed by 60 Lakh MT annual crushing strength.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="py-24 bg-background-soft border-t border-border">
        <div class="container-custom">

            <!-- SECTION HEADER -->
            <div class="max-w-2xl mb-20">
                <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                    Our Strength
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary">
                    Infrastructure & Operational Capacity
                </h2>

                <div class="w-16 h-[2px] bg-accent mt-6"></div>

                <p class="mt-6 text-secondary leading-relaxed">
                    Equipped with advanced machinery, extensive mining resources
                    and large-scale crushing capacity to execute high-value projects
                    across India.
                </p>
            </div>


            <!-- GRID -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10 text-center">

                <!-- ITEM -->
                <div class="p-8 border border-border rounded-xl bg-background">
                    <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-truck-line text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary">200+</h3>
                    <p class="text-sm uppercase tracking-widest text-secondary mt-2">
                        Heavy Machinery Fleet
                    </p>
                </div>

                <!-- ITEM -->
                <div class="p-8 border border-border rounded-xl bg-background">
                    <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-landscape-line text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary">80 Acres</h3>
                    <p class="text-sm uppercase tracking-widest text-secondary mt-2">
                        Mining Land
                    </p>
                </div>

                <!-- ITEM -->
                <div class="p-8 border border-border rounded-xl bg-background">
                    <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-building-2-line text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary">60 Lakh MT</h3>
                    <p class="text-sm uppercase tracking-widest text-secondary mt-2">
                        Annual Crushing Capacity
                    </p>
                </div>

                <!-- ITEM -->
                <div class="p-8 border border-border rounded-xl bg-background">
                    <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-md bg-accent text-white mb-6">
                        <i class="ri-time-line text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary">20K+ MT</h3>
                    <p class="text-sm uppercase tracking-widest text-secondary mt-2">
                        Daily Supply Capacity
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="py-24 bg-background">
        <div class="container-custom">

            <!-- SECTION HEADER -->
            <div class="max-w-2xl mb-20">
                <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                    Major Projects
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary">
                    Landmark Infrastructure Projects
                </h2>

                <div class="w-16 h-[2px] bg-accent mt-6"></div>

                <p class="mt-6 text-secondary leading-relaxed">
                    Successfully delivering high-value infrastructure projects
                    across highways, expressways, railway corridors and industrial zones.
                </p>
            </div>


            <!-- PROJECT GRID -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- PROJECT 1 -->
                <div class="border border-border rounded-xl overflow-hidden">

                    <img src="/images/project1.jpg"
                        alt="Delhi Mumbai Expressway"
                        class="w-full h-56 object-cover">

                    <div class="p-8">
                        <h3 class="text-lg font-semibold text-primary mb-3">
                            Delhi–Mumbai Expressway
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            Multi-package earthwork and material execution
                            contributing to India's largest expressway corridor.
                        </p>
                    </div>
                </div>


                <!-- PROJECT 2 -->
                <div class="border border-border rounded-xl overflow-hidden">

                    <img src="/images/project2.jpg"
                        alt="Delhi Meerut RRTS"
                        class="w-full h-56 object-cover">

                    <div class="p-8">
                        <h3 class="text-lg font-semibold text-primary mb-3">
                            Delhi–Meerut RRTS
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            Aggregate supply and infrastructure support
                            for Afcons & L&T execution packages.
                        </p>
                    </div>
                </div>


                <!-- PROJECT 3 -->
                <div class="border border-border rounded-xl overflow-hidden">

                    <img src="/images/project3.jpg"
                        alt="Ukai Thermal Power Project"
                        class="w-full h-56 object-cover">

                    <div class="p-8">
                        <h3 class="text-lg font-semibold text-primary mb-3">
                            Ukai Thermal Power Project
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            ₹108 Cr earthwork and pond ash supply
                            project executed with operational excellence.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="py-24 bg-background-soft border-t border-border">
        <div class="container-custom">

            <!-- SECTION HEADER -->
            <div class="max-w-2xl mb-20">
                <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                    Why Choose Us
                </span>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary">
                    Built on Strength, Driven by Discipline
                </h2>

                <div class="w-16 h-[2px] bg-accent mt-6"></div>

                <p class="mt-6 text-secondary leading-relaxed">
                    Our commitment to execution excellence, operational capacity and
                    financial stability makes us a trusted infrastructure partner
                    across India.
                </p>
            </div>


            <!-- GRID -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- ITEM 1 -->
                <div class="flex gap-5">
                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white shrink-0">
                        <i class="ri-timer-flash-line text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary mb-2">
                            On-Time Project Delivery
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            Proven track record of delivering projects within
                            committed timelines and execution schedules.
                        </p>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="flex gap-5">
                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white shrink-0">
                        <i class="ri-truck-line text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary mb-2">
                            Strong Machinery Fleet
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            200+ heavy equipment ensuring uninterrupted
                            large-scale infrastructure execution.
                        </p>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="flex gap-5">
                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white shrink-0">
                        <i class="ri-team-line text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary mb-2">
                            Experienced Professionals
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            238+ skilled engineers, supervisors and
                            execution teams across project sites.
                        </p>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="flex gap-5">
                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white shrink-0">
                        <i class="ri-bank-line text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary mb-2">
                            Financial Stability
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            ₹4000M+ annual turnover enabling seamless
                            execution of high-value contracts.
                        </p>
                    </div>
                </div>

                <!-- ITEM 5 -->
                <div class="flex gap-5">
                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white shrink-0">
                        <i class="ri-shield-check-line text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary mb-2">
                            Quality & Compliance
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            Strict adherence to safety standards, quality
                            benchmarks and regulatory compliance.
                        </p>
                    </div>
                </div>

                <!-- ITEM 6 -->
                <div class="flex gap-5">
                    <div class="w-12 h-12 flex items-center justify-center rounded-md bg-accent text-white shrink-0">
                        <i class="ri-map-pin-line text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary mb-2">
                            Nationwide Execution
                        </h3>
                        <p class="text-sm text-secondary leading-relaxed">
                            Active presence across multiple states
                            delivering highways, railways and industrial projects.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-24 bg-background border-t border-border">
        <div class="container-custom text-center max-w-3xl mx-auto">

            <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                Let’s Work Together
            </span>

            <h2 class="mt-6 text-3xl md:text-4xl font-bold text-primary leading-tight">
                Partner With a Proven Infrastructure Leader
            </h2>

            <p class="mt-6 text-secondary leading-relaxed">
                Samar Infra Pvt Ltd delivers large-scale infrastructure projects
                with execution discipline, operational strength and financial stability.
            </p>

            <div class="mt-10">
                <a href="{{ route('contact') }}"
                    class="px-8 py-3 text-sm font-semibold bg-accent text-white rounded-md hover:bg-accent-dark transition">
                    Request a Proposal
                </a>
            </div>

        </div>
    </section>
</div>