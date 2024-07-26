@extends('frontend.layouts.admin')
@section('frontend_content')
    <link
        href="{{ asset('front-assets/bitrix/cache/css/s1/html/page_e0a66551b9fe3e109c19c6296f2cfa4a/page_e0a66551b9fe3e109c19c6296f2cfa4a_v14376.css') }})"
        media="all" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
    <link
        href="{{ asset('front-assets/bitrix/cache/css/s1/html/template_9bf604bbf67c972104bd38acae7c3f9a/template_9bf604bbf67c972104bd38acae7c3f9a_v1895d.css') }}"
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
                                            <span class="breadcrumb___link" itemprop="item">Регистрация
                                                резидентов</span>
                                            <meta itemprop="position" content="3" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page-header-container">
                                <div class="page-header-body">
                                    <h1 class="h1 page-header-title small">Регистрация резидентов</h1>
                                </div>
                            </div>
                        </div>

                        <div class="plane-text">
                            Чтобы стать участником особой промышленной зоны «Янги Авлод» необходимо:

                        </div>
                        <br>
                        <br>
                        <div class="plan-main__descr-text content">
                            {{-- <div class="plane-text__title">Условия регистрации в качестве резидентов парка </div> --}}
                            <div class="plan-main__descr-text">
                                <ol>
                                    <li>Предоставление инициатором проекта инвестиционного заказа и бизнес-плана или
                                        технико-экономического обоснования проекта в ООО «Управляющая компания Особой
                                        индустриальной зоны «Янги авлод» (далее – Управляющая компания);
                                    </li>
                                    <li>Рассмотрение Управляющей компанией инвестиционного заказа и бизнес-плана проекта;

                                    </li>

                                    <li>После положительной оценки инвестиционного заказа проекта рабочей комиссией
                                        управляющей компании утверждается Главой администрации города Ташкента и
                                        выставляется на торги сроком на 30 дней;
                                    </li>
                                    <li>Заключение инвестиционного договора с инициатором проекта-победителя и договора
                                        аренды с ООО «Управляющая компания особой промышленной зоны «Янги Авлод».
                                    </li>
                                    <br>
                                    <ul>





                                    </ul>
                                    </li>

                                </ol>

                            </div>
                        </div>
                        <br>





                        <div class="res-form lazy-img"
                            data-bg="url(/local/templates/html/images/become-resident-bg.svg), linear-gradient(transparent, transparent)"
                            data-was-processed="true"
                            style="background-image: url(&quot;/local/templates/html/images/become-resident-bg.svg&quot;), linear-gradient(transparent, transparent);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="res-form__inner">
                                            <!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/title/style.css");-->
                                            <div class="title title--light">
                                                <div class="title-head">
                                                    <div class="title-value">Стать резидентом</div>
                                                </div>
                                            </div>

                                            <div class="slam-easyform">
                                                <form action="{{ route('orderCreate') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                
                                                    <div class="form-container">
                                                        <!-- FIO контактного лица -->
                                                        <div class="form-group">
                                                            <label class="form-control-label form-control-label--white" for="fio">
                                                                ФИО контактного лица<span class="asterisk"> *</span>
                                                            </label>
                                                            <input class="form-control @error('fio') is-invalid @enderror"
                                                                type="text" id="fio" name="fio" value="{{ old('fio') }}" required>
                                                            @error('fio')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                
                                                        <!-- Наименование компании and E-mail -->
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label form-control-label--white" for="company_name">
                                                                        Наименование компании<span class="asterisk">*</span>
                                                                    </label>
                                                                    <input class="form-control @error('company_name') is-invalid @enderror"
                                                                        type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" required>
                                                                    @error('company_name')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label form-control-label--white" for="email">
                                                                        Ваш E-mail<span class="asterisk"> *</span>
                                                                    </label>
                                                                    <input class="form-control @error('email') is-invalid @enderror"
                                                                        type="email" id="email" name="email" value="{{ old('email') }}" required>
                                                                    @error('email')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <!-- Контактный телефон and ИНН -->
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label form-control-label--white" for="phone">
                                                                        Контактный телефон<span class="asterisk"> *</span>
                                                                    </label>
                                                                    <input class="form-control @error('phone') is-invalid @enderror"
                                                                        type="number" id="phone" name="phone" value="{{ old('phone') }}" required>
                                                                    @error('phone')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label form-control-label--white" for="stir">
                                                                        ИНН<span class="asterisk"> *</span>
                                                                    </label>
                                                                    <input class="form-control @error('stir') is-invalid @enderror"
                                                                        type="number" id="stir" name="stir" value="{{ old('stir') }}" required>
                                                                    @error('stir')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <!-- File Uploads -->
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="drag_n_drop-field">
                                                                        <div class="file-input" dropzone="copy f:*/*">
                                                                            <ol class="webform-field-upload-list webform-field-upload-list-multiple" id="mfi-file_1"></ol>
                                                                            <div class="webform-field-upload" id="file_1-button">
                                                                                <span class="webform-small-button webform-button-upload">
                                                                                    Загрузите ТЭО.doc<span class="asterisk"> *</span>
                                                                                </span>
                                                                                <input type="file" id="file_1" name="bxu_files_teo[]" multiple accept=".doc, .docx, .xls, .xlsx, .txt, .rtf, .pdf, .png, .jpeg, .jpg, .gif">
                                                                                @error('bxu_files_teo.*')
                                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="drag_n_drop-field">
                                                                        <div class="file-input" dropzone="copy f:*/*">
                                                                            <ol class="webform-field-upload-list webform-field-upload-list-multiple" id="mfi-file_2"></ol>
                                                                            <div class="webform-field-upload" id="file_2-button">
                                                                                <span class="webform-small-button webform-button-upload">
                                                                                    Загрузите Бизнес-план<span class="asterisk"> *</span>
                                                                                </span>
                                                                                <input type="file" id="file_2" name="bxu_files_biznes[]" multiple accept=".doc, .docx, .xls, .xlsx, .txt, .rtf, .pdf, .png, .jpeg, .jpg, .gif">
                                                                                @error('bxu_files_biznes.*')
                                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <!-- Comment -->
                                                        <div class="form-group">
                                                            <label class="form-control-label form-control-label--white" for="comment">Комментарий</label>
                                                            <textarea class="form-control--textarea form-control @error('comment') is-invalid @enderror" id="comment" rows="5" name="comment">{{ old('comment') }}</textarea>
                                                            @error('comment')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                
                                                        <!-- Submit Button -->
                                                        <div class="row">
                                                            <div class="col-12 center-text">
                                                                <button type="submit" class="btn btn--primary btn--large">
                                                                    Отправить запрос
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                



                                                <div class="modal fade modal-add-holiday modal-feedback"
                                                    id="frm-modal-FORM-resident" role="dialog" aria-hidden="true">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .contact-box {
                                margin: 50px 0;
                                padding: 28px 30px;
                                background: #f2f2f2;
                            }

                            .contact-box__title {
                                margin-bottom: 20px;
                                font-size: 20px;
                                font-weight: 700;
                                text-align: center;

                            }

                            .contact-box__item {
                                font-size: 16px;
                                color: #777
                            }

                            .contact-box__item:not(:last-child) {
                                margin-bottom: 10px
                            }

                            .contact-box__item a {
                                font-size: 18px;
                                font-weight: 400;
                                color: #000 !important;
                                text-decoration: underline !important;
                                -webkit-text-decoration-color: #777 !important;
                                text-decoration-color: #777 !important
                            }

                            .contact-box__item a:hover {
                                text-decoration: none !important
                            }

                            .contact-box--center {
                                text-align: center
                            }

                            @media screen and (max-width: 1023px) {
                                .contact-box {
                                    margin-bottom: 50px
                                }
                            }
                            .mini-card__pic img {
                                max-width: 100%;
                                height: 100px !important;
                                width: 120px !important;
                            }
                            .mini-card__pic {
                        
                                height: unset !important;
                            }
                        </style>
                        <div class="doc-accordions">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-box">
                                       
                                            <div class="contact-box__list " style="display: flex">
                                                <div class="contact-box__item"
                                                    style="display: flex;justify-content: flex-start">
                                                    <div class="left">
                                                        <strong style="font-weight: 700">
                                                            Специалисты:
                                                        </strong>

                                                    </div>
                                                    <div class="right" style="padding: 0 20px">
                                                        <a href="tel:+998909922977 ">+998 (90) 992-29-77</a>, <br>

                                                        <a href="tel:+998998171180 ">+998 (99) 817-11-80</a>,<br>

                                                        <a href="tel:+998999616226 ">+998 (99) 961-62-26</a>,
                                                        <br>
                                                        <a
                                                            href="mailto:yangiavlodzone@gmail.com">yangiavlodzone@gmail.com</a>

                                                    </div>

                                                </div>

                                                <div class="contact-box__title">По всем вопросам, связанным с регистрацией в
                                                    парке, пожалуйста, обращайтесь по телефонам:
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="modal fade modal-add-holiday modal-feedback" id="frm-modal-FORM-resident"
                            role='dialog' aria-hidden='true'>
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title">Спасибо!</div>

                                    </div>
                                    <button class="modal-close" type="button" data-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="modal-body">
                                        <p class="ok-text">Сообщение успешно отправлено. В ближайшее
                                            время мы ответим Вам.</p>
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

    </main>
@endsection
