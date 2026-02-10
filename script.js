/**
 * PROJECT: DRONE-MATIC.FIT (2026)
 * ROLE: Master Script for Career Upgrade Platform
 * LIBRARIES: GSAP, ScrollTrigger, Lenis, SplitType, Lucide
 */

// 0. Регистрация плагинов GSAP
gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. ИНИЦИАЛИЗАЦИЯ ИКОНОК (LUCIDE)
    const initIcons = () => lucide.createIcons();
    initIcons();

    // 2. ПЛАВНЫЙ СКРОЛЛ (LENIS)
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 3. ХЕДЕР И МОБИЛЬНОЕ МЕНЮ
    const burger = document.querySelector('.burger');
    const mobMenu = document.getElementById('mobile-menu');
    const mobLinks = document.querySelectorAll('.mobile-nav__link');
    const header = document.querySelector('.header');

    const toggleMenu = () => {
        burger.classList.toggle('is-active');
        mobMenu.classList.toggle('is-active');
        document.body.style.overflow = mobMenu.classList.contains('is-active') ? 'hidden' : '';
    };

    const closeMenu = () => {
        burger.classList.remove('is-active');
        mobMenu.classList.remove('is-active');
        document.body.style.overflow = '';
    };

    if (burger) burger.addEventListener('click', toggleMenu);
    mobLinks.forEach(link => link.addEventListener('click', closeMenu));

    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // 4. HERO CANVAS: НЕЙРОННАЯ СЕТЬ (PARTICLES)
    const initHeroCanvas = () => {
        const canvas = document.getElementById('hero-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let particles = [];
        let width, height;
        const mouse = { x: null, y: null, radius: 150 };

        const resize = () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            particles = [];
            const count = (width * height) / 18000;
            for (let i = 0; i < count; i++) {
                particles.push({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    size: Math.random() * 2 + 1,
                    vx: (Math.random() - 0.5) * 0.4,
                    vy: (Math.random() - 0.5) * 0.4
                });
            }
        };

        const animate = () => {
            ctx.clearRect(0, 0, width, height);
            particles.forEach(p => {
                p.x += p.vx; p.y += p.vy;
                if (p.x < 0 || p.x > width) p.vx *= -1;
                if (p.y < 0 || p.y > height) p.vy *= -1;
                if (mouse.x) {
                    let dx = mouse.x - p.x;
                    let dy = mouse.y - p.y;
                    let dist = Math.sqrt(dx*dx + dy*dy);
                    if (dist < mouse.radius) {
                        p.x -= dx * 0.015; p.y -= dy * 0.015;
                    }
                }
                ctx.fillStyle = 'rgba(56, 189, 248, 0.6)';
                ctx.beginPath(); ctx.arc(p.x, p.y, p.size, 0, Math.PI*2); ctx.fill();
            });

            for (let i = 0; i < particles.length; i++) {
                for (let j = i; j < particles.length; j++) {
                    let dx = particles[i].x - particles[j].x;
                    let dy = particles[i].y - particles[j].y;
                    let dist = dx*dx + dy*dy;
                    if (dist < 15000) {
                        ctx.strokeStyle = `rgba(56, 189, 248, ${0.15 * (1 - dist/15000)})`;
                        ctx.beginPath(); ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y); ctx.stroke();
                    }
                }
            }
            requestAnimationFrame(animate);
        };
        window.addEventListener('resize', resize);
        window.addEventListener('mousemove', e => { mouse.x = e.x; mouse.y = e.y; });
        resize(); animate();
    };
    initHeroCanvas();

    // 5. HERO TEXT REVEAL (БЕЗ РАЗРЫВА СЛОВ)
    const title = new SplitType('.hero__title', { types: 'words, chars' });
    gsap.from(title.chars, {
        opacity: 0,
        y: 40,
        rotateX: -90,
        stagger: 0.02,
        duration: 1,
        ease: "power4.out",
        delay: 0.3
    });

    // 6. ТАЙМЛАЙН (ПОДСВЕТКА ПРИ СКРОЛЛЕ)
    gsap.to(".timeline__progress", {
        height: "100%",
        ease: "none",
        scrollTrigger: {
            trigger: ".timeline",
            start: "top 60%",
            end: "bottom 80%",
            scrub: 1
        }
    });

    const timelineItems = document.querySelectorAll(".timeline__item");
    timelineItems.forEach((item) => {
        gsap.to(item, {
            scrollTrigger: {
                trigger: item,
                start: "top 70%",
                end: "top 20%",
                toggleClass: "is-active",
            }
        });
    });

    // 7. КЕЙСЫ (STACKING CARDS)
    const caseCards = gsap.utils.toArray(".case-card");
    caseCards.forEach((card, i) => {
        if (i !== caseCards.length - 1) {
            gsap.to(card.querySelector(".case-card__inner"), {
                scale: 0.9,
                opacity: 0.5,
                scrollTrigger: {
                    trigger: caseCards[i + 1],
                    start: "top 90%",
                    end: "top 20%",
                    scrub: true,
                }
            });
        }
    });

    // 8. FAQ (ИНТЕРАКТИВНЫЙ АККОРДЕОН)
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
        const headerBtn = item.querySelector('.accordion-header');
        const body = item.querySelector('.accordion-body');
        
        headerBtn.addEventListener('click', () => {
            const isActive = item.classList.contains('is-active');
            
            // Закрыть другие активные
            accordionItems.forEach(other => {
                if (other !== item && other.classList.contains('is-active')) {
                    other.classList.remove('is-active');
                    gsap.to(other.querySelector('.accordion-body'), { height: 0, duration: 0.4 });
                }
            });

            item.classList.toggle('is-active');
            if (item.classList.contains('is-active')) {
                gsap.set(body, { height: "auto" });
                const h = body.offsetHeight;
                gsap.fromTo(body, { height: 0 }, { height: h, duration: 0.5, ease: "power2.out" });
            } else {
                gsap.to(body, { height: 0, duration: 0.4, ease: "power2.inOut" });
            }
        });
    });

    // 9. ВАЛИДАЦИЯ ТЕЛЕФОНА И ФОРМА
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            // Оставляем только цифры и + в начале
            let val = e.target.value.replace(/[^\d+]/g, '');
            if (val.indexOf('+') > 0) val = val.substring(0, val.indexOf('+')) + val.substring(val.indexOf('+') + 1);
            e.target.value = val;
        });
    }

    const contactForm = document.getElementById('main-form');
    if (contactForm) {
        let captchaResult;
        const captchaLabel = document.getElementById('captcha-question');
        
        const setCaptcha = () => {
            const n1 = Math.floor(Math.random() * 5) + 3;
            const n2 = Math.floor(Math.random() * 5) + 1;
            captchaResult = n1 + n2;
            captchaLabel.innerText = `${n1} + ${n2} = ?`;
        };
        setCaptcha();

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAns = parseInt(document.getElementById('captcha').value);
            
            if (userAns !== captchaResult) {
                alert('Неверный ответ капчи!');
                setCaptcha();
                return;
            }

            const btn = contactForm.querySelector('button');
            const originalBtnHtml = btn.innerHTML;
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            // Имитация отправки
            setTimeout(() => {
                document.getElementById('form-success').classList.add('active');
                contactForm.reset();
                setCaptcha();
                setTimeout(() => {
                    document.getElementById('form-success').classList.remove('active');
                    btn.disabled = false;
                    btn.innerHTML = originalBtnHtml;
                    initIcons();
                }, 5000);
            }, 1500);
        });
    }

    // 10. COOKIE POPUP
    const cookiePopup = document.getElementById('cookie-popup');
    if (cookiePopup && !localStorage.getItem('cookieAccepted')) {
        setTimeout(() => cookiePopup.classList.add('is-active'), 2000);
        document.getElementById('cookie-accept').addEventListener('click', () => {
            localStorage.setItem('cookieAccepted', 'true');
            cookiePopup.classList.remove('is-active');
        });
    }

    // 11. ГЛОБАЛЬНАЯ ПОДГРУЗКА ЭЛЕМЕНТОВ (REVEAL)
    gsap.utils.toArray('.bento-item, .section-title, .about-card').forEach(el => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 90%",
                toggleActions: "play none none none"
            },
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: "power2.out"
        });
    });
});