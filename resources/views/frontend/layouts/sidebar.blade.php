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
                      href="o-parke/index.html"
                      aria-label="О парке"
                    >
                      О нас <span class="nav-toggle js-nav-toggle"></span>
                    </a>
                    <div class="js-nav nav-lvl2">
                      <ul class="nav-lvl2-list">
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/obshhaya-informaciya/index.html"
                            >Общая информация</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/prioritetnye-napravleniya/index.html"
                            >Приоритетные направления</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/struktura-upravleniya/index.html"
                            >Структура управления</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/generalnyj-plan/index.html"
                            >Генеральный план</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/hod-stroitelstva/index.html"
                            >Ход строительства</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/video-o-parke/index.html"
                            >Видео о парке</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/partnery/index.html"
                            >Партнеры</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="o-parke/obshchestvennoe-obsuzhdenie/index.html"
                            >Общественные обсуждения</a
                          >
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item has-nav">
                    <a
                      class="nav-link"
                      href="investoram/index.html"
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
                            href="investoram/preimushchestva-parka/index.html"
                            >Преимущества парка</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/registratsiya-rezidentov/index.html"
                            >Регистрация резидентов</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="#/"
                            >Одна станция</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/faq/index.html"
                            >Часто задаваемые вопросы</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/uslugi/index.html"
                            >Услуги для инвесторов</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/land_plots/index.html"
                            >Земельные участки</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/industrial_premises/index.html"
                            >Производственные, офисные и жилые помещения</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/financial_support/index.html"
                            >Дополнительная информация</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="investoram/inzhiniringovye-uslugi/index.html"
                            >Инжиниринговые услуги</a
                          >
                        </li>
                        <li class="nav-lvl2-item">
                          <a
                            class="nav-lvl2-link"
                            href="innovatsionnyy-tsentr/index.html"
                            >Инновационный центр</a
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
                      href="novosti/index.html"
                      aria-label="Новости"
                    >
                      Новости
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="normativnye-dokumenty/index.html"
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
                        action="https://industrialpark.by/search/"
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
    <div class="mob-menu-container"></div>
  </div>