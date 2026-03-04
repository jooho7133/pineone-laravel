<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ route('main') }}" class="flex items-center space-x-2">
                <div class="text-2xl font-bold">
                    <span class="text-white">Pineone</span>
                    <span class="gradient-text"> Communications</span>
                </div>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-8">
                @foreach([
                    ['route' => 'main', 'label' => 'Main'],
                    ['route' => 'company', 'label' => 'Company'],
                    ['route' => 'business', 'label' => 'Business & Product'],
                    ['route' => 'recruit', 'label' => 'Recruit'],
                    ['route' => 'news', 'label' => 'News'],
                ] as $item)
                    <a href="{{ route($item['route']) }}"
                       class="relative text-sm font-medium transition-colors duration-200 {{ request()->routeIs($item['route']) ? 'text-[#20c997]' : 'text-white hover:text-[#20c997]' }}">
                        {{ $item['label'] }}
                        @if(request()->routeIs($item['route']))
                            <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-[#20c997] neon-glow"></span>
                        @endif
                    </a>
                @endforeach
            </div>

            {{-- Mobile Menu Button --}}
            <button onclick="toggleMobileMenu()" class="md:hidden text-white p-2" aria-label="메뉴 열기">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="md:hidden glass-strong border-t border-white/10 hidden">
        <div class="container mx-auto px-4 py-4">
            @foreach([
                ['route' => 'main', 'label' => 'Main'],
                ['route' => 'company', 'label' => 'Company'],
                ['route' => 'business', 'label' => 'Business & Product'],
                ['route' => 'recruit', 'label' => 'Recruit'],
                ['route' => 'news', 'label' => 'News'],
            ] as $item)
                <a href="{{ route($item['route']) }}"
                   class="block w-full text-left py-3 px-4 rounded-lg transition-colors duration-200 {{ request()->routeIs($item['route']) ? 'text-[#20c997] bg-white/5' : 'text-white hover:text-[#20c997] hover:bg-white/5' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
