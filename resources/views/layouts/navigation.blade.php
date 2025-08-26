<nav x-data="{ open: false }" 
     class="fixed top-0 left-0 z-50 w-full shadow glass">
    <div class="flex items-center justify-between h-20 px-12">
        
        {{-- Left: Logo --}}
        <div class="flex items-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/appicon.png') }}" class="w-auto h-12" alt="Logo">
            </a>
        </div>

        {{-- Middle: Search Bar --}}
        <div class="flex-1 px-10">
            <div class="relative max-w-2xl mx-auto">
                <input type="text" placeholder="Search something"
                    class="w-full px-4 py-2 text-sm border border-gray-300 rounded-full bg-white/50 focus:border-brand-default focus:ring-1 focus:ring-brand-default">
                <button class="absolute top-0 right-0 flex items-center h-full px-3 text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M9.5 17a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Right: Icons --}}
        <div class="flex items-center space-x-8">
            {{-- Order --}}
            <a href="#" class="text-gray-700 hover:text-brand-default">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 bi bi-window-desktop" viewBox="0 0 16 16">
                <path d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                <path d="M2.375 1A2.366 2.366 0 0 0 0 3.357v9.286A2.366 2.366 0 0 0 2.375 15h11.25A2.366 2.366 0 0 0 16 12.643V3.357A2.366 2.366 0 0 0 13.625 1zM1 3.357C1 2.612 1.611 2 2.375 2h11.25C14.389 2 15 2.612 15 3.357V4H1zM1 5h14v7.643c0 .745-.611 1.357-1.375 1.357H2.375A1.366 1.366 0 0 1 1 12.643z"/>
                </svg>
            </a>

            {{-- Cart --}}
            <a href="#" class="text-gray-700 hover:text-brand-default">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>
            </a>

            {{-- Profile Dropdown --}}
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center focus:outline-none">
                       <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</nav>
