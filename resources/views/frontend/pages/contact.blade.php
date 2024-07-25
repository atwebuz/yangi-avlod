@extends('frontend.layouts.admin')
@section('frontend_content')


        <link href="{{asset('front-assets/bitrix/cache/css/s1/html/page_c1e50e720c878fffbcfc5f9f8508ddbf/page_c1e50e720c878fffbcfc5f9f8508ddbf_v12a2b.css')}}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
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
                                            <a class="breadcrumb___link" itemprop="item" href="../index.html"
                                                title="Главная"><span itemprop="name">Главная</span></a>
                                            <meta itemprop="position" content="1" />
                                        </li>
                                        <li class="breadcrumb__item active" itemprop="itemListElement" itemscope
                                            itemtype="http://schema.org/ListItem" class="active">
                                            <span class="breadcrumb___link" itemprop="item">Контакты</span>
                                            <meta itemprop="position" content="2" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page-header-container">
                                <div class="page-header-body">
                                    <h1 class="h1 page-header-title ">Контакты</h1>
                                </div>
                            </div>
                        </div>

                        <div class="contact-tabs">
                            <div class="contact-tabs__nav">
                                <div class="nav-tabs-wrap">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" id="bx_3218110189_16825">
                                            <div class="nav-link active" id="ID16825" data-toggle="tab"
                                                data-target="#ID-16825" role="tab" aria-selected="true">Администрация
                                                парка</div>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-tabs__body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="ID-16825" role="tabpanel">
                                        <div class="contacts-table">
                                            <div class="contacts-table__header">
                                                <div class="contacts-table__header-title">
                                                    Администрация индустриального парка
                                                </div>
                                                <div class="contacts-table__file">
                                                    <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/file/style.css");--><a
                                                        class="file"
                                                        href="../upload/%d0%90%d0%b4%d0%bc%d0%b8%d0%bd%d0%b8%d1%81%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%8f.docx"
                                                        download="requisites" aria-label="Скачать файл"> <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                            class="file-img lazy-img"
                                                            data-src="../local/templates/html/images/doc.svg"><span
                                                            class="file-name">Скачать реквизиты</span></a>
                                                </div>
                                            </div>
                                            <div class="contacts-table__body">
                                                <div class="contacts-table__row">
                                                    <div class="contacts-table__colname">
                                                        <div class="contacts-table__title">
                                                            Приемная (тел/факс)
                                                        </div>
                                                    </div>
                                                    <div class="contacts-table__colvalue">
                                                        <a href="tel:+375175172875">+375 (17) 517-28-75 (факс)</a>
                                                    </div>
                                                </div>
                                                <div class="contacts-table__row">
                                                    <div class="contacts-table__colname">
                                                        <div class="contacts-table__title">
                                                            Электронная почта
                                                        </div>
                                                    </div>
                                                    <div class="contacts-table__colvalue">
                                                        <a
                                                            href="mailto:administration@greatstonepark.by">administration@greatstonepark.by</a>
                                                    </div>
                                                </div>
                                                <div class="contacts-table__row">
                                                    <div class="contacts-table__colname">
                                                        <div class="contacts-table__subtitle">
                                                            Глава администрации
                                                        </div>
                                                        <div class="contacts-table__title">
                                                            Ярошенко Александр Григорьевич
                                                        </div>
                                                    </div>
                                                    <div class="contacts-table__colvalue">
                                                        <a href="tel:+375175172875">+375 (17) 517-28-75</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contacts-table__row">
                                                <div class="contacts-table__colname">
                                                    <div class="contacts-table__subtitle">
                                                        Первый заместитель главы администрации
                                                    </div>
                                                    <div class="contacts-table__title">
                                                        Якимов Петр Николаевич
                                                    </div>
                                                </div>
                                                <div class="contacts-table__colvalue">
                                                    <a href="tel:+375175172891">+375 (17) 517-28-91</a>
                                                </div>
                                            </div>
                                            <div class="contacts-table__row">
                                                <div class="contacts-table__colname">
                                                    <div class="contacts-table__subtitle">
                                                        Заместитель главы администрации
                                                    </div>
                                                    <div class="contacts-table__title">
                                                        Табанюхов Олег Михайлович
                                                    </div>
                                                </div>
                                                <div class="contacts-table__colvalue">
                                                    <a href="tel:+375175173802">+375 (17) 517-38-02</a>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <a class="file"
                                            href="../upload/%d0%a1%d0%be%d0%b2%d0%bc%d0%b5%d1%81%d1%82%d0%bd%d0%b0%d1%8f%20%d0%ba%d0%be%d0%bc%d0%bf%d0%b0%d0%bd%d0%b8%d1%8f.docx"
                                            download="requisites" aria-label="Скачать файл"> <img
                                                src="../local/templates/html/images/doc.svg"
                                                class="file-img lazy-img loaded"
                                                data-src="/local/templates/html/images/doc.svg"
                                                data-was-processed="true"><span class="file-name">Скачать
                                                реквизиты</span></a>
                                    </div>
                                </div>





                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        </div>
        </div>

        </div>

    </main>
@endsection
