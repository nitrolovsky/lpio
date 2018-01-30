@php
    $name = 'chernyj-perec-opt';
    $image_path = "/files/chernyj-perec-opt/chernyj-perec-opt";
@endphp
@component('components.lp20180129')
    @slot('title')
        Оптовые поставки черного перца, черный перец оптом {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        blizkaya
    @endslot

    @slot('description')
        Оптовые поставки пряностей и специй из Индии
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
        https://www.youtube.com/embed/9KvS_QN6vIg
    @endslot

    @slot('lead_magnet')
        Получите прайс-лист с оптовыми ценами на черный перец и полный перечень специй и пряностей
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>
                Собственный помол на производстве в Санкт-Петербурге, ингредиенты поставляются из Индии в скорлупе и защитной оболочке, поэтому сохраняют вкус и аромат;
            </li>
            <li>
                200+ позиций пряностей, специй, орехов;
            </li>
            <li>
                Прямые поставки ингредиентов из Индии;
            </li>
            <li>
                Доставка по всей России;
            </li>
            <li>
                Отсрочка оплаты для постоянных клиентов;
            </li>
            <li>
                Бесплатные образцы товара.
            </li>
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить прайс-лист
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы мы отправили вам прайс-лист
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
