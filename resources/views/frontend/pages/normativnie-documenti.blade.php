@extends('frontend.layouts.admin')

@section('frontend_content')
    <link href="{{ asset('front-assets/bitrix/cache/css/s1/html/page_0f349462c599906dc9f824518609b0ff/page_0f349462c599906dc9f824518609b0ff_v164c9.css') }}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
    <link href="{{ asset('front-assets/bitrix/cache/css/s1/html/template_6a79ccc7eb994082f6ac4993af815063/template_6a79ccc7eb994082f6ac4993af815063_v18023.css') }}" media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />

    <style>
        .section-margin {
            margin-top: 20px; /* Adjust margin as needed */
        }

        .list-unstyled {
            list-style-type: none; /* Remove default list bullet */
            padding-left: 0; /* Remove default left padding */
        }

        .list-unstyled li {
            margin-bottom: 10px; /* Spacing between list items */
        }

        .list-unstyled li a {
            color: #333; /* Link text color */
            text-decoration: none; /* Remove underline */
            font-size: 16px; /* Adjust font size */
            display: block;
            padding: 10px 0;
            transition: color 0.3s ease; /* Smooth transition for link color */
        }

        .list-unstyled li a:hover {
            color: #007bff; /* Change color on hover */
        }
    </style>

    <main class="main">
        <div class="no-critical no-critical--preloader">
            <div class="container" data-sticky-container>
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1">
                        <div class="page-header-section">
                            <div class="breadcrumb">
                                <div class="breadcrumb-container">
                                    <ul class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a class="breadcrumb___link" itemprop="item" href="../index.html" title="Главная">
                                                <span itemprop="name">Главная</span>
                                            </a>
                                            <meta itemprop="position" content="1" />
                                        </li>
                                        <li class="breadcrumb__item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <span class="breadcrumb___link" itemprop="item">Правовое регулирование</span>
                                            <meta itemprop="position" content="2" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page-header-container">
                                <div class="page-header-body">
                                    <h1 class="h1 page-header-title small">Правовое регулирование</h1>
                                </div>
                            </div>
                        </div>

                        <div class="section-margin">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://lex.uz/ru/docs/4737514" target="_blank">Закон «О специальных экономических зонах» от 17.02.2020г. №ЗРУ-604 <span style="color: blue">(Открыт)</span></a>
                                </li>
                                <li>
                                    <a href="https://lex.uz/ru/pdfs/6846309" target="_blank">ПП «О создании промышленной зоны Янги Авлод в г. Ташкенте» от 20.03.2024г. №138 <span style="color: blue">(Открыт)</span></a>
                                </li>
                                <li>
                                    <a href="https://lex.uz/docs/6598337" target="_blank">ПКМ «Об утверждении административного регламента оказания государственных услуг инвесторам на территории специальных экономических зон» от 07.09.2023г. №452 <span style="color: blue">(Открыт)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
