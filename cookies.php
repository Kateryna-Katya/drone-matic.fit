<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и инновации</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%2322C55E%22/><path d=%22M30 70 L50 30 L70 70%22 stroke=%22white%22 stroke-width=%228%22 fill=%22none%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/split-type"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#about" class="nav__link">О проекте</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы обеспечить максимально эффективный опыт 
                    вашего карьерного апгрейда, анализировать взаимодействие с нашими инновационными инструментами и гарантировать 
                    стабильную работу сайта, мы используем файлы cookie.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой текстовый файл, который сохраняется на вашем устройстве (компьютере или смартфоне) 
                    при посещении <strong><?= $domainTitle ?></strong>. Это позволяет нашему сайту "запоминать" ваши предпочтения, 
                    выбранные стратегии развития и регион (Великобритания), чтобы вам не приходилось вводить их повторно при каждом визите.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    На сайте <strong><?= $fullDomain ?></strong> используются следующие категории файлов:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Обеспечивают базовую навигацию и доступ к защищенным разделам платформы. Без них сайт не сможет функционировать корректно.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Помогают нам понять, как пользователи взаимодействуют с контентом блога, какие разделы стратегии наиболее популярны. Это позволяет нам оптимизировать наши решения.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Используются для персонализации вашего опыта в рамках консультаций по карьерному росту и запоминания ваших настроек интерфейса.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Позволяют нам показывать релевантные предложения по развитию карьеры, соответствующие вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение безопасности и бесперебойной работы цифровой инфраструктуры.</li>
                    <li>Анализ эффективности наших методологий карьерного роста.</li>
                    <li>Персонализация контента для пользователей в Англии и странах ЕС.</li>
                    <li>Улучшение интерактивных элементов и визуальных эффектов сайта.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы можете управлять файлами cookie через настройки своего браузера (блокировать или удалять их). Обратите внимание, что ограничение cookie может повлиять на доступность некоторых функций платформы <strong><?= $domainTitle ?></strong>, включая интерактивные формы связи.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    Для реализации современных визуальных эффектов и аналитики мы используем проверенные сторонние сервисы, такие как Google Analytics, а также библиотеки анимации (например, GSAP и Lenis). Эти сервисы также могут устанавливать свои файлы cookie в соответствии с их политиками конфиденциальности.
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно использования cookie на <strong><?= $domainTitle ?></strong>, наша экспертная поддержка всегда на связи:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+442058972610">+44 20 5897 2610</a></li>
                        <li><strong>Адрес:</strong> 85 Great Portland Street, London, W1W 7LT, UK</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__description">
                        Передовая цифровая инфраструктура для масштабирования вашего профессионального потенциала. Постройте карьеру, которая работает на вас.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#about">О проекте</a></li>
                        <li><a href="./#strategy">Стратегия</a></li>
                        <li><a href="./#contact">Контакты</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookie Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contact">
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>85 Great Portland Street, London, W1W 7LT, UK</span>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+442058972610">+44 20 5897 2610</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $fullDomain ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu__inner">
            <nav class="mobile-nav">
                <ul class="mobile-nav__list">
                    <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
                    <li><a href="./#about" class="mobile-nav__link">О проекте</a></li>
                    <li><a href="./#strategy" class="mobile-nav__link">Стратегия</a></li>
                    <li><a href="./#cases" class="mobile-nav__link">Кейсы</a></li>
                    <li><a href="./#faq" class="mobile-nav__link">FAQ</a></li>
                    <li><a href="./#contact" class="mobile-nav__link mobile-nav__link--cta">Связаться</a></li>
                </ul>
            </nav>
            <div class="mobile-menu__footer">
                <a href="tel:+442058972610">+44 20 5897 2610</a>
                <p>hello@<?= $fullDomain ?></p>
            </div>
        </div>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon">
                <i data-lucide="cookie"></i>
            </div>
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn btn--primary" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>