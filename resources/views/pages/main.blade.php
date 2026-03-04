@extends('layouts.app')

@section('title', '파인원커뮤니케이션즈 - Innovation for Smart Future')

@section('content')
<div class="bg-[#121212]">

    {{-- Hero Section --}}
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=1920&q=80"
                 alt="Technology Background"
                 class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-[#121212]/70 via-[#121212]/50 to-[#121212]"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-up">
                <span class="text-white">Innovation for</span><br>
                <span class="gradient-text text-glow">Smart Future</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 animate-fade-in-up" style="animation-delay:0.2s">
                IoT · 스마트홈 · IPTV 플랫폼의 선두주자
            </p>

            {{-- Counter Stats --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="glass p-8 rounded-xl hover-lift">
                    <div class="text-5xl font-bold gradient-text mb-2">
                        <span class="counter" data-target="21">0</span>+
                    </div>
                    <div class="text-gray-400">Years Old</div>
                    <div class="text-sm text-gray-500 mt-1">축적된 기술력</div>
                </div>
                <div class="glass p-8 rounded-xl hover-lift">
                    <div class="text-5xl font-bold gradient-text mb-2">
                        <span class="counter" data-target="300">0</span>+
                    </div>
                    <div class="text-gray-400">Commercial Service</div>
                    <div class="text-sm text-gray-500 mt-1">상용 서비스 운영</div>
                </div>
                <div class="glass p-8 rounded-xl hover-lift">
                    <div class="text-5xl font-bold gradient-text mb-2">A</div>
                    <div class="text-gray-400">Credit Rating</div>
                    <div class="text-sm text-gray-500 mt-1">신용등급</div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-[#20c997] rounded-full flex items-start justify-center p-2">
                <div class="w-1 h-3 bg-[#20c997] rounded-full animate-pulse"></div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto reveal">
                <h2 class="text-4xl md:text-6xl font-bold mb-8">
                    <span class="text-white">21년의 노하우,</span><br>
                    <span class="gradient-text">또 다른 21년을 향해</span>
                </h2>
                <p class="text-xl text-gray-300 leading-relaxed">
                    파인원커뮤니케이션즈는 2003년 설립 이래 IoT, 스마트홈, IPTV 플랫폼 등<br>
                    다양한 분야에서 혁신적인 기술을 선보이며 디지털 전환을 이끌어왔습니다.
                </p>
            </div>
        </div>
    </section>

    {{-- Core Business Section --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="reveal">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                    <span class="gradient-text">Core Business</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['icon' => '💻', 'title' => 'Device SW', 'desc' => '모바일 플래시, 코어 애플리케이션 개발'],
                    ['icon' => '🔗', 'title' => 'Service Platform', 'desc' => '비즈니스 프레임워크, MDM 솔루션'],
                    ['icon' => '🏠', 'title' => 'IoT', 'desc' => '스마트홈, 지능형 IoT 플랫폼'],
                    ['icon' => '📺', 'title' => 'IPTV', 'desc' => '셋탑박스 플랫폼, 스마트 TV'],
                ] as $service)
                    <div class="glass p-8 rounded-xl hover-lift group cursor-pointer reveal">
                        <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
                            {{ $service['icon'] }}
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-[#20c997] transition-colors">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-gray-400">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Credit Rating Section --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between max-w-6xl mx-auto gap-12 reveal">
                <div class="flex-1">
                    <div class="inline-block px-4 py-2 bg-[#20c997]/20 rounded-full mb-6">
                        <span class="text-[#20c997] font-semibold">신용평가</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">
                        <span class="text-white">신용등급</span>
                        <span class="gradient-text text-glow"> A 획득</span>
                    </h2>
                    <p class="text-xl text-gray-300 leading-relaxed mb-6">
                        안정적인 재무구조와 우수한 기술력을 인정받아<br>
                        NICE신용평가로부터 신용등급 A를 획득했습니다.
                    </p>
                    <div class="flex items-center space-x-2 text-[#20c997]">
                        <span>🏆</span>
                        <span class="font-semibold">2024년 기준</span>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="w-64 h-64 rounded-full bg-gradient-to-br from-[#20c997] to-[#52e5b8] flex items-center justify-center neon-glow-strong animate-pulse-glow">
                        <div class="text-8xl font-bold text-[#121212]">A</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ezthing Section --}}
    <section class="relative section-padding overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1558002038-1055907df827?w=1920&q=80"
                 alt="Smart Home" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-[#121212] via-[#121212]/90 to-transparent"></div>
        </div>
        <div class="relative container mx-auto px-4">
            <div class="max-w-2xl reveal">
                <div class="inline-block px-4 py-2 bg-[#20c997]/20 rounded-full mb-6">
                    <span class="text-[#20c997] font-semibold">Smart Home Solution</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text text-glow">Ezthing</span>
                </h2>
                <p class="text-xl text-gray-300 leading-relaxed mb-8">
                    IoT 기술을 기반으로 한 스마트홈 통합 플랫폼<br>
                    누구나 쉽게 사용할 수 있는 지능형 홈 서비스를 제공합니다.
                </p>
                <a href="{{ route('business') }}"
                   class="inline-flex items-center space-x-2 px-8 py-4 bg-[#20c997] text-[#121212] font-semibold rounded-lg hover:bg-[#1ba87c] transition-all duration-300 neon-glow">
                    <span>자세히 보기</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Latest News Section --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-12 reveal">
                <h2 class="text-4xl md:text-5xl font-bold">
                    <span class="gradient-text">Latest News</span>
                </h2>
                <a href="{{ route('news') }}" class="text-[#20c997] hover:text-[#1ba87c] flex items-center space-x-2">
                    <span>전체보기</span>
                    <span>→</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($latestNews as $news)
                    <div class="glass p-6 rounded-xl hover-lift cursor-pointer group reveal">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[#20c997] text-sm font-semibold">{{ $news['category'] }}</span>
                            <span class="text-gray-500 text-sm">{{ $news['date'] }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#20c997] transition-colors">
                            {{ $news['title'] }}
                        </h3>
                        <p class="text-gray-400 text-sm">{{ $news['excerpt'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Recruit Preview Section --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">함께 성장할</span>
                    <span class="gradient-text"> 인재를 찾습니다</span>
                </h2>
                <p class="text-xl text-gray-300">파인원커뮤니케이션즈와 함께 미래를 만들어갈 여러분을 기다립니다</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                @foreach([
                    ['icon' => '🎁', 'title' => '안식 휴가', 'desc' => '3/5/7/10년 근속 시 제공'],
                    ['icon' => '💰', 'title' => '자기개발비', 'desc' => '연간 200만원 지원'],
                    ['icon' => '👥', 'title' => '수평적 문화', 'desc' => '자유로운 의견 교환'],
                ] as $benefit)
                    <div class="glass p-8 rounded-xl text-center hover-lift reveal">
                        <div class="text-4xl mb-4">{{ $benefit['icon'] }}</div>
                        <h3 class="text-xl font-bold text-white mb-2">{{ $benefit['title'] }}</h3>
                        <p class="text-gray-400">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="text-center reveal">
                <a href="{{ route('recruit') }}"
                   class="inline-flex items-center space-x-2 px-8 py-4 bg-[#20c997] text-[#121212] font-semibold rounded-lg hover:bg-[#1ba87c] transition-all duration-300 neon-glow">
                    <span>채용 공고 보기</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 reveal">
                <span class="gradient-text">Contact Us</span>
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="glass rounded-xl overflow-hidden h-[400px] flex items-center justify-center reveal">
                    <div class="text-center">
                        <div class="text-6xl mb-4">📍</div>
                        <p class="text-gray-400">서울특별시 구로구 디지털로32가길 16</p>
                        <p class="text-sm text-gray-500 mt-2">파인원타워 4층</p>
                    </div>
                </div>
                <div class="space-y-6 reveal">
                    <div class="glass p-6 rounded-xl">
                        <div class="flex items-start space-x-4">
                            <div class="text-[#20c997] mt-1 text-2xl">📍</div>
                            <div>
                                <h3 class="font-semibold text-white mb-2">주소</h3>
                                <p class="text-gray-400">서울특별시 구로구 디지털로32가길 16<br>파인원타워 4층</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass p-6 rounded-xl">
                        <div class="flex items-start space-x-4">
                            <div class="text-[#20c997] mt-1 text-2xl">📞</div>
                            <div>
                                <h3 class="font-semibold text-white mb-2">전화</h3>
                                <p class="text-gray-400">02-2107-0700</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass p-6 rounded-xl">
                        <div class="flex items-start space-x-4">
                            <div class="text-[#20c997] mt-1 text-2xl">✉️</div>
                            <div>
                                <h3 class="font-semibold text-white mb-2">이메일</h3>
                                <p class="text-gray-400">contact@pineone.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
