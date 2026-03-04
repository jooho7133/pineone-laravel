@extends('layouts.app')

@section('title', 'Business & Product - 파인원커뮤니케이션즈')

@section('content')
<div class="bg-[#121212] pt-20">

    {{-- Hero Section --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">Business &</span>
                    <span class="gradient-text"> Product</span>
                </h1>
                <p class="text-xl text-gray-300">
                    6개 핵심 사업 영역에서 300개 이상의 상용 서비스를 제공하며<br>
                    디지털 혁신을 선도합니다
                </p>
            </div>

            {{-- Business Overview Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
                @foreach($businessAreas as $area)
                    <a href="#{{ $area['id'] }}"
                       class="glass p-6 rounded-xl hover-lift group cursor-pointer block reveal">
                        <div class="text-[#20c997] text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
                            @switch($area['icon'])
                                @case('glasses') 🥽 @break
                                @case('brain') 🧠 @break
                                @case('home') 🏠 @break
                                @case('monitor-play') 📺 @break
                                @case('layers') 🔗 @break
                                @case('smartphone') 📱 @break
                                @default 💡
                            @endswitch
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-[#20c997] transition-colors">
                            {{ $area['title'] }}
                        </h3>
                        <p class="text-gray-400">{{ $area['description'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Business Detail Sections --}}
    @foreach($businessAreas as $index => $area)
        <section id="{{ $area['id'] }}"
                 class="relative section-padding overflow-hidden {{ $index % 2 === 0 ? 'bg-[#1e1e1e]' : '' }}">
            <div class="relative container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="mb-12 reveal">
                        <div class="flex items-center space-x-4 mb-6">
                            <span class="text-[#20c997] text-4xl">
                                @switch($area['icon'])
                                    @case('glasses') 🥽 @break
                                    @case('brain') 🧠 @break
                                    @case('home') 🏠 @break
                                    @case('monitor-play') 📺 @break
                                    @case('layers') 🔗 @break
                                    @case('smartphone') 📱 @break
                                    @default 💡
                                @endswitch
                            </span>
                            <h2 class="text-4xl md:text-5xl font-bold">
                                <span class="gradient-text">{{ $area['title'] }}</span>
                            </h2>
                        </div>
                        <p class="text-xl text-gray-300">{{ $area['description'] }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($area['items'] as $item)
                            <div class="glass p-6 rounded-xl hover-lift group reveal">
                                <div class="flex items-start space-x-4">
                                    <span class="text-[#20c997] flex-shrink-0 mt-1">✓</span>
                                    <div>
                                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#20c997] transition-colors">
                                            {{ $item['name'] }}
                                        </h3>
                                        <p class="text-gray-400">{{ $item['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-12 glass p-8 rounded-xl reveal">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold gradient-text mb-2">50+</div>
                                <div class="text-gray-400">서비스</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold gradient-text mb-2">10+</div>
                                <div class="text-gray-400">파트너사</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold gradient-text mb-2">100K+</div>
                                <div class="text-gray-400">사용자</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    {{-- CTA Section --}}
    <section class="section-padding bg-gradient-to-b from-[#121212] to-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">비즈니스 문의</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    파인원커뮤니케이션즈의 솔루션에 대해 더 알고 싶으신가요?<br>
                    언제든지 문의해주세요.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="mailto:contact@pineone.com"
                       class="px-8 py-4 bg-[#20c997] text-[#121212] font-semibold rounded-lg hover:bg-[#1ba87c] transition-all duration-300 neon-glow">
                        상담 신청하기
                    </a>
                    <a href="#"
                       class="px-8 py-4 glass border-2 border-[#20c997] text-[#20c997] font-semibold rounded-lg hover:bg-[#20c997]/10 transition-all duration-300">
                        자료 다운로드
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
