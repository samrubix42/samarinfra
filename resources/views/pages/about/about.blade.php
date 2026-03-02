<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
<section class="pt-28 pb-20 bg-background border-b border-border">
    <div class="container-custom max-w-4xl">

        <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
            About Samar Infra
        </span>

        <h1 class="mt-6 text-4xl md:text-5xl font-bold leading-tight text-primary">
            Building Infrastructure With Strength & Integrity Since 2002
        </h1>

        <p class="mt-6 text-lg text-secondary leading-relaxed">
            Samar Infra Pvt Ltd is a multi-billion INR infrastructure group
            specializing in highways, railway corridors, crushing operations
            and large-scale earthwork execution across India.
        </p>

    </div>
</section>
<section class="py-28 bg-background">
    <div class="container-custom grid lg:grid-cols-2 gap-20 items-center">

        <!-- IMAGE SIDE -->
        <div class="relative">
            <!-- Accent Background Frame -->
            <div class="absolute -bottom-6 -right-6 w-full h-full border-2 border-accent rounded-xl"></div>

            <img src="/images/about-company.jpg"
                 alt="Samar Infra Operations"
                 class="relative rounded-xl w-full h-[460px] object-cover">
        </div>


        <!-- CONTENT SIDE -->
        <div>

            <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                Company Overview
            </span>

            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary leading-tight">
                Engineering Strength Backed by Scale & Experience
            </h2>

            <div class="w-16 h-[2px] bg-accent mt-6 mb-8"></div>

            <p class="text-secondary leading-relaxed mb-6">
                With an annual turnover exceeding ₹4000M+, Samar Infra has
                delivered major infrastructure projects including expressways,
                RRTS corridors, thermal power projects and national highways.
            </p>

            <p class="text-secondary leading-relaxed mb-8">
                Backed by 238+ experienced professionals and a fleet of 200+ heavy machinery assets,
                we ensure disciplined execution, financial stability and timely project delivery.
            </p>

            <!-- HIGHLIGHT POINTS -->
            <div class="space-y-4">

                <div class="flex items-start gap-3">
                    <i class="ri-check-line text-accent mt-1"></i>
                    <p class="text-sm text-secondary">
                        Multi-state project execution capability
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <i class="ri-check-line text-accent mt-1"></i>
                    <p class="text-sm text-secondary">
                        Proven track record in large-scale government projects
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <i class="ri-check-line text-accent mt-1"></i>
                    <p class="text-sm text-secondary">
                        Operational excellence with disciplined execution systems
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>
<section class="py-28 bg-background-soft border-t border-border">
    <div class="container-custom">

        <!-- SECTION HEADER -->
        <div class="max-w-2xl mb-20">
            <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                Our Philosophy
            </span>

            <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary">
                Vision & Mission
            </h2>

            <div class="w-16 h-[2px] bg-accent mt-6"></div>
        </div>


        <!-- GRID -->
        <div class="grid md:grid-cols-2 gap-12">

            <!-- VISION CARD -->
            <div class="p-10 bg-background border border-border rounded-xl">

                <div class="w-14 h-14 flex items-center justify-center rounded-md bg-accent text-white mb-6">
                    <i class="ri-eye-line text-xl"></i>
                </div>

                <h3 class="text-xl font-semibold text-primary mb-4">
                    Our Vision
                </h3>

                <p class="text-secondary leading-relaxed">
                    To become a nationally recognized infrastructure leader,
                    delivering high-value projects with operational strength,
                    financial stability and engineering discipline.
                </p>

            </div>


            <!-- MISSION CARD -->
            <div class="p-10 bg-background border border-border rounded-xl">

                <div class="w-14 h-14 flex items-center justify-center rounded-md bg-accent text-white mb-6">
                    <i class="ri-flag-line text-xl"></i>
                </div>

                <h3 class="text-xl font-semibold text-primary mb-4">
                    Our Mission
                </h3>

                <p class="text-secondary leading-relaxed">
                    To execute infrastructure projects on time with uncompromised
                    quality, strict safety compliance and long-term value creation
                    for stakeholders.
                </p>

            </div>

        </div>

    </div>
</section>
</div>