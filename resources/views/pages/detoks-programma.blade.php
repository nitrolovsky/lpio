@php
    $name = 'detoks-programma';
    $image_path = "/files/detoks-programma/detoks-programma";
@endphp
@component('components.lp20180129')
    @slot('title')
        Комплексные on-line программы сбалансированного питания, женских практик и физических упражнений для естественного очищения души и тела {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Detox Ya Krivtsova
    @endslot

    @slot('description')
        Комплексные on-line программы сбалансированного питания, женских практик и физических упражнений для естественного очищения души и тела
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
        https://www.youtube.com/embed/P7ObsjI8dBA
    @endslot

    @slot('lead_magnet')
        Получите 5 натуральных детокс рецептов для очищения и улучшения самочувствия
    @endslot

    @slot('details')
        <ol class="mb-0">
            <li>Бодрящий смузи киви-мята
            <li>Легкий чудо-оливье
            <li>Пикантный тайский суп
            <li>Необычная паста из моркови
            <li>Сладкие ореховые шарики
        </ol>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить 5 рецептов бесплатно
        </button>
    @endslot

    @slot('popup_form_title')
        Введите email, чтобы мы отправили вам видеоинструкцию с рецептами
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Введите email" name="email" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Получить 5 рецептов бесплатно
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
