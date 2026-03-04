@extends('layouts.app')

@section('title', 'Recruit - 파인원커뮤니케이션즈')

@section('content')
<div class="bg-[#121212] pt-20">

    {{-- Hero Section --}}
    <section class="relative section-padding overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&q=80"
                 alt="Office" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-[#121212]/70 to-[#121212]"></div>
        </div>
        <div class="relative container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto reveal">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">당신을</span>
                    <span class="gradient-text text-glow"> 환영합니다</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-4">
                    파인원커뮤니케이션즈와 함께 미래를 만들어갈<br>
                    열정적인 인재를 찾습니다
                </p>
                <p class="text-gray-400">21년의 기술력과 노하우를 바탕으로 성장하는 기업에서 여러분의 꿈을 실현하세요</p>
            </div>
        </div>
    </section>

    {{-- 인재상 --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="gradient-text">인재상</span>
                </h2>
                <p class="text-xl text-gray-300">파인원커뮤니케이션즈가 찾는 인재</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach($talents as $talent)
                    <div class="glass p-8 rounded-xl hover-lift reveal">
                        <div class="text-[#20c997] text-5xl mb-6 flex justify-center">
                            @switch($talent['icon'])
                                @case('code') 💻 @break
                                @case('trending-up') 📈 @break
                                @case('users') 👥 @break
                                @default ⭐
                            @endswitch
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-6 text-center">{{ $talent['title'] }}</h3>
                        <ul class="space-y-3">
                            @foreach($talent['qualities'] as $quality)
                                <li class="flex items-start space-x-3">
                                    <span class="text-[#20c997] flex-shrink-0 mt-0.5">✓</span>
                                    <span class="text-gray-300">{{ $quality }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 채용 공고 --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="gradient-text">채용 공고</span>
                </h2>
                <p class="text-xl text-gray-300">상시 채용 중인 포지션</p>
            </div>
            <div class="max-w-6xl mx-auto space-y-12">
                @foreach($jobOpenings as $category)
                    <div class="reveal">
                        <h3 class="text-3xl font-bold text-[#20c997] mb-6">{{ $category['category'] }} 직군</h3>
                        <div class="space-y-6">
                            @foreach($category['positions'] as $position)
                                <div class="glass p-8 rounded-xl hover-lift">
                                    <h4 class="text-2xl font-bold text-white mb-6">{{ $position['title'] }}</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="text-[#20c997] font-semibold mb-3 flex items-center space-x-2">
                                                <span>🏆</span><span>자격 요건</span>
                                            </h5>
                                            <ul class="space-y-2">
                                                @foreach($position['requirements'] as $req)
                                                    <li class="flex items-start space-x-2">
                                                        <span class="text-[#20c997] flex-shrink-0 mt-1 text-sm">✓</span>
                                                        <span class="text-gray-300 text-sm">{{ $req }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="text-[#20c997] font-semibold mb-3 flex items-center space-x-2">
                                                <span>⭐</span><span>우대 사항</span>
                                            </h5>
                                            <ul class="space-y-2">
                                                @foreach($position['preferred'] as $pref)
                                                    <li class="flex items-start space-x-2">
                                                        <span class="text-gray-500 flex-shrink-0 mt-1 text-sm">○</span>
                                                        <span class="text-gray-400 text-sm">{{ $pref }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center reveal">
                <a href="mailto:recruit@pineone.com"
                   class="inline-flex items-center space-x-2 px-8 py-4 bg-[#20c997] text-[#121212] font-semibold rounded-lg hover:bg-[#1ba87c] transition-all duration-300 neon-glow">
                    <span>📥</span>
                    <span>입사지원서 제출</span>
                </a>
                <p class="text-gray-400 text-sm mt-4">recruit@pineone.com 으로 발송해주세요</p>
            </div>
        </div>
    </section>

    {{-- 복지 제도 --}}
    <section class="section-padding bg-[#1e1e1e]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="gradient-text">복지 제도</span>
                </h2>
                <p class="text-xl text-gray-300">구성원의 행복을 최우선으로 생각합니다</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 max-w-6xl mx-auto">
                @foreach(array_slice($mainBenefits, 0, 3) as $benefit)
                    <div class="glass p-8 rounded-xl text-center hover-lift reveal {{ $benefit['highlight'] ? 'border-2 border-[#20c997]' : '' }}">
                        <div class="text-[#20c997] text-4xl flex justify-center mb-4">
                            @switch($benefit['icon'])
                                @case('gift') 🎁 @break
                                @case('dollar-sign') 💰 @break
                                @case('coffee') ☕ @break
                                @case('plane') ✈️ @break
                                @case('graduation-cap') 🎓 @break
                                @case('heart') ❤️ @break
                                @default ⭐
                            @endswitch
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">{{ $benefit['title'] }}</h3>
                        <p class="text-gray-400">{{ $benefit['description'] }}</p>
                        @if($benefit['highlight'])
                            <div class="mt-4 inline-block px-3 py-1 bg-[#20c997]/20 rounded-full">
                                <span class="text-[#20c997] text-sm font-semibold">주요 복지</span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 max-w-6xl mx-auto">
                @foreach(array_slice($mainBenefits, 3) as $benefit)
                    <div class="glass p-6 rounded-xl text-center hover-lift reveal">
                        <div class="text-[#20c997] text-3xl flex justify-center mb-3">
                            @switch($benefit['icon'])
                                @case('plane') ✈️ @break
                                @case('graduation-cap') 🎓 @break
                                @case('heart') ❤️ @break
                                @default ⭐
                            @endswitch
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">{{ $benefit['title'] }}</h3>
                        <p class="text-gray-400 text-sm">{{ $benefit['description'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="glass p-8 rounded-xl max-w-4xl mx-auto reveal">
                <h3 class="text-2xl font-bold text-white mb-6 text-center">상세 복지 혜택</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($detailedBenefits as $benefit)
                        <div class="flex items-start space-x-3">
                            <span class="text-[#20c997] mt-1 flex-shrink-0">✓</span>
                            <span class="text-gray-300">{{ $benefit }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center glass p-12 rounded-xl reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">지금</span>
                    <span class="gradient-text"> 지원하세요</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8">파인원커뮤니케이션즈에서 여러분의 미래를 시작하세요</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="mailto:recruit@pineone.com"
                       class="inline-flex items-center justify-center space-x-2 px-8 py-4 bg-[#20c997] text-[#121212] font-semibold rounded-lg hover:bg-[#1ba87c] transition-all duration-300 neon-glow">
                        <span>📥</span><span>입사지원서 제출</span>
                    </a>
                    <a href="mailto:recruit@pineone.com"
                       class="px-8 py-4 glass border-2 border-[#20c997] text-[#20c997] font-semibold rounded-lg hover:bg-[#20c997]/10 transition-all duration-300">
                        채용 문의하기
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
