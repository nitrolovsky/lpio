@php
    $name = 'kupit-kvartiru-spb-distancionno';
    $image_path = "/files/kupit-kvartiru-spb-distancionno/kupit-kvartiru-spb-distancionno";
@endphp
@component('components.lp20180129')
    @slot('title')
        Агентство недвижимости Купина, купить квартиру в Санкт-Петербурге дистанционно {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        KUPINA
    @endslot

    @slot('description')
        Агентство недвижимости Купина
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Санкт-Петербург, Большой Казачий пер., д. 8
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/xIM5jc6n_9g
    @endslot

    @slot('lead_magnet')
        Получите подбор вариантов квартир в Санкт-Петербурге по вашим параметрам и просмотрами по видеосвязи
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>
                Просмотры квартиры в режиме реального времени для иногородних покупателей;
            </li>
            <li>
                Видеосвязь по Whatsapp, Facetime, Skype;
            </li>
            <li>
                Вторичный рынок и новостройки от застройщиков;
            </li>
            <li>
                Проверяем юридическую чистоту квартиры.
            </li>
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить подбор вариантов
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы мы перезвонили и уточнили параметры квартиры
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Получить подбор вариантов
            </button>
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
        Санкт-Петербург, Большой Казачий пер., д. 8
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
