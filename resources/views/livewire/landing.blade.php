<div class="bg-white relative w-full">
    {{-- Header / Navigation --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24">
                {{-- Logo --}}
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 flex items-center justify-center">
                        <svg viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <path d="M13.7 7.4 H20.3 V77.8 H13.7 Z" fill="black"/>
                            <path d="M68.9 68.9 H77.8 V84.3 H68.9 Z" fill="black"/>
                            <path d="M13.7 7.4 H49 V22.8 H13.7 Z" fill="black"/>
                            <path d="M38.1 7.4 H44.7 V38.2 H38.1 Z" fill="black"/>
                            <path d="M38.1 53.4 H44.7 V84.3 H38.1 Z" fill="black"/>
                            <path d="M38.1 68.9 H85 V84.3 H38.1 Z" fill="black"/>
                            <path d="M6.6 68.9 H85 V84.3 H6.6 Z" fill="black"/>
                            <path d="M6.6 7.4 H20.3 V22.8 H6.6 Z" fill="black"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-semibold uppercase tracking-wide">{{ __('landing.brand_name') }}</span>
                </div>

                {{-- Navigation --}}
                <nav class="hidden md:flex items-center gap-12">
                    <a href="#about" class="text-2xl font-medium hover:text-gray-600 transition">{{ __('landing.nav_about') }}</a>
                    <a href="#directions" class="text-2xl font-medium hover:text-gray-600 transition">{{ __('landing.nav_directions') }}</a>
                    <a href="#contacts" class="text-2xl font-medium hover:text-gray-600 transition">{{ __('landing.nav_contacts') }}</a>
                </nav>

            </div>
        </div>
    </header>

    {{-- Hero Section --}}
    <section class="relative h-screen pt-24 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
            <div class="max-w-4xl">
                <h1 class="text-7xl md:text-8xl font-semibold text-white uppercase leading-tight mb-8">
                    {{ __('landing.hero_title') }}
                </h1>
                <p class="text-3xl md:text-4xl font-medium text-white uppercase mb-12">
                    {{ __('landing.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-7xl md:text-8xl font-semibold uppercase mb-12">
                        {{ __('landing.about_title') }}
                    </h2>
                    <div class="text-2xl font-light space-y-6">
                        <p>{{ __('landing.about_description_1') }}</p>
                        <p>{{ __('landing.about_description_2') }}</p>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/about-image.jpg') }}" 
                         alt="Medical Technology" 
                         class="w-full h-auto rounded-lg shadow-2xl transform scale-x-[-1]">
                </div>
            </div>
        </div>
    </section>

    {{-- Directions Section --}}
    <section id="directions" class="py-24 bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-7xl md:text-8xl font-semibold uppercase mb-16">
                {{ __('landing.directions_title') }}
            </h2>

            {{-- Direction Cards --}}
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                {{-- Card 1: AI --}}
                <div class="border border-white rounded-3xl p-8 backdrop-blur-sm" 
                     style="background-image: url('{{ asset('images/direction-cards.jpg') }}'); background-size: 285% 314%; background-position: 0% -92%;">
                    <div class="h-64 flex items-center justify-center mb-4">
                        {{-- Background image through inline style --}}
                    </div>
                </div>
                
                {{-- Card 2: Integration --}}
                <div class="border border-white rounded-3xl p-8 backdrop-blur-sm" 
                     style="background-image: url('{{ asset('images/direction-cards.jpg') }}'); background-size: 285% 314%; background-position: -90% -107%;">
                    <div class="h-64 flex items-center justify-center mb-4">
                        {{-- Background image through inline style --}}
                    </div>
                </div>
                
                {{-- Card 3: Add-ons --}}
                <div class="border border-white rounded-3xl p-8 backdrop-blur-sm" 
                     style="background-image: url('{{ asset('images/direction-cards.jpg') }}'); background-size: 285% 314%; background-position: -180% -101%;">
                    <div class="h-64 flex items-center justify-center mb-4">
                        {{-- Background image through inline style --}}
                    </div>
                </div>
            </div>

            {{-- Direction Details --}}
            <div class="grid md:grid-cols-3 gap-12">
                {{-- Direction 1: AI --}}
                <div>
                    <h3 class="text-2xl font-medium mb-6 leading-tight">
                        {{ __('landing.direction_ai_title') }}
                    </h3>
                    <div class="text-xl font-light space-y-4">
                        <p>{{ __('landing.direction_ai_intro') }}</p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>{{ __('landing.direction_ai_item_1') }}</li>
                            <li>{{ __('landing.direction_ai_item_2') }}</li>
                            <li>{{ __('landing.direction_ai_item_3') }}</li>
                        </ul>
                        <p class="pt-4">{{ __('landing.direction_ai_examples') }}</p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>{{ __('landing.direction_ai_example_1') }}</li>
                            <li>{{ __('landing.direction_ai_example_2') }}</li>
                            <li>{{ __('landing.direction_ai_example_3') }}</li>
                            <li>{{ __('landing.direction_ai_example_4') }}</li>
                        </ul>
                    </div>
                </div>

                {{-- Direction 2: Integration --}}
                <div>
                    <h3 class="text-2xl font-medium mb-6 leading-tight">
                        {{ __('landing.direction_integration_title') }}
                    </h3>
                    <div class="text-xl font-light space-y-4">
                        <p>{{ __('landing.direction_integration_intro') }}</p>
                        <p class="pt-4">{{ __('landing.direction_integration_what') }}</p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>{{ __('landing.direction_integration_item_1') }}</li>
                            <li>{{ __('landing.direction_integration_item_2') }}</li>
                            <li>{{ __('landing.direction_integration_item_3') }}</li>
                            <li>{{ __('landing.direction_integration_item_4') }}</li>
                        </ul>
                    </div>
                </div>

                {{-- Direction 3: Add-ons --}}
                <div>
                    <h3 class="text-2xl font-medium mb-6 leading-tight">
                        {{ __('landing.direction_addons_title') }}
                    </h3>
                    <div class="text-xl font-light space-y-4">
                        <p>{{ __('landing.direction_addons_intro') }}</p>
                        <p class="pt-4">{{ __('landing.direction_addons_examples') }}</p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>{{ __('landing.direction_addons_item_1') }}</li>
                            <li>{{ __('landing.direction_addons_item_2') }}</li>
                            <li>{{ __('landing.direction_addons_item_3') }}</li>
                            <li>{{ __('landing.direction_addons_item_4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why HealthSoft Section --}}
    <section class="py-24 bg-cover bg-center relative" style="background-image: url('{{ asset('images/why-section-bg.jpg') }}');">
        <div class="absolute inset-0 bg-white/90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-7xl md:text-8xl font-semibold uppercase mb-16">
                        {{ __('landing.why_title') }}
                    </h2>

                    <div class="space-y-12">
                        {{-- Item 1 --}}
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <p class="text-2xl font-light">{{ __('landing.why_item_1') }}</p>
                        </div>

                        {{-- Item 2 --}}
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </div>
                            <p class="text-2xl font-light">{{ __('landing.why_item_2') }}</p>
                        </div>

                        {{-- Item 3 --}}
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <p class="text-2xl font-light">{{ __('landing.why_item_3') }}</p>
                        </div>

                        {{-- Item 4 --}}
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                                </svg>
                            </div>
                            <p class="text-2xl font-light">{{ __('landing.why_item_4') }}</p>
                        </div>

                        {{-- Item 5 --}}
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/>
                                </svg>
                            </div>
                            <p class="text-2xl font-light">{{ __('landing.why_item_5') }}</p>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <img src="{{ asset('images/why-section-bg.jpg') }}" 
                         alt="Technology" 
                         class="w-full h-auto opacity-50">
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contacts" class="py-24 bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-5xl font-semibold uppercase mb-6">
                        {{ __('landing.contact_title') }}
                    </h2>
                </div>
                
                <div class="space-y-8">
                    {{-- Phone --}}
                    <div>
                        <h3 class="text-2xl font-medium mb-2">{{ __('landing.contact_phone_label') }}</h3>
                        <a href="tel:{{ __('landing.contact_phone') }}" class="text-2xl font-light hover:text-gray-300 transition">
                            {{ __('landing.contact_phone') }}
                        </a>
                    </div>

                    {{-- Email --}}
                    <div>
                        <h3 class="text-2xl font-medium mb-2">{{ __('landing.contact_email_label') }}</h3>
                        <a href="mailto:{{ __('landing.contact_email') }}" class="text-2xl font-light hover:text-gray-300 transition">
                            {{ __('landing.contact_email') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4">
                <div class="w-20 h-20 flex items-center justify-center">
                    <svg viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                        <path d="M13.7 7.4 H20.3 V77.8 H13.7 Z" fill="black"/>
                        <path d="M68.9 68.9 H77.8 V84.3 H68.9 Z" fill="black"/>
                        <path d="M13.7 7.4 H49 V22.8 H13.7 Z" fill="black"/>
                        <path d="M38.1 7.4 H44.7 V38.2 H38.1 Z" fill="black"/>
                        <path d="M38.1 53.4 H44.7 V84.3 H38.1 Z" fill="black"/>
                        <path d="M38.1 68.9 H85 V84.3 H38.1 Z" fill="black"/>
                        <path d="M6.6 68.9 H85 V84.3 H6.6 Z" fill="black"/>
                        <path d="M6.6 7.4 H20.3 V22.8 H6.6 Z" fill="black"/>
                    </svg>
                </div>
                <span class="text-3xl font-semibold uppercase tracking-wide">{{ __('landing.brand_name') }}</span>
            </div>
        </div>
    </footer>
</div>
