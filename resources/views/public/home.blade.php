<!-- resources/views/public/home.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1920x800?business'); height: 600px;">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="container mx-auto h-full flex items-center justify-center text-center relative z-10">
            <div class="text-white px-6 md:px-12">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Grow Your Business with Reklam.biz</h1>
                <p class="mt-4 text-lg md:text-xl">Connect with a targeted audience and maximize your revenue through effective ad placements.</p>
                <div class="mt-8">
                    <a href="#services" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg mr-4">Our Services</a>
                    <a href="#signup" class="bg-gray-100 hover:bg-gray-200 text-gray-900 font-bold py-3 px-6 rounded-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Our Services</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <div class="text-blue-500 text-4xl mb-4">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Targeted Advertising</h3>
                        <p class="mt-4 text-gray-600">Reach your ideal audience with precision targeting options, maximizing your ad effectiveness.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <div class="text-blue-500 text-4xl mb-4">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Real-time Analytics</h3>
                        <p class="mt-4 text-gray-600">Monitor campaign performance in real-time to adjust your strategy and maximize ROI.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <div class="text-blue-500 text-4xl mb-4">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Flexible Budgeting</h3>
                        <p class="mt-4 text-gray-600">Set and control your ad budget with ease, with options to adjust as your campaign progresses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Why Choose Reklam.biz?</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold text-gray-800">User-Friendly Dashboard</h3>
                        <p class="mt-4 text-gray-600">Manage all your campaigns, ad units, and reports with an intuitive, easy-to-use interface.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold text-gray-800">Cross-Platform Compatibility</h3>
                        <p class="mt-4 text-gray-600">Reach audiences across devices with ads that look great on mobile, desktop, and tablets.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold text-gray-800">Transparent Reporting</h3>
                        <p class="mt-4 text-gray-600">Gain insights into ad performance with clear and transparent reporting, accessible 24/7.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold text-gray-800">Dedicated Support</h3>
                        <p class="mt-4 text-gray-600">Get help when you need it from our experienced support team, dedicated to your success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits for Advertisers and Publishers -->
    <section class="py-16 bg-blue-500 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Advertisers and Publishers, We've Got You Covered!</h2>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 px-4 mb-8">
                    <div class="p-6 bg-white rounded-lg text-gray-800">
                        <h3 class="text-2xl font-bold">For Advertisers</h3>
                        <ul class="mt-4 list-disc list-inside text-gray-700">
                            <li>Access to high-quality publisher sites</li>
                            <li>Real-time performance insights</li>
                            <li>Advanced targeting options</li>
                            <li>Transparent pricing and flexible budgets</li>
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4 mb-8">
                    <div class="p-6 bg-white rounded-lg text-gray-800">
                        <h3 class="text-2xl font-bold">For Publishers</h3>
                        <ul class="mt-4 list-disc list-inside text-gray-700">
                            <li>Easy ad integration with customizable ad units</li>
                            <li>Maximize revenue from your traffic</li>
                            <li>Timely payouts and detailed revenue reports</li>
                            <li>Access to a variety of advertisers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">What Our Clients Say</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <p class="text-gray-600">"Reklam.biz helped us reach a new audience and boosted our sales by 30%. Their targeting options are fantastic!"</p>
                        <p class="mt-4 font-bold">- John Doe, Advertiser</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <p class="text-gray-600">"Thanks to Reklam.biz, I was able to monetize my blog effectively and get timely payouts."</p>
                        <p class="mt-4 font-bold">- Jane Smith, Publisher</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <p class="text-gray-600">"Their reporting tools and dashboard are incredibly user-friendly. I can see results in real-time!"</p>
                        <p class="mt-4 font-bold">- Alex Brown, Advertiser</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="signup" class="py-16 bg-blue-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Start?</h2>
            <p class="mb-8">Sign up today and see the impact Reklam.biz can have on your business.</p>
            <a href="{{ route('register') }}" class="bg-white text-blue-500 font-bold py-3 px-6 rounded-lg">Join Now</a>
        </div>
    </section>
@endsection
