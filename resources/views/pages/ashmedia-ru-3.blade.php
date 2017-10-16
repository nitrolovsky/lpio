@php
    $path_files = "/files/ashmedia/";
@endphp
@component('components.sellingwebsite')
    @slot('title')
        Создание видеороликов для бизнеса АШмедиа ashmedia.ru
    @endslot
    @slot('bg')
        {{ $path_files }}bg.jpg
    @endslot
    @slot('google_analytics')
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-99764557-1', 'auto');
          ga('send', 'pageview');

        </script>
    @endslot
    @slot('lptracker')

    @endslot
    @slot('brand')
        АШМедиа
    @endslot
    @slot('ctr')
        Получить расчет
    @endslot
    @slot('menu')
        <li class="nav-item">
            <a class="nav-link font" href="#video">Создание видеороликов для бизнеса</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font" href="#benefits">+7 952 219 33 83</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font" href="#comments">ashmedia@mail.ru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font" href="#contacts">Санкт-Петербург, м. Горьковская</a>
        </li>
    @endslot
    @slot('modal')
        <h4 class="my-0 pt-2 pb-4 text-center font w-5">
            Заполните форму
        </h4>
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="ashmedia">
            <input type="hidden" name="cta" value="Всплывающия форма навигации">
            <div class="form-group">
                <input type="text" class="font black form-control w-3" id="name" placeholder="Имя" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
            </div>
            <div class="form-group mb-0">
                <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                    Получить расчет
                </button>
            </div>
        </form>
    @endslot
    @slot('brand')
        АШмедиа
    @endslot
    @slot('description')
        Создание видеороликов для бизнеса
    @endslot
    @slot('phone')
        +79522193383
    @endslot
    @slot('phone_view')
        +7 952 219 33 83
    @endslot
    @slot('email')
        ashmedia@mail.ru
    @endslot
    @slot('region')
        Санкт-Петербург, м. Горьковская
    @endslot
    @slot('offer')
        Объясним ценность вашего продукта с помощью продающего видеоролика
    @endslot
    @slot('bullets')
        <li>
            Дополнительный источник продаж
        </li>
        <li class="pt-1">
            Срок работы - до 7 дней под ключ
        </li>
        <li class="pt-1">
            Стоимость видеоролика - от 15 000 рублей
        </li>
    @endslot
    @slot('video')
        https://www.youtube.com/embed/zzEse2A5g_Y
    @endslot
    @slot('leadmagnet')
        Получите 3 концепции сценария видеоролика и расчет сметы заполнив форму
    @endslot
    @slot('form')
        <form action="/leads" method="POST" class="pt-3">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="ashmedia">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="name" placeholder="Введите имя" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                    Получить
                </button>
            </div>
        </form>
    @endslot

    @slot('setka')
        @component('components.meaningvideo')
            @slot('video')
                https://www.youtube.com/embed/d1FgJJ1Za18
            @endslot
            @slot('title')
                Кадровое агентство "STAFF PERSONAL"
            @endslot
            @slot('details')
                Наша основная услуга - аутсорсинг. Мы нанимаем персонал для гостиничного бизнеса, продуктовых универсамов, а также различных производств. 3 дня - это срок от заявки до вывода рабочей силы на место труда.
            @endslot
        @endcomponent

        @component('components.meaningvideo')
            @slot('video')
                https://www.youtube.com/embed/wCBFBCe-GMo
            @endslot
            @slot('title')
                404 // антикафе
            @endslot
            @slot('details')
                Вы сможете поработать в уютной атмосфере, отдохнуть после трудового дня и приятно провести время с друзьями. 404 станет отличным местом, чтобы встретится с деловым партнером. К вашим услугам ксерокс, сканер и принтер.
            @endslot
        @endcomponent

        @component('components.meaningvideo')
            @slot('video')
                https://www.youtube.com/embed/VzGSFv-WDV8
            @endslot
            @slot('title')
                Центр сертификации "ГОРТЕСТ"
            @endslot
            @slot('details')
                Центр сертификации ГОРТЕСТ оказывает услуги по получению разрешительных документов для импорта, экспорта и реализации товаров на территории России.
            @endslot
        @endcomponent
    @endslot

@endcomponent
