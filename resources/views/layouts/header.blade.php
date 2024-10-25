<header class="bg-white shadow" x-data="{ mobileMenuOpen: false, searchDropdownOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 lg:py-6">
            <div class="flex items-center">
                <a href="/" class="flex-shrink-0">
                    <img class="h-10 w-auto sm:h-10" width="107" height="40" src="{{ asset('images/ug_news.svg') }}" alt="{{ config('app.name') }} logo"/>
                </a>
                <div class="hidden lg:ml-6 lg:flex lg:space-x-6 pl-4">
                    @foreach ($menus->take(5) as $menu)
                        <a href="{{ $menu->url }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            {{ $menu['title'] }}
                        </a>
                    @endforeach
                
                    @if ($menus->count() > 7)
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="text-base font-medium text-gray-500 hover:text-gray-900 flex items-center">
                                {{ __('More') }}
                                <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                                <div x-show="open" x-cloak @click.away="open = false" 
                                 class="absolute z-10 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5">
                                @foreach ($menus->skip(7) as $menu)
                                    <a href="{{ $menu->url }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        {{ $menu['title'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                
            </div>
            <div class="flex items-center">
                @include('layouts.account_dropdown')
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            @foreach ($menus as $menu)
                <a href="{{ $menu['url'] }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                    {{ $menu['title'] }}
                </a>
            @endforeach
            @auth
                <a href="{{ route('user.profile')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                    {{ __('Profile') }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Logout')}}</a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        {{ __('Sign in') }}
                    </a>
                    <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        {{ __('Sign up') }}
                    </a>
                @endauth
            </div>
        </div>
    
        <div id="mainContentOverlay" class="fixed inset-0 bg-black opacity-50 z-40" style="display: none;"></div>
    </header>
