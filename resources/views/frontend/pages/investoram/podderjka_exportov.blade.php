@extends('frontend.layouts.admin')
@section('frontend_content')
    <link
        href="{{ asset('front-assets/bitrix/cache/css/s1/html/page_2c705994f147f09d41ef76fb06452afb/page_2c705994f147f09d41ef76fb06452afb_v1c0db.css') }}"
        media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
    <link
        href="{{ asset('bitrix/cache/css/s1/html/template_6a79ccc7eb994082f6ac4993af815063/template_6a79ccc7eb994082f6ac4993af815063_v1.css') }}"
        media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
    <main class="main">

        <div class="no-critical no-critical--preloader">
            <div class="container" data-sticky-container>
                <div class="row">
                    <div class="col-12 col-xl-3">

                        <aside class="aside js_aside js-sticky" data-margin-top="81" data-sticky-for="1200"
                            data-sticky-class="is-sticky">
                            <div class="aside__title">
                                Инвесторам </div>


                            <nav class="aside__list">
                                <span class="aside__link active">Преимущества парка</span>
                                <a class="aside__link" href="../registratsiya-rezidentov/index.html">Регистрация
                                    резидентов</a>
                                <a class="aside__link" href="https://onestation.by/">Одна станция</a>
                                <a class="aside__link" href="../faq/index.html">Часто задаваемые вопросы</a>
                                <a class="aside__link" href="../uslugi/index.html">Услуги для инвесторов</a>
                                <a class="aside__link" href="../land_plots/index.html">Земельные участки</a>
                                <a class="aside__link" href="../industrial_premises/index.html">Производственные, офисные и
                                    жилые помещения</a>
                                <a class="aside__link" href="../financial_support/index.html">Дополнительная информация</a>
                                <a class="aside__link" href="../inzhiniringovye-uslugi/index.html">Инжиниринговые услуги</a>
                                <a class="aside__link" href="https://industrialpark.by/innovatsionnyy-tsentr/index.html">Инновационный центр</a>
                            </nav>


                        </aside>
                    </div>

                    <div class="col-12 col-xl-8">

                        <div class="page-header-section">
                            <div class="breadcrumb">
                                <div class="breadcrumb-container">
                                    <ul class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li class="breadcrumb__item " itemprop="itemListElement" itemscope
                                            itemtype="http://schema.org/ListItem">
                                            <a class="breadcrumb___link" itemprop="item" href="https://industrialpark.by/index.html"
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
                                    <h1 class="h1 page-header-title small">Поддержка экспортёров
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <style>
                            .tariffs .tariffs-content {
                            grid-template-columns: repeat(3, 1fr) !important;
                   
                        }
                        </style>
                        

                        <div class="page-header-container">

                            <div class="page-header-body">
                                <div class="page-header-desc">


                                    <section class="tariffs">
                                        <div class="tariffs-content">

                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/tariffs_1.png')}}"></span>
                                                <div class="tariffs-card__text">
                                                    Техническое обслуживание производственных корпусов
                                                </div>
                                                <div class="tariffs-card__text">
                                                    1$ / <span class="with-squaremeter">1м</span>
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/tariffs_2.png')}}"></span>
                                                <div class="tariffs-card__text">
                                                    Водоснабжение
                                                </div>
                                                <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/water-energy.svg')}}"></span>
                                                <div class="tariffs-card__text">
                                                    2,89 BYN&nbsp;/ <span class="with-cubemeter">1м</span>
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/tariffs_3.png')}}"></span>
                                                <div class="tariffs-card__text">
                                                    Водоотведение
                                                </div>
                                                <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/water-pollution.svg')}}"></span>
                                                <div class="tariffs-card__text">
                                                    2,89 BYN&nbsp;/ <span class="with-cubemeter">1м</span>
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/tariffs_4.png')}}"></span>
                                                <div class="tariffs-card__text">
                                                    Электроэнергия
                                                </div>
                                                <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/electric-pole.svg')}}"></span>
                                                <div class="tariffs-card__text">
                                                    0,33036 BYN&nbsp;/ 1кВт
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/tariffs_5.png')}}"></span>
                                                <div class="tariffs-card__text">
                                                    Газ
                                                </div>
                                                <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/valve.svg')}}"></span>
                                                <div class="tariffs-card__text">
                                                    0,4383 BYN&nbsp;/ <span class="with-cubemeter">1м</span>
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/tariffs_6.png')}}"></span>
                                                <div class="tariffs-card__text">
                                                    Теплоэнергия
                                                </div>
                                                <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{asset('front-assets/local/templates/html/images/nuclear-plant.svg')}}"></span>
                                                <div class="tariffs-card__text">
                                                    48,02 BYN / 1Гкал
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <script type="text/javascript"
        src="{{ asset('front-assets/bitrix/cache/js/s1/html/template_39fbaf6d82f625c2f260dd8e1c99c1be/template_39fbaf6d82f625c2f260dd8e1c99c1be_v16f7b.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('front-assets/bitrix/cache/js/s1/html/page_e99ed1958ef8644bdff36f258e864051/page_e99ed1958ef8644bdff36f258e864051_v1807b.js') }}">
    </script>
@endsection
