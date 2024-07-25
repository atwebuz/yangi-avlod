@extends('frontend.layouts.admin')
@section('frontend_content')
<link href="{{asset('front-assets/bitrix/cache/css/s1/html/page_55917fc0c9a5b182cc97d87b8098da31/page_55917fc0c9a5b182cc97d87b8098da31_v15914.css')}}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
<link href="{{asset('front-assets/bitrix/cache/css/s1/html/template_3ab548adc5a30435c542435b63a25fe1/template_3ab548adc5a30435c542435b63a25fe1_v1df5a.css')}}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
<main class="main">

    <div class="no-critical no-critical--preloader">
        <div class="container" data-sticky-container>
            <div class="row">
                <div class="col-12 col-xl-3">
                    @include('frontend.layouts.__left_aside_investor')
                </div>

                <div class="col-12 col-xl-8">

                    <div class="page-header-section">
                        <div class="breadcrumb">
                            <div class="breadcrumb-container">
                                <ul class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                    <li class="breadcrumb__item " itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem">
                                        <a class="breadcrumb___link" itemprop="item" href="../../index.html"
                                            title="Главная"><span itemprop="name">Главная</span></a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="breadcrumb__item " itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem">
                                        <a class="breadcrumb___link" itemprop="item" href="../index.html"
                                            title="Инвесторам"><span itemprop="name">Инвесторам</span></a>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                    <li class="breadcrumb__item active" itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem" class="active">
                                        <span class="breadcrumb___link" itemprop="item">Преимущества парка</span>
                                        <meta itemprop="position" content="3" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="page-header-container">
                            <div class="page-header-body">
                                <h1 class="h1 page-header-title small">Преимущества промышленной зоны
                                </h1>
                            </div>
                        </div>
                    </div>


                    <div class="page-header-container">

                        <div class="page-header-body">
                            <div class="page-header-desc">
                                <ul>
                                    <li>
                                        Наличие таможенного логистического центра <br>

                                    </li>
                                    <li>
                                        Расположение в черте города <br>

                                    </li>
                                    <li>
                                        Легкий доступ к магистральным дорогам  <br>

                                    </li>
                                    <li>
                                        Высококвалифицированный персонал <br>

                                    </li>
                                    <li>
                                        Развитая инфраструктура <br>

                                    </li>
                                    <li>
                                        Государственная поддержка резидентов <br>

                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>

                    <div class="services">
                        <div class="section-title">Приоритетные направления</div>

                        <div class="services__list row">

                            <div class="col-lg-12">
                                <div class="mini-card" id="bx_1967836421_16780">
                                    <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                            <img class="lazy-img custom_images"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="{{asset('front-assets/images/about/1.jpg')}}"
                                                alt="Наличие таможенного логистического центра">
                                        </span>
                                    </div>
                                    <div class="mini-card__body">
                                        <div class="mini-card__title">Наличие таможенного логистического центра </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mini-card" id="bx_1967836421_16781">
                                    <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                            <img class="lazy-img custom_images"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="{{asset('front-assets/images/about/7.jpg')}}"

                                                alt="Расположение в черте города">
                                        </span>
                                    </div>
                                    <div class="mini-card__body">
                                        <div class="mini-card__title">Расположение в черте города</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mini-card" id="bx_1967836421_16782">
                                    <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                            <img class="lazy-img custom_images"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="{{asset('front-assets/images/about/2.jpg')}}"
                                                alt="Легкий доступ к магистральным дорогам">
                                        </span>
                                    </div>
                                    <div class="mini-card__body">
                                        <div class="mini-card__title">Легкий доступ к магистральным дорогам</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mini-card" id="bx_1967836421_16783">
                                    <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                            <img class="lazy-img custom_images"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="{{asset('front-assets/images/about/8.jpg')}}"
                                                alt="Высококвалифицированный персонал ">
                                        </span>
                                    </div>
                                    <div class="mini-card__body">
                                        <div class="mini-card__title">Высококвалифицированный персонал </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mini-card" id="bx_1967836421_16784">
                                    <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                            <img class="lazy-img custom_images"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="{{asset('front-assets/images/about/3.jpg')}}"
                                                alt="Развитая инфраструктура">
                                        </span>
                                    </div>
                                    <div class="mini-card__body">
                                        <div class="mini-card__title">Развитая инфраструктура </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mini-card" id="bx_1967836421_16785">
                                    <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                            <img class="lazy-img custom_images"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="{{asset('front-assets/images/about/9.jpg')}}"
                                                alt="Государственная поддержка резидентов">
                                        </span>
                                    </div>
                                    <div class="mini-card__body">
                                        <div class="mini-card__title">Государственная поддержка резидентов </div>
                                    </div>
                                </div>
                            </div>
                        
                        

                        </div>
                    </div>
                    <br>
                    <br>
                    {{-- <div class="advatages-list">
                        <div class="advatages-list__nav">
                            <div class="nav-plain">
                                <ul class="nav-list">
                                    <li class="nav-item"><a class="nav-link js_adv-scroll"
                                            href="#adv-section-1">Расположение</a></li>
                                    <li class="nav-item"><a class="nav-link js_adv-scroll"
                                            href="#adv-section-5">Инфраструктура</a></li>
                                    <li class="nav-item"><a class="nav-link js_adv-scroll"
                                            href="#adv-section-3">Упрощенные процедуры</a></li>
                                    <li class="nav-item"><a class="nav-link js_adv-scroll"
                                            href="#adv-section-2">Операционные преимущества</a></li>
                                    <li class="nav-item"><a class="nav-link js_adv-scroll"
                                            href="#adv-section-4">Экономические стимулы</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="advatages-list__box">
                            <div class="advatages-list__section" id="adv-section-1">
                                <div class="advatages-list__section-title">
                                    Расположение
                                </div>
                                <div class="advatages-list__body">
                                    <div class="advantages-card advantages-card--big">
                                        <div class="advantages-card-container" style="color:#fff; background: #005EB8;">
                                            <div class="advantages-card-img lazy-img"
                                                data-bg="url(/local/templates/html/images/advantages-1.jpg), linear-gradient(transparent, transparent)">
                                            </div>

                                            <div class="advantages-card-body">
                                                <div class="advantages-card-text">
                                                    <h3 class="ttu">Выгодное географическое расположение</h3>
                                                    <ul>
                                                        <li>- Расположение в центре Республики Беларусь в 25 км от
                                                            столицы города Минска</li>
                                                        <li>- Роль коммуникационного звена между Европой, СНГ и Россией
                                                        </li>
                                                        <li>- Сокращение транспортных расходов </li>
                                                        <li>- Гибкие логистические решения</li>
                                                        <li>- Близость к соседним европейским странам: сокращение
                                                            транспортных расходов и сроков перевозки при экспорте
                                                            товаров в Европу</li>
                                                        <li>- Доступ на рынок ЕАЭС объемом 183 млн. потребителей</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="advatages-list__section-subtitle">
                                    ЛЕГКОДОСТУПНОЕ РАЗВИТОЕ ТРАНСПОРТНОЕ СООБЩЕНИЕ
                                </div>
                                <div class="transport">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="transport__item">
                                                <div class="transport__head">
                                                    <div class="transport__icon">
                                                        <svg class="icon">
                                                            <use xlink:href="images/sprite.svg/index.html#transport-1">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="statistics-card statistics-card--small">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value" data-unit="км">
                                                                &lt;600
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                3 морских и 1 речной порты
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="transport__body">
                                                    <div class="transport__path-list">
                                                        <div class="transport__path">
                                                            <div class="transport__path-name">
                                                                Рига — 499 км
                                                            </div>
                                                        </div>
                                                        <div class="transport__path">
                                                            <div class="transport__path-name">
                                                                Клайпеда — 530 км
                                                            </div>
                                                        </div>
                                                        <div class="transport__path">
                                                            <div class="transport__path-name">
                                                                Калининград — 585 км
                                                            </div>
                                                        </div>
                                                        <div class="transport__path">
                                                            <div class="transport__path-name">
                                                                Дуйсбург — 1644 км
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="transport__item">
                                                <div class="transport__head">
                                                    <div class="transport__icon">
                                                    </div>
                                                    <div class="statistics-card statistics-card--small">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value" data-unit="км">
                                                                &lt;1
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Национальный аэропорт
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="transport__body">
                                                    <p>
                                                        -&nbsp;Международный аэропорт <b>включен в границы</b> Парка<br>
                                                        -&nbsp;<b>Менее чем за 1-3 часа</b> можно добраться прямыми
                                                        рейсами в большинство европейских и евразийских столиц
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="transport__item">
                                                <div class="transport__head">
                                                    <div class="transport__icon">
                                                    </div>
                                                    <div class="transport__title">
                                                        Железнодорожные пути
                                                    </div>
                                                </div>
                                                <div class="transport__body">
                                                    <p>
                                                        - Два <b>крупнейших трансъевропейских железнодорожных
                                                            транспортных коридора</b> обеспечивают отличные связи с
                                                        Европой и Россией, а также с Балтийским и Черным морями
                                                    </p>
                                                    <p>
                                                        - Прямое подключение к <b>Транссибирской магистрали</b>
                                                    </p>
                                                    <p>
                                                        - Прямое сообщение с транзитным международным маршрутом
                                                        <b>Чонцин - Синьцзян - Европа</b>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="transport__item">
                                                <div class="transport__head">
                                                    <div class="transport__icon">
                                                    </div>
                                                    <div class="transport__title">
                                                        Международные автомобильные дороги
                                                    </div>
                                                </div>
                                                <div class="transport__body">
                                                    <p>
                                                        - Международная автомагистраль Москва-Берлин (M1 / E30) в Россию
                                                        и Центральную Европу
                                                    </p>
                                                    <p>
                                                        - Парк расположен в самом центре Беларуси
                                                    </p>
                                                    <p>
                                                        - Развитое транспортное сообщение в пределах легкой досягаемости
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="map-tab">
                                        <div class="map-tab__nav-wrap">
                                            <div class="map-tab__nav">
                                                <div class="map-tab__link active"
                                                    data-pic-desc="https://industrialpark.by/local/templates/html/images/map-tab2-6.jpg"
                                                    data-pic-mob="../../local/templates/html/images/w_ru_mob.jpg">
                                                    Мир
                                                </div>
                                                <div class="map-tab__link active"
                                                    data-pic-desc="	https://industrialpark.by/local/templates/html/images/map-tab2-4.jpg"
                                                    data-pic-mob="../../local/templates/html/images/e_ru_mob.jpg">
                                                    Европа
                                                </div>
                                                <div class="map-tab__link"
                                                    data-pic-desc="https://industrialpark.by/local/templates/html/images/map-tab2-6.jpg"
                                                    data-pic-mob="../../local/templates/html/images/b_ru_mob.jpg">
                                                    Беларусь
                                                </div>
                                            </div>
                                        </div>
                                        <div class="map-tab__pic">
                                            <span class="lazy-img-wrap">
                                                <source data-srcset="/local/templates/html/images/map-tab-mob-1.jpg"
                                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                    media="(max-width: 767px)"><img alt="img"
                                                    src="../../upload/medialibrary/e84/e8433949f9679637dab710a4ba0a0238.gif"
                                                    class="lazy-img"
                                                    data-src="../../local/templates/html/images/map-tab2-1.jpg">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advatages-list__section" id="adv-section-5">
                                <div class="advatages-list__section-title">
                                    Инфраструктура
                                </div>
                                <div class="advatages-list__body">
                                    <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                        <div class="advantages-card-container" style="color:#fff;">
                                            <div class="advantages-card-img lazy-img"
                                                data-bg="url(https://industrialpark.by/local/templates/html/images/advantages-5.jpg), linear-gradient(transparent, transparent)">
                                            </div>
                                            <div class="advantages-card-body">
                                                <div class="advantages-card-text">
                                                    <h3 class="ttu">Развитая инфраструктура</h3>
                                                    <ul>
                                                        <li>- Земельные участки с подведенными коммуникациями и
                                                            инженерными сетями в аренду или продажу в частную
                                                            собственность</li>
                                                        <li>- Современные промышленные помещения в аренду и продажу под
                                                            производство, офисы и склады</li>
                                                        <li>- Готовая к использованию инфраструктура без необходимости
                                                            оплаты за подключение к сетям</li>
                                                        <li>- Административная инфраструктура на месте: офисные
                                                            помещения, выставочный центр, R&amp;D центры, жилье</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advatages-list__section" id="adv-section-4">
                                <div class="advatages-list__section-title">
                                    Налоговые и таможенные льготы
                                </div>
                                <div class="advatages-list__body">
                                    <div class="advantages-card advantages-card--big">
                                        <div class="advantages-card-container"
                                            style="color:#fff; background: #005EB8;">
                                            <div class="advantages-card-img lazy-img"
                                                data-bg="url(/local/templates/html/images/advantages-0.jpg), linear-gradient(transparent, transparent)">
                                            </div>
                                            <div class="advantages-card-body">
                                                <div class="advantages-card-text">
                                                    <h3 class="ttu">Налоговые льготы по заработной плате</h3>
                                                    <div class="row">
                                                        <div class="col-xxl-12">
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value" data-unit="%">
                                                                        35
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        Отчисления в ФСЗН от средней заработной плате по
                                                                        стране
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value" data-unit="%">
                                                                        0
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        Налог с иностранных работников
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xxl-6">




                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value" data-unit="%">
                                                                        9
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        подоходный налог
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                        <div class="advantages-card-container"
                                            style="color:#fff; background: #005EB8;">
                                            <div class="advantages-card-body">
                                                <div class="advantages-card-text">
                                                    <h3 class="ttu">Таможенные пошлины и НДС:</h3>
                                                    <div class="statistics-card-value" data-unit="%">
                                                        0
                                                    </div>
                                                    <ul>
                                                        <li>- Оборудование и комплектующие</li>
                                                        <li>- Cырье и материалы при экспорте товаров за пределы ЕАЭС
                                                            (таможенная процедура свободной таможенной зоны)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="advantages-card advantages-card--big advantages-card--no-bg advantages-card--white">
                                        <div class="advantages-card-container">
                                            <div class="advantages-card-body">
                                                <div class="advantages-card-text">
                                                    <h3 class="ttu">Корпоративные налоги</h3>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value" data-unit="%">
                                                                        0
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        Налог на&nbsp;землю и&nbsp;налог
                                                                        на&nbsp;недвижимость до&nbsp;2062 года
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value" data-unit="%">
                                                                        0
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        Налог на&nbsp;дивиденды в&nbsp;течение
                                                                        5&nbsp;лет или 10&nbsp;лет для крупных
                                                                        инвестиционных проектов
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value" data-unit="%">
                                                                        0
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        налог на прибыль в течение 10 лет и последующая
                                                                        их уплата по ставке, сниженной в 2 раза, до 2062
                                                                        г.
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
                            </div>
                            <div class="advatages-list__section" id="adv-section-3">
                                <div class="advatages-list__section-title">
                                    Упрощенные процедуры
                                </div>
                                <div class="advatages-list__body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="advantages-card advantages-card--big">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #005EB8;">
                                                    <div class="advantages-card-img lazy-img"
                                                        data-bg="url(/local/templates/html/images/advantages-7.jpg), linear-gradient(transparent, transparent)">
                                                    </div>
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu">Простые критерии для регистрации в
                                                                качестве резидента Парка</h3>
                                                            <p>
                                                                Инвестиции <b>$0.5 млн. через 3 года</b> или более <b>$5
                                                                    млн. без ограничений</b> и производство в сферах:
                                                            </p>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-xxl-3 col-xl-6">
                                                                    <ul>
                                                                        <li>- Электроника и телекоммуникации</li>
                                                                        <li>- Фармацевтика</li>
                                                                        <li>- Логистика</li>
                                                                        <li>- Тонкая химия</li>
                                                                        <li>- Биотехнологии</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-6">
                                                                    <ul>

                                                                        <li>- Машиностроение</li>
                                                                        <li>- Производство медицинских изделий и
                                                                            оказание медицинских услуг</li>

                                                                        <li>- Новые материалы</li>
                                                                        <li>- Комплексная логистика</li>

                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-6">
                                                                    <ul>
                                                                        <li>- НИОКР</li>

                                                                        <li>- Электронная коммерция</li>
                                                                        <li>- Хранение и обработка данных</li>
                                                                        <li>- Социально-культурная деятельность</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #00A8E6;">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu">Система комплексного обслуживания
                                                                компаний «Одна станция»</h3>
                                                            <ul>
                                                                <li>- Выполнение в одном месте всех административных
                                                                    процедур: регистрация юридических лиц и резидентов
                                                                </li>
                                                                <li>- Решение миграционных, таможенных, налоговых,
                                                                    разрешительных вопросов</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="advantages-card advantages-card--big">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #005EB8;">
                                                    <div class="advantages-card-img lazy-img"
                                                        data-bg="url(/local/templates/html/images/advantages-6.jpg), linear-gradient(transparent, transparent)">
                                                    </div>
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu">Льготы при строительстве объектов</h3>
                                                            <ul>
                                                                <li>- Возможность параллельного проектирования и
                                                                    строительства</li>
                                                                <li>- Применение технических нормативов, аналогичных
                                                                    действующим за рубежом (страны ЕС, США, Китай, РФ),
                                                                    для разработки проектной документации,
                                                                    строительства, приемки в эксплуатацию и эксплуатации
                                                                    объектов</li>
                                                                <li>- Упрощенный порядок приемки построенных объектов в
                                                                    эксплуатацию</li>
                                                                <li>- Сокращенный по времени и упрощенный порядок
                                                                    приемки построенных объектов в эксплуатацию </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #0090E5;">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu"></h3>
                                                            <div class="statistics-card statistics-card--small">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value"
                                                                        data-unit="дней ">
                                                                        180
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        безвизового пребывания<br><br>

                                                                        Упрощенная процедура найма
                                                                        высококвалифицированной иностранной рабочей силы

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                class="advantages-card advantages-card--big advantages-card--no-bg advantages-card--white">
                                                <div class="advantages-card-container">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu">Гарантии неизменности условий бизнеса
                                                            </h3>
                                                            <ul>
                                                                <li>- Стабилизационная оговорка на 10 лет о неухудшении
                                                                    условий деятельности</li>
                                                                <li>- Отсутствие контрольных проверок</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advatages-list__section" id="adv-section-2">
                                <div class="advatages-list__section-title">
                                    Операционные преимущества
                                </div>
                                <div class="advatages-list__section-subtitle">
                                    Высококвалифицированная рабочая сила
                                </div>
                                <div class="advatages-list__body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #005EB8;">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3>Низкие издержки производства относительно Европы и
                                                                России</h3>
                                                            <ul>
                                                                <li>- Конкурентоспособные и высококвалифицированные
                                                                    трудовые ресурсы</li>
                                                                <li>- Коммунальные расходы ниже, чем в Европе, и
                                                                    сопоставимы с Россией</li>
                                                                <li>- Самые низкие удельные затраты на газ в сравнении с
                                                                    другими площадками Беларуси</li>
                                                                <li>- Низкие удельные затраты на логистику, складское
                                                                    хранение и таможенные процедуры</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="advantages-card advantages-card--big">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #005EB8;">
                                                    <div class="advantages-card-img lazy-img"
                                                        data-bg="url(/local/templates/html/images/advantages-2.jpg), linear-gradient(transparent, transparent)">
                                                    </div>
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value">
                                                                        51
                                                                    </div>
                                                                    <div class="statistics-card-name">

                                                                        университет
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value">
                                                                        226
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        средне-специальных образовательных учреждений
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-value"
                                                                        data-unit="тыс">
                                                                        >500
                                                                    </div>
                                                                    <div class="statistics-card-name">
                                                                        обучающихся
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #0090E5;">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <div
                                                                class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--aligntop">
                                                                <div class="statistics-card-container">
                                                                    <div class="statistics-card-name">
                                                                        <h3>Таможенная инфраструктура</h3>
                                                                        <br>
                                                                        - Таможенный терминал на территории Парка<br>
                                                                        - Пункт таможенного оформления<br>
                                                                        - Склад временного хранения<br>
                                                                        - Таможенный склад<br>
                                                                        <br>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="advantages-card advantages-card--big advantages-card--no-bg">
                                                <div class="advantages-card-container"
                                                    style="color:#fff; background: #00A8E6;">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu">Система комплексного обслуживания
                                                                компаний «Одна станция»</h3>
                                                            <ul>
                                                                <li>- Выполнение в одном месте всех административных
                                                                    процедур: регистрация юридических лиц и резидентов
                                                                </li>
                                                                <li>- Решение миграционных, таможенных, налоговых,
                                                                    разрешительных вопросов</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                class="advantages-card advantages-card--big advantages-card--no-bg advantages-card--white">
                                                <div class="advantages-card-container">
                                                    <div class="advantages-card-body">
                                                        <div class="advantages-card-text">
                                                            <h3 class="ttu"></h3>
                                                            <ul>
                                                                <li>Водоснабжение — <b>31400 м³сутки</b></li>
                                                                <br>
                                                                <li>Водоотведение— <b>19500 м³сутки</b></li>
                                                                <br>
                                                                <li>Газ— <b>116 млн. м³год</b></li>
                                                                <br>
                                                                <li>Электроэнергия— <b>50 МВт</b></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-page-wrapper">
                                <div class="canvas_wrapper">
                                    <canvas class="calculator_canvas" id="canvas_calculator"></canvas>
                                </div>
                                <section class="calculator" x-data="calculator({ & quot;percentOfStaffSalaryTax & quot;: 34.6, & quot;percentOfParkDividendsTax & quot;: 0, & quot;percentOfDividendsTax & quot;: 13, & quot;percentOfParkIncomeTax & quot;: 9, & quot;percentOfParkProfitTax & quot;: 20, & quot;percentOfIncomeTax & quot;: 13, & quot;selectOptions & quot;: [{ & quot;value & quot;: & quot;ОСН & quot; }, { & quot;value & quot;: & quot;УСН(6 % ) & quot; }] })">
                                    <div class="calculator__page-header">
                                        <h1 class="calculator__page-header--title">Инвестиционный калькулятор</h1>
                                        <p class="calculator__page-header--description">Сравнительный анализ режимов
                                            налогообложения в индустриальном парке «Великий камень» и в целом по
                                            Республике Беларусь.</p>
                                    </div>
                                    <div class="calculator-form__wrap" x-show="!isCalculated">
                                        <form class="calculator_form">
                                            <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/mixin__alpine-select/style.css");-->
                                            <div class="alpine-select">
                                                <div class="alpine-select__label" x-text="selectLabel"></div>
                                                <div class="alpine-select__control">
                                                    <div class="alpine-select__control__inner" @click="toggleSelect"
                                                        @click.outside="closeSelect">
                                                        <div class="inner__selected" x-text="selectedOption"></div>
                                                        <div class="inner__trigger"
                                                            :class="isSelectOpen & amp; & amp;
                                                            'open'"></div>
                                                    </div>
                                                    <div class="alpine-select__options-group" x-show="isSelectOpen">
                                                        <template x-for="(item, index) in selectOptions"
                                                            :key="index">
                                                            <div>
                                                                <template x-if="item.value !== selectedOption">
                                                                    <div class="alpine-select__options-group__option"
                                                                        @click="setSelectedOption(item.value)"
                                                                        x-text="item.value"></div>
                                                                </template>
                                                                <template x-if="item.value === selectedOption">
                                                                    <div class="alpine-select__options-group__option hidden"
                                                                        @click="setSelectedOption(item.value)"
                                                                        x-text="item.value"></div>
                                                                </template>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="ID4284795992">Планируемая
                                                    выручка без НДС
                                                </label>
                                                <input class="form-control" type="number" id="ID4284795992"
                                                    name="NAME4284795992" placeholder=" "
                                                    data-bv-notempty-message="Обязательное поле"
                                                    data-bv-regexp-message="Неверный формат"
                                                    data-bv-emailaddress-message=" "
                                                    x-model="inputsData.plannedRevenue"><span
                                                    class="calculator-form__field-info">рублей в месяц</span>
                                            </div>
                                            <div x-show="selectedOption === 'ОСН'" x-transition.duration.300ms="">
                                                <!--+input({-->
                                                <!--	label: 'НДС к уплате',-->
                                                <!--	name: false,-->
                                                <!--	small: false,-->
                                                <!--	placeholder: '',-->
                                                <!--	mod: 'disabled_calc_input'-->
                                                <!--})(x-model='inputsData.ndsForPay' disabled=true)-->
                                                <!--	span.calculator-form__field-info 20% от выручки-->
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="ID9364344793">Количество
                                                    персонала
                                                </label>
                                                <input class="form-control" type="number" id="ID9364344793"
                                                    name="NAME9364344793" placeholder=" "
                                                    data-bv-notempty-message="Обязательное поле"
                                                    data-bv-regexp-message="Неверный формат"
                                                    data-bv-emailaddress-message=" "
                                                    x-model="inputsData.staffCount"><span
                                                    class="calculator-form__field-info">человек</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="ID9759098867">Средняя
                                                    начисленная ЗП
                                                </label>
                                                <input class="form-control" type="number" id="ID9759098867"
                                                    name="NAME9759098867" placeholder=" "
                                                    data-bv-notempty-message="Обязательное поле"
                                                    data-bv-regexp-message="Неверный формат"
                                                    data-bv-emailaddress-message=" "
                                                    x-model="inputsData.averageSalary"><span
                                                    class="calculator-form__field-info">белорусских рублей</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="ID5838808431">Рентабельность
                                                    продаж (по чистой прибыли)
                                                </label>
                                                <input class="form-control" type="number" id="ID5838808431"
                                                    name="NAME5838808431" placeholder=" "
                                                    data-bv-notempty-message="Обязательное поле"
                                                    data-bv-regexp-message="Неверный формат"
                                                    data-bv-emailaddress-message=" "
                                                    x-model="inputsData.returnOnSales"><span
                                                    class="calculator-form__field-info">%</span>
                                            </div>
                                            <!--+input({-->
                                            <!--	label: 'Распределяемые дивиденды',-->
                                            <!--	name: false,-->
                                            <!--	small: false,-->
                                            <!--	placeholder: '',-->
                                            <!--})(x-model='inputsData.distributedDividends'
                                            type="number")span.calculator-form__field-info % от чистой прибыли
                                            -->
                                            <div class="calculator_form__control">
                                                <button class="btn" type="button"
                                                    :class="!isFormValid & amp; & amp;
                                                    'disabled_calc_btn'"
                                                    @click="getFormData">Рассчитать</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="results_block" x-show="isCalculated">
                                        <div class="results-table__wrap">
                                            <table class="results-table">
                                                <thead class="results-table__head">
                                                    <tr class="results-table__head--row">
                                                        <th colspan="3">Расчетные показатели, тыс. руб.</th>
                                                    </tr>
                                                    <tr class="results-table__head--columns">
                                                        <th>Наименование налога</th>
                                                        <th>Налоги без учета льгот индустриального парка</th>
                                                        <th>Налоги с учетом льгот индустриального парка</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="results-table__body">
                                                    <!--tr.results-table__body--row-->
                                                    <!--	td.row-title НДС к уплате-->
                                                    <!--	td(x-text= "inputsData.ndsForPay")-->
                                                    <!--	td 0-->
                                                    <tr class="results-table__body--row">
                                                        <td class="row-title">Социальные отчисления</td>
                                                        <td x-text="notParkTaxes.socialContributions"></td>
                                                        <td x-text="parkTaxes.socialContributions"></td>
                                                    </tr>
                                                    <tr class="results-table__body--row">
                                                        <td class="row-title">Подоходный налог</td>
                                                        <td x-text="notParkTaxes.incomeTax"></td>
                                                        <td x-text="parkTaxes.incomeTax"></td>
                                                    </tr>
                                                    <tr class="results-table__body--row">
                                                        <td class="row-title">Налог на прибыль</td>
                                                        <td x-text="notParkTaxes.profitTax"></td>
                                                        <td x-text="parkTaxes.profitTax"></td>
                                                    </tr>
                                                    <!--tr.results-table__body--row-->
                                                    <!--	td.row-title Налог на дивиденды-->
                                                    <!--	td(x-text= "notParkTaxes.dividendsTax")-->
                                                    <!--	td(x-text= "parkTaxes.dividendsTax")-->
                                                    <tr class="results-table__body--row">
                                                        <td class="row-title">ИТОГО уплачиваемые налоги</td>
                                                        <td x-text="notParkTaxes.taxesSum"></td>
                                                        <td x-text="parkTaxes.taxesSum"></td>
                                                    </tr>
                                                    <tr class="results-table__body--row">
                                                        <td class="row-title bold">Экономия в месячном исчислении</td>
                                                        <td class="bold" colspan="2" x-text="monthSaving"></td>
                                                    </tr>
                                                    <tr class="results-table__body--row">
                                                        <td class="row-title bold">Экономия в годовом исчислении</td>
                                                        <td class="bold" colspan="2" x-text="yearSaving"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="results-button">
                                                <button class="btn" type="button"
                                                    @click="showCalculator">Вернуться к калькулятору</button>
                                            </div>
                                        </div>
                                        <div class="results-additional-info"><span>*Налог на прибыль в течение 10 лет и
                                                последующая уплата по ставке, сниженной в 2 раза, до 2062
                                                г.</span><span>*Социальные отчисления уплачиваются работодателем с
                                                согласия работника от средней заработной платы по Республики
                                                Беларусь.</span></div>
                                    </div>
                                </section>
                                <section class="calculator-form-section" id="section7">
                                    <div class="calculator-form-section__inner">

                                        <div class="slam-easyform">
                                            <form id="FORM-calculate" class="bv-form" enctype="multipart/form-data"
                                                method="POST" action="#" autocomplete="on"
                                                novalidate="novalidate">
                                                <div class="alert alert-success hidden" role="alert">
                                                    Сообщение успешно отправлено. В ближайшее время мы ответим Вам.
                                                </div>
                                                <div class="alert alert-danger hidden" role="alert">
                                                    Произошла ошибка. Сообщение не отправлено. </div>

                                                <input type="hidden" name="FORM_ID" value="FORM-calculate">
                                                <input type="text" name="ANTIBOT[NAME]" value=""
                                                    class="hidden">

                                                <div class="">
                                                    <div class="form-group">
                                                        <label class="form-control-label form-control-label--white"
                                                            for="FORM-calculate_FIELD_TITLE">Имя<span
                                                                class="asterisk"> *</span></label>
                                                        <input class="form-control" type="text"
                                                            id="FORM-calculate_FIELD_TITLE" name="FIELDS[TITLE]"
                                                            value="" required
                                                            data-bv-message="Обязательное поле">
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="form-control-label form-control-label--white"
                                                                    for="FORM-calculate_FIELD_EMAIL">E-mail<span
                                                                        class="asterisk"> *</span></label>
                                                                <input class="form-control" type="email"
                                                                    id="FORM-calculate_FIELD_EMAIL"
                                                                    name="FIELDS[EMAIL]" value="" required
                                                                    data-bv-message="Обязательное поле"data-bv-emailaddress-message="E-mail введен некорректно">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="form-control-label form-control-label--white"
                                                                    for="FORM-calculate_FIELD_PHONE">Телефон<span
                                                                        class="asterisk"> *</span></label>
                                                                <input class="form-control" type="tel"
                                                                    id="FORM-calculate_FIELD_PHONE"
                                                                    name="FIELDS[PHONE]" value="" required
                                                                    data-bv-message="Обязательное поле"
                                                                    data-inputmask-mask="+375 (99) 999-99-99"
                                                                    data-mask="+375 (99) 999-99-99">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-control-label form-control-label--white"
                                                            for="FORM-calculate_FIELD_MESSAGE">Комментарии<span
                                                                class="asterisk"> *</span></label>
                                                        <textarea class="form-control--textarea form-control" id="FORM-calculate_FIELD_MESSAGE" rows="5"
                                                            name="FIELDS[MESSAGE]" required data-bv-message="Обязательное поле"></textarea>
                                                    </div>




                                                    <div class="calculator-form__bottom">
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="ID9685136846"
                                                                    name="NAME9685136846" value="active"
                                                                    required="required"
                                                                    data-bv-notempty-message="Обязательное поле">
                                                                <label class="calculator-checkbox-label"
                                                                    for="ID9685136846">
                                                                    Я принимаю политику <a
                                                                        href="../../politika-konfidentsialnosti/index.html"
                                                                        target="_blank">конфиденциальности</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="calculator-form__control">
                                                            <button class="btn" type="submit">Отправить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="modal fade modal-add-holiday modal-feedback"
                                                id="frm-modal-FORM-calculate" role='dialog' aria-hidden='true'>
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="modal-title">Спасибо!</div>

                                                        </div>
                                                        <button class="modal-close" type="button"
                                                            data-dismiss="modal" aria-label="Close"></button>
                                                        <div class="modal-body">
                                                            <p class="ok-text">Сообщение успешно отправлено. В
                                                                ближайшее время мы ответим Вам.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>

                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

</main>
{{-- <script type="text/javascript"  src="{{asset('front-assets/bitrix/cache/js/s1/html/template_39fbaf6d82f625c2f260dd8e1c99c1be/template_39fbaf6d82f625c2f260dd8e1c99c1be_v16f7b.js')}}"></script>
<script type="text/javascript"  src="{{asset('front-assets/bitrix/cache/js/s1/html/page_e99ed1958ef8644bdff36f258e864051/page_e99ed1958ef8644bdff36f258e864051_v1807b.js')}}"></script> --}}
@endsection


