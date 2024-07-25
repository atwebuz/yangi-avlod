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
                           
                            <div class="contact-tabs__body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="ID-16825" role="tabpanel">
                                        <div class="contacts-table">
                                            <div class="contacts-table__header">
                                                <div class="contacts-table__header-title">
                                                    Администрация промышленной зоны
                                                </div>
                                            
                                            </div>
                                            <div class="contacts-table__body">
                                                <div class="contacts-table__row">
                                                    <div class="contacts-table__colname">
                                                        <div class="contacts-table__title">
                                                            Приемная (тел)
                                                        </div>
                                                    </div>
                                                    <div class="contacts-table__colvalue">
                                                        <a href="tel:+998771512414">+998 (77) 151-24-14 </a>
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
                                                            href="mailto:yangiavlodzone@gmail.com">yangiavlodzone@gmail.com</a>
                                                    </div>
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





        </div>
        </div>
        </div>

        </div>

    </main>
@endsection
