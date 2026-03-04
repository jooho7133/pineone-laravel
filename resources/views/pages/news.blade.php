@extends('layouts.app')

@section('title', 'News - 파인원커뮤니케이션즈')

@section('content')
<div class="bg-[#121212] pt-20">

    {{-- Hero Section --}}
    <section class="section-padding bg-gradient-to-b from-[#1e1e1e] to-[#121212]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto reveal">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">News</span>
                </h1>
                <p class="text-xl text-gray-300">파인원커뮤니케이션즈의 최신 소식을 확인하세요</p>
            </div>
        </div>
    </section>

    {{-- Search & Filter (sticky) --}}
    <section class="py-8 bg-[#1e1e1e] sticky top-20 z-40 border-b border-white/10">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                {{-- Search Form (GET 방식) --}}
                <form action="{{ route('news') }}" method="GET" class="mb-6">
                    @if($category !== '전체')
                        <input type="hidden" name="category" value="{{ $category }}">
                    @endif
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">🔍</span>
                        <input type="text"
                               name="search"
                               value="{{ $search }}"
                               placeholder="뉴스 검색..."
                               class="w-full pl-12 pr-4 py-4 bg-[#121212] border border-white/10 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-[#20c997] transition-colors">
                    </div>
                </form>

                {{-- Category Filter --}}
                <div class="flex flex-wrap gap-3">
                    @foreach($categories as $cat)
                        <a href="{{ route('news', array_merge(request()->query(), ['category' => $cat, 'page' => 1])) }}"
                           class="px-6 py-2 rounded-lg font-medium transition-all duration-300 {{ $category === $cat ? 'bg-[#20c997] text-[#121212] neon-glow' : 'bg-[#121212] text-gray-400 hover:text-[#20c997] border border-white/10' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- News Grid --}}
    <section class="section-padding">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                @if($paginatedNews->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                        @foreach($paginatedNews as $news)
                            <article class="glass rounded-xl overflow-hidden hover-lift group cursor-pointer reveal">
                                {{-- Thumbnail --}}
                                <div class="h-48 bg-gradient-to-br from-[#20c997]/20 to-[#52e5b8]/10 flex items-center justify-center relative overflow-hidden">
                                    <div class="absolute inset-0 bg-[#121212]/50"></div>
                                    <div class="relative z-10 text-[#20c997] text-6xl">🏷️</div>
                                </div>

                                {{-- Content --}}
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1 bg-[#20c997]/20 rounded-full text-[#20c997] text-sm font-semibold">
                                            {{ $news['category'] }}
                                        </span>
                                        <div class="flex items-center space-x-1 text-gray-500 text-sm">
                                            <span>📅</span>
                                            <span>{{ $news['date'] }}</span>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#20c997] transition-colors line-clamp-2">
                                        {{ $news['title'] }}
                                    </h3>
                                    <p class="text-gray-400 text-sm line-clamp-3">{{ $news['excerpt'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    @if($paginatedNews->lastPage() > 1)
                        <div class="flex items-center justify-center space-x-2 mt-8">
                            {{-- 이전 --}}
                            @if($paginatedNews->onFirstPage())
                                <span class="p-2 rounded-lg text-gray-600 cursor-not-allowed">‹</span>
                            @else
                                <a href="{{ $paginatedNews->previousPageUrl() }}"
                                   class="p-2 rounded-lg text-[#20c997] hover:bg-[#20c997]/10 transition-all">‹</a>
                            @endif

                            {{-- 페이지 번호 --}}
                            @for($i = 1; $i <= $paginatedNews->lastPage(); $i++)
                                @if($i === $paginatedNews->currentPage())
                                    <span class="w-10 h-10 rounded-lg font-semibold flex items-center justify-center bg-[#20c997] text-[#121212] neon-glow">
                                        {{ $i }}
                                    </span>
                                @else
                                    <a href="{{ $paginatedNews->url($i) }}"
                                       class="w-10 h-10 rounded-lg font-semibold flex items-center justify-center text-gray-400 hover:text-[#20c997] hover:bg-[#20c997]/10 transition-all">
                                        {{ $i }}
                                    </a>
                                @endif
                            @endfor

                            {{-- 다음 --}}
                            @if($paginatedNews->hasMorePages())
                                <a href="{{ $paginatedNews->nextPageUrl() }}"
                                   class="p-2 rounded-lg text-[#20c997] hover:bg-[#20c997]/10 transition-all">›</a>
                            @else
                                <span class="p-2 rounded-lg text-gray-600 cursor-not-allowed">›</span>
                            @endif
                        </div>
                    @endif

                @else
                    <div class="text-center py-20 reveal">
                        <div class="text-6xl mb-4">🏷️</div>
                        <p class="text-xl text-gray-400">검색 결과가 없습니다.</p>
                        @if($search || $category !== '전체')
                            <a href="{{ route('news') }}" class="mt-4 inline-block text-[#20c997] hover:underline">
                                전체 뉴스 보기
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>

</div>
@endsection
