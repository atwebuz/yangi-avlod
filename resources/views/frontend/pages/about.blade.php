@extends('frontend.layouts.admin')
@section('frontend_content')
<style>
    .custom_images{
        width: 200px;
        height: 90px;
    }
    .mini-card{
        display: flex;
        align-items: center !important;

    }
    .mini-card__pic{
        height: auto !important;
    }
    .mini-card__body {
    display: flex;
    align-items: center;
    width: 100%;
    padding: 10px 20px 10px 40px;
        border: none !important;
    transition: border-color .3s ease;
}
</style>
            <div class="no-critical no-critical--preloader">
                <div class="container" data-sticky-container>
                    <div class="row">
               
                        <div class="col-xxl-12 col-lg-12 col-md-12">

                            <div class="page-header-section">
                                <div class="breadcrumb">
                                    <div class="breadcrumb-container">
                                        <ul class="breadcrumb__list" itemscope
                                            itemtype="http://schema.org/BreadcrumbList">
                                            <li class="breadcrumb__item " itemprop="itemListElement" itemscope
                                                itemtype="http://schema.org/ListItem">
                                                <a class="breadcrumb___link" itemprop="item" href="../../index.html"
                                                    title="Главная"><span itemprop="name">Главная</span></a>
                                                <meta itemprop="position" content="1" />
                                            </li>
                                            <li class="breadcrumb__item " itemprop="itemListElement" itemscope
                                                itemtype="http://schema.org/ListItem">
                                                <a class="breadcrumb___link" itemprop="item" href="../index.html"
                                                    title="О парке"><span itemprop="name">О парке</span></a>
                                                <meta itemprop="position" content="2" />
                                            </li>
                                            <li class="breadcrumb__item active" itemprop="itemListElement" itemscope
                                                itemtype="http://schema.org/ListItem" class="active">
                                                <span class="breadcrumb___link" itemprop="item">Общая информация</span>
                                                <meta itemprop="position" content="3" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="page-header-container">
                                    <div class="page-header-body">
                                        <h1 class="h1 page-header-title small">Общая информация</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="no-critical no-critical--preloader">
                                <div class="content">
                                    Особая промышленная зона «Янги авлод» расположена в Янгихаётском районе города Ташкента. Проект предполагает 764,5 га промышленной территории с развитой логистической инфраструктурой и другими объектами, такими как складские помещения, административные помещения и коммерческие объекты.
                                    <p>
                                    </p>
                                     <p class="about-text">
                                        На территории парка планируется разместить производственные и жилые зоны, офисные и торгово-развлекательные комплексы, финансовый и научно-исследовательские центры. Фактически, строится современный международный эко-город с акцентом на высокотехнологичные и конкурентоспособные инновационные производства с высоким экспортным потенциалом.
                                    </p>
                                   <p class="about-text">
                                    В качестве резидентов индустриального парка могут выступать любые компании независимо от страны происхождения капитала. Понимая острую конкуренцию за инвестора на мировом рынке, государство для резидентов индустриального парка создало благоприятный инвестиционный климат, гарантированный как национальным законодательством, так и специальными международными соглашениями и обязательствами, предоставило беспрецедентные льготы и преференции, образовало отдельный и независимый орган государственного управления, осуществляющий комплексное административное обслуживание
                                    </p>
                                 <p class="about-text">
                                    Инвесторам предлагаются в аренду или продажу в частную собственность земельные участки со всей необходимой инженерно-транспортной инфраструктурой, коммуникациями, сетями и точками подключения для проектирования и строительства объектов. Кроме того, компании могут приобрести в аренду (частную собственность) готовые производственные помещения в типовых производственных корпусах, снабженных всей необходимой инфраструктурой, для запуска производств в самое короткое время.
                                      
                                     </p>
                                     На территории парка будет создана вся необходимая инфраструктура: современные дороги,  светофоры и велосипедные дорожки, трубопроводы, объекты водоснабжения, водозаборные сооружения, насосные станции, очистные сооружения, объекты газоснабжения, электрическая подстанция и сети, и тд.
                                    <p>
                                    </p>
                                
                                </div>
                                <div class="services">
                                    <div class="section-title">Приоритетные направления</div>

                                    <div class="services__list row">

                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16780">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/1.jpg')}}"
                                                            alt="Машиностроение">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Автомобилестроение </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16781">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/7.jpg')}}"

                                                            alt="Мебельная продукция">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Мебельная продукция</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16782">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/2.jpg')}}"
                                                            alt="Металлургия">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Металлургия</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16783">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/8.jpg')}}"
                                                            alt="Бумажная продукция ">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Бумажная продукция </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16784">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/3.jpg')}}"
                                                            alt="Тяжелая промышленность">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Тяжелая промышленность </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16785">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/9.jpg')}}"
                                                            alt="Электротехника">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Электротехника </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16786">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/4.jpg')}}"
                                                            alt="Легкая промышленность">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Легкая промышленность </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16787">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/10.jpg')}}"
                                                            alt="Фармацевтика">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Фармацевтика </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16788">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/5.jpg')}}"
                                                            alt="Пищевая промышленность">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Пищевая промышленность </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16789">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/11.jpg')}}"
                                                            alt="Логистика">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Логистика
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16790">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/6.jpg')}}"
                                                            alt="Строительные материалы">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Строительные материалы </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mini-card" id="bx_1967836421_16791">
                                                <div class="mini-card__pic blue-ovelay"><span class="lazy-img-wrap">
                                                        <img class="lazy-img custom_images"
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            data-src="{{asset('front-assets/images/about/12.jpg')}}"
                                                            alt="Производство медицинских изделий и оказание медицинских услуг">
                                                    </span>
                                                </div>
                                                <div class="mini-card__body">
                                                    <div class="mini-card__title">Производство медицинских изделий и
                                                        оказание медицинских услуг </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                          
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
@endsection