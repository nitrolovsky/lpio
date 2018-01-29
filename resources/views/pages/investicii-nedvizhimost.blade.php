@php
    $name = 'investicii-nedvizhimost';
    $image_path = "/files/investicii-nedvizhimost/investicii-nedvizhimost";
@endphp
@component('components.lp20180129')
    @slot('title')
        Инвестиции в недвижимость {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        СПб Инвест
    @endslot

    @slot('description')
        Консалтинговое агентство
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Санкт-Петербург, Каменноостровский проспект дом 26-28<br>Дом Бенуа
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/M32KCq5_X6Q
    @endslot

    @slot('lead_magnet')
        Забронируйте место на бесплатный семинар 21 апреля 2017 в 19:15 "Как заработать на недвижимости в 2017 году" и получите книгу "10 ошибок при инвестициях в квартиру"
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>Как обойти уловки менеджеров отдела продаж застройщика и купить то, что Вам реально нужно.
            <li>Разбор конкретных примеров за 2015 и 2016 год с доходностью 58%.<br>
            <li>Анонсы новых объектов и бронирование на старте продаж.
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Забронировать место
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы мы перезвонили и забронировали за вами место в зале. А на почту отправим книгу
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Введите email" name="email" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Забронировать
            </button>
        </div>
    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('footer_phone')
        <a href="tel:88129672763" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a><br>
    @endslot

    @slot('footer_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a><br>
    @endslot

    @slot('footer_address')
        Санкт-Петербург, Каменноостровский проспект дом 26-28<br>Дом Бенуа
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
