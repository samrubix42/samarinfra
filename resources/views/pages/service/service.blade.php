<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="bg-white min-h-screen">
    <!-- Header -->
    <section class="bg-brand-navy pt-40 pb-24 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 transition-transform duration-1000 hover:scale-105">
            <img src="/railway_metro_infrastructure_1772435294249.png" alt="Engineering" class="w-full h-full object-cover">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h4 class="text-brand-yellow font-bold uppercase tracking-[0.3em] text-sm mb-4">Engineering Excellence</h4>
            <h1 class="text-4xl md:text-6xl font-black mb-6 italic uppercase tracking-tighter">Our Services</h1>
            <p class="text-gray-300 max-w-2xl text-lg">
                Specialized infrastructure solutions across Highway, Railway, Metro, and Expressway sectors, powered by two decades of engineering expertise.
            </p>
        </div>
    </section>

    <!-- Services Detailed -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-32">
                <!-- Highway & Road -->
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <div>
                        <div class="w-16 h-1 bg-brand-yellow mb-8"></div>
                        <h2 class="text-3xl font-black text-brand-navy mb-6 uppercase tracking-tight">Highway & Road Construction</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            We deliver durable and high-speed road networks using advanced pavement technologies. Our expertise spans from rural roads to national highways and complex expressway packages.
                        </p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>Earthwork</span></li>
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>Subgrade</span></li>
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>GSB & WMM</span></li>
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>Compaction</span></li>
                        </ul>
                    </div>
                    <div class="mt-12 lg:mt-0 bg-gray-100 rounded-2xl h-80 flex items-center justify-center text-gray-400 font-bold uppercase tracking-widest text-xs italic">
                        Highway Engineering Visual
                    </div>
                </div>

                <!-- Railway -->
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <div class="lg:order-2">
                        <div class="w-16 h-1 bg-brand-yellow mb-8"></div>
                        <h2 class="text-3xl font-black text-brand-navy mb-6 uppercase tracking-tight">Railway Infrastructure</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            A trusted partner for Dedicated Freight Corridor (EDFC) projects and regional rapid transit systems (RRTS). We specialize in precision ballast laying and track-bed stabilization.
                        </p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>Ballast Laying</span></li>
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>EDFC Projects</span></li>
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>Metro Packages</span></li>
                            <li class="flex items-center space-x-3 text-sm font-bold text-gray-500 uppercase tracking-widest"><i class="ri-checkbox-circle-fill text-brand-yellow"></i> <span>Pillar Works</span></li>
                        </ul>
                    </div>
                    <div class="mt-12 lg:mt-0 bg-brand-navy rounded-2xl h-80 overflow-hidden relative group lg:order-1">
                        <img src="/railway_metro_infrastructure_1772435294249.png" alt="Railway" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    </div>
                </div>

                <!-- Crushing & Mining -->
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <div>
                        <div class="w-16 h-1 bg-brand-yellow mb-8"></div>
                        <h2 class="text-3xl font-black text-brand-navy mb-6 uppercase tracking-tight">Crushing & Mining Operations</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            We own 80 acres of strategic mining land in Rajasthan and operate 8 industrial-grade crushing units, ensuring a steady supply of high-quality aggregates for mega-projects.
                        </p>
                        <div class="bg-brand-navy p-8 rounded-xl text-white">
                            <div class="text-3xl font-black text-brand-yellow italic mb-2">60 Lakh MT</div>
                            <div class="text-[10px] uppercase font-bold tracking-[0.2em] text-gray-400">Annual Crushing Capacity</div>
                        </div>
                    </div>
                    <div class="mt-12 lg:mt-0 bg-brand-navy rounded-2xl h-80 overflow-hidden relative group">
                        <img src="/crushing_plant_mining_1772435274771.png" alt="Mining" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-brand-navy rounded-[3rem] p-16 md:p-24 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-brand-yellow/5"></div>
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-black text-white mb-8 italic uppercase tracking-tighter">Ready to Build Together?</h2>
                <p class="text-gray-400 max-w-xl mx-auto mb-12 text-lg">
                    Contact our engineering team today for project estimates, raw material procurement, or partnership opportunities.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="/contact" class="inline-flex items-center justify-center px-10 py-5 bg-brand-yellow text-brand-navy font-black uppercase tracking-widest rounded-xl hover:bg-brand-yellow-dark transition-all shadow-xl">
                        Start Your Inquiry
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-10 py-5 border-2 border-white/20 text-white font-black uppercase tracking-widest rounded-xl hover:bg-white hover:text-brand-navy transition-all">
                        Company Profile (PDF)
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>