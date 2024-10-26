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
