@extends('frontend.layouts.admin')
@section('frontend_content')
<link href="{{asset('front-assets/bitrix/cache/css/s1/html/page_2c705994f147f09d41ef76fb06452afb/page_2c705994f147f09d41ef76fb06452afb_v1c0db.css')}}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
<link href="{{asset('bitrix/cache/css/s1/html/template_6a79ccc7eb994082f6ac4993af815063/template_6a79ccc7eb994082f6ac4993af815063_v1.css')}}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
<main class="main">

      
    <section class="tariffs">
        <div class="container">
            <div class="tariffs-header">
                <span class="tariffs-header__title">Тарифы</span>
                <div class="tariffs-header__title-divider">
                </div>
            </div>
            <div class="tariffs-content">
                <div class="tariffs-content__info">
                    <div class="tariffs-content__info--text">
                        Для реализации инвестиционных проектов резидентам индустриального парка «Великий
                        камень» и инвесторам предлагаются земельные участки с развитой инфраструктурой
                        для приобретения как в частную собственность, так и для долгосрочной аренды (99
                        лет). Договор купли-продажи и аренды земельных участков, а также договор на
                        оказание коммунальных услуг заключаются с управляющей компанией.<span
                            class="tariffs-bold-text">Тарифы представлены по состоянию 01.10.2023 и
                            составляют соответственно:</span>
                    </div>
                </div>
                <div class="tariffs-content__card">
                    <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/tariffs_1.png"></span>
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
                            data-src="../../local/templates/html/images/tariffs_2.png"></span>
                    <div class="tariffs-card__text">
                        Водоснабжение
                    </div>
                    <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/water-energy.svg"></span>
                    <div class="tariffs-card__text">
                        2,89 BYN&nbsp;/ <span class="with-cubemeter">1м</span>
                    </div>
                </div>
                <div class="tariffs-content__card">
                    <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/tariffs_3.png"></span>
                    <div class="tariffs-card__text">
                        Водоотведение
                    </div>
                    <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/water-pollution.svg"></span>
                    <div class="tariffs-card__text">
                        2,89 BYN&nbsp;/ <span class="with-cubemeter">1м</span>
                    </div>
                </div>
                <div class="tariffs-content__card">
                    <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/tariffs_4.png"></span>
                    <div class="tariffs-card__text">
                        Электроэнергия
                    </div>
                    <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/electric-pole.svg"></span>
                    <div class="tariffs-card__text">
                        0,33036 BYN&nbsp;/ 1кВт
                    </div>
                </div>
                <div class="tariffs-content__card">
                    <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/tariffs_5.png"></span>
                    <div class="tariffs-card__text">
                        Газ
                    </div>
                    <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/valve.svg"></span>
                    <div class="tariffs-card__text">
                        0,4383 BYN&nbsp;/ <span class="with-cubemeter">1м</span>
                    </div>
                </div>
                <div class="tariffs-content__card">
                    <span class="lazy-img-wrap tariff-card__wrap"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/tariffs_6.png"></span>
                    <div class="tariffs-card__text">
                        Теплоэнергия
                    </div>
                    <span class="lazy-img-wrap tariff-card__icon"> <img alt="img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            class="lazy-img"
                            data-src="../../local/templates/html/images/nuclear-plant.svg"></span>
                    <div class="tariffs-card__text">
                        48,02 BYN / 1Гкал
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection
    