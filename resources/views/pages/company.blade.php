@extends('layouts.app')

@section('title', 'Company - 파인원커뮤니케이션즈')

@section('content')
<div class="bg-[#121212] pt-20">

    {{-- CEO Message --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 reveal">
                <span class="gradient-text">CEO Message</span>
            </h2>
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
                    <div class="lg:col-span-2 reveal">
                        <div class="glass rounded-xl overflow-hidden">
                            <div class="w-full h-[400px] bg-gradient-to-br from-[#20c997]/20 to-[#1e1e1e] flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-8xl mb-4">👤</div>
                                    <p class="text-gray-400">CEO 사진</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-1">김영훈</h3>
                                <p class="text-[#20c997]">대표이사</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-3 reveal">
                        <div class="space-y-6 text-gray-300 leading-relaxed">
                            <p class="text-xl font-semibold text-white">안녕하십니까, 파인원커뮤니케이션즈 대표이사 김영훈입니다.</p>
                            <p>2003년 설립 이래, 저희 파인원커뮤니케이션즈는 끊임없는 혁신과 도전으로 IoT, 스마트홈, IPTV 플랫폼 분야에서 대한민국을 대표하는 기업으로 성장해왔습니다.</p>
                            <p>지난 21년간 축적한 기술력과 노하우를 바탕으로, 300개 이상의 상용 서비스를 성공적으로 운영하며 고객 여러분의 일상을 더욱 편리하고 스마트하게 만들어왔습니다.</p>
                            <p>특히 스마트홈 통합 플랫폼 'Ezthing'은 우리의 기술력과 비전을 집약한 결과물로, 누구나 쉽게 사용할 수 있는 지능형 홈 서비스를 제공하며 업계를 선도하고 있습니다.</p>
                            <p>앞으로도 파인원커뮤니케이션즈는 고객 중심의 혁신적인 기술 개발을 통해 더 나은 미래를 만들어가겠습니다.</p>
                            <div class="pt-4">
                                <p class="text-white font-semibold">감사합니다.</p>
                                <p class="text-[#20c997] mt-2">파인원커뮤니케이션즈 대표이사 김영훈</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- History Section --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 reveal">
                <span class="gradient-text">History</span>
            </h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-[#20c997] to-transparent"></div>
                    <div class="space-y-8">
                        @foreach($history as $item)
                            <div class="relative pl-20 reveal">
                                <div class="absolute left-0 top-0">
                                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-[#20c997] to-[#52e5b8] flex items-center justify-center neon-glow">
                                        <span class="text-[#121212] font-bold text-sm">{{ $item['year'] }}</span>
                                    </div>
                                </div>
                                <div class="glass p-6 rounded-xl hover-lift">
                                    <div class="space-y-3">
                                        @foreach($item['events'] as $event)
                                            <div class="flex items-start space-x-3">
                                                <span class="text-[#20c997] flex-shrink-0 mt-0.5">✓</span>
                                                <span class="text-gray-300">{{ $event }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Financial Strength --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 reveal">
                <span class="gradient-text">Financial Strength</span>
            </h2>
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="glass p-8 rounded-xl text-center hover-lift reveal">
                        <div class="text-5xl mb-4">🏆</div>
                        <h3 class="text-3xl font-bold text-white mb-2">신용등급</h3>
                        <div class="text-6xl font-bold gradient-text text-glow my-6">A</div>
                        <p class="text-gray-400">NICE신용평가</p>
                        <p class="text-sm text-gray-500 mt-2">2024년 기준</p>
                    </div>
                    <div class="glass p-8 rounded-xl text-center hover-lift reveal">
                        <div class="text-5xl mb-4">📈</div>
                        <h3 class="text-3xl font-bold text-white mb-2">안정적 성장</h3>
                        <div class="text-6xl font-bold gradient-text text-glow my-6">21</div>
                        <p class="text-gray-400">Years</p>
                        <p class="text-sm text-gray-500 mt-2">지속적인 성장세 유지</p>
                    </div>
                </div>
                <div class="glass p-8 rounded-xl mt-8 reveal">
                    <h3 class="text-2xl font-bold text-white mb-6 text-center">재무 건전성 특징</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach([
                            ['title' => '안정적 수익구조', 'desc' => '300+ 상용 서비스 운영으로 지속적인 매출 발생'],
                            ['title' => '우수한 기술력', 'desc' => '21년간 축적된 핵심 기술 및 특허 보유'],
                            ['title' => '건전한 재무구조', 'desc' => '부채 비율 최소화 및 현금 흐름 안정화'],
                        ] as $item)
                            <div class="text-center">
                                <h4 class="text-[#20c997] font-semibold mb-2">{{ $item['title'] }}</h4>
                                <p class="text-gray-400 text-sm">{{ $item['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners Section --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 reveal">
                <span class="gradient-text">Partners</span>
            </h2>
            <p class="text-center text-gray-400 mb-16 reveal">국내외 주요 기업들과 함께 혁신을 만들어갑니다</p>
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 reveal">
                    @foreach($partners as $partner)
                        <div class="glass p-6 rounded-xl flex items-center justify-center hover-lift group cursor-pointer">
                            <span class="text-gray-400 font-medium text-center group-hover:text-[#20c997] transition-colors">
                                {{ $partner }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Statistics --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    @foreach([
                        ['icon' => '🏆', 'number' => '21+', 'label' => 'Years', 'desc' => '업계 경험'],
                        ['icon' => '⚙️', 'number' => '300+', 'label' => 'Services', 'desc' => '상용 서비스'],
                        ['icon' => '📊', 'number' => 'A', 'label' => 'Rating', 'desc' => '신용등급'],
                        ['icon' => '📋', 'number' => '100+', 'label' => 'Patents', 'desc' => '기술 특허'],
                    ] as $stat)
                        <div class="glass p-6 rounded-xl text-center hover-lift reveal">
                            <div class="text-3xl mb-4">{{ $stat['icon'] }}</div>
                            <div class="text-4xl font-bold gradient-text mb-2">{{ $stat['number'] }}</div>
                            <div class="text-white font-semibold mb-1">{{ $stat['label'] }}</div>
                            <div class="text-gray-400 text-sm">{{ $stat['desc'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
