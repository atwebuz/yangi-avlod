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
                            <div class="plane-text__title">Условия регистрации в качестве резидентов парка </div>
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
                                                <form id="FORM-resident" class="bv-form" enctype="multipart/form-data"
                                                    method="POST" action="#" autocomplete="on" novalidate="novalidate">
                                                    <button type="submit" class="bv-hidden-submit"
                                                        style="display: none; width: 0px; height: 0px;"></button>
                                                    <div class="alert alert-success hidden" role="alert">
                                                        Сообщение успешно отправлено. В ближайшее время мы ответим Вам.
                                                    </div>
                                                    <div class="alert alert-danger hidden" role="alert">
                                                        Произошла ошибка. Сообщение не отправлено. </div>

                                                    <input type="hidden" name="FORM_ID" value="FORM-resident">
                                                    <input type="text" name="ANTIBOT[NAME]" value=""
                                                        class="hidden">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="form-control-label form-control-label--white"
                                                                for="FORM-resident_FIELD_TITLE">ФИО контактного лица<span
                                                                    class="asterisk"> *</span></label>
                                                            <input class="form-control" type="text"
                                                                id="FORM-resident_FIELD_TITLE" name="FIELDS[TITLE]"
                                                                value="" required=""
                                                                data-bv-message="Обязательное поле"
                                                                data-bv-field="FIELDS[TITLE]">
                                                            <small class="help-block" data-bv-validator="notEmpty"
                                                                data-bv-for="FIELDS[TITLE]" data-bv-result="NOT_VALIDATED"
                                                                style="display: none;">Обязательное поле</small>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="form-control-label form-control-label--white"
                                                                        for="FORM-resident_FIELD_CCOMPANY_NAME">Наименование
                                                                        компании<span class="asterisk"> *</span></label>
                                                                    <input class="form-control" type="text"
                                                                        id="FORM-resident_FIELD_CCOMPANY_NAME"
                                                                        name="FIELDS[CCOMPANY_NAME]" value=""
                                                                        required="" data-bv-message="Обязательное поле"
                                                                        data-bv-field="FIELDS[CCOMPANY_NAME]">
                                                                    <small class="help-block" data-bv-validator="notEmpty"
                                                                        data-bv-for="FIELDS[CCOMPANY_NAME]"
                                                                        data-bv-result="NOT_VALIDATED"
                                                                        style="display: none;">Обязательное поле</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="form-control-label form-control-label--white"
                                                                        for="FORM-resident_FIELD_EMAIL">Ваш E-mail<span
                                                                            class="asterisk"> *</span></label>
                                                                    <input class="form-control" type="email"
                                                                        id="FORM-resident_FIELD_EMAIL"
                                                                        name="FIELDS[EMAIL]" value=""
                                                                        required="" data-bv-message="Обязательное поле"
                                                                        data-bv-emailaddress-message="E-mail введен некорректно"
                                                                        data-bv-field="FIELDS[EMAIL]">
                                                                    <small class="help-block"
                                                                        data-bv-validator="emailAddress"
                                                                        data-bv-for="FIELDS[EMAIL]"
                                                                        data-bv-result="NOT_VALIDATED"
                                                                        style="display: none;">E-mail введен
                                                                        некорректно</small><small class="help-block"
                                                                        data-bv-validator="notEmpty"
                                                                        data-bv-for="FIELDS[EMAIL]"
                                                                        data-bv-result="NOT_VALIDATED"
                                                                        style="display: none;">Обязательное поле</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="form-control-label form-control-label--white"
                                                                        for="FORM-resident_FIELD_PHONE">Контактный
                                                                        телефон<span class="asterisk"> *</span></label>
                                                                    <input class="form-control" type="tel"
                                                                        id="FORM-resident_FIELD_PHONE"
                                                                        name="FIELDS[PHONE]" value=""
                                                                        required="" data-bv-message="Обязательное поле"
                                                                        data-bv-field="FIELDS[PHONE]">
                                                                    <small class="help-block" data-bv-validator="notEmpty"
                                                                        data-bv-for="FIELDS[PHONE]"
                                                                        data-bv-result="NOT_VALIDATED"
                                                                        style="display: none;">Обязательное поле</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="form-control-label form-control-label--white"
                                                                        for="FORM-resident_FIELD_UNP">ИНН<span
                                                                            class="asterisk"> *</span></label>
                                                                    <input class="form-control" type="text"
                                                                        id="FORM-resident_FIELD_UNP" name="FIELDS[UNP]"
                                                                        value="" required=""
                                                                        data-bv-message="Обязательное поле"
                                                                        data-bv-field="FIELDS[UNP]">
                                                                    <small class="help-block" data-bv-validator="notEmpty"
                                                                        data-bv-for="FIELDS[UNP]"
                                                                        data-bv-result="NOT_VALIDATED"
                                                                        style="display: none;">Обязательное поле</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-lg-12 helper"
                                                                style="
                            color: #eae1e1;
                            margin-bottom: 15px;
                            color: #bcbdbc;
                        ">
                                                                Допустимые типы файлов: doc, docx, xls, xlsx, txt, rtf, pdf,
                                                                png, jpeg, jpg, gif</div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="drag_n_drop-field">
                                                                        <div class="file-input" dropzone="copy f:*/*">
                                                                            <ol class="webform-field-upload-list webform-field-upload-list-multiple"
                                                                                id="mfi-FORM-resident_FIELD_FILE_1"></ol>
                                                                            <div class="webform-field-upload"
                                                                                id="mfi-FORM-resident_FIELD_FILE_1-button">
                                                                                <span
                                                                                    class="webform-small-button webform-button-upload">Загрузите ТЭО.doc<span
                                                                                        class="asterisk">
                                                                                        *</span></span><input
                                                                                    type="file"
                                                                                    id="file_input_FORM-resident_FIELD_FILE_1"
                                                                                    multiple="multiple" name="bxu_files[]"
                                                                                    accept=".doc, .docx, .xls, .xlsx, .txt, .rtf, .pdf, .png, .jpeg, .jpg, .gif">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="drag_n_drop-field">
                                                                        <div class="file-input" dropzone="copy f:*/*">
                                                                            <ol class="webform-field-upload-list webform-field-upload-list-multiple"
                                                                                id="mfi-FORM-resident_FIELD_FILE_2"></ol>
                                                                            <div class="webform-field-upload"
                                                                                id="mfi-FORM-resident_FIELD_FILE_2-button">
                                                                                <span
                                                                                    class="webform-small-button webform-button-upload">Загрузите
                                                                                    Бизнес-план<span
                                                                                        class="asterisk">
                                                                                        *</span></span><input
                                                                                    type="file"
                                                                                    id="file_input_FORM-resident_FIELD_FILE_2"
                                                                                    multiple="multiple" name="bxu_files[]"
                                                                                    accept=".doc, .docx, .xls, .xlsx, .txt, .rtf, .pdf, .png, .jpeg, .jpg, .gif">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label form-control-label--white"
                                                                for="FORM-resident_FIELD_MESSAGE">Комментарий</label>
                                                            <textarea class="form-control--textarea form-control" id="FORM-resident_FIELD_MESSAGE" rows="5"
                                                                name="FIELDS[MESSAGE]"></textarea>
                                                        </div>



                                                        <div class="row">
                                                            <div class="col-12 center-text">
                                                                <button type="submit" class="btn btn--primary btn--large"
                                                                    data-default="Отправить запрос">Отправить
                                                                    запрос</button>
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
                        </style>
                        <div class="doc-accordions">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-3">
                                        <div class="contact-box">
                                            <div class="contact-box__title">По всем вопросам, связанным с регистрацией в
                                                парке, пожалуйста, обращайтесь по телефонам:
                                            </div>
                                            <div class="contact-box__list">
                                                <div class="contact-box__item" style="display: flex;justify-content: flex-start">
                                                    <div class="left">
                                                      <strong style="font-weight: 700" >
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
        {{-- <div class="doc-accordions">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3">
                                <div class="contact-box">
                                    <div class="contact-box__title">По всем вопросам, связанным с регистрацией в парке,
                                        пожалуйста, обращайтесь по телефонам:
                                    </div>
                                    <div class="contact-box__list">
                                        <div class="contact-box__item">отдел по работе с резидентами и инвесторами: <a
                                                href="tel:+375175911984">+375 (17) 591-19-84</a>, <a
                                                href="tel:+375293798889 ">+375 (17) 591-19-84</a>, <a
                                                href="mailto:investors@industrialpark.by">investors@industrialpark.by</a>
                                        </div>
                                        <div class="contact-box__item">в части (пере)регистрации юр.лица — отдел
                                            правовой работы: <a href="tel:375175172874">+375 (17) 517-28-74</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div> --}}

        </div>

    </main>
@endsection
