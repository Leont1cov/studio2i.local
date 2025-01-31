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
                <a href="#" class="header__logo logo" title="Домой">
                    <x-icons.logo class="logo__image" />
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

                        <li class="header__menu-item">
                            <a
                                href="tel:+79310093772"
                                class="header__menu-link header__button button__transparent"
                            >
                                <x-icons.phone />
                                +7 931 009-37-72
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <div class="main__inner">
                <div class="main__hero">
                    <h1 class="main__title">
                        Разработка веб-сервисов
                        <br />
                        и сайтов c 2013 года
                    </h1>

                    <a
                        href="tel:+79310093772"
                        class="main__button button__painted"
                    >
                        <svg
                            width="10"
                            height="16"
                            viewBox="0 0 10 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M8.5 0H1.5C0.65625 0 0 0.6875 0 1.5V14.5C0 15.3438 0.65625 16 1.5 16H8.5C9.3125 16 10 15.3438 10 14.5V1.5C10 0.6875 9.3125 0 8.5 0ZM5 15C4.4375 15 4 14.5625 4 14C4 13.4688 4.4375 13 5 13C5.53125 13 6 13.4688 6 14C6 14.5625 5.53125 15 5 15ZM8.5 11.625C8.5 11.8438 8.3125 12 8.125 12H1.875C1.65625 12 1.5 11.8438 1.5 11.625V1.875C1.5 1.6875 1.65625 1.5 1.875 1.5H8.125C8.3125 1.5 8.5 1.6875 8.5 1.875V11.625Z"
                                fill="#222222"
                            />
                        </svg>
                        +7 931 009-37-72
                    </a>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="footer__top">
                <div class="footer__contacts footer__sales">
                    <h6 class="footer__title">Отдел продаж</h6>
                    <a href="tel:+79310093772" class="footer__number">
                        +7 931 009-37-72
                    </a>
                    <div class="social">
                        <a href="#" class="telegram network__container">
                            <span class="network__container-inside">
                                <x-icons.telegram />
                                <span class="social__text">Telegram</span>
                            </span>
                        </a>
                        <a href="#" class="whatsapp network__container">
                            <span class="network__container-inside">
                                <x-icons.whatsApp />

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
                        <a href="#" class="telegram network__container">
                            <span class="network__container-inside">
                                <x-icons.telegram />

                                <span class="social__text">Telegram</span>
                            </span>
                        </a>
                        <a href="#" class="whatsapp network__container">
                            <span class="network__container-inside">
                                <x-icons.whatsApp />
                                <span class="social__text">Whatsapp</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="footer__contacts footer__work">
                    <a href="mailto: mail@studio2i.ru">
                        <p class="footer__mail">mail@studio2i.ru</p>
                    </a>
                    <p class="footer__time">
                        По будням с 10:00 до 19:00 (по Москве)
                    </p>
                </div>
            </div>
        </footer>

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
    </body>
</html>
