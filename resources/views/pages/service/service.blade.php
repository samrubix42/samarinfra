<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Our Services | Samar Infra Pvt Ltd')] class extends Component
{
    //
};
?>

<div class="bg-background min-h-screen">
    <!-- BANNER SECTION --> 
    <section class="pt-10 md:pt-20 pb-20 bg-background border-b border-border">
        <div class="container-custom max-w-4xl">
            <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                Engineering Excellence
            </span>
            <h1 class="mt-6 text-4xl md:text-5xl font-bold leading-tight text-primary">
                Our Specialized Infrastructure Services
            </h1>
            <p class="mt-6 text-lg text-secondary leading-relaxed">
                Samar Infra delivers end-to-end infrastructure solutions across
                multiple sectors, powered by two decades of engineering expertise
                and massive operational capacity.
            </p>
        </div>
    </section>

    <!-- SERVICES LIST -->
    <section class="py-24 bg-background">
        <div class="container-custom space-y-32">

            <!-- HIGHWAY & ROAD -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="order-2 lg:order-1">
                    <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                        Highways & Expressways
                    </span>
                    <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary leading-tight">
                        National Highway & <br> Expressway Construction
                    </h2>
                    <div class="w-16 h-[2px] bg-accent mt-6 mb-8"></div>
                    <p class="text-secondary leading-relaxed mb-6">
                        We deliver high-speed road networks using advanced pavement
                        technologies. Our expertise spans from subgrade preparation to
                        full-scale NHAI highway execution.
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-border">
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> Earthwork
                        </li>
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> Laying & Compaction
                        </li>
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> GSB & WMM Laying Work
                        </li>
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> Full-Scale Execution
                        </li>
                    </ul>
                </div>
                <div class="relative order-1 lg:order-2">
                    <div class="absolute -bottom-6 -right-6 w-full h-full -xl"></div>
                    <img src="/images/car-driving-highway-bridge-generative-ai_410516-71752.jpg" alt="Highway Construction" class="relative rounded-xl w-full h-[400px] object-cover  hover:-0 transition-all duration-700">
                </div>
            </div>

            <!-- RAILWAY INFRASTRUCTURE -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="absolute -bottom-6 -left-6 w-full h-full -xl"></div>
                    <img src="/images/people-entering-train-subway-station-modern-metro-station-platform-men-women-traveling-by-public-transport-city_575670-1959.jpg" alt="Railway Infrastructure" class="relative rounded-xl w-full h-[400px] object-cover  hover:-0 transition-all duration-700">
                </div>
                <div>
                    <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                        Corridors & Metro
                    </span>
                    <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary leading-tight">
                        Railway & Metro <br> Infrastructure Solutions
                    </h2>
                    <div class="w-16 h-[2px] bg-accent mt-6 mb-8"></div>
                    <p class="text-secondary leading-relaxed mb-6">
                        A trusted partner for Dedicated Freight Corridor (EDFC) projects
                        and regional rapid transit systems (RRTS). We specialize in
                        heavy earthwork and specialized laying for rail networks.
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-border">
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> Ballast Laying Work
                        </li>
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> EDFC Corridor Earthwork
                        </li>
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> RRTS Connectivity
                        </li>
                        <li class="flex items-center gap-3 text-sm font-semibold text-primary uppercase tracking-wider">
                            <i class="ri-checkbox-circle-line text-accent"></i> Track Bed Stabilization
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CRUSHING & PROCUREMENT -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="order-2 lg:order-1">
                    <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                        Mining & Supply
                    </span>
                    <h2 class="mt-4 text-3xl md:text-4xl font-bold text-primary leading-tight">
                        Crushing Operations & <br> Material Procurement
                    </h2>
                    <div class="w-16 h-[2px] bg-accent mt-6 mb-8"></div>
                    <p class="text-secondary leading-relaxed mb-6">
                        We provide end-to-end solutions for raw material needs, from contract crushing
                        to large-scale procurement for major infrastructure projects.
                    </p>
                    <ul class="space-y-4 pt-4 border-t border-border">
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-accent mt-1"></i>
                            <span class="text-sm font-semibold text-primary uppercase tracking-wider">
                                Contract base crushing services and mining works
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-accent mt-1"></i>
                            <span class="text-sm font-semibold text-primary uppercase tracking-wider">
                                Complete material procurement solutions on contract or market feasibility basis
                            </span>
                        </li>
                    </ul>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="p-6 bg-background-soft border border-border rounded-lg text-center">
                            <h3 class="text-2xl font-bold text-primary">60 Lakh MT</h3>
                            <p class="text-[10px] uppercase font-bold tracking-widest text-secondary">Annual Crushing Strength</p>
                        </div>
                        <div class="p-6 bg-background-soft border border-border rounded-lg text-center">
                            <h3 class="text-2xl font-bold text-primary">25K MT</h3>
                            <p class="text-[10px] uppercase font-bold tracking-widest text-secondary">Daily Supply Capacity</p>
                        </div>
                    </div>
                </div>
                <div class="relative order-1 lg:order-2">
                    <div class="absolute -bottom-6 -right-6 w-full h-full -xl"></div>
                    <img src="/images/professional-excavator-demolition-building-construction-site_999671-91019.jpg" alt="Mining Operations" class="relative rounded-xl w-full h-[400px] object-cover  hover:-0 transition-all duration-700">
                </div>
            </div>

        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-24 bg-background-soft border-t border-border">
        <div class="container-custom text-center max-w-3xl">
            <h2 class="text-3xl font-bold text-primary mb-6">
                Ready to Discuss Your Next Infrastructure Project?
            </h2>
            <p class="text-secondary mb-10 text-lg">
                Partner with Samar Infra for high-quality engineering services,
                reliable material supply, and on-time project execution.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}" wire:navigate class="btn-accent">Contact Our Engineers</a>
                <a href="#" class="btn-outline">Download Company Profile</a>
            </div>
        </div>
    </section>
</div>