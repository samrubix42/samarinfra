<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="bg-white min-h-screen">
    <!-- Header -->
    <section class="bg-brand-navy pt-40 pb-24 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h4 class="text-brand-yellow font-bold uppercase tracking-[0.3em] text-sm mb-4">Contact Us</h4>
            <h1 class="text-4xl md:text-6xl font-black mb-6 italic uppercase tracking-tighter">Get In Touch</h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                Partner with India's lead infrastructure group. We are here to answer your technical inquiries and project procurement needs.
            </p>
        </div>
    </section>

    <!-- Info & Form Grid -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Contact Information -->
                <div class="lg:col-span-5">
                    <div class="space-y-12">
                        <!-- Corporate -->
                        <div class="flex items-start space-x-6 group">
                            <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center group-hover:bg-brand-yellow transition-colors duration-300">
                                <i class="ri-building-line text-2xl text-brand-navy"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Corporate Office</h4>
                                <p class="text-gray-800 font-bold text-lg leading-relaxed">
                                    NS VIP Complex,<br>
                                    Greater Noida West,<br>
                                    Noida – 201009
                                </p>
                            </div>
                        </div>

                        <!-- Registered -->
                        <div class="flex items-start space-x-6 group">
                            <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center group-hover:bg-brand-yellow transition-colors duration-300">
                                <i class="ri-map-pin-line text-2xl text-brand-navy"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Registered Office</h4>
                                <p class="text-gray-800 font-bold text-lg leading-relaxed">
                                    1, Dasna Bus Stand,<br>
                                    Ghaziabad – 201302
                                </p>
                            </div>
                        </div>

                        <!-- Comm Channels -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 pt-8 border-t border-gray-100">
                            <div>
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Direct Email</h4>
                                <a href="mailto:samar@samarinfra.com" class="text-brand-navy font-bold hover:text-brand-yellow-dark transition-colors block mb-1">samar@samarinfra.com</a>
                                <a href="mailto:samaryusuf88@gmail.com" class="text-gray-500 text-sm hover:text-brand-navy transition-colors block">samaryusuf88@gmail.com</a>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Call Support</h4>
                                <p class="text-brand-navy font-bold leading-relaxed">
                                    +91 99998 65786<br>
                                    +91 99537 91500
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inquiry Form -->
                <div class="lg:col-span-7">
                    <div class="bg-gray-50 rounded-3xl p-8 md:p-12">
                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Full Name</label>
                                    <input type="text" placeholder="John Doe" class="w-full bg-white border-2 border-transparent focus:border-brand-yellow rounded-xl px-6 py-4 outline-none transition-all placeholder:text-gray-300">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Email Address</label>
                                    <input type="email" placeholder="john@example.com" class="w-full bg-white border-2 border-transparent focus:border-brand-yellow rounded-xl px-6 py-4 outline-none transition-all placeholder:text-gray-300">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Subject</label>
                                <select class="w-full bg-white border-2 border-transparent focus:border-brand-yellow rounded-xl px-6 py-4 outline-none transition-all">
                                    <option>Project Inquiry</option>
                                    <option>Procurement Request</option>
                                    <option>Career Opportunities</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Your Message</label>
                                <textarea rows="5" placeholder="How can we help you?" class="w-full bg-white border-2 border-transparent focus:border-brand-yellow rounded-xl px-6 py-4 outline-none transition-all placeholder:text-gray-300"></textarea>
                            </div>
                            <button class="w-full bg-brand-navy text-white font-black uppercase tracking-[0.2em] py-5 rounded-xl hover:bg-brand-yellow hover:text-brand-navy transition-all duration-300 shadow-xl">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Placeholder -->
    <div class="w-full h-[400px] bg-gray-100 grayscale hover:grayscale-0 transition-all duration-700">
        <div class="flex items-center justify-center h-full text-gray-300 font-black uppercase tracking-widest text-sm">
            Interactive Site Location Map
        </div>
    </div>
</div>