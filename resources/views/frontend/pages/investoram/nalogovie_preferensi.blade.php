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
                                <h1 class="h1 page-header-title small">НАЛОГОВЫЕ ПРЕФЕРЕНЦИИ
                                </h1>
                            </div>
                        </div>
                    </div>

                    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

                    <style>
                         table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        ul {
            margin: 0;
            padding-left: 20px;
        }

        tr td ul li {
            list-style-type: disc;
            margin-bottom: 5px;
        }
                    </style>

                    <div class="page-header-container">

                        <div class="page-header-body">
                            <div class="page-header-desc">

                                <div class="table-container">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Вид налога</th>
                                                <th scope="col">Особенности налоговых льгот</th>
                                                <th scope="col">Ставка</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Земельный налог</td>
                                                <td>Освобождение от уплаты налога на прибыль в зависимости от внесенного объема инвестиций. Освобождение со дня ввода в эксплуатацию.</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Налог на прибыль</td>
                                                <td>Освобождение от уплаты налога на прибыль в зависимости от внесенного объема инвестиций. Освобождение со дня ввода в эксплуатацию.</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Режим свободной таможенной зоны</td>
                                                <td>
                                                    <ul>
                                                        <li>Освобождение от выплаты таможенных пошлин (кроме НДС и сборы за таможенное оформление).</li>
                                                        <li>Освобождение при ввозе строительных материалов, если они не производятся в Руз.</li>
                                                        <li>Освобождение при ввозе технологического оборудования, аналоги которого не производятся в Руз.</li>
                                                        <li>Освобождение за сырье, материалы и комплектующие, используемые для производства и реализации продукции на экспорт.</li>
                                                    </ul>
                                                </td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Налог на имущество</td>
                                                <td>Освобождение со дня получения свидетельства о регистрации.</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Налог за пользование водными ресурсами</td>
                                                <td>Освобождение со дня получения свидетельства о регистрации.</td>
                                                <td>0%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
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
<script type="text/javascript"  src="{{asset('front-assets/bitrix/cache/js/s1/html/template_39fbaf6d82f625c2f260dd8e1c99c1be/template_39fbaf6d82f625c2f260dd8e1c99c1be_v16f7b.js')}}"></script>
<script type="text/javascript"  src="{{asset('front-assets/bitrix/cache/js/s1/html/page_e99ed1958ef8644bdff36f258e864051/page_e99ed1958ef8644bdff36f258e864051_v1807b.js')}}"></script>
@endsection


