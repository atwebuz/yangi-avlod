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

                        @include('frontend.layouts.__left_aside_investor')

                    </div>

                    <div class="col-12 col-xl-8">

                        <div class="page-header-section">
                            <div class="breadcrumb">
                                <div class="breadcrumb-container">
                                    <ul class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li class="breadcrumb__item " itemprop="itemListElement" itemscope
                                            itemtype="http://schema.org/ListItem">
                                            <a class="breadcrumb___link" itemprop="item"
                                                href="https://industrialpark.by/index.html" title="Главная"><span
                                                    itemprop="name">Главная</span></a>
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
                        
                            @media (max-width: 3850px) {
                                .tariffs .tariffs-content {
                                    grid-template-columns: repeat(3, 1fr);
                                }
                            }

                            .tariffs .tariffs-content__card {
                                min-height: 300px !important;

                            }

                            .card__text_title {
                                font-size: 24px !important;

                            }

                         

                            @media (max-width: 992px) {
                                .tariffs .tariffs-content {
                                    grid-template-columns: repeat(2, 1fr);
                                }
                            }

                            @media (max-width: 768px) {
                                .tariffs .tariffs-content {
                                    grid-template-columns: repeat(1, 1fr) !important; 
                                }
                            }
                        </style>


                        <div class="page-header-container">

                            <div class="page-header-body">
                                <div class="page-header-desc">


                                    <section class="tariffs">
                                        <div class="tariffs-content">
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap">
                                                    <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{ asset('front-assets/local/templates/html/images/tariffs_1.png') }}">
                                                </span>
                                                <div class="tariffs-card__text card__text_title">
                                                    Покрытие по внедрению международных стандартов и сертификатов
                                                </div>
                                                <div class="tariffs-card__text">
                                                    100%
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap">
                                                    <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{ asset('front-assets/local/templates/html/images/tariffs_2.png') }}">
                                                </span>
                                                <div class="tariffs-card__text card__text_title">
                                                    Компенсация за презентации и рекламу
                                                </div>
                                                <div class="tariffs-card__text">
                                                    100%
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card ">
                                                <span class="lazy-img-wrap tariff-card__wrap">
                                                    <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{ asset('front-assets/local/templates/html/images/tariffs_3.png') }}">
                                                </span>
                                                <div class="tariffs-card__text card__text_title">
                                                    Компенсация расходов на участие в международных тендерах и конкурсах
                                                </div>
                                                <div class="tariffs-card__text">
                                                    100%
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap">
                                                    <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{ asset('front-assets/local/templates/html/images/tariffs_4.png') }}">
                                                </span>
                                                <div class="tariffs-card__text card__text_title">
                                                    Компенсация расходов на регистрацию продукции в иностранных компетентных
                                                    органах
                                                </div>
                                                <div class="tariffs-card__text">
                                                    50%
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap">
                                                    <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{ asset('front-assets/local/templates/html/images/tariffs_5.png') }}">
                                                </span>
                                                <div class="tariffs-card__text card__text_title">
                                                    Компенсация расходов участников бизнесфорумов и торговых миссий
                                                </div>
                                                <div class="tariffs-card__text">
                                                    100%
                                                </div>
                                            </div>
                                            <div class="tariffs-content__card">
                                                <span class="lazy-img-wrap tariff-card__wrap">
                                                    <img alt="img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                        class="lazy-img"
                                                        data-src="{{ asset('front-assets/local/templates/html/images/tariffs_6.png') }}">
                                                </span>
                                                <div class="tariffs-card__text card__text_title">
                                                    Компенсация расходов на участие в выставочных мероприятиях
                                                </div>
                                                <div class="tariffs-card__text">
                                                    100%
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
 
@endsection
