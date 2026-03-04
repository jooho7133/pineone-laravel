<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{
    public function main()
    {
        $latestNews = [
            ['category' => '보도자료', 'date' => '2026.01.15', 'title' => '파인원커뮤니케이션즈, 차세대 IoT 플랫폼 개발 성공', 'excerpt' => '스마트홈 시장을 선도할 새로운 플랫폼 기술을 공개했습니다.'],
            ['category' => '수상', 'date' => '2026.01.10', 'title' => '2025 대한민국 ICT 대상 수상', 'excerpt' => 'IPTV 셋탑박스 분야에서 기술력을 인정받았습니다.'],
            ['category' => '행사', 'date' => '2026.01.05', 'title' => 'CES 2026 참가 및 신제품 전시', 'excerpt' => '글로벌 전자제품 박람회에서 혁신적인 제품을 선보였습니다.'],
        ];

        return view('pages.main', compact('latestNews'));
    }

    public function company()
    {
        $history = [
            ['year' => '2024', 'events' => ['신용등급 A 획득', 'CES 2024 참가', '누적 상용 서비스 300개 돌파']],
            ['year' => '2022', 'events' => ['스마트홈 플랫폼 Ezthing 출시', 'IoT 전문기업 인증']],
            ['year' => '2020', 'events' => ['IPTV 셋탑박스 누적 공급 100만대 달성', 'AI 스피커 플랫폼 개발']],
            ['year' => '2018', 'events' => ['5G 기반 스마트홈 서비스 개발', 'MDM 솔루션 고도화']],
            ['year' => '2015', 'events' => ['스마트 TV 플랫폼 개발', '모바일 보안 솔루션 출시']],
            ['year' => '2010', 'events' => ['IPTV 셋탑박스 플랫폼 상용화', '임베디드 소프트웨어 전문기업 인증']],
            ['year' => '2005', 'events' => ['모바일 플래시 솔루션 개발', '코어 애플리케이션 사업 확장']],
            ['year' => '2003', 'events' => ['파인원커뮤니케이션즈 설립', '모바일 소프트웨어 개발 시작']],
        ];

        $partners = [
            'SK텔레콤', 'KT', 'LG유플러스', 'Samsung', 'LG전자',
            'KT스카이라이프', 'SK브로드밴드', 'LG헬로비전', 'Naver', 'Kakao',
            'Google', 'Amazon', '현대자동차', '기아자동차', 'SK하이닉스',
            'LG이노텍', '삼성SDS', 'LG CNS', 'KT DS', 'SK C&C',
        ];

        return view('pages.company', compact('history', 'partners'));
    }

    public function business()
    {
        $businessAreas = [
            [
                'id' => 'arvr',
                'icon' => 'glasses',
                'title' => 'AR/VR',
                'description' => '증강현실과 가상현실 기술을 활용한 혁신적인 솔루션',
                'items' => [
                    ['name' => '에듀테인먼트', 'description' => 'VR 기반 교육 및 엔터테인먼트 콘텐츠'],
                    ['name' => 'AR 커머스', 'description' => '증강현실을 활용한 쇼핑 경험'],
                    ['name' => '가상 쇼룸', 'description' => '제품 시연을 위한 VR 전시 공간'],
                    ['name' => 'AR 네비게이션', 'description' => '실시간 길 안내 및 정보 제공'],
                ],
            ],
            [
                'id' => 'ai',
                'icon' => 'brain',
                'title' => 'AI Service',
                'description' => '인공지능 기술로 더 스마트한 일상을 만듭니다',
                'items' => [
                    ['name' => 'AI 스피커', 'description' => '음성 인식 기반 스마트 비서'],
                    ['name' => 'AI 셋톱박스', 'description' => '인공지능 기반 콘텐츠 추천'],
                    ['name' => 'AI 네비게이션', 'description' => '학습형 경로 안내 시스템'],
                    ['name' => '음성 인식 엔진', 'description' => '한국어 최적화 AI 음성 처리'],
                ],
            ],
            [
                'id' => 'iot',
                'icon' => 'home',
                'title' => 'IoT',
                'description' => '모든 것이 연결된 지능형 IoT 플랫폼',
                'items' => [
                    ['name' => 'Ezthing 플랫폼', 'description' => '통합 스마트홈 솔루션'],
                    ['name' => '스마트 가전 연동', 'description' => '다양한 IoT 기기 제어'],
                    ['name' => 'IoT 게이트웨이', 'description' => '디바이스 간 통신 허브'],
                    ['name' => '에너지 관리', 'description' => '스마트 전력 모니터링 및 제어'],
                ],
            ],
            [
                'id' => 'iptv',
                'icon' => 'monitor-play',
                'title' => 'IPTV & STB',
                'description' => '차세대 방송 플랫폼과 셋탑박스 솔루션',
                'items' => [
                    ['name' => 'IPTV 플랫폼', 'description' => '실시간 방송 및 VOD 서비스'],
                    ['name' => '스마트 STB', 'description' => '안드로이드 기반 셋탑박스'],
                    ['name' => 'OTT 통합', 'description' => '다양한 OTT 서비스 연동'],
                    ['name' => '4K/8K 지원', 'description' => '초고화질 콘텐츠 재생'],
                ],
            ],
            [
                'id' => 'platform',
                'icon' => 'layers',
                'title' => 'Smart Service Platform',
                'description' => '확장 가능한 비즈니스 프레임워크',
                'items' => [
                    ['name' => 'Business Framework', 'description' => '엔터프라이즈 개발 프레임워크'],
                    ['name' => 'MDM 솔루션', 'description' => '모바일 기기 관리 시스템'],
                    ['name' => 'API Gateway', 'description' => '마이크로서비스 통합 관리'],
                    ['name' => 'Cloud Integration', 'description' => '클라우드 서비스 연동'],
                ],
            ],
            [
                'id' => 'device',
                'icon' => 'smartphone',
                'title' => 'Device Software',
                'description' => '다양한 디바이스를 위한 최적화된 소프트웨어',
                'items' => [
                    ['name' => '모바일 플래시', 'description' => 'Android/iOS 최적화 솔루션'],
                    ['name' => 'Core Application', 'description' => '기본 시스템 애플리케이션'],
                    ['name' => 'Embedded SW', 'description' => '임베디드 시스템 개발'],
                    ['name' => 'Firmware', 'description' => '디바이스 펌웨어 개발'],
                ],
            ],
        ];

        return view('pages.business', compact('businessAreas'));
    }

    public function recruit()
    {
        $talents = [
            [
                'icon' => 'code',
                'title' => '엔지니어',
                'qualities' => ['기술에 대한 열정', '지속적인 학습 의지', '협업과 소통 능력', '문제 해결 능력'],
            ],
            [
                'icon' => 'trending-up',
                'title' => '영업/기획',
                'qualities' => ['시장 분석 능력', '비즈니스 통찰력', '커뮤니케이션 스킬', '목표 지향적 마인드'],
            ],
            [
                'icon' => 'users',
                'title' => '경영지원',
                'qualities' => ['체계적인 업무 처리', '세심한 관리 능력', '원활한 조율 능력', '책임감 있는 자세'],
            ],
        ];

        $jobOpenings = [
            [
                'category' => '개발',
                'positions' => [
                    [
                        'title' => 'C/C++ 개발자',
                        'requirements' => ['C/C++ 언어 기반 개발 경력 3년 이상', '리눅스 환경 개발 경험', '임베디드 시스템 개발 경험'],
                        'preferred' => ['IPTV/STB 개발 경험', 'Qt/QML 개발 경험', '영상 코덱 관련 지식'],
                    ],
                    [
                        'title' => 'Mobile/Web 개발자',
                        'requirements' => ['Android/iOS 또는 React/Vue.js 개발 경력 2년 이상', 'RESTful API 연동 경험', 'Git 사용 능력'],
                        'preferred' => ['IoT 앱 개발 경험', 'UI/UX 디자인 이해', 'TypeScript 사용 경험'],
                    ],
                    [
                        'title' => 'Server 개발자',
                        'requirements' => ['Java/Spring 또는 Node.js 개발 경력 3년 이상', '데이터베이스 설계 및 최적화 경험', 'MSA 아키텍처 이해'],
                        'preferred' => ['클라우드 서비스 경험 (AWS/GCP)', 'DevOps 경험', 'Kafka/Redis 경험'],
                    ],
                ],
            ],
            [
                'category' => '비개발',
                'positions' => [
                    [
                        'title' => '영업/기획',
                        'requirements' => ['IT 업계 경력 2년 이상', '사업 기획 및 제안서 작성 능력', '고객 커뮤니케이션 능력'],
                        'preferred' => ['B2B 영업 경험', 'IoT/스마트홈 시장 이해', '대기업 파트너 관리 경험'],
                    ],
                    [
                        'title' => '경영지원',
                        'requirements' => ['경영지원 업무 경력 2년 이상', '각종 사무 프로그램 능숙', '꼼꼼한 업무 처리 능력'],
                        'preferred' => ['ERP 시스템 사용 경험', '노무/인사 관련 지식', '회계/재무 관련 지식'],
                    ],
                ],
            ],
        ];

        $mainBenefits = [
            ['icon' => 'gift', 'title' => '안식 휴가', 'description' => '3/5/7/10년 근속 시 유급 휴가 제공', 'highlight' => true],
            ['icon' => 'dollar-sign', 'title' => '자기개발비', 'description' => '연간 200만원 교육비 지원', 'highlight' => true],
            ['icon' => 'coffee', 'title' => '수평적 문화', 'description' => '자유로운 의견 교환과 소통', 'highlight' => true],
            ['icon' => 'plane', 'title' => '워크샵', 'description' => '연 1회 전사 워크샵', 'highlight' => false],
            ['icon' => 'graduation-cap', 'title' => '교육 지원', 'description' => '사내외 교육 프로그램', 'highlight' => false],
            ['icon' => 'heart', 'title' => '건강검진', 'description' => '연 1회 종합 건강검진', 'highlight' => false],
        ];

        $detailedBenefits = [
            '4대 보험 (국민연금, 건강보험, 고용보험, 산재보험)',
            '연차휴가 (법정 연차 + 리프레시 휴가)',
            '경조사 지원 (경조금 및 경조 휴가)',
            '명절 상여 (설날, 추석)',
            '자녀 학자금 지원',
            '우수사원 포상',
            '사내 동호회 지원',
            '주차 지원',
            '중식 제공 또는 식대 지원',
            '음료/간식 제공',
            '최신 업무 장비 제공',
            '유연 근무제 (직무별 상이)',
        ];

        return view('pages.recruit', compact('talents', 'jobOpenings', 'mainBenefits', 'detailedBenefits'));
    }

    public function news(Request $request)
    {
        $allNews = collect([
            ['id' => 1, 'category' => '보도자료', 'title' => '파인원커뮤니케이션즈, 차세대 IoT 플랫폼 개발 성공', 'excerpt' => '스마트홈 시장을 선도할 새로운 플랫폼 기술을 공개했습니다. AI 기반 디바이스 제어와 에너지 관리 기능을 통합한 혁신적인 솔루션입니다.', 'date' => '2026.01.15'],
            ['id' => 2, 'category' => '수상', 'title' => '2025 대한민국 ICT 대상 수상', 'excerpt' => 'IPTV 셋탑박스 분야에서 우수한 기술력을 인정받아 대한민국 ICT 대상을 수상했습니다.', 'date' => '2026.01.10'],
            ['id' => 3, 'category' => '행사', 'title' => 'CES 2026 참가 및 신제품 전시', 'excerpt' => '세계 최대 전자제품 박람회 CES 2026에 참가하여 차세대 스마트홈 솔루션을 선보였습니다.', 'date' => '2026.01.05'],
            ['id' => 4, 'category' => '기술', 'title' => 'AI 음성인식 엔진 고도화 완료', 'excerpt' => '한국어 특화 AI 음성인식 엔진의 정확도를 95%까지 향상시키는 데 성공했습니다.', 'date' => '2025.12.20'],
            ['id' => 5, 'category' => '보도자료', 'title' => 'Ezthing 플랫폼 사용자 10만명 돌파', 'excerpt' => '출시 1년 만에 스마트홈 통합 플랫폼 Ezthing의 누적 사용자가 10만명을 돌파했습니다.', 'date' => '2025.12.15'],
            ['id' => 6, 'category' => '채용', 'title' => '2026년 상반기 신입/경력 공채 시작', 'excerpt' => '개발, 영업, 기획 등 다양한 직군에서 우수한 인재를 모집합니다.', 'date' => '2025.12.10'],
            ['id' => 7, 'category' => '행사', 'title' => '스마트홈 세미나 개최', 'excerpt' => 'IoT 기술과 스마트홈 트렌드를 주제로 업계 관계자 대상 세미나를 성공적으로 개최했습니다.', 'date' => '2025.12.01'],
            ['id' => 8, 'category' => '기술', 'title' => '5G 기반 실시간 스트리밍 기술 특허 등록', 'excerpt' => '초저지연 5G 스트리밍 기술로 국내 특허를 등록했습니다.', 'date' => '2025.11.25'],
            ['id' => 9, 'category' => '보도자료', 'title' => 'SK텔레콤과 스마트홈 서비스 MOU 체결', 'excerpt' => 'SK텔레콤과 전략적 제휴를 통해 스마트홈 서비스 확대에 나섭니다.', 'date' => '2025.11.20'],
            ['id' => 10, 'category' => '수상', 'title' => '우수 소프트웨어 기업 선정', 'excerpt' => '과학기술정보통신부로부터 우수 소프트웨어 기업으로 선정되었습니다.', 'date' => '2025.11.15'],
            ['id' => 11, 'category' => '기술', 'title' => '차세대 셋탑박스 OS 개발 착수', 'excerpt' => '더욱 빠르고 안정적인 차세대 셋탑박스 운영체제 개발에 착수했습니다.', 'date' => '2025.11.10'],
            ['id' => 12, 'category' => '행사', 'title' => '전사 워크샵 개최', 'excerpt' => '제주도에서 2박 3일간 전사 워크샵을 진행하며 팀워크를 강화했습니다.', 'date' => '2025.11.05'],
            ['id' => 13, 'category' => '보도자료', 'title' => '해외 시장 진출 본격화', 'excerpt' => '동남아시아 시장을 시작으로 글로벌 사업 확장에 나섭니다.', 'date' => '2025.10.30'],
            ['id' => 14, 'category' => '기술', 'title' => '블록체인 기반 IoT 보안 시스템 개발', 'excerpt' => '블록체인 기술을 활용한 IoT 디바이스 보안 솔루션을 개발했습니다.', 'date' => '2025.10.25'],
            ['id' => 15, 'category' => '채용', 'title' => '신입 개발자 온보딩 프로그램 운영', 'excerpt' => '체계적인 교육과 멘토링으로 신입 개발자의 빠른 적응을 돕고 있습니다.', 'date' => '2025.10.20'],
        ]);

        $search = $request->input('search', '');
        $category = $request->input('category', '전체');
        $categories = ['전체', '보도자료', '수상', '행사', '기술', '채용'];

        $filtered = $allNews->filter(function ($news) use ($search, $category) {
            $matchCategory = $category === '전체' || $news['category'] === $category;
            $matchSearch = $search === '' ||
                mb_stripos($news['title'], $search) !== false ||
                mb_stripos($news['excerpt'], $search) !== false;
            return $matchCategory && $matchSearch;
        })->values();

        $perPage = 9;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $paginatedNews = new LengthAwarePaginator(
            $filtered->forPage($currentPage, $perPage),
            $filtered->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('pages.news', compact('paginatedNews', 'search', 'category', 'categories'));
    }
}
