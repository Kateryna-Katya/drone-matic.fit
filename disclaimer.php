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
            <span class="section-tag">Risk Disclosure</span>
            <div class="legal-header">
                <div class="warning-circle">
                    <i data-lucide="alert-triangle"></i>
                </div>
                <h1>Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block intro-block">
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                        опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они не являются и не должны
                        рассматриваться как персональная инвестиционная рекомендация,
                        профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                        каких-либо финансовых операций в юрисдикции Великобритании или других стран.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>Отсутствие гарантий</h2>
                    <p>
                        Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                        относительно точности, полноты или актуальности представленной в блоге
                        информации. Любые упоминания потенциального карьерного роста, программ пассивного дохода или прошлых
                        результатов наших клиентов не гарантируют аналогичных результатов в будущем.
                        Ваш успех зависит от множества факторов, включая рыночную конъюнктуру и индивидуальные усилия.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>Ограничение ответственности</h2>
                    <p>
                        Администрация сайта <strong><?= $fullDomain ?></strong>,
                        его владельцы и аффилированные лица не несут ответственности за
                        любые прямые или косвенные убытки, решения или действия,
                        предпринятые вами на основе информации с этого ресурса. Вся
                        ответственность за использование наших методологий и инструментов 
                        лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-block risk-highlight">
                    <div class="risk-highlight__inner">
                        <i data-lucide="shield-alert"></i>
                        <p>
                            <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                            изменение финансового статуса или инвестиции в новые проекты, сопряжена с
                            определенным уровнем риска. Мы настоятельно рекомендуем провести
                            собственное исследование и проконсультироваться с квалифицированным
                            независимым специалистом перед принятием решений.
                        </p>
                    </div>
                </div>

                <div class="legal-block agreement-box">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать
                        ресурс <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                        действуете по собственной воле, полностью осознаете и принимаете все
                        упомянутые риски и условия данного дисклеймера.
                    </p>
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