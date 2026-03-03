<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Contact Us | Samar Infra Pvt Ltd')] class extends Component
{
    //
};
?>

<div class="bg-background min-h-screen">
    <!-- BANNER SECTION -->
    <section class="pt-10 md:pt-20 pb-20 bg-background border-b border-border">
        <div class="container-custom max-w-4xl text-center">
            <span class="text-accent text-xs font-semibold uppercase tracking-[0.25em]">
                Partner With Us
            </span>
            <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-primary">
                Get In Touch
            </h1>
            <p class="mt-6 text-lg text-secondary leading-relaxed mx-auto max-w-2xl">
                We are here to answer your technical engineering inquiries and project
                procurement needs. Connect with India's lead infrastructure group.
            </p>
        </div>
    </section>

    <!-- CONTACT GRID -->
    <section class="py-24 bg-background">
        <div class="container-custom">
            <div class="grid lg:grid-cols-12 gap-20">

                <!-- OFFICE INFO -->
                <div class="lg:col-span-5 space-y-12">

                    <!-- CORPORATE -->
                    <div class="flex gap-6 group">
                        <div class="w-14 h-14 shrink-0 bg-accent text-white rounded-md flex items-center justify-center group-hover:bg-accent-dark transition-colors">
                            <i class="ri-building-line text-2xl"></i>
                        </div>
                        <div>
                            <span class="text-accent text-xs font-bold uppercase tracking-widest block mb-2">Corporate Office</span>
                            <p class="text-primary font-bold text-lg leading-relaxed">
                                NS VIP Complex,<br>
                                Greater Noida West,<br>
                                Noida – 201009
                            </p>
                        </div>
                    </div>

                    <!-- REGISTERED -->
                    <div class="flex gap-6 group">
                        <div class="w-14 h-14 shrink-0 bg-accent text-white rounded-md flex items-center justify-center group-hover:bg-accent-dark transition-colors">
                            <i class="ri-map-pin-line text-2xl"></i>
                        </div>
                        <div>
                            <span class="text-accent text-xs font-bold uppercase tracking-widest block mb-2">Registered Office</span>
                            <p class="text-primary font-bold text-lg leading-relaxed">
                                1, Dasna Bus Stand,<br>
                                Ghaziabad – 201302
                            </p>
                        </div>
                    </div>

                    <!-- COMM CHANNELS -->
                    <div class="pt-12 border-t border-border grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <span class="text-accent text-xs font-bold uppercase tracking-widest block mb-4">Direct Email</span>
                            <a href="mailto:samar@samarinfra.com" class="text-primary font-bold hover:text-accent transition block mb-1">samar@samarinfra.com</a>
                            <a href="mailto:samaryusuf88@gmail.com" class="text-secondary text-sm hover:text-primary transition block">samaryusuf88@gmail.com</a>
                        </div>
                        <div>
                            <span class="text-accent text-xs font-bold uppercase tracking-widest block mb-4">Call Support</span>
                            <p class="text-primary font-bold leading-relaxed">
                                +91 99998 65786<br>
                                +91 99537 91500
                            </p>
                        </div>
                    </div>

                </div>

                <!-- INQUIRY FORM -->
                <div class="lg:col-span-7">
                    <div class="p-10 border border-border rounded-xl bg-background-soft">
                        <h3 class="text-xl font-bold text-primary mb-8">Send a Detailed Inquiry</h3>

                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Full Name</label>
                                    <input type="text" placeholder="John Doe" class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all placeholder:text-gray-300">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Email Address</label>
                                    <input type="email" placeholder="john@example.com" class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all placeholder:text-gray-300">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Inquiry Type</label>
                                <select class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all text-sm">
                                    <option>Project Consultation</option>
                                    <option>Procurement Request</option>
                                    <option>Career Opportunities</option>
                                    <option>Other Engineering Inquiry</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Message Description</label>
                                <textarea rows="5" placeholder="Tell us about your project requirements..." class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all placeholder:text-gray-300"></textarea>
                            </div>
                            <button class="w-full btn-accent py-4">
                                Submit Inquiry
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <div class="w-full h-[450px] bg-background-muted border-t border-border flex items-center justify-center group overflow-hidden relative">
        <div class="absolute inset-0 bg-grid opacity-20"></div>
        <div class="relative z-10 text-center">
            <div class="w-16 h-16 mx-auto bg-accent text-white rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-xl">
                <i class="ri-map-pin-2-line text-2xl"></i>
            </div>
            <span class="text-xs font-bold text-primary uppercase tracking-[0.3em]">Interactive Project Locations Map</span>
        </div>
    </div>
</div>