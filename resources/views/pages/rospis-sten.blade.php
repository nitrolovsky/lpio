@php
    $name = 'rospis-sten';
    $image_path = "/files/rospis-sten/rospis-sten";
@endphp
@component('components.lp20180129')
    @slot('title')
        Роспись стен студией художников YoBro {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        YoBro
    @endslot

    @slot('description')
        Студия художников YoBro
    @endslot

    @slot('header_phone')
        <a href="tel:88122132140" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 213 21 40</a>
    @endslot

    @slot('header_email')
        <a href="mailto:magicmagicart@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">magicmagicart@gmail.com</a>
    @endslot

    @slot('header_address')
        СПб, Греческий проспект 27
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/yT5Tl6uw2TI
    @endslot

    @slot('lead_magnet')
        Узнайте как будет выглядить роспись в вашем интерьере с помощью фотореалистичной компьютерной визуализации
    @endslot

    @slot('details')
        Мы изобразим рисунок, который вы хотите в вашем интерьере и отправим его на почту. Вы поймете как красиво он будет смотреться. Мы расписываем стены кистями, делаем граффити, аэрографию и фреску. Защищаем рисунки лаком, чтобы можно было мыть.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить дизайн-проект бесплатно
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы мы договорились о ваших пожеланиях к дизайн-проекту
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
                Получить дизайн-проект бесплатно
            </button>
        </div>
    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('footer_phone')
        <a href="tel:88122132140" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 213 21 40</a>
    @endslot

    @slot('footer_email')
        <a href="mailto:magicmagicart@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">magicmagicart@gmail.com</a>
    @endslot

    @slot('footer_address')
        СПб, Греческий проспект 27
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
