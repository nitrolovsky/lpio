@php
    $name = 'beton-m3';
    $image_path = "/files/beton-m3/beton-m3";
@endphp
@component('components.lp20180129')
    @slot('title')
        Бетон купить в Санкт-Петербурге от бетонного завода {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Ленинградский бетонный завод
    @endslot

    @slot('description')
        Сеть бетонных заводов
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Доставка по Санкт-Петербургу и Лен. обл.
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/-zfkqqh9DYo
    @endslot

    @slot('lead_magnet')
        Получите расчёт стоимости бетона с доставкой до вашего объекта за 1 минуту
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>
                Аккредитованная лаборатория на каждом заводе
            </li>
            <li>
                Гарантируем соответствие марки и объема
            </li>
            <li>
                Предоставляем паспорт качества с каждой поставкой
            </li>
            <li>
                Круглосуточная работа 24/7
            </li>
            <li>
                Минимальный заказ от 1 м3
            </li>
            <li>
                Автопарк PUMI, АБС 6/8, АБН 32/36/42/47/57
            </li>
            <li>
                Все работы по фундаменту под ключ, бригада монолитчиков
            </li>
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить расчёт с доставкой
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы сметчик узнал объем и тех. условия объекта
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Получить расчёт с доставкой
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Преимущества наших заводов
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-1.jpg
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

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
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

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
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

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-4.jpg
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

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
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

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
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

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>
    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('footer_phone')
        <a href="tel:88129672763" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('footer_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('footer_address')
        Доставка по Санкт-Петербургу и Лен. обл.
    @endslot

    @slot('yandex')
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter44736544 = new Ya.Metrika2({
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
                s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <!-- /Yandex.Metrika counter -->
    @endslot

@endcomponent
