@php
    $name = 'pilka-scholl';
    $image_path = "/files/pilka-scholl/pilka-scholl";
@endphp
@component('components.lp20180129')
    @slot('title')
        Роликовая пилка Scholl Wet & Dry {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Scholl
    @endslot

    @slot('description')
        Интернет-магазин товаров для красоты и здоровья
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Санкт-Петербург
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/rWucvgaEuyc
    @endslot

    @slot('lead_magnet')
        Электрическая роликовая пилка Scholl Wet & Dry<br>
        <span class="text-danger">1950 &#8381;</span>
    @endslot

    @slot('details')
        Для ухода за кожей стоп. Через месяц применения курсом ваши ноги станут бархатными.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Заказать в 1 клик
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы менеджер уточнил детали доставки
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Заказать
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    6 ключевых преимуществ пилки Scholl
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-1.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Уход за кожей ног
                    @endslot
                    @slot('details')
                        Обновленная 2 версия. В 2016 году Великобританская компания Scholl выпустила вторую версию электрической роликовой пилки для удаления огрубевшей кожи стоп. Ролики от предыдущей модели подходят к новой.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Сравните результат до и после применения
                    @endslot
                    @slot('details')
                        Кожа ног становится гладкой и приятной на ощупь. Сравните стопы ног до и после использования пилки Scholl. Процедура на одну стопу занимает 10 минут.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Защита от воды и новые возможности
                    @endslot
                    @slot('details')
                        Меньше пыли и проведение процедуры в ванной. 2 версию пилки сделали водонепроницаемой. Теперь можно использовать в душе, ванной и по влажной коже. Если вы распарите ноги, то кожа станет мягкой и легче будет поддаваться обработке.
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
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Встроенный аккумулятор
                    @endslot
                    @slot('details')
                        Заряда хватает на неделю пользования. Питание от встроенного аккумулятора. Время зарядки составляет 3 часа. То, что пилка заряжана показывает индикатор, когда она заряжается, он мигает, при полной зарядке индикатор просто горит. 2 режима скорости, которые переключаются кнопкой на ручке.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Все необходимое в комплекте
                    @endslot
                    @slot('details')
                        Можно заряжать от компьютера. В комплекте электрическая пилка с аккумулятором, роликовая насадка Velvet Smooth Wet & Dry, зарядное устройство USB, адаптер USB в розетку, инструкция.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Хороший подарок любимой
                    @endslot
                    @slot('details')
                        Инструкция на упаковке. Упаковано в красивую коробочку, которую приятно подарить. Весит вместе с упаковкой 415 грамм. Размеры упаковки в длину 20 см, ширину 20 см, высоту 7 см.
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
        Санкт-Петербург
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
