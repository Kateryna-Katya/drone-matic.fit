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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent">
                    <p class="lead-text">
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на британских стандартах защиты прав потребителей и качестве наших консалтинговых услуг.
                    </p>
                </div>

                <h2>Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <i data-lucide="file-warning"></i>
                        <h3>Несоответствие программе</h3>
                        <p>Если содержание консультаций или материалов существенно отличается от заявленного на платформе <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <i data-lucide="server-off"></i>
                        <h3>Технические сбои</h3>
                        <p>Критические ошибки в доступе к <strong><?= $fullDomain ?></strong>, которые не были устранены нашей поддержкой в течение 72 часов.</p>
                    </div>
                    <div class="refund-card">
                        <i data-lucide="refresh-cw"></i>
                        <h3>Период охлаждения</h3>
                        <p>Вы имеете право на отказ в течение 14 дней (Cooling-off period) при условии, что основные сессии еще не были проведены.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2>Процедура запроса</h2>
                    <p>Чтобы инициировать возврат на <strong><?= $domainTitle ?></strong>, выполните следующие действия:</p>
                    <div class="steps-path">
                        <div class="step-item">
                            <span class="step-num">01</span>
                            <p>Письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></p>
                        </div>
                        <div class="step-item">
                            <span class="step-num">02</span>
                            <p>Укажите тему: «Refund Request / <?= $domainTitle ?>»</p>
                        </div>
                        <div class="step-item">
                            <span class="step-num">03</span>
                            <p>Приложите данные об оплате и причину обращения</p>
                        </div>
                    </div>
                </div>

                <h2>Сроки и способ выплаты</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Средства возвращаются на ту же карту или счет, с которых была произведена оплата. 
                    Фактический срок зачисления зависит от регламента вашего банка в <strong>Великобритании</strong> или другой стране вашего пребывания.
                </p>

                <div class="warning-box">
                    <h2>Ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента транзакции.</li>
                        <li>Услуга по индивидуальному карьерному аудиту уже была полностью оказана.</li>
                        <li>Технические проблемы вызваны оборудованием или провайдером пользователя.</li>
                        <li>Нарушение правил использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <div class="contact-card-mini">
                        <h2>Остались вопросы?</h2>
                        <p>Свяжитесь с финансовым отделом <strong><?= $domainTitle ?></strong>:</p>
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">
                            <i data-lucide="mail"></i>
                            hello@<?= $fullDomain ?>
                        </a>
                    </div>
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