<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>studio2i</title>
        @vite('resources/sass/app.scss')
    </head>
    <body class="body">
        <header class="header">
            <div class="header__inner">
                <a href="#" class="header__logo" title="2I">
                    <img
                        src="{{ Vite::asset('resources/views/components/icons/logo.svg') }}"
                        class="logo"
                        alt=""
                    />
                </a>

                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-link">Услуги</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-link">Портфолио</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-link">Контакты</a>
                        </li>

                        <li class="header__menu-item burger">
                            <a href="#">
                                <span class="_icon-burger">
                                    <span>Меню</span>
                                </span>
                            </a>
                        </li>

                        <li class="header__menu-item">
                            <a
                                href="tel:+79310093772"
                                class="header__menu-link button button_transparent"
                            >
                                <span class="_icon-phone phone"></span>

                                <span class="button_number">
                                    +7 931 009-37-72
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <div class="hero">
                <div class="hero__inner">
                    <h1 class="hero__title">
                        Разработка веб-сервисов и&nbsp;сайтов c&nbsp;2013 года
                    </h1>
                    <a
                        href="tel:+79310093772"
                        class="button hero__button button_painted"
                    >
                        <span class="_icon-phone phone"></span>
                        +7 931 009-37-72
                    </a>
                </div>
            </div>
        </main>

        <footer class="footer">
            <section class="footer__top">
                <div class="footer__contacts footer__sales">
                    <h6 class="footer__title">Отдел продаж</h6>
                    <a href="tel:+79310093772" class="footer__number">
                        +7 931 009-37-72
                    </a>
                    <div class="social">
                        <a
                            href="https://t.me/ia_studio2i"
                            target="_blank"
                            class="network"
                        >
                            <span class="network__container">
                                <span
                                    class="_icon-telegram social__icon"
                                ></span>
                                <span class="social__text">Telegram</span>
                            </span>
                        </a>
                        <a href="#" class="network">
                            <span class="network__container">
                                <span
                                    class="_icon-whatsApp social__icon"
                                ></span>
                                <span class="social__text">Whatsapp</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="footer__contacts footer__service">
                    <h6 class="footer__title">Сервисный отдел</h6>
                    <a href="tel:+79310093774" class="footer__number">
                        +7 931 009-37-74
                    </a>
                    <div class="social">
                        <a
                            href="https://t.me/ae_studio2i"
                            target="_blank"
                            class="network"
                        >
                            <span class="network__container">
                                <span class="_icon-telegram"></span>

                                <span class="social__text">Telegram</span>
                            </span>
                        </a>
                        <a href="#" class="network">
                            <span class="network__container">
                                <span class="_icon-whatsApp"></span>
                                <span class="social__text">Whatsapp</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="footer__contacts footer__work">
                    <a href="mailto:mail@studio2i.ru">
                        <p class="footer__mail">mail@studio2i.ru</p>
                    </a>
                    <p class="footer__time">
                        По будням с 10:00 до 19:00 (по Москве)
                    </p>
                </div>
            </section>
            <section class="footer__bottom">
                <p class="footer__bottom-rights">
                    © 2013-2025 Диджитал-агентство 2И
                </p>
                <p class="footer__bottom-name">
                    ИП Артамонов Иван Сергеевич
                    <br />
                    ОГРНИП 316470400116880
                </p>
            </section>
        </footer>
    </body>
</html>
