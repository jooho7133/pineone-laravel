import './bootstrap';

// ── 1. 스크롤 감지 네비게이션 스타일 ──────────────────────────
const navbar = document.getElementById('navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('glass-strong', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('glass-strong', 'shadow-lg');
        }
    });
}

// ── 2. 모바일 메뉴 토글 ────────────────────────────────────────
window.toggleMobileMenu = function () {
    const menu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    if (!menu) return;

    const isHidden = menu.classList.contains('hidden');
    menu.classList.toggle('hidden', !isHidden);
    menuIcon.classList.toggle('hidden', isHidden);
    closeIcon.classList.toggle('hidden', !isHidden);
};

// ── 3. 카운터 애니메이션 ─────────────────────────────────────
function runCounters() {
    const counters = document.querySelectorAll('.counter[data-target]');
    counters.forEach((counter) => {
        const target = parseInt(counter.getAttribute('data-target'), 10);
        const duration = 2000;
        const steps = 60;
        const stepDuration = duration / steps;
        let step = 0;

        const interval = setInterval(() => {
            step++;
            counter.textContent = Math.floor(target * (step / steps));
            if (step >= steps) {
                counter.textContent = target;
                clearInterval(interval);
            }
        }, stepDuration);
    });
}

// ── 4. ScrollReveal (IntersectionObserver) ─────────────────────
function initScrollReveal() {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
    );

    document.querySelectorAll('.reveal').forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });
}

// ── 5. 초기화 ─────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    initScrollReveal();
    runCounters();
});
