@php
    $name = 'kontraktnoe-proizvodstvo-ehlektroniki';
    $image_path = "/files/kontraktnoe-proizvodstvo-ehlektroniki/kontraktnoe-proizvodstvo-ehlektroniki";
@endphp
@component('components.lp20180129')
    @slot('title')
        Производство бытовых электрических приборов, электрического оборудования, компьютеров и периферийного оборудования, коммуникационного оборудования, элементов электронной аппаратуры, электронных печатных плат, бытовой электроники {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        World Demanded Electronic
    @endslot

    @slot('description')
        Контрактное производство электроники
    @endslot

    @slot('header_phone')
        <a href="tel:88002342919" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 800 234 29 19</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Москва
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/8VAFvyPFG14
    @endslot

    @slot('lead_magnet')
        Узнайте расчет стоимости производства вашего проекта по электронике
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>
                Бытовые электрические приборы
            </li>
            <li >
                Электрическое оборудование
            </li>
            <li >
                Компьютеры и периферийное оборудование
            </li>
            <li >
                Коммуникационное оборудование
            </li>
            <li >
                Элементы электронной аппаратуры
            </li>
            <li >
                Электронные печатные платы
            </li>
            <li>
                Бытовая электроника
            </li>
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Рассчитать стоимость
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы мы перезвонили и уточнили детали проекта
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
                Рассчитать стоимость
            </button>
        </div>
    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('footer_phone')
        <a href="tel:88002342919" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 800 234 29 19</a>
    @endslot

    @slot('footer_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('footer_address')
        Москва
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
