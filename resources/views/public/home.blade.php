<!-- resources/views/public/home.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Hero Section with Animation -->
    <section class="relative h-screen bg-gradient-to-r from-blue-600 to-blue-800 overflow-hidden">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative container mx-auto px-6 h-full flex items-center">
            <div class="max-w-3xl text-white" data-aos="fade-up">
                <h1 class="text-5xl font-bold mb-6">{{ __('hero.title') }}</h1>
                <p class="text-xl mb-8">{{ __('hero.subtitle') }}</p>
                <div class="flex gap-4">
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition transform hover:scale-105">
                        {{ __('hero.get_started') }}
                    </a>
                    <button onclick="document.getElementById('demo-modal').classList.remove('hidden')" 
                            class="border border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/10 transition transform hover:scale-105">
                        {{ __('hero.watch_demo') }}
                    </button>
                </div>
            </div>
        </div>
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>
    </section>

    <!-- Stats Section with Counter Animation -->
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-4xl font-bold text-blue-600 mb-2">
                        <span class="counter" data-target="1000">0</span>+
                    </div>
                    <div class="text-gray-600">{{ __('stats.active_publishers') }}</div>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-4xl font-bold text-blue-600 mb-2">
                        <span class="counter" data-target="100">0</span>M+
                    </div>
                    <div class="text-gray-600">{{ __('stats.monthly_impressions') }}</div>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-4xl font-bold text-blue-600 mb-2">
                        <span class="counter" data-target="500">0</span>+
                    </div>
                    <div class="text-gray-600">{{ __('stats.advertisers') }}</div>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-4xl font-bold text-blue-600 mb-2">
                        <span class="counter" data-target="2.4">0</span>%
                    </div>
                    <div class="text-gray-600">{{ __('stats.avg_ctr') }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ad Formats Carousel -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">{{ __('formats.title') }}</h2>
            <div class="splide" id="ad-formats-carousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="bg-white p-6 rounded-xl shadow-sm mx-4">
                                <img src="{{ asset('images/logo.svg') }}" alt="Display Ads" class="w-full h-48 object-cover rounded-lg mb-4">
                                <h3 class="text-xl font-semibold mb-2">{{ __('formats.display_title') }}</h3>
                                <p class="text-gray-600">{{ __('formats.display_desc') }}</p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="bg-white p-6 rounded-xl shadow-sm mx-4">
                                <img src="{{ asset('images/video-ads.svg') }}" alt="Video Ads" class="w-full h-48 object-cover rounded-lg mb-4">
                                <h3 class="text-xl font-semibold mb-2">{{ __('formats.video_title') }}</h3>
                                <p class="text-gray-600">{{ __('formats.video_desc') }}</p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="bg-white p-6 rounded-xl shadow-sm mx-4">
                                <img src="{{ asset('images/native-ads.svg') }}" alt="Native Ads" class="w-full h-48 object-cover rounded-lg mb-4">
                                <h3 class="text-xl font-semibold mb-2">{{ __('formats.native_title') }}</h3>
                                <p class="text-gray-600">{{ __('formats.native_desc') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">{{ __('features.title') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up">
                    <div class="text-blue-600 mb-4">
                        <x-icons.targeting />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('features.targeting_title') }}</h3>
                    <p class="text-gray-600">{{ __('features.targeting_desc') }}</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-blue-600 mb-4">
                        <x-icons.analytics />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('features.analytics_title') }}</h3>
                    <p class="text-gray-600">{{ __('features.analytics_desc') }}</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-blue-600 mb-4">
                        <x-icons.network />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('features.network_title') }}</h3>
                    <p class="text-gray-600">{{ __('features.network_desc') }}</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-blue-600 mb-4">
                        <x-icons.rtb />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('features.rtb_title') }}</h3>
                    <p class="text-gray-600">{{ __('features.rtb_desc') }}</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-blue-600 mb-4">
                        <x-icons.safety />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('features.safety_title') }}</h3>
                    <p class="text-gray-600">{{ __('features.safety_desc') }}</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-blue-600 mb-4">
                        <x-icons.formats />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('features.formats_title') }}</h3>
                    <p class="text-gray-600">{{ __('features.formats_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Platform Tabs -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-center mb-8" data-aos="fade-up">
                <div class="inline-flex rounded-lg border border-gray-200">
                    <button onclick="showTab('publishers')" 
                            class="tab-btn px-8 py-3 rounded-l-lg" 
                            data-tab="publishers">
                        {{ __('platform.publishers_tab') }}
                    </button>
                    <button onclick="showTab('advertisers')" 
                            class="tab-btn px-8 py-3 rounded-r-lg" 
                            data-tab="advertisers">
                        {{ __('platform.advertisers_tab') }}
                    </button>
                </div>
            </div>

            <div id="publishers-content" class="tab-content grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">{{ __('platform.publishers_title') }}</h2>
                    <ul class="space-y-4">
                        @foreach(['integration', 'revenue', 'reporting', 'support'] as $benefit)
                        <li class="flex items-center gap-3">
                            <svg class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>{{ __("platform.publishers_{$benefit}") }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-100 rounded-xl p-8" data-aos="fade-left">
                    <img src="{{ asset('images/publisher-dashboard.svg') }}" alt="Publisher Dashboard" class="w-full">
                </div>
            </div>

            <div id="advertisers-content" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">{{ __('platform.advertisers_title') }}</h2>
                    <ul class="space-y-4">
                        @foreach(['targeting', 'bidding', 'safety', 'insights'] as $benefit)
                        <li class="flex items-center gap-3">
                            <svg class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>{{ __("platform.advertisers_{$benefit}") }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-100 rounded-xl p-8" data-aos="fade-left">
                    <img src="{{ asset('images/advertiser-dashboard.svg') }}" alt="Advertiser Dashboard" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">{{ __('testimonials.title') }}</h2>
            <div class="splide" id="testimonials-carousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach(range(1, 5) as $i)
                        <li class="splide__slide">
                            <div class="bg-gray-50 p-6 rounded-xl shadow-sm mx-4">
                                <div class="flex items-center mb-4">
                                    <img src="{{ asset("images/testimonial-{$i}.jpg") }}" 
                                         alt="{{ __("testimonials.name_{$i}") }}" 
                                         class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h3 class="font-semibold">{{ __("testimonials.name_{$i}") }}</h3>
                                        <p class="text-gray-600">{{ __("testimonials.position_{$i}") }}</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">{{ __("testimonials.quote_{$i}") }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">{{ __('contact.title') }}</h2>
                <form id="contact-form" class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up">
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2">{{ __('contact.name') }}</label>
                        <input type="text" name="name" required
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">{{ __('contact.email') }}</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">{{ __('contact.phone') }}</label>
                        <input type="tel" name="phone"
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2">{{ __('contact.company') }}</label>
                        <input type="text" name="company"
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2">{{ __('contact.message') }}</label>
                        <textarea name="message" rows="4" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition transform hover:scale-105">
                            {{ __('contact.submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section with Accordions -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">{{ __('faq.title') }}</h2>
            <div class="max-w-3xl mx-auto space-y-4">
                @foreach(range(1, 5) as $i)
                <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <button class="faq-toggle w-full flex justify-between items-center p-4 text-left">
                        <span class="font-semibold">{{ __("faq.q{$i}") }}</span>
                        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content hidden p-4 pt-0 text-gray-600">
                        {{ __("faq.a{$i}") }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">{{ __('cta.title') }}</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">{{ __('cta.subtitle') }}</p>
            <a href="{{ route('register') }}" 
               class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition transform hover:scale-105"
               data-aos="fade-up" data-aos-delay="200">
                {{ __('cta.button') }}
            </a>
        </div>
    </section>

    <!-- Demo Modal -->
    <div id="demo-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-4xl w-full mx-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold">{{ __('modal.demo_title') }}</h3>
                <button onclick="document.getElementById('demo-modal').classList.add('hidden')" 
                        class="text-gray-500 hover:text-gray-700">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="{{ __('modal.demo_video_url') }}" 
                        class="w-full h-full" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>

    @push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <style>
        .floating-shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite;
        }
        .shape-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
            animation-delay: -2s;
        }
        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
            animation-delay: -5s;
        }
        .shape-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 15%;
            animation-delay: -7s;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(50px, 50px) rotate(90deg); }
            50% { transform: translate(0, 100px) rotate(180deg); }
            75% { transform: translate(-50px, 50px) rotate(270deg); }
        }
        .counter {
            display: inline-block;
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Initialize Splide carousels
        new Splide('#ad-formats-carousel', {
            perPage: 3,
            gap: '2rem',
            breakpoints: {
                768: {
                    perPage: 1,
                },
                1024: {
                    perPage: 2,
                }
            }
        }).mount();

        new Splide('#testimonials-carousel', {
            perPage: 3,
            gap: '2rem',
            breakpoints: {
                768: {
                    perPage: 1,
                },
                1024: {
                    perPage: 2,
                }
            }
        }).mount();

        // Counter animation
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.textContent = current.toFixed(1);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    updateCounter();
                    observer.unobserve(counter);
                }
            });

            observer.observe(counter);
        });

        // FAQ Accordions
        document.querySelectorAll('.faq-toggle').forEach(toggle => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('svg');
                
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Contact Form Handling
        document.getElementById('contact-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const form = e.target;
            const data = new FormData(form);

            try {
                const response = await fetch('/api/contact', {
                    method: 'POST',
                    body: data,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                if (response.ok) {
                    alert('{{ __("contact.success") }}');
                    form.reset();
                } else {
                    throw new Error();
                }
            } catch (error) {
                alert('{{ __("contact.error") }}');
            }
        });
    </script>
    @endpush
@endsection