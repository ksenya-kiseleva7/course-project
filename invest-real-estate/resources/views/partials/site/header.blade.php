<header>
    <div class="header">
        <div class="container header__container">
            <a href="/" class="header__logo">
                <img src="{{ 'svg/logo.svg' }}" alt="logo">
            </a>
            <div class="header__content">
                <div class="header__top">
                    <div class="header__row">
                        <div class="burger burger--mobile">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <a href="/" class="header__logo header__logo--mobile">
                            <img src="{{ 'svg/logo.svg' }}" alt="logo">
                        </a>
                    </div>
                    <div class="header__info">
                        <a data-fancybox data-src="#time-modal" class="header__item">
{{--                            <img src="{{ 'svg/time-MP.svg' }}" alt="time">--}}
                            <span>Время работы</span>
                        </a>
                        <a data-fancybox data-src="#address-modal" class="header__item">
{{--                            <img src="{{ 'svg/location-MP.svg' }}" alt="location">--}}
                            <span>Наш адрес</span>
                        </a>
                        <a href="mailto:info@test.ru" class="header__item">
{{--                            <img src="{{ 'svg/mail-MP.svg' }}" alt="mail">--}}
                            <span>info@test.ru</span>
                        </a>
                        <a href="tel:+7900800XXXX" class="header__item tel-2">
                            <span>+7 900 800-XX-XX</span>
                        </a>
                        <div class="header__row">
                            <div class="header__item header__item--mobile header-search__open">
                                <img src="{{ 'svg/search.svg' }}" alt="search">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <nav class="menu">

                        <a href="/services" class="header__item">Услуги</a>
                        <a href="/about" class="header__item">О компании</a>
                        <a href="/projects" class="header__item">Наши работы</a>
                        <a href="/delivery" class="header__item">О доставке</a>
                        <a href="/news" class="header__item">Новости</a>
                        <a href="/contacts" class="header__item">Контакты</a>
                        <div class="header__item header-search__open">
                            <img src="{{ 'svg/search.svg' }}" alt="search">
                            <div class="menu__item-wrap">
                                Поиск
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- перекидывать на страницу поиска после бека -->
                <div class="header__search">
                    <form class="search__wrap" action="" method="get">
                        <button class="search__button" type="submit" class="search-submit" id="search-submit">
                            <img src="{{ 'svg/search.svg' }}" alt="search">
                        </button>
                        <input class="input__box input__box--search" type="search" class="search" id="search" name="q"
                               placeholder="Поиск" value="" autocomplete="off">
                        <img class="search__close" src="{{ 'svg/close.svg' }}" alt="close">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="drop-menu">
            <div class="drop-menu__left pt-40 pb-60">
                <a href="/catalog" class="drop-menu__item active" data-id='1'>Первый уровень каталога</a>
                <a href="/catalog" class="drop-menu__item" data-id='2'>Первый уровень каталога</a>
                <a href="/catalog" class="drop-menu__item" data-id='3'>Первый уровень каталога</a>
            </div>
            <div class="drop-menu__right pt-40 pb-60">
                <div class="drop-menu__list active" data-id="1">
                    <a href="/catalog" class="drop-menu__link">Второй уровень 1</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 1</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 1</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 1</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 1</a>
                </div>
                <div class="drop-menu__list" data-id="2">
                    <a href="/catalog" class="drop-menu__link">Второй уровень 2</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 2</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 2</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 2</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 2</a>
                </div>
                <div class="drop-menu__list" data-id="3">
                    <a href="/catalog" class="drop-menu__link">Второй уровень 3</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 3</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 3</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 3</a>
                    <a href="/catalog" class="drop-menu__link">Второй уровень 3</a>
                </div>
            </div>
        </div>
    </div>

    <nav class="nav-mobile">
        <div class="nav-mobile__search">
            <form class="search__wrap-mobile" action="" method="get">
                <button class="search__button" type="submit" class="search-submit" id="search-submit">
                    <img src="{{ 'svg/search.svg' }}" alt="search">
                </button>
                <input class="input__box input__box--search" type="search" class="search" id="search" name="q"
                       placeholder="Поиск" value="" autocomplete="off">
            </form>
        </div>

        <ul class="nav-mobile__menu">
            <li class="nav-expand">
                {{--                <div class="nav-expand__link nav-expand__link--first h5 mb-20">--}}
                {{--                    <a href="/catalog">Каталог</a>--}}
                {{--                    <img class="nav-expand__next" src="{{ 'svg/arrow.svg' }}" alt="arrow">--}}
                {{--                </div>--}}
                <ul class="nav-expand__content">
                    <li class="nav-expand__back h6 mb-20">
                        <img src="{{ 'svg/arrow.svg' }}" alt="arrow">
                        <span>Назад</span>
                    </li>
                    <li class="nav-expand">
                    <li class="nav-expand__link nav-expand__link--second h5 mb-20">
                        <a href="/catalog">Название категории 1</a>
                        <img class="nav-expand__next" src="{{ 'svg/arrow.svg' }}" alt="arrow">
                    </li>
                    <ul class="nav-expand__content">
                        <li class="nav-expand__back h6 mb-20">
                            <img src="{{ 'svg/arrow.svg' }}" alt="arrow">
                            <span>Назад</span>
                        </li>
                        <li class="h5 mb-20"><a href="/catalog">Второй уровень 1</a></li>
                        <li class="h5 mb-20"><a href="/catalog">Второй уровень 1</a></li>
                        <li class="h5 mb-20"><a href="/catalog">Второй уровень 1</a></li>
                    </ul>
            </li>
            <li class="nav-expand">
            <li class="nav-expand__link nav-expand__link--second h5 mb-20">
                <a href="/catalog">Название категории 2</a>
                <img class="nav-expand__next" src="{{ 'svg/arrow.svg' }}" alt="arrow">
            </li>
            <ul class="nav-expand__content">
                <li class="nav-expand__back h6 mb-20">
                    <img src="{{ 'svg/arrow.svg' }}" alt="arrow">
                    <span>Назад</span>
                </li>
                <li class="mb-20 h5"><a href="/catalog">Второй уровень 2</a></li>
                <li class="h5 mb-20"><a href="/catalog">Второй уровень 2</a></li>
            </ul>
            </li>
        </ul>
        </li>
        <li class="h5 mb-20"><a href="/services">Услуги</a></li>
        <li class="h5 mb-20"><a href="/about">О компании</a></li>
        <li class="h5 mb-20"><a href="/projects">Наши работы</a></li>
        <li class="h5 mb-20"><a href="/delivery">О доставке</a></li>
        <li class="h5 mb-20"><a href="/news">Новости</a></li>
        {{--            <li class="h5 mb-20"><a href="/stocks">Акции</a></li>--}}
        {{--            <li class="h5 mb-20"><a href="/reviews">Отзывы</a></li>--}}
        <li class="h5 mb-20"><a href="/contacts">Контакты</a></li>
        </ul>
        <div class="nav-mobile__bottom h5">
            <div class="nav-mobile__contacts">
                <img src="{{ 'svg/time-MP.svg' }}" alt="time">
                <a data-fancybox data-src="#modal-time">Время работы</a>
            </div>
            <div class="nav-mobile__contacts">
                <img src="{{ 'svg/location-MP.svg' }}" alt="location">
                <a data-fancybox data-src="#modal-region">Наш адрес</a>
            </div>
            <div class="nav-mobile__contacts">
                <img src="{{ 'svg/mail-MP.svg' }}" alt="mail">
                <a class="link--underline" href="mailto:info@test.ru" target="_blank">info@test.ru</a>
            </div>
            <div class="nav-mobile__contacts">
                <a href="tel:+7900800XXXX">+7 900 800-XX-XX</a>
            </div>
            <div class="mb-10">Мы в соц сетях:</div>
            <div class="nav-mobile__soclink mb-20">
                <a href="" target="_blank"><img src="{{ 'svg/vk-MP.svg' }}" alt="vk"></a>
                <a href="" target="_blank"><img src="{{ 'svg/tg-MP.svg' }}" alt="ok"></a>
            </div>

        </div>
    </nav>
</header>
