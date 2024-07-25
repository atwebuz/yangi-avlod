@extends('frontend.layouts.admin')
@section('frontend_content')
<div class="hero-section">
    <div class="hero-container">
        <style>
            @media (max-width: 767px) {
                .hero-slide-container {
                    height: calc(100vw * 0.51);
                }
            }

            @media (min-width: 1200px) {

                .hero-slider,
                .hero-slide {
                    height: calc(100vw * 0.375);
                }
            }
        </style>
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- FancyBox CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

        <!-- FancyBox JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function() {
                // Initialize FancyBox
                $("[data-fancybox]").fancybox({
                    // Options (if needed)
                    animationEffect: "fade", // Fade animation
                    transitionEffect: "slide", // Slide transition
                    loop: true, // Loop through videos
                    buttons: ["zoom", "slideShow", "thumbs", "close"] // Display buttons
                });
            });
        </script>


        <div class="swiper hero-slider js-hero-slider">
            <div class="swiper-container js-swiper-slider">
                <div class="swiper-wrapper">
                    <div class="hero-slide swiper-slide" id="bx_3963854015_16800">
                        <picture class="lazy-img-wrap hero-slide-img-wrap">
                            <source data-srcset="{{asset('front-assets/images/banner/img1.jpg')}}"
                                srcset="
            {{asset('front-assets/images/banner/img1.jpg')}}
            "
                                media="(min-width: 768px)" />
                            <source data-srcset="{{asset('front-assets/images/banner/img1.jpg')}}" srcset="{{asset('front-assets/images/banner/img1.jpg')}}"
                                media="(min-width: 0px)" />
                            <img class="swiper-lazy hero-slide-img" data-src="{{asset('front-assets/images/banner/img1.jpg')}}"
                                src="{{asset('front-assets/images/banner/img1.jpg')}}" alt="img" />
                        </picture>
                        <div class="hero-slide-container container">
                            <div class="hero-slide-body">
                                <span style="font-size: 32px;color:#fff">ОСОБАЯ ПРОМЫШЛЕННАЯ ЗОНА
                                    <br></span>
                                <div class="hero-slide-title h1"> ЯНГИ АВЛОД</div>
                                <div class="hero-slide-subtitle">
                                    Особая промышленная зона расположенная в Янгихаятском районе города
                                    Ташкента. </div>
                                <div class="hero-video-trigger" data-fancybox
                                    data-src="{{asset('front-assets/video/video1.mp4')}}">
                                    смотреть видео
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second banner -->
                    <div class="hero-slide swiper-slide" id="bx_3963854015_17980">
                        <picture class="lazy-img-wrap hero-slide-img-wrap">
                            <source data-srcset="{{asset('front-assets/images/banner/img2.jpg')}}"
                            
                                srcset="
              {{asset('front-assets/images/banner/img2.jpg')}}
            "
                                media="(min-width: 768px)" />
                            <source data-srcset="{{asset('front-assets/images/banner/img2.jpg')}}"
                                srcset="
              {{asset('front-assets/images/banner/img2.jpg')}}
            "
                                media="(min-width: 0px)" />
                            <img class="swiper-lazy hero-slide-img" data-src="{{asset('front-assets/images/banner/img2.jpg')}}"
                                src="{{asset('front-assets/images/banner/img2.jpg')}}" alt="img" />
                        </picture>
                        <div class="hero-slide-container container">
                            <div class="hero-slide-body">
                                <div class="hero-slide-title h1">
                                    Развитая инфраструктура
                                </div>
                                <div class="hero-slide-subtitle">
                                    Новый технологичный город с готовой<br />производственной,
                                    инженерной, транспортной, таможенной и
                                    социально-административной инфраструктурой
                                </div>
                                <div class="hero-video-trigger" data-fancybox
                                    data-src="{{asset('front-assets/video/video1.mp4')}}">
                                    смотреть видео
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-slide swiper-slide" id="bx_3963854015_16801">
                        <picture class="lazy-img-wrap hero-slide-img-wrap">
                            <source data-srcset="{{asset('front-assets/images/banner/img3.jpg')}}"
                                srcset="
            {{asset('front-assets/images/banner/img3.jpg')}}
            "
                                media="(min-width: 768px)" />
                            <source data-srcset="{{asset('front-assets/images/banner/img3.jpg')}}"
                                srcset="
            {{asset('front-assets/images/banner/img3.jpg')}}
            "
                                media="(min-width: 0px)" />
                            <img class="swiper-lazy hero-slide-img" data-src="{{asset('front-assets/images/banner/img3.jpg')}}"
                                src="{{asset('front-assets/images/banner/img3.jpg')}}" alt="img" />
                        </picture>
                        <div class="hero-slide-container container">
                            <div class="hero-slide-body">
                                <div class="hero-slide-title h1">
                                    Налоговые преференции
                                </div>
                                <div class="hero-slide-subtitle">
                                    Уникальная бизнес-среда со значительными<br />налоговыми
                                    преференциями и особой системой обслуживания бизнеса
                                    для быстрого развития компаний
                                </div>
                                <div class="hero-video-trigger" data-fancybox
                                    data-src="{{asset('front-assets/video/video1.mp4')}}">
                                    смотреть видео
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-slide swiper-slide" id="bx_3963854015_18583">
                        <picture class="lazy-img-wrap hero-slide-img-wrap">
                            <source
                                data-srcset="https://rodina-geroya.ru/wp-content/uploads/2614113701240961.jpg"
                                srcset="
              /upload/slam.image/iblock/731/7317688293aea6c78ec563210d72f581-80.jpg
            "
                                media="(min-width: 768px)" />
                            <source
                                data-srcset="https://industrialpark.by/upload/slam.image/iblock/d58/d582bea056204f922614b8fe2c9dcdb4-70.jpg"
                                srcset="
              /upload/slam.image/iblock/d58/d582bea056204f922614b8fe2c9dcdb4-70.jpg
            "
                                media="(min-width: 0px)" />
                            <img class="swiper-lazy hero-slide-img" data-src="/./images/banner/img1.jpg"
                                src="{{asset('front-assets/images/banner/img1.jpg')}}" alt="img" />
                        </picture>
                        <div class="hero-slide-container container">
                            <div class="hero-slide-body">
                                <div class="hero-slide-title h1">Доступ к рынкам</div>
                                <div class="hero-slide-subtitle">
                                    Крупнейший инфраструктурный проект на экономическом
                                    поясе Шелкового пути с быстрым доступом на рынки Азии
                                    и Европы
                                </div>
                                <div class="hero-video-trigger" data-fancybox
                                    data-src="{{asset('front-assets/video/video1.mp4')}}">
                                    смотреть видео
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="swiper-pagination js-swiper-pagination"></div>
        </div>
        <div class="hero-slide-desc-container container">
            <div class="hero-slide-desc">
                <h1 class="hero-slide-desc-title">
                    ОСОБАЯ ПРОМЫШЛЕННАЯ ЗОНА «YANGI AVLOD»
                </h1>
                <div class="hero-slide-desc-text">
                    Особая промышленная зона расположенная в Янгихаятском районе города Ташкента. Проект
                    предполагает 764,5 га промышленной территории с развитой логистической инфраструктурой,
                    складскими, административными и коммерческими объектами
                </div>
            </div>
            <br />
            <br />
        </div>
        <div class="hero-video-list">
            <a class="hero-video-item" data-fancybox="GALLERY_ID_16800"
                href="https://www.youtube.com/watch?v=kRLw6VUHSbA"></a>
            <a class="hero-video-item" data-fancybox="GALLERY_ID_17980"
                href="https://www.youtube.com/watch?v=OCHniiLoP58"></a>
            <a class="hero-video-item" data-fancybox="GALLERY_ID_16801"
                href="https://www.youtube.com/watch?v=fkaQtamHn8k"></a>
            <a class="hero-video-item" data-fancybox="GALLERY_ID_18583"
                href="https://www.youtube.com/watch?v=kRLw6VUHSbA"></a>
        </div>
    </div>
