@php
    $name = 'studiya-manikyura';
    $image_path = "/files/studiya-manikyura/studiya-manikyura";
@endphp
@component('components.lp20180129')
    @slot('title')
        Студия маникюра и педикюра Beauty Kitchen {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Beauty Kitchen
    @endslot

    @slot('description')
        Студия маникюра и педикюра
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        СПб, Загородный проспект 16
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/Mg9aSVFVNMo
    @endslot

    @slot('lead_magnet')
        Забронируйте пробный сеанс маникюра или педикюра за 100 рублей
    @endslot

    @slot('details')
        Мы классно делаем маникюр и педикюр и уверены, что посетив нас в первый раз станете нашим частым и любимым гостем. Наши мастера ежемесячно участвуют и побеждают в конкурсах. Ведут мастер-классы. Приходите к нам в гости!)
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Забронировать дату и время
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы мы перезвонили и забронировали за вами дату и время
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
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
        СПб, Загородный проспект 16
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
