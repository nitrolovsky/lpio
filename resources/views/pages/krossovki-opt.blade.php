@php
    $name = 'krossovki-opt';
    $image_path = "/files/krossovki-opt/krossovki-opt";
@endphp
@component('components.lp20180129')
    @slot('title')
        Оптовые поставки кроссовок из Китая {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        REIN
    @endslot

    @slot('description')
        Оптовые поставки кроссовок из Китая
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
        https://www.youtube.com/embed/Vt0RVmQgrTE
    @endslot

    @slot('lead_magnet')
        Получите прайс-лист с оптовыми ценами кроссовок из Гуанчжоу без выкупа размерных рядов
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>ADIDAS, REEBOK, ASICS, PUMA, NIKE, NEW BALANCE.
            <li>Минимальная партия от 20 пар.
            <li>Доставка до 14 дней по всей России.
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить прайс-лист
        </button>
    @endslot

    @slot('popup_form_title')
        Введите email и телефон, чтобы мы отправили вам прайс-лист
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Введите email" name="email" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Получить прайс-лист
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
