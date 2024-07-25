<div class="header js-header">
    <div class="header-fixed">
      <div class="header-container">
        <div class="header-main">
          <div class="header-main-container container">
            <div
              class="mob-nav-toggle js-btn-toggle"
              data-ajax="true"
              data-ajax-src="/include/ajax/ajax-mob-menu.php"
              data-ajax-event="click"
              data-ajax-target=".mob-menu-container"
              data-ajax-reinit="nav"
              data-target=".mob-menu"
              role="button"
              aria-label="открыть меню"
            >
              <svg class="icon" width="20" height="20">
                <use
                  xlink:href="{{asset('front-assets/local/templates/html/images/sprite.svg#menu')}}"
                />
              </svg>
            </div>
            <style>
              #logo_custom{
                width: 100px; margin: 0 20px 10px;
              }
            </style>
            <img
              src="{{asset('front-assets/Logo.png')}}"
              class="logo-img logo-img--compact  logo--header"
              id="logo_custom"
              alt="ddd"
            />

            <div class="header-main-nav">
              <div class="header-nav">
                <ul class="nav-list 22">
                  <li class="nav-item has-nav">
                    <a
                      class="nav-link"
                      href="{{route('frontend.about')}}"
                      aria-label="О парке"
                    >
                      О нас 
                    </a>
                  
                  </li>
                  <li class="nav-item has-nav">
                    <a
                      class="nav-link"
                      href="#!"
                      aria-label="Инвесторам"
                    >
                      Инвесторам
                      <span class="nav-toggle js-nav-toggle"></span>
                    </a>
                    <div class="js-nav nav-lvl2">
                      <ul class="nav-lvl2-list">
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="{{route('frontend.investoram_premushastva')}}"
                            >Преимущества промышленной зоны
                            </a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="{{route('frontend.investoram_registratsiya_rezidentov')}}"
                            >Регистрация резидентов</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="{{route('frontend.investoram_nalogovie_preferensi')}}"
                            >Налоговые преференции </a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="{{route('frontend.investoram_podderjka_eksportov')}}"
                            >Поддержка экспортёров
                            </a
                          >
                        </li>
                      
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="rezidenty/index.html"
                      aria-label="Резиденты"
                    >
                      Резиденты
                    </a>
                  </li>
   
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="{{route('frontend.normativnie_documenti')}}"
                      aria-label="Правовое регулирование"
                    >
                      Правовое регулирование
                    </a>
                  </li>
                  <li class="nav-item has-nav">
                    <a
                      class="nav-link"
                      href="kontakty/index.html"
                      aria-label="Контакты"
                    >
                      Контакты
                      <span class="nav-toggle js-nav-toggle"></span>
                    </a>
                    <div class="js-nav nav-lvl2">
                      <ul class="nav-lvl2-list">
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="kontakty/index.html"
                            >Контакты</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="kontakty/vakansii/index.html"
                            >Вакансии</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="kontakty/obratnaya-svyaz/index.html"
                            >Обратная связь</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="kontakty/kak-dobratsya/index.html"
                            >Как добраться</a
                          >
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-main-right">
              <div class="header-control-list">
                <div class="header-control header-control--become">
                  <a
                    class="btn btn--dark header-control-btn"
                    href="https://uzbekistan360.uz/"
                    target="_blank"
                    aria-label="3D ТУР"
                    >3D ТУР</a
                  >
                  <a
                    class="btn btn--dark header-control-btn"
                    href="investoram/registratsiya-rezidentov/index.html"
                    aria-label="Стать резидентом"
                    target="_blank"
                    >Стать резидентом</a
                  >
                </div>
                <br />
                <div class="header-control header-control--search">
                  <button
                    class="header-control-link js-btn-toggle"
                    data-target=".header-search"
                    aria-label="Открыть поиск"
                    role="button"
                  >
                    <svg class="icon" width="19" height="19">
                      <use
                        xlink:href="{{asset('front-assets/local/templates/html/images/sprite.svg#search')}}"
                      />
                    </svg>
                  </button>
                  <div class="header-search">
                    <div class="header-search-container container">
                      <form
                        class="header-search-form"
                        {{-- action="https://industrialpark.by/search/" --}}
                        method="get"
                        onsubmit="var str=document.getElementById('s-inp'); if (!str.value || str.value == str.title) return false;"
                      >
                        <input
                          class="header-search-input form-control"
                          id="s-inp"
                          name="q"
                          placeholder="Найти..."
                        />
                        <button class="header-search-submit">
                          <svg
                            class="icon"
                            width="19"
                            height="19"
                            type="submit"
                          >
                            <use
                              xlink:href="local/templates/html/images/sprite.svg#search"
                            />
                          </svg>
                        </button>
                        <button
                          class="header-search-close js-btn-toggle"
                          data-target=".header-search"
                          aria-label="Закрыть поиск"
                          type="button"
                        >
                          <svg class="icon" width="19" height="19">
                            <use
                              xlink:href="local/templates/html/images/sprite.svg#cross"
                            />
                          </svg>
                        </button>
                      </form>
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
  <div class="mob-menu">
    <div class="mob-menu-container">
      <div class="mob-menu-header">
          <div class="mob-menu-title">Меню</div>
          <div class="mob-menu-close js-btn-toggle" data-target=".mob-menu" role="button" aria-label="закрыть меню">
              <svg class="icon" width="20" height="20">
                  <use xlink:href="/local/templates/html/images/sprite.svg#cross"></use>
              </svg>
          </div>
      </div>
      <div class="mob-menu-body">
          <div class="mob-menu-nav">
              <div class="js-nav nav">
                  
      <ul class="nav-list 22">
                  <li class="nav-item   has-nav">
      
                                  <a class="nav-link " href="/o-parke/" aria-label="О парке">
                          О парке                                            <span class="nav-toggle js-nav-toggle"></span>
                                          </a>
                                              <div class="js-nav nav-lvl2 ">
                          <ul class="nav-lvl2-list">
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/obshhaya-informaciya/">Общая информация</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/prioritetnye-napravleniya/">Приоритетные направления</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/struktura-upravleniya/">Структура управления</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/generalnyj-plan/">Генеральный план</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/hod-stroitelstva/">Ход строительства</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/video-o-parke/">Видео о парке</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/partnery/">Партнеры</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/o-parke/obshchestvennoe-obsuzhdenie/">Общественные обсуждения</a>
                                                                                                  </li>
                                                  </ul>
                      </div>
                          </li>
                  <li class="nav-item   has-nav">
      
                                  <a class="nav-link " href="/investoram/" aria-label="Инвесторам">
                          Инвесторам                                            <span class="nav-toggle js-nav-toggle"></span>
                                          </a>
                                              <div class="js-nav nav-lvl2 ">
                          <ul class="nav-lvl2-list">
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/preimushchestva-parka/">Преимущества парка</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/registratsiya-rezidentov/">Регистрация резидентов</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="https://onestation.by/">Одна станция</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/faq/">Часто задаваемые вопросы</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/uslugi/">Услуги для инвесторов</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/land_plots/">Земельные участки</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/industrial_premises/">Производственные, офисные и жилые помещения</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/financial_support/">Дополнительная информация</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/investoram/inzhiniringovye-uslugi/">Инжиниринговые услуги</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/innovatsionnyy-tsentr/">Инновационный центр</a>
                                                                                                  </li>
                                                  </ul>
                      </div>
                          </li>
                  <li class="nav-item   ">
      
                                  <a class="nav-link " href="/rezidenty/" aria-label="Резиденты">
                          Резиденты                                    </a>
                                      </li>
                  <li class="nav-item   has-nav">
      
                                  <a class="nav-link " href="/novosti/" aria-label="Новости">
                          Новости                                            <span class="nav-toggle js-nav-toggle"></span>
                                          </a>
                                              <div class="js-nav nav-lvl2 ">
                          <ul class="nav-lvl2-list">
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2024/">2024</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2023/">2023</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2022/">2022</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2021/">2021</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2020/">2020</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2019/">2019</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2018/">2018</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2017/">2017</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2016/">2016</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2015/">2015</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2014/">2014</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2013/">2013</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2012/">2012</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/novosti/2011/">2011</a>
                                                                                                  </li>
                                                  </ul>
                      </div>
                          </li>
                  <li class="nav-item   ">
      
                                  <a class="nav-link " href="/normativnye-dokumenty/" aria-label="Правовое регулирование">
                          Правовое регулирование                                    </a>
                                      </li>
                  <li class="nav-item   has-nav">
      
                                  <a class="nav-link " href="/kontakty/" aria-label="Контакты">
                          Контакты                                            <span class="nav-toggle js-nav-toggle"></span>
                                          </a>
                                              <div class="js-nav nav-lvl2 ">
                          <ul class="nav-lvl2-list">
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/kontakty/">Контакты</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/kontakty/vakansii/">Вакансии</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/kontakty/obratnaya-svyaz/">Обратная связь</a>
                                                                                                  </li>
                                                          <li class="nav-lvl2-item ">
                                                                          <a class="nav-lvl2-link" href="/kontakty/kak-dobratsya/">Как добраться</a>
                                                                                                  </li>
                                                  </ul>
                      </div>
                          </li>
          </ul>
      
              </div>
          </div>
                  <div class="mob-menu-contact">
                      <div class="mob-menu-contact-nav footer-nav active"><!--Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/components-template/nav/script.min.js");-->
                          <div class="js-nav nav">
                              <ul class="nav-list">
                                  <li class="nav-item">
                                      <a class="nav-link" href="tel:+375 17 591 19 00" aria-label="+375 17 591 19 00"><span class="nav-item-name">+375 17 591 19 00</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="tel:+375 29 314 34 22" aria-label="+375 29 314 34 22"><span class="nav-item-name">+375 29 314 34 22</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="tel:+375 17  591 19 00 (факс)" aria-label="+375 17  591 19 00 (факс)"><span class="nav-item-name">+375 17  591 19 00 (факс)</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="mailto:welcome@industrialpark.by" aria-label="welcome@industrialpark.by"><span class="nav-item-name">welcome@industrialpark.by</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="mob-menu-social-nav">
                          <div class="mob-menu-social-item"><!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/social/style.css");-->
                              <div class="social">
                                  <div class="social-title">Администрация:</div>
                                  <div class="social-list"><a class="social-item" href="#" aria-label="vkontakte">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#fb"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="facebook">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#in"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="odnoklasniki">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#ig"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="instagram">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#tw"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="youtube">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#ut"></use>
                                          </svg></a>
                                  </div>
                              </div>
                          </div>
                          <div class="mob-menu-social-item"><!--Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/components-template/social/style.css");-->
                              <div class="social">
                                  <div class="social-title">Компания по развитию:</div>
                                  <div class="social-list"><a class="social-item" href="#" aria-label="vkontakte">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#fb"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="facebook">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#in"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="odnoklasniki">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#ig"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="instagram">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#tw"></use>
                                          </svg></a><a class="social-item" href="#" aria-label="youtube">
                                          <svg class="icon" style="width:30px;height:30px;">
                                              <use xlink:href="/local/templates/html/images/sprite.svg#ut"></use>
                                          </svg></a>
                                  </div>
                              </div>
                          </div>
                      </div><a class="btn btn--dark btn--large w-100p" href="#" aria-label="Стать резидентом">Стать резидентом</a>
                  </div>
      
      
      
      
      </div>
      </div>
  </div>