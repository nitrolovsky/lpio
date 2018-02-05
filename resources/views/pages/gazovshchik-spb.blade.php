@php
    $name = 'gazovshchik-spb';
    $image_path = "/files/gazovshchik-spb/gazovshchik-spb";
@endphp
@component('components.lp20180129')
    @slot('title')
        Вызвать газовщика на дом в СПб {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Газовый сервис Петербурга № 1 
    @endslot

    @slot('description')
        Вызвать газовщика на дом в СПб
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

    @slot('presentation')
        /files/gazovshchik-spb/gazovshchik-spb-0.jpg
    @endslot

    @slot('lead_magnet')
        Вызовите газовщика на дом бесплатно для получения консультации и диагностики
    @endslot

    @slot('details')
        <ul>
            <li>Договор с гарантией выполненных работ и сервисным обслуживанием - 1 год;
            <li>Наличие запчастей к 25 производителям газового оборудования;
            <li>Заполнение сервисной книжки и паспорта изделия;
            <li>Лицензии и допуски к газоопасным видам работ;
            <li>Бесплатный вызов в случае заключения договора.
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Вызвать газовщика бесплатно
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы мастер вам перезвонил и договорился о времени выезда
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Вызвать газовщика бесплатно
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Виды и стоимость работ
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('description')

                    @endslot
                    @slot('title')
                        Ремонт газовых колонок<br><span class="text-danger">от 500 &#8381;</span>
                    @endslot
                    @slot('details')

                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('description')
                        Не работает морозилка
                    @endslot
                    @slot('title')
                        Ремонт газовых плит<br><span class="text-danger">от 300 &#8381;</span>
                    @endslot
                    @slot('details')

                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('description')
                        Шумит, гудит
                    @endslot
                    @slot('title')
                        Установка и подключение газовой колонки<br><span class="text-danger">от 1000 &#8381;</span>
                    @endslot
                    @slot('details')

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
                        {{ $image_path}}-4.jpg
                    @endslot
                    @slot('description')
                        Намерзает лед
                    @endslot
                    @slot('title')
                        Установка и подключение газовой плиты<br><span class="text-danger">от 800 &#8381;</span>
                    @endslot
                    @slot('details')

                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('description')
                        Протекает
                    @endslot
                    @slot('title')
                        Установка или замена газовых счетчиков<br><span class="text-danger">от 3600 &#8381;</span>
                    @endslot
                    @slot('details')

                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('description')
                        Работает без остановки
                    @endslot
                    @slot('title')
                        Перенос или замена газовых труб<br><span class="text-danger">от 1000 &#8381;</span>
                    @endslot
                    @slot('details')

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
