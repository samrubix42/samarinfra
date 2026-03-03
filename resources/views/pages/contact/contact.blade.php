<?php

use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\Contact;
use App\Mail\ContactInquiry;
use Illuminate\Support\Facades\Mail;

new #[Title('Contact Us | Samar Infra Pvt Ltd')] class extends Component
{
    public $name = '';
    public $phone = '';
    public $inquiry_type = 'Project Consultation';
    public $message = '';

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'inquiry_type' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'inquiry_type' => $this->inquiry_type,
            'message' => $this->message,
        ]);

        try {
            Mail::to('samcool3203@gmail.com')->send(new ContactInquiry($contact));
        } catch (\Exception $e) {
            // Log error or handle silently as data is already saved
            \Illuminate\Support\Facades\Log::error('Failed to send contact inquiry email: ' . $e->getMessage());
        }

        $this->reset();
        session()->flash('status', 'Inquiry sent successfully!');
    }
    public function delete($id)
    {
        Contact::find($id)->delete();
        session()->flash('status', 'Inquiry deleted successfully!');
    }

    public function with()
    {
        return [
            'contacts' => Contact::latest()->get(),
        ];
    }
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
                                <a href="tel:+919999865786" class="hover:text-accent transition">+91 99998 65786</a><br>
                                <a href="tel:+919953791500" class="hover:text-accent transition">+91 99537 91500</a>
                            </p>
                        </div>
                    </div>

                </div>

                <!-- INQUIRY FORM -->
                <div class="lg:col-span-7">
                    <div class="p-10 border border-border rounded-xl bg-background-soft">
                        <h3 class="text-xl font-bold text-primary mb-8">Send a Detailed Inquiry</h3>

                        <form wire:submit="save"
                            wire:loading.class="opacity-50 pointer-events-none"
                            class="space-y-6 transition-opacity">
                            @if (session('status'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Full Name</label>
                                    <input wire:model="name" type="text" placeholder="John Doe" class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all placeholder:text-gray-300">
                                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Phone Number</label>
                                    <input wire:model="phone" type="text" placeholder="+91 00000 00000" class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all placeholder:text-gray-300">
                                    @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Inquiry Type</label>
                                <select wire:model="inquiry_type" class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all text-sm">
                                    <option value="Project Consultation">Project Consultation</option>
                                    <option value="Procurement Request">Procurement Request</option>
                                    <option value="Career Opportunities">Career Opportunities</option>
                                    <option value="Other Engineering Inquiry">Other Engineering Inquiry</option>
                                </select>
                                @error('inquiry_type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Message Description</label>
                                <textarea wire:model="message" rows="5" placeholder="Tell us about your project requirements..." class="w-full bg-background border border-border focus:border-accent rounded-md px-5 py-3 outline-none transition-all placeholder:text-gray-300"></textarea>
                                @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit"
                                wire:loading.attr="disabled"
                                class="relative w-full btn-accent py-4 overflow-hidden group transition-all duration-300">

                                <!-- Normal State -->
                                <div class="flex items-center justify-center gap-3 transition-all duration-300"
                                    wire:loading.class="opacity-0 -translate-y-full" wire:target="save">
                                    <span class="font-bold tracking-wider uppercase text-xs">Submit Inquiry</span>
                                    <i class="ri-send-plane-fill group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                                </div>

                                <!-- Loading State -->
                                <div class="absolute inset-0 flex items-center justify-center gap-3 opacity-0 translate-y-full transition-all duration-300"
                                    wire:loading.class="!opacity-100 !translate-y-0" wire:target="save">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span class="font-bold tracking-widest uppercase text-[10px]">Processing Request</span>
                                </div>

                                <!-- Subtle Shine Effect on hover -->
                                <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-1000"></div>
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