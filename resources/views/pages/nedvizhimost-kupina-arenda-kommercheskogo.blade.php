@php
    $name = 'nedvizhimost-kupina-arenda-kommercheskogo';
    $image_path = "/files/nedvizhimost-kupina-arenda-kommercheskogo/nedvizhimost-kupina-arenda-kommercheskogo";
@endphp
@component('components.lp20180129')
    @slot('title')
        Агентство недвижимости Купина, снять коммерческое помещение в аренду {{ $name }}.lpio.ru
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
        https://www.youtube.com/embed/hmdkugHblKQ
    @endslot

    @slot('lead_magnet')
        Получите подбор вариантов помещений в Санкт-Петербурге по вашим параметрам
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>
                Помещения под производство, офис, кафе, магазин, ресторан;
            </li>
            <li>
                Подберем в кратчайшие сроки, есть база арендодателей;
            </li>
            <li>
                Проверяем юридическую чистоту помещения.
            </li>
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить подбор вариантов
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы мы перезвонили и уточнили параметры помещения
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
