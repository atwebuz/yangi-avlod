<div class="header js-header">
    <div class="header-fixed">
        <div class="header-container">
            <div class="header-main">
                <div class="header-main-container container">
                    <div class="mob-nav-toggle js-btn-toggle" data-ajax="true"
                        data-ajax-src="/include/ajax/ajax-mob-menu.php" data-ajax-event="click"
                        data-ajax-target=".mob-menu-container" data-ajax-reinit="nav" data-target=".mob-menu"
                        role="button" aria-label="открыть меню">
                        <svg class="icon" width="20" height="20">
                            <use xlink:href="{{ asset('front-assets/local/templates/html/images/sprite.svg#menu') }}" />
                        </svg>
                    </div>
                    <style>
                        #logo_custom {
                            width: 100px;
                            margin: 0 20px 10px;
                        }
                    </style>
                    <img src="{{ asset('front-assets/Logo.png') }}" class="logo-img logo-img--compact  logo--header"
                        id="logo_custom" alt="ddd" />

                    <div class="header-main-nav">
                        <div class="header-nav">
                            <ul class="nav-list 22">
                                <li class="nav-item has-nav">
                                    <a class="nav-link" href="{{ route('frontend.about') }}" aria-label="О парке">
                                        О нас
                                    </a>

                                </li>
                                <li class="nav-item has-nav">
                                    <a class="nav-link" href="#!" aria-label="Инвесторам">
                                        Инвесторам
                                        <span class="nav-toggle js-nav-toggle"></span>
                                    </a>
                                    <div class="js-nav nav-lvl2">
                                        <ul class="nav-lvl2-list">
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link"
                                                    href="{{ route('frontend.investoram_premushastva') }}">Преимущества
                                                    промышленной зоны
                                                </a>
                                            </li>
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link"
                                                    href="{{ route('frontend.investoram_registratsiya_rezidentov') }}">Регистрация
                                                    резидентов</a>
                                            </li>
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link"
                                                    href="{{ route('frontend.investoram_nalogovie_preferensi') }}">Налоговые
                                                    преференции </a>
                                            </li>
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link"
                                                    href="{{ route('frontend.investoram_podderjka_eksportov') }}">Поддержка
                                                    экспортёров
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="rezidenty/index.html" aria-label="Резиденты">
                                        Резиденты
                                    </a>
                                </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.normativnie_documenti') }}"
                                        aria-label="Правовое регулирование">
                                        Правовое регулирование
                                    </a>
                                </li>
                                <li class="nav-item has-nav">
                                    <a class="nav-link" href="{{route('frontend.contact')}}" aria-label="Контакты">
                                        Контакты
                                        {{-- <span class="nav-toggle js-nav-toggle"></span> --}}
                                    </a>
                                    {{-- <div class="js-nav nav-lvl2">
                                        <ul class="nav-lvl2-list">
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link" href="{{route('frontend.contact')}}index.html">Контакты</a>
                                            </li>
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link"
                                                    href="{{route('frontend.contact')}}vakansii/index.html">Вакансии</a>
                                            </li>
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link"
                                                    href="{{route('frontend.contact')}}obratnaya-svyaz/index.html">Обратная связь</a>
                                            </li>
                                            <li class="nav-lvl2-item">
                                                <a class="nav-lvl2-link" href="{{route('frontend.contact')}}kak-dobratsya/index.html">Как
                                                    добраться</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-main-right">
                        <div class="header-control-list">
                            <div class="header-control header-control--become">
                                {{-- <a class="btn btn--dark header-control-btn" href="https://uzbekistan360.uz/"
                                    target="_blank" aria-label="3D ТУР">3D ТУР</a> --}}
                                <a class="btn btn--dark header-control-btn"
                                    href="investoram/registratsiya-rezidentov/index.html" aria-label="Стать резидентом"
                                    target="_blank">Стать резидентом</a>
                            </div>
                            <br />
                            <div class="header-control header-control--search">
                                <button class="header-control-link js-btn-toggle" data-target=".header-search"
                                    aria-label="Открыть поиск" role="button">
                                    <svg class="icon" width="19" height="19">
                                        <use
                                            xlink:href="{{ asset('front-assets/local/templates/html/images/sprite.svg#search') }}" />
                                    </svg>
                                </button>
                                <div class="header-search">
                                    <div class="header-search-container container">
                                        <form class="header-search-form" {{-- action="https://industrialpark.by/search/" --}} method="get"
                                            onsubmit="var str=document.getElementById('s-inp'); if (!str.value || str.value == str.title) return false;">
                                            <input class="header-search-input form-control" id="s-inp"
                                                name="q" placeholder="Найти..." />
                                            <button class="header-search-submit">
                                                <svg class="icon" width="19" height="19" type="submit">
                                                    <use xlink:href="local/templates/html/images/sprite.svg#search" />
                                                </svg>
                                            </button>
                                            <button class="header-search-close js-btn-toggle"
                                                data-target=".header-search" aria-label="Закрыть поиск"
                                                type="button">
                                                <svg class="icon" width="19" height="19">
                                                    <use xlink:href="local/templates/html/images/sprite.svg#cross" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mob-menu">
    <div class="mob-menu-container">
        <div class="mob-menu-header">
            <div class="mob-menu-title">Меню</div>
            <div class="mob-menu-close js-btn-toggle" data-target=".mob-menu" role="button"
                aria-label="закрыть меню">
                <svg class="icon" width="20" height="20">
                    <use xlink:href="/local/templates/html/images/sprite.svg#cross"></use>
                </svg>
            </div>
        </div>
        <div class="mob-menu-body">
            <div class="mob-menu-nav">
                <div class="js-nav nav">

                    <ul class="nav-list 22">
                        <li class="nav-item   has-nav">

                            <a class="nav-link " href="{{ route('frontend.about') }}" aria-label="О нас">
                                О нас
                            </a>

                        </li>
                        <li class="nav-item   has-nav">

                            <a class="nav-link " href="#!" aria-label="Инвесторам">
                                Инвесторам <span class="nav-toggle js-nav-toggle"></span>
                            </a>
                            <div class="js-nav nav-lvl2 ">
                                <ul class="nav-lvl2-list">
                                
                                    <li class="nav-lvl2-item "><a class="nav-lvl2-link {{ request()->routeIs('frontend.investoram_premushastva') ? 'active' : '' }}"
                                            href="{{ route('frontend.investoram_premushastva') }}">Преимущества
                                            промышленной зоны</a></li>
                                    <li class="nav-lvl2-item "><a class="nav-lvl2-link {{ request()->routeIs('frontend.investoram_registratsiya_rezidentov') ? 'active' : '' }}"
                                            href="{{ route('frontend.investoram_registratsiya_rezidentov') }}">Регистрация
                                            резидентов</a></li>
                                    <li class="nav-lvl2-item "><a class="nav-lvl2-link {{ request()->routeIs('frontend.investoram_nalogovie_preferensi') ? 'active' : '' }}"
                                            href="{{ route('frontend.investoram_nalogovie_preferensi') }}">Налоговые
                                            преференции</a></li>
                                    <li class="nav-lvl2-item "><a class="nav-lvl2-link {{ request()->routeIs('frontend.investoram_podderjka_eksportov') ? 'active' : '' }}"
                                            href="{{ route('frontend.investoram_podderjka_eksportov') }}">Поддержка
                                            экспортёров</a></li>
                                  
                                </ul>
                            </div>
                        </li>
            
                 
                        <li class="nav-item   ">

                            <a class="nav-link " href="/normativnye-dokumenty/" aria-label="Правовое регулирование">
                                Правовое регулирование </a>
                        </li>
                        <li class="nav-item   has-nav">

                            <a class="nav-link " href="{{route('frontend.contact')}}" aria-label="Контакты">
                                Контакты 
                            </a>
                           
                        </li>
                    </ul>

                </div>
            </div>
            <div class="mob-menu-contact">
                <div class="mob-menu-contact-nav footer-nav active">
                    <!--Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/components-template/nav/script.min.js");-->
                    <div class="js-nav nav">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a class="nav-link" href="tel:+998909616226" aria-label="+998 90 961 62 26"><span
                                        class="nav-item-name">+998 90 961 62 26</span>
                                </a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="yangiavlodzone@gmail.com"
                                    aria-label="yangiavlodzone@gmail.com"><span
                                        class="nav-item-name">yangiavlodzone@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mob-menu-social-nav">
                    <div class="mob-menu-social-item">
                        <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/social/style.css");-->
                        <div class="social">
                            <div class="social-title">Компания по развитию:</div>
                            <div class="social-list">
                                <a class="social-item" target="_blank"
                                    href="https://www.facebook.com/profile.php?id=61561858030826"
                                    aria-label="vkontakte">
                                    <svg class="icon" style="width: 30px; height: 30px">
                                        <use xlink:href="{{asset('front-assets/local/templates/html/images/sprite.svg#fb')}}" />
                                    </svg></a>
                                <a class="social-item" href="https://www.instagram.com/yangiavlodzone/"
                                    aria-label="odnoklasniki">
                                    <svg class="icon" style="width: 30px; height: 30px">
                                        <use xlink:href="{{asset('front-assets/local/templates/html/images/sprite.svg#ig')}}" />
                                    </svg></a>
                                <a class="social-item" href="https://t.me/yourtelegramchannel"
                                    aria-label="telegram"
                                    style="
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 30px;
                                    height: 30px;
                                    background-color: #0088cc;
                                    border-radius: 50%;
                                    text-align: center;
                                ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="white">
                                        <path
                                            d="M12 0C5.372 0 0 5.372 0 12s5.372 12 12 12 12-5.372 12-12S18.628 0 12 0zm5.493 8.58l-1.555 7.342c-.118.526-.426.655-.864.418l-2.39-1.764-1.153 1.111c-.127.127-.235.234-.481.234l.173-2.466 4.487-4.05c.196-.173-.042-.27-.303-.097l-5.545 3.492-2.391-.746c-.52-.164-.532-.52.108-.765l9.34-3.607c.432-.164.81.097.673.765z" />
                                    </svg>
                                </a>

                                <a class="social-item" target="_blank" href="https://x.com/Yangiavlodzone"
                                    aria-label="twitter"
                                    style="
                                display: inline-flex;
                                align-items: center;
                                justify-content: center;
                                width: 30px;
                                    height: 30px;
                                    padding: 8px;
                                background-color: #0088cc; /* Twitter Blue */
                                border-radius: 50%;
                                text-align: center;
                                ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="white" style="vertical-align: middle;">
                                        <path
                                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                        </path>
                                    </svg>
                                </a>




                                <a class="social-item" href="https://www.youtube.com/@yangiavlodzone"
                                    aria-label="youtube">
                                    <svg class="icon" style="width: 30px; height: 30px">
                                        <use xlink:href="{{asset('front-assets/local/templates/html/images/sprite.svg#ut')}}" />
                                    </svg>
                                </a>
                        
                            </div>
                        </div>
                    </div>
                
                </div><a class="btn btn--dark btn--large w-100p" href="#" aria-label="Стать резидентом">Стать
                    резидентом</a>
            </div>




        </div>
    </div>
</div>