</div>

<div class="no-critical no-critical--preloader">
    <div class="about-slider-section">
        <div class="about-slider-container container">
            <div class="title">
                <div class="title-head">
                    <div class="title-value">О парке</div>
                </div>
            </div>
            <div class="swiper about-slider js-about-slider">
                <div class="swiper-container js-swiper-slider">
                    <div class="swiper-wrapper">
                        <div class="about-slide swiper-slide">
                            <div class="about-slide-container" id="bx_1967836421_16799">
                                <picture class="lazy-img-wrap about-slide-img-wrap">
                                    <source data-srcset="{{asset('front-assets/images/park/img1.jpg')}}"
                                        srcset="
                  data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==
                "
                                        media="(min-width: 500px; min-height:500px)" />
                                    <source data-srcset="{{asset('front-assets/images/park/img1.jpg')}}"
                                        srcset="
                  data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==
                "
                                        media="(min-width: 0px)" />
                                    <img class="swiper-lazy about-slide-img"
                                        data-src="{{asset('front-assets/images/park/img1.jpg')}}"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        alt="Индустриальный парк «Великий камень»" />
                                </picture>
                                <div class="about-slide-body">
                                    <div class="about-slide-title">
                                        Индустриальный парк «Великий камень»
                                    </div>
                                    <div class="about-slide-desc">
                                        Парк расположен в 25 км от столицы Республики
                                        Беларусь – города Минска в уникальном природном
                                        комплексе и в непосредственной близости от
                                        международного аэропорта, железнодорожных путей,
                                        транснациональной автомобильной магистрали
                                        Берлин-Москва. На территории парка планируется
                                        разместить производственные и жилые зоны, офисные и
                                        торгово-развлекательные комплексы, финансовый и
                                        научно-исследовательский центры. «Великий камень»
                                        предназначен для развития высокотехнологичной
                                        промышленности и бизнеса, в том числе производства,
                                        логистики, проведения исследований и разработок.
                                    </div>
                                    <!--<a class="about-slide-link" href="/o-parke/obshhaya-informaciya/">ПОДРОБНЕЕ</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="about-slide swiper-slide">
                            <div class="about-slide-container" id="bx_1967836421_17981">
                                <picture class="lazy-img-wrap about-slide-img-wrap">
                                    <source data-srcset="{{asset('front-assets/images/park/img2.jpg')}}"
                                        srcset="
                  data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==
                "
                                        media="(min-width: 500px)" />
                                    <source data-srcset="{{asset('front-assets/images/park/img2.jpg')}}"
                                        srcset="
                  data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==
                "
                                        media="(min-width: 0px)" />
                                    <img class="swiper-lazy about-slide-img"
                                        data-src="{{asset('front-assets/images/park/img2.jpg')}}"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        alt="Типовые производственные корпуса" />
                                </picture>
                                <div class="about-slide-body">
                                    <div class="about-slide-title">
                                        Типовые производственные корпуса
                                    </div>
                                    <div class="about-slide-desc">
                                        Предлагаем в аренду или продажу в частную
                                        собственность готовые производственные помещения с типовыми
                                        характеристиками
                                        (обогрев, вентиляция, грузовые подъёмники,
                                        разведенное электричество, оптоволокно и прочее) для
                                        быстрого старта бизнеса.
                                    </div>
                                    <!--<a class="about-slide-link" href="/o-parke/obshhaya-informaciya/">ПОДРОБНЕЕ</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="about-slide swiper-slide">
                            <div class="about-slide-container" id="bx_1967836421_17982">
                                <picture class="lazy-img-wrap about-slide-img-wrap">
                                    <source data-srcset="{{asset('front-assets/images/park/img3.jpg')}}"
                                        srcset="
                 {{asset('front-assets/images/park/img3.jpg')}}
                "
                                        media="(min-width: 500px)" />
                                    <source data-srcset="{{asset('front-assets/images/park/img3.jpg')}}"
                                        srcset="
                 {{asset('front-assets/images/park/img3.jpg')}}
                "
                                        media="(min-width: 0px)" />
                                    <img class="swiper-lazy about-slide-img"
                                        data-src="{{asset('front-assets/images/park/img3.jpg')}}"
                                        src="{{asset('front-assets/images/park/img3.jpg')}}"
                                        alt="Уличная сеть" />
                                </picture>
                                <!-- <div class="about-slide-body">
              <div class="about-slide-title">Уличная сеть</div>
              <div class="about-slide-desc">
                В рамках первой очереди развития парка на общей
                площади 850 га построены современные 4-6 полосные
                дороги с асфальтобетонным покрытием, уличным
                освещением, озеленением и пешеходными тротуарами с
                велодорожками.
              </div>
            </div> -->
                            </div>
                        </div>
                        <div class="about-slide swiper-slide">
                            <div class="about-slide-container" id="bx_1967836421_17983">
                                <picture class="lazy-img-wrap about-slide-img-wrap">
                                    <source data-srcset="{{asset('front-assets/images/park/img4.jpg')}}"
                                        srcset="
                {{asset('front-assets/images/park/img4.jpg')}}
                "
                                        media="(min-width: 500px)" />
                                    <source data-srcset="{{asset('front-assets/images/park/img4.jpg')}}"
                                        srcset="
                {{asset('front-assets/images/park/img4.jpg')}}
                "
                                        media="(min-width: 0px)" />
                                    <img class="swiper-lazy about-slide-img"
                                        data-src="{{asset('front-assets/images/park/img4.jpg')}}" src="{{asset('front-assets/images/park/img4.jpg')}}"
                                        alt="Офисное здание в «Великом камне» " />
                                </picture>
                                <div class="about-slide-body">
                                    <div class="about-slide-title">
                                        Выгодное расположение промышленной зоны
                                    </div>
                                    <div class="about-slide-desc">
                                        Участок расположен в южной части
                                        Ташкента, к северо - востоку от него находится Новый Ташкент. Он
                                        примыкает к железнодорожной линии.


                                        В настоящее время здесь преобладают
                                        сельскохозяйственные земли, на
                                        которые в будущем будет осуществлен
                                        перенос текущих предприятий вблизи населенных пунктов .
                                    </div>
                                    <!--<a class="about-slide-link" href="/o-parke/obshhaya-informaciya/">ПОДРОБНЕЕ</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="about-slide swiper-slide">
                            <div class="about-slide-container" id="bx_1967836421_17991">
                                <picture class="lazy-img-wrap about-slide-img-wrap">
                                    <source data-srcset="{{asset('front-assets/images/park/img5.jpg')}}"
                                        srcset="
                  {{asset('front-assets/images/park/img5.jpg')}}
                "
                                        media="(min-width: 500px)" />
                                    <source data-srcset="{{asset('front-assets/images/park/img5.jpg')}}"
                                        srcset="
                  {{asset('front-assets/images/park/img5.jpg')}}
                "
                                        media="(min-width: 0px)" />
                                    <img class="swiper-lazy about-slide-img"
                                        data-src="{{asset('front-assets/images/park/img5.jpg')}}"
                                        src="{{asset('front-assets/images/park/img5.jpg')}}"
                                        alt="Распределение секторов проекта" />
                                </picture>
                                <div class="about-slide-body">
                                    <div class="about-slide-title">
                                        Распределение секторов проекта
                                    </div>
                                    <!-- <div class="about-slide-desc">
                <p></p>
                <p>
                  Для удобства размещения подрядных строительных
                  организаций на территории парка функционирует
                  строительный городок с возможностью размещения
                  более 1,5 тыс. человек. Здесь также создана
                  инфраструктура для досуга: универсальная
                  спортивная площадка, зона с тренажерами для
                  занятий на улице, контейнерный городок для
                  объектов бытового обслуживания и отдыха.
                </p>
                <p></p>
              </div> -->
                                    <!--<a class="about-slide-link" href="/o-parke/obshhaya-informaciya/">ПОДРОБНЕЕ</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="about-slide swiper-slide">
                            <div class="about-slide-container" id="bx_1967836421_17984">
                                <picture class="lazy-img-wrap about-slide-img-wrap">
                                    <source data-srcset="{{asset('front-assets/images/park/img6.jpg')}}"
                                        srcset="
                  {{asset('front-assets/images/park/img6.jpg')}}
                "
                                        media="(min-width: 500px)" />
                                    <source data-srcset="{{asset('front-assets/images/park/img6.jpg')}}"
                                        srcset="
                  {{asset('front-assets/images/park/img6.jpg')}}
                "
                                        media="(min-width: 0px)" />
                                    <img class="swiper-lazy about-slide-img"
                                        data-src="{{asset('front-assets/images/park/img6.jpg')}}"
                                        src="{{asset('front-assets/images/park/img6.jpg')}}"
                                        alt="Пожарное депо" />
                                </picture>
                                <div class="about-slide-body">
                                    <div class="about-slide-title">Предпосылки для создания Особой
                                        Промышленной зоны</div>
                                    <div class="about-slide-desc">
                                        <p>
                                            В черте г. Ташкент расположены более
                                            700 крупных и средних предприятий
                                            обрабатывающей промышленности.
                                            Согласно концепции развития г. Ташкент,
                                            запланирован перенос производственных предприятий за черту
                                            проживания
                                            городского населения, с размещением на
                                            территории нового Индустриального
                                            Парка.
                                            Таким образом, достигается
                                            максимальный эффект от совместного
                                            использования инфраструктуры, научно - технической базы и
                                            кооперации между отраслями и предприятиями .
                                        </p>
                                    </div>
                                    <!--<a class="about-slide-link" href="/o-parke/obshhaya-informaciya/">ПОДРОБНЕЕ</a>-->
                                </div>
                            </div>
                        </div>
           
                    </div>
                </div>
                <button class="swiper-button swiper-button-prev js-swiper-button-prev" type="button"
                    aria-label="Предыдущий слайд"></button>
                <button class="swiper-button swiper-button-next js-swiper-button-next" type="button"
                    aria-label="Следующий слайд"></button>
                <div class="swiper-pagination js-swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="history-slider-section">
        <div class="history-slider-container container">
            <div class="swiper history-slider js-history-slider">
                <div class="swiper-container js-swiper-slider">
                    <div class="swiper-wrapper">
                        <div class="history-slide swiper-slide" id="bx_38665619_16796">
                            <div class="history-slide-container">
                                <div class="history-slide-date">
                                    <div class="history-slide-year">2020</div>
                                    <div class="history-slide-month">
                                        <span>Ф</span><span>Е</span><span>В</span><span>Р</span><span>А</span><span>Л</span><span>Ь</span>
                                    </div>

                                </div>
                                <div class="history-slide-desc">
                                    Одобрен Закон Республики Узбекистан, от 17.02.2020 г. № ЗРУ-604 о
                                    специальных экономических зонах.
                                    Целью настоящего Закона является регулирование отношений в сфере
                                    организации функционирования и развития специальных экономических зон.
                                </div>
                            </div>
                        </div>
                        <div class="history-slide swiper-slide" id="bx_38665619_16794">
                            <div class="history-slide-container">
                                <div class="history-slide-date">
                                    <div class="history-slide-year">2024</div>
                                    <div class="history-slide-month">
                                        <span>А</span><span>П</span><span>Р</span><span>Е</span><span>Л</span><span>Ь</span>
                                    </div>

                                </div>
                                <div class="history-slide-desc">
                                    Управляющая компания Особой промышленной зоны «Янги авлод» была создана
                                    в апреле 2024 года постановлением Президента Республики Узбекистан №
                                    ПП-138.
                                </div>
                            </div>
                        </div>
                        <div class="history-slide swiper-slide" id="bx_38665619_16793">
                            <div class="history-slide-container">
                                <div class="history-slide-date">
                                    <div class="history-slide-year">2024</div>
                                    <div class="history-slide-month">
                                        <span>И</span><span>Ю</span><span>Н</span><span>Ь</span>
                                    </div>

                                </div>
                                <div class="history-slide-desc">
                                    Категория земельных участков изменения от орошаемых земель
                                    сельскохозяйственного назначения на категорию промышленности,
                                    транспорта, связи, обороны и иного назначения.

                                    Подписано соглашение с China CAMC Engineering на разработку концепции и
                                    мастер плана ОПЗ. </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="advantages-section">
        <div class="advantages-container container">
            <div class="title">
                <div class="title-head">
                    <div class="title-value">Основные задачи и направления деятельности</div>
                </div>
            </div>
            <div class="advantages-nav">
                <div class="row">
                    <div class="col-12 col-xxl-6">
                        <div class="nav-tabs-wrap nav-tabs-wrap--advantages">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <div class="nav-link" id="ID4157421150-LINK2" data-toggle="tab"
                                        data-target="#ID4157421150-TAB2" role="tab"
                                        aria-selected="true">
                                        Налаживание производства
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link" id="ID4157421150-LINK5" data-toggle="tab"
                                        data-target="#ID4157421150-TAB5" role="tab"
                                        aria-selected="false">
                                        Расширение проектов
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link" id="ID4157421150-LINK4" data-toggle="tab"
                                        data-target="#ID4157421150-TAB4" role="tab"
                                        aria-selected="false">
                                        Создание инфраструктуры
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link" id="ID4157421150-LINK3" data-toggle="tab"
                                        data-target="#ID4157421150-TAB3" role="tab"
                                        aria-selected="false">
                                        Увеличение объема развития
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link" id="ID4157421150-LINK1" data-toggle="tab"
                                        data-target="#ID4157421150-TAB1" role="tab"
                                        aria-selected="false">
                                        Выделение земельных участков
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid--hd">
            <div class="advantages-list">
                <div class="tab-content">
                    <div class="tab-pane fade" id="ID4157421150-TAB1" role="tabpanel">
                        <div class="row">
                            <div class="col-12 col-xxl-6">
                                <div class="advantages-card advantages-card--left">
                                    <div class="advantages-card-container"
                                        style="color: #fff; background: #005eb8">
                                        <div class="advantages-card-img lazy-img"
                                            data-bg="url(/local/templates/html/images/advantages-0.jpg), linear-gradient(transparent, transparent)">
                                        </div>
                                        <div class="advantages-card-body">
                                            <div class="row advantages-card-statistics-list">
                                                <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit="%">
                                                                35
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Отчисления в ФСЗН<br />
                                                                от средней заработной плате по стране
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit="%">
                                                                0
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Налог с иностранных<br />
                                                                работников
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit="%">
                                                                13
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Подоходный налог<br />до 2023 год
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit="%">
                                                                9
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Подоходный налог<br />с 2023 года по
                                                                2062 год
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xxl-6">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #fff; background: #005eb8">
                                                <div class="advantages-card-body">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit="%">
                                                                0
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Налог на прибыль
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="advantages-card-text">
                                                        0% — налог на прибыль в течение 10 лет и
                                                        последующая их уплата по ставке, сниженной в
                                                        2 раза, до 2062 г.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #1c5265bf; border-color: #1c5265bf">
                                                <div class="advantages-card-body">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit="%">
                                                                0
                                                            </div>
                                                            <div class="statistics-card-name">
                                                                Таможенные<br />
                                                                пошлины и НДС
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="advantages-card-text">
                                                        - Оборудование и комплектующие<br />- Сырье
                                                        и материалы при экспорте товаров за пределы
                                                        ЕАЭС (таможенная процедура свободной
                                                        таможенной зоны)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 scol-xxl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #fff; background: #1c5265bf">
                                                <div class="advantages-card-body">
                                                    <div class="col-12">
                                                        <div
                                                            class="statistics-card statistics-card--small statistics-card--horizontal statistics-card--position-center3">
                                                            <div class="statistics-card-container">
                                                                <div class="statistics-card-value"
                                                                    data-unit="%">
                                                                    0
                                                                </div>
                                                                <div class="statistics-card-name">
                                                                    Земельный налог и налог на
                                                                    недвижимость<br />до 2062 года
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
                    </div>

                    <div class="tab-pane fade show active" id="ID4157421150-TAB2" role="tabpanel">
                        <div class="row">
                            <div class="col-12 col-xxl-6">
                                <div class="advantages-card advantages-card--left advantages-card--big">
                                    <div class="advantages-card-container"
                                        style="color: #1c5265bf; border-color: #1c5265bf; border: 1px solid #1c5265bf">
                                        <div class="advantages-card-img lazy-img"></div>
                                        <div class="advantages-card-body">
                                            <div class="advantages-card-text">
                                                <h3>Создание соответствующей банковской, туристической,
                                                    торговой и социальной инфраструктуры, взаимосвязанной с
                                                    ОПЗ «Янги авлод» и прилегающими к ней населенными
                                                    пунктами</h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xxl-6">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #1c5265bf; border-color: #1c5265bf">
                                                <div class="advantages-card-body">
                                                    <div class="advantages-card-text">
                                                        <h3>Налаживание производства новых видов
                                                            конкурентоспособной продукции с высокой
                                                            добавленной стоимостью в сотрудничестве с
                                                            международными брендами;</h3>
                                                        <!-- - Парк расположен в самом центре Беларуси<br />-
                        Развитое транспортное сообщение в пределах
                        прямой досягаемости<br />- Международная
                        автомагистраль Москва-Берлин (M1 / E30) в
                        Россию и Центральную Европу проходит через
                        Парк -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #1c5265bf; border-color: #1c5265bf">
                                                <div class="advantages-card-body">
                                                    <div class="statistics-card statistics-card--small">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit=""></div>
                                                            <div class="statistics-card-name"></div>
                                                        </div>
                                                    </div>
                                                    <!-- <div
                        class="statistics-card-value"
                        data-unit="км"
                      >
                        &lt;600
                      </div> -->
                                                    <h3>Расширение проектов промышленной кооперации и
                                                        локализации, в том числе внедрение кластерной
                                                        системы;</h3>
                                                    <!-- <div class="advantages-card-text">
                        Рига — <b>499 км</b><br />Клайпеда —
                        <b>530 км</b><br />Калининград —
                        <b>585 км</b><br />Дуйсбург, речной порт —
                        <b>1644 км</b>
                      </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #1c5265bf; border-color: #1c5265bf">
                                                <div class="advantages-card-body">
                                                    <div class="advantages-card-text">
                                                        <h3>Увеличение объема сфер промышленности и услуг
                                                            путем их развития</h3>
                                                        <!-- - Два крупнейших трансъевропейских
                        железнодорожных транспортных коридора
                        обеспечивают отличные связи с Европой и
                        Россией, а также с Балтийским и Черным
                        морями <br />- Прямое подключение к
                        Транссибирской магистрали <br />- Прямое
                        сообщение с транзитным международным
                        маршрутом Чунцин - Синьцзян - Европа -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                        <div class="advantages-card">
                                            <div class="advantages-card-container"
                                                style="color: #1c5265bf; border-color: #1c5265bf">
                                                <div class="advantages-card-body">
                                                    <div
                                                        class="statistics-card statistics-card--small statistics-card--horizontal">
                                                        <div class="statistics-card-container">
                                                            <div class="statistics-card-value"
                                                                data-unit=""></div>
                                                            <div class="statistics-card-name"></div>
                                                        </div>
                                                    </div>
                                                    <!-- <div
                        class="statistics-card-value"
                        data-unit="км"
                      >
                        &lt;1
                      </div> -->
                                                    <h3>Выделение субъектам предпринимательства земельных
                                                        участков на основе права аренды в установленном
                                                        порядке</h3>
                                                    <!-- <div class="advantages-card-text">
                        - Международный аэропорт включен в границы
                        Парка <br /> -->
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
    </div>
