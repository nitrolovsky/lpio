@php
    $path_file = "/files/beton/";
@endphp
<!DOCTYPE html>
<html>
    @component('components.head')
        @slot('title')
            Бетон купить в Санкт-Петербурге от бетонного завода
        @endslot
        @slot('bg')
            {{ $path_file }}bg.jpg
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
            <script async type="text/javascript">function loadscript(e,t){var n=document.createElement("script");n.src="//lptracker.net.ru/"+e;n.onreadystatechange=t;n.onload=t;document.head.appendChild(n);return 1}var init_lstats=function(){lstats.site_id=37003;lstats.referer()};var jquery_lstats=function(){jQstat.noConflict();loadscript("stats_auto.js",init_lstats)};loadscript("jquery-1.10.2.min.js",jquery_lstats);</script>
        @endslot
    @endcomponent
    <body>
        @component('components.nav')
            @slot('brand')
                Бетон
            @endslot
            @slot('ctr')
                Расчёт с доставкой
            @endslot
            @slot('menu')
                <li class="nav-item">
                    <a class="nav-link font" href="#video">Видео</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#price">Цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#aboutus">О заводах</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#photogallery">Фотогалерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#reviews">Отзывы</a>
                </li>
            @endslot
            @slot('modal')
                <h4 class="my-0 pt-2 pb-4 text-center font w-5">
                    Получите расчёт цены бетона с доставкой заполнив форму
                </h4>
                <form action="/leads" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="source" value="beton">
                    <input type="hidden" name="cta" value="Всплывающия форма навигации">
                    <div class="form-group">
                        <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон" name="phone" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control font black w-3" id="comment" rows="3" name="comment" placeholder="Адрес объекта, марка и объем бетона"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                            Получить расчёт
                        </button>
                    </div>
                    <div class="form-group mb-0">
                        <div class="form-check mb-0">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked>
                            </label>
                            Согласен на обработку персональных данных и <a href="{{ $path_file }}politic.pdf" class="a" target="_blank">политикой конфиденциальности</a>
                        </div>
                    </div>
                </form>
            @endslot
        @endcomponent

        @component('components.firstscreenvideobg')
            @slot('brand')
                Ленинградский бетонный завод
            @endslot
            @slot('description')
                Сеть бетонных заводов
            @endslot
            @slot('phone')
                +78124269277
            @endslot
            @slot('phone_view')
                +7 (812) 426 92 77
            @endslot
            @slot('email')
                info.lpio.ru@gmail.com
            @endslot
            @slot('region')
                Круглосуточная доставка по СПБ и ЛО
            @endslot
            @slot('offer')
                Бетон от 2550 р. за куб для стройки напрямую от завода с доставкой до вашего объекта за 1 час по СПБ и Ленобласти
            @endslot
            @slot('bullets')
                <li>
                    Работаем 24/7 и соблюдаем срок доставки
                </li>
                <li class="pt-1">
                    Гарантия отгрузки 100% объема и соответствие марки
                </li>
                <li class="pt-1">
                    Выдаем сертификат качества ГОСТ с каждой поставкой
                </li>
            @endslot
            @slot('video')
                https://www.youtube.com/embed/YKsEeME2zb4
            @endslot
            @slot('leadmagnet')
                Получите расчёт стоимости бетона с доставкой до вашего объекта за 1 минуту
            @endslot
            @slot('form')
                <form action="/leads" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="source" value="beton">
                    <input type="hidden" name="cta" value="Форма с видео">
                    <div class="form-group">
                        <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон" name="phone" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control font black w-3 sw" id="comment" rows="3" name="comment" placeholder="Адрес объекта, марка и объем бетона"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="font sw btn btn-primary btn-block w-4" role="button">
                            Получить расчёт с доставкой
                        </button>
                    </div>
                    <div class="form-group mb-0">
                        <div class="form-check mb-0">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked>
                            </label>
                            Согласен на обработку персональных данных и <a href="{{ $path_file }}politic.pdf" class="text-info a" target="_blank">политикой конфиденциальности</a>
                        </div>
                    </div>
                </form>
            @endslot
        @endcomponent

        <div id="price"></div>
        <div class="font bg-white">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Цены на товарный бетон и спецтехнику
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m100-v7-5.jpg
                        @endslot
                        @slot('description')
                            Бетон М100 В7.5 - 2550 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М100 В7.5 - 2550 р. / м3
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m150-v12-5.jpg
                        @endslot
                        @slot('description')
                            Бетон М150 В12.5 - 2650 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М150 В12.5 - 2650 р. / м3
                        @endslot
                        @slot('details')
                            Для заливки конструкций не несущих серьезную нагрузку: стяжка полов, заборы, парковка легковых машин, перед заливкой фундамента и монтаж поребриков.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m200-v15.jpg
                        @endslot
                        @slot('description')
                            Бетон М200 В15 - 2750 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М200 В15 - 2750 р. / м3
                        @endslot
                        @slot('details')
                            Для заливки конструкций не несущих серьезную нагрузку: полы, заборы, парковка легковых машин. Иногда используется для заливки фундаменты под небольшие строения.
                        @endslot
                    @endcomponent
                </div>

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row">
                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m250-v20.jpg
                        @endslot
                        @slot('description')
                            Бетон М250 В20 - 2920 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М250 В20 - 2920 р. / м3
                        @endslot
                        @slot('details')
                            Альтернатива М200 с дополнительным запасом прочности. Используется для заливки заборов и фундаментов небольших домов.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m300-v22-5.jpg
                        @endslot
                        @slot('description')
                            Бетон М300 В22.5 - 3050 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М300 В22.5 - 3050 р. / м3
                        @endslot
                        @slot('details')
                            Самый распространенный бетон. Применяется для монолитного строительство загородных домов и заливки фундаментов.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m350-v25.jpg
                        @endslot
                        @slot('description')
                            Бетон М350 В25 - 3150 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М350 В25 - 3150 р. / м3
                        @endslot
                        @slot('details')
                            Используется для заливки фундаментов и плит перекрытия.
                        @endslot
                    @endcomponent
                </div>

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row pb-5">
                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}beton-m400-v30.jpg
                        @endslot
                        @slot('description')
                            Бетон М400 В30 - 3350 р. / м3
                        @endslot
                        @slot('title')
                            Бетон М400 В30 - 3350 р. / м3
                        @endslot
                        @slot('details')
                            Используется для заливки фундаментов, плит перекрытия, колон и конструкция подверженных большой нагрузке. Применяется при строительстве монолитных многоквартирных домов.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}keramzitobeton.jpg
                        @endslot
                        @slot('description')
                            Керамзитобетон - 2900 р. / м3
                        @endslot
                        @slot('title')
                            Керамзитобетон - 2900 р. / м3
                        @endslot
                        @slot('details')
                            Используется для легких конструкций. Классифицируется как легкий бетон. Применяется для заливки полов (теплый пол). Керамзит хорошо держит тепло. В основном заливают паркинги.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('button')
                            Расчёт с доставкой
                        @endslot
                        @slot('image')
                            {{ $path_file }}avtobetonosmesitel-i-avtobetononasos.jpg
                        @endslot
                        @slot('description')
                            Автобетоносмеситель (АБС) и автобетононасос (АБН)
                        @endslot
                        @slot('title')
                            Автобетоносмеситель (АБС) и автобетононасос (АБН)
                        @endslot
                        @slot('details')
                            Время бесплатной разгрузки АБС - 60 минут. АБС от 6 м3 до 12 м3. АБН от 16 м до 52 м. АБС с транспортерной лентой - 550 р./м3. Подача гидролотком 6-10 м - 2000р.
                        @endslot
                    @endcomponent
                </div>

                <div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5 class="my-0 pt-2 pb-4 text-center font w-5">
                                    Заполните форму
                                </h5>
                                <form action="/leads" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="source" value="beton">
                                    <input type="hidden" name="cta" value="Форма под товаром">
                                    <div class="form-group">
                                        <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон" name="phone" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control font black w-3" id="comment" rows="3" name="comment" placeholder="Адрес объекта, марка и объем бетона"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="font btn btn-primary btn-block" role="button">
                                            Получить расчёт
                                        </button>
                                    </div>
                                    <div class="form-group mb-0 font">
                                        <div class="form-check mb-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked>
                                            </label>
                                            Согласен на обработку персональных данных и <a href="{{ $path_file }}politic.pdf" class="a" target="_blank">политикой конфиденциальности</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="aboutus"></div>
        <div class="font bg-faded">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Преимущества заводов "Ленинградский бетонный завод"
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}1.jpg
                        @endslot
                        @slot('description')
                            Минимальный заказ от 1 м3
                        @endslot
                        @slot('title')
                            Минимальный заказ от 1 м3
                        @endslot
                        @slot('details')
                            Доставляем бетон для фундаментов частных загородных домов. Для строительства многоквартирных домов, коммерческих и промышленных объектов. Бесплатный выезд специалиста для расчета точного объема.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}2.jpg
                        @endslot
                        @slot('description')
                            Ежемесячно отгружаем 35 000+ м3
                        @endslot
                        @slot('title')
                            Ежемесячно отгружаем 35 000+ м3
                        @endslot
                        @slot('details')
                            Работаем с застройщиками, строительными организациям и частными заказчиками. Круглосуточная доставка 7 дней в неделю точно в срок по Санкт-Петербургу и Ленинградской области.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}3.jpg
                        @endslot
                        @slot('description')
                            3 завода во всех направления Санкт-Петербурга
                        @endslot
                        @slot('title')
                            3 завода во всех направления Санкт-Петербурга
                        @endslot
                        @slot('details')
                            Заводы в Сертолово Индустриальная 15, Янино-1 литер А, Парголово Штурманская 26. Расположение заводов во всех направлениях обеспечивает возможность выгодной доставки до объекта в любой район СПб и Ленобласти.
                        @endslot
                    @endcomponent
                </div>

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row">
                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}4.jpg
                        @endslot
                        @slot('description')
                            Собственная спецтехника на 40 машин
                        @endslot
                        @slot('title')
                            Собственная спецтехника на 40 машин
                        @endslot
                        @slot('details')
                            Автобетононасосы применяются при строительстве жилых и домов коммерческого назначения, туннелей, мостов, дорог, многоэтажных сооружений, при укладке фундамента строительстве подземных парковок и строительстве первых этажей, полноценного строительства малоэтажных зданий. Автобетоносмесители исключать попадание атмосферных осадков, нарушения однородности, потери цементного раствора, а также обеспечивать предохранение смеси в пути от воздействия ветра и солнечных лучей.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}5.jpg
                        @endslot
                        @slot('description')
                            Паспорт качества с каждой поставкой
                        @endslot
                        @slot('title')
                            Паспорт качества с каждой поставкой
                        @endslot
                        @slot('details')
                            Мы предоставляем паспорт качества, благодаря присутствию на каждом заводе собственной аккредитованной лаборатории. Гарантируем соблюдение ГОСТа и соответствие привозимой марки бетона к заказываемой.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}6.jpg
                        @endslot
                        @slot('description')
                            Аккредитованная испытательная лаборатория
                        @endslot
                        @slot('title')
                            Аккредитованная испытательная лаборатория
                        @endslot
                        @slot('details')
                            Мы располагаем собственной аккредитованной испытательной лабораторией. Сотрудники контролируют качество выпускаемой продукции на всех этапах производства. Исследуют инертные материалы. Проверяются на прочность приготовленные смеси. Контролируют применение морозостойких добавок в бетонные смеси.
                        @endslot
                    @endcomponent
                </div>

                <div class="row pt-5 pb-5">
                    <div class="mx-auto d-block">
                        <button class="btn btn-primary font w-4" role="button"  data-toggle="modal" data-target="#navModal">
                            Получить расчёт с доставкой
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div id="photogallery"></div>
        <div class="font bg-white">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Фото с рабочих объектов Ленинградского бетонного Завода
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-21.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-22.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-23.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-24.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-5.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-6.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-7.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-8.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-9.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-10.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-11.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-12.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-13.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-14.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-15.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-16.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-17.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-18.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-19.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 px-0">
                        <img src="{{ $path_file }}beton-20.jpg" class="img-fluid" alt="Фотографии объектов в СПБ и ЛО по заказу бетона">
                    </div>
                </div>
            </div>
        </div>

        <div id="reviews"></div>
        <div class="font">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Отзывы заказчиков
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row pb-5">
                    @component('components.meaningvideo')
                        @slot('video')
                            https://www.youtube.com/embed/k55SscAI_ls
                        @endslot
                        @slot('title')

                        @endslot
                        @slot('details')

                        @endslot
                    @endcomponent

                </div>
            </div>
        </div>
        @component('components.footer')
            @slot('bgcolor')
                bg-faded
            @endslot
            @slot('legal')
                Copyright &#169; 2017 beton-m3.ru Все права защищены. ИНН 7802602468. КПП 780201001. р/сч 40702810903000013545 в АО "Райффайзенбанк".<br>
                к/сч 30101810100000000723. БИК 044030723.
            @endslot
            @slot('contacts')
                <a href="tel:+78124269277" class="a">+7 (812) 426 92 77</a><br>
                <a href="mailto:info.lpio.ru@gmail.com" class="a">info.lpio.ru@gmail.com</a><br>
                Круглосуточная доставка по СПб и ЛО
            @endslot
        @endcomponent

        @component('components.js')
            @slot('yandex')
                <!-- Yandex.Metrika counter -->
                <script type="text/javascript">
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function() {
                            try {
                                w.yaCounter44736544 = new Ya.Metrika({
                                    id:44736544,
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true,
                                    trackHash:true
                                });
                            } catch(e) { }
                        });

                        var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () { n.parentNode.insertBefore(s, n); };
                        s.type = "text/javascript";
                        s.async = true;
                        s.src = "https://mc.yandex.ru/metrika/watch.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(document, window, "yandex_metrika_callbacks");
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/44736544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
                <!-- Yandex.Metrika counter -->
                <script type="text/javascript">
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function() {
                            try {
                                w.yaCounter45159621 = new Ya.Metrika({
                                    id:45159621,
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true
                                });
                            } catch(e) { }
                        });

                        var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () { n.parentNode.insertBefore(s, n); };
                        s.type = "text/javascript";
                        s.async = true;
                        s.src = "https://mc.yandex.ru/metrika/watch.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(document, window, "yandex_metrika_callbacks");
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/45159621" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            @endslot
        @endcomponent

    </body>
</html>
