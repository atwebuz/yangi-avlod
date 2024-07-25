<aside class="aside js_aside js-sticky" data-margin-top="81" data-sticky-for="1200" data-sticky-class="is-sticky">
    <div class="aside__title">
        Инвесторам </div>


        <nav class="aside__list">
            <a class="aside__link {{ request()->routeIs('frontend.investoram_premushastva') ? 'active' : '' }}" href="{{ route('frontend.investoram_premushastva') }}">Преимущества промышленной зоны</a>
            <a class="aside__link {{ request()->routeIs('frontend.investoram_registratsiya_rezidentov') ? 'active' : '' }}" href="{{ route('frontend.investoram_registratsiya_rezidentov') }}">Регистрация резидентов</a>
            <a class="aside__link {{ request()->routeIs('frontend.investoram_nalogovie_preferensi') ? 'active' : '' }}" href="{{ route('frontend.investoram_nalogovie_preferensi') }}">Налоговые преференции</a>
            <a class="aside__link {{ request()->routeIs('frontend.investoram_podderjka_eksportov') ? 'active' : '' }}" href="{{ route('frontend.investoram_podderjka_eksportov') }}">Поддержка экспортёров</a>
            <a class="aside__link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}" href="{{ route('frontend.contact') }}">Контакты</a>
        </nav>
        


</aside>