</div>
<br />


<style>
    .become-resident-section {
        padding: 50px 0 !important;
    }
</style>

<div class="become-resident-section lazy-img"
    data-bg="url({{asset('front-assets/local/templates/html/images/become-resident-bg.svg')}}), linear-gradient(transparent, transparent)">
    <div class="become-resident-container container">
        <div class="title title--light">
            <div class="title-head">
                <div class="title-value">
                    Преимущества
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 become-resident-item-col">
                <div class="become-resident-item">
                    <div class="become-resident-item-header">
                        <div class="become-resident-title">
                            <div class="become-resident-title-index">1</div>
                            <div class="become-resident-title-value">
                                Форма собственности
                            </div>
                        </div>
                        <div class="become-resident-subtitle">
                            ОПЗ «Янги авлод» не имеет аналогов и создана в юридической в форме общества с
                            ограниченной ответственностью1, что дает гибкость, позволяет учредителям:
                            - определить структуру управления, доли в уставном капитале;
                            - право на имущество, которое может быть приватизировано;
                            - извлекать прибыль в пользу учредителей.
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-4 become-resident-item-col">
                <div class="become-resident-item">
                    <div class="become-resident-item-header">
                        <div class="become-resident-title">
                            <div class="become-resident-title-index">2</div>
                            <div class="become-resident-title-value">
                                Льготы и преференции
                            </div>
                        </div>
                        <div class="become-resident-subtitle">
                            В период деятельности ОПЗ «Янги авлод» на его участников распространяются
                            отдельные налоговые, таможенные льготы и другие преференции, установленные для
                            участников специальных экономических зон2 .
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-4 become-resident-item-col">
                <div class="become-resident-item become-resident-item--nopading">
                    <div class="become-resident-item-header">
                        <div class="become-resident-title">
                            <div class="become-resident-title-index">3</div>
                            <div class="become-resident-title-value">
                                Гибкие условия сотрудничества </div>
                        </div>
                        <div class="become-resident-subtitle">
                            На территории ОПЗ предусмотрено:
                            - применение международных стандартов и требований при строительстве объектов;
                            - самостоятельное формирование инженерно-коммуникационной и социальной
                            инфраструктуры;
                            - осуществление учета и взаиморасчетов за поставленные коммунальные услуги,
                            услуги связи и энергоресурсы на основе единого контракта, заключаемого
                            участниками особой промышленной зоны с управляющей компанией особой промышленной
                            зоны3.
                        </div>
                    </div>
                    <div class="become-resident-item-body">

                        <a class="become-resident-item-btn become-resident-item-btn--mobile"
                            href="investoram/registratsiya-rezidentov/index.html">СТАТЬ РЕЗИДЕНТОМ</a>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-4 become-resident-item-col m-auto">
                <div class="become-resident-item">
                    <div class="become-resident-item-header">
                        <div class="become-resident-title">
                            <div class="become-resident-title-index">4</div>
                            <div class="become-resident-title-value">
                                Всесторонняя поддержка
                            </div>
                        </div>
                        <div class="become-resident-subtitle">
                            На территории ОПЗ предусмотрено:
                            организация выдачи лицензий и документов разрешительного характера, в том числе
                            на проектирование, строительство, эксплуатацию, использование зданий и
                            сооружений, а также использование земельных участков в соответствии с
                            генеральным планом особой промышленной зоны по принципу «одно окно» 3.
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-4 become-resident-item-col m-auto">
                <div class="become-resident-item become-resident-item--nopading">
                    <div class="become-resident-item-header">
                        <div class="become-resident-title">
                            <div class="become-resident-title-index">5</div>
                            <div class="become-resident-title-value">
                                Потенциал
                            </div>
                        </div>
                        <div class="become-resident-subtitle">
                            На территории ОПЗ планируется создание международной свободной экономической
                            зоны, исходя из опыта управляющих компаний передовых специальных экономических
                            зон, признанных на международном уровне.
                            При этом в целях применения исламских финансовых инструментов предусмотрение
                            вопроса внедрения специального правового режима "Регуляторной песочницы" 4.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<br />

<div class="partner-slider-section">
    <div class="partner-slider-container container">
        <div class="title">
            <div class="title-head">
                <div class="title-value">Наши партнеры</div>
                <a class="title-more btn--more hidden" href="#" aria-label="ВСЕ ПАРТНЕРЫ">ВСЕ
                    ПАРТНЕРЫ</a>
            </div>
        </div>
        <div class="swiper partner-slider js-partner-slider">
            <div class="swiper-container js-swiper-slider">
                <div class="swiper-wrapper">
                    <a class="lazy-img-wrap partner-slide swiper-slide" target="_blank" href="#"
                        aria-label>
                        <img class="swiper-lazy partner-slide-img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="https://industrialpark.by/upload/slam.image/iblock/889/8891421f471ed7d59325ce9f01895300-80.jpg"
                            alt="China National Machinery Industry Corporation (Sinomach)" />
                    </a>
                    <a class="lazy-img-wrap partner-slide swiper-slide" target="_blank" href="#"
                    aria-label>
                    <img class="swiper-lazy partner-slide-img"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        data-src="{{asset('front-assets/images/logo/img3.png')}}" alt="YangiHayot" />
                </a>
                    <a class="lazy-img-wrap partner-slide swiper-slide" target="_blank" href="#"
                        aria-label>
                        <img class="swiper-lazy partner-slide-img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="{{asset('front-assets/images/logo/img1.png')}}" alt="Toshkent Shahar Hokimligi" />
                    </a>
                    <a class="lazy-img-wrap partner-slide swiper-slide" target="_blank" href="#"
                        aria-label>
                        <img class="swiper-lazy partner-slide-img"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="{{asset('front-assets/images/logo/img2.png')}}" alt="Toshkent Invest" />
                    </a>


                    <a class="lazy-img-wrap partner-slide swiper-slide" target="_blank" href="#"
                        aria-label>
                        <img class="swiper-lazy partner-slide-img resize_logo" 
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="{{asset('front-assets/Logo.png')}}" alt="YangiAvlod»" />
                    </a>

                  
                </div>
            </div>
            <button class="swiper-button swiper-button-prev js-swiper-button-prev" type="button"
                aria-label="Предыдущий слайд"></button>
            <button class="swiper-button swiper-button-next js-swiper-button-next" type="button"
                aria-label="Следующий слайд"></button>
        </div>
    </div>
</div>

<div class="map-section pb-0">
    <style type="text/css">
        html,
        body,
        #map {
            width: 100%;
            height: 400px;
            padding: 0;
            margin: 0;
        }

        .ymaps-2-1-77-ground-pane {
            -webkit-filter: grayscale(100%);
        }

        .ymaps-2-1-77-gotoymaps {
            display: none;
        }

        #map {
            position: relative;
        }

        #map img {
            position: absolute;
            display: block;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -10;
        }
    </style>

    <iframe style="width: 100%;"
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4063.188205745143!2d69.25854800630309!3d41.165126256500535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2s!4v1721493849221!5m2!1sru!2s"
        height="550" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
@endsection