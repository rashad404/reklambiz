<footer class="bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <img class="h-16" src="{{ asset('images/logo-white.svg') }}" alt="{{ config('app.name') }} logo"/>
                <p class="text-gray-400 text-base">
                    {{ __('FooterAboutText') }}
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">{{ __('Facebook') }}</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <!-- SVG path for Facebook icon -->
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">{{ __('Instagram') }}</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <!-- SVG path for Instagram icon -->
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">{{ __('Twitter') }}</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <!-- SVG path for Twitter icon -->
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            {{ __('Quick Links') }}
                        </h3>
                        <ul class="mt-4 space-y-4">
                            @foreach ($menus->take(ceil($menus->count() / 2)) as $menu)
                                <li>
                                    <a href="{{ $menu->url }}" class="text-base text-gray-300 hover:text-white">
                                        {{ __($menu->title) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            {{ __('More Links') }}
                        </h3>
                        <ul class="mt-4 space-y-4">
                            @foreach ($menus->skip(ceil($menus->count() / 2)) as $menu)
                                <li>
                                    <a href="{{ $menu->url }}" class="text-base text-gray-300 hover:text-white">
                                        {{ __($menu->title) }}
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    {{ __('Android App') }}
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    {{ __('iOS App') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="mt-12 border-t border-gray-700 pt-8">
            <p class="text-base text-gray-400 xl:text-center">
                &copy; {{ date("Y") }} {{ config('app.name') }} | {{ __('All rights reserved') }}. 
                {{ __('Created by') }} <a href="https://websiteca.com" class="text-white hover:underline" target="_blank" title="Small business websites, website development">WebsiteCA</a>.
            </p>
        </div>
    </div>
</footer>

<!-- Mobile Footer Navigation -->
<nav class="fixed bottom-0 inset-x-0 bg-white shadow flex justify-between text-xs text-gray-700 uppercase font-mono md:hidden">
    <a href="/" class="w-full block py-2 px-3 text-center hover:bg-gray-200">
        <svg class="w-5 h-5 mb-1 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        {{ __('Home') }}
    </a>
    <a href="{{ route('home') }}" class="w-full block py-2 px-3 text-center hover:bg-gray-200">
        <svg class="w-5 h-5 mb-1 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
        {{ __('Trending') }}
    </a>
    <button id="mobileSearchToggle" class="w-full block py-2 px-3 text-center hover:bg-gray-200">
        <svg class="w-5 h-5 mb-1 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="uppercase">{{ __('Search') }}</span>
    </button>
    <a href="{{ route('home') }}" class="w-full block py-2 px-3 text-center hover:bg-gray-200">
        <svg class="w-5 h-5 mb-1 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        {{ __('Create') }}
    </a>
</nav>

<!-- Mobile Search Overlay -->
<div id="mobileSearchOverlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden">
    <div class="bg-white w-full h-full flex flex-col">
        <div class="p-4 border-b border-gray-200 flex items-center">
            <input type="search" id="mobileSearchInput" class="flex-grow px-4 py-2 border rounded-md" placeholder="{{ __('Search') }}" />
            <button id="closeMobileSearch" class="ml-2 text-gray-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div id="mobileSearchResults" class="flex-grow overflow-y-auto p-4"></div>
    </div>
</div>
