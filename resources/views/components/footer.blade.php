<footer class="bg-[#0a0a0a] border-t border-white/10">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <div class="text-2xl font-bold mb-4">
                    <span class="text-white">Pineone</span>
                    <span class="gradient-text"> Communications</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    IoT · 스마트홈 · IPTV 플랫폼의 선두주자<br>
                    2003년 설립, 21년의 기술력과 노하우
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">바로가기</h4>
                <ul class="space-y-2">
                    @foreach([
                        ['route' => 'main', 'label' => 'Main'],
                        ['route' => 'company', 'label' => 'Company'],
                        ['route' => 'business', 'label' => 'Business & Product'],
                        ['route' => 'recruit', 'label' => 'Recruit'],
                        ['route' => 'news', 'label' => 'News'],
                    ] as $item)
                        <li>
                            <a href="{{ route($item['route']) }}"
                               class="text-gray-400 hover:text-[#20c997] text-sm transition-colors">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>서울특별시 구로구 디지털로32가길 16</li>
                    <li>파인원타워 4층</li>
                    <li class="mt-2">Tel: 02-2107-0700</li>
                    <li>Email: contact@pineone.com</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/10 pt-8 text-center">
            <p class="text-gray-500 text-sm">
                © {{ date('Y') }} Pineone Communications. All rights reserved.
            </p>
        </div>
    </div>
</footer>
