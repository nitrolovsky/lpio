@php
    $name = 'magic-tracks';
    $image_path = "/files/magic-tracks/magic-tracks";
@endphp
@component('components.lp20180129')
    @slot('title')
        Конструктор гоночная трасса Magic Tracks 220 {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Magic Tracks
    @endslot

    @slot('description')
        Интернет-магазин детских игрушек
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
        https://www.youtube.com/embed/q1rh9cD36vc
    @endslot

    @slot('lead_magnet')
        Конструктор гоночная трасса Magic Tracks 220 элементов<br>
        <span class="text-danger">1950 &#8381;</span>
    @endslot

    @slot('details')
        Подарите детям Magic Tracks и они будут с радостью с ним играть. Можно каждый раз собирать новую трассу и добавлять элементы к уже существующей.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Заказать в 1 клик
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы менеджер уточнил детали доставки
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
                Заказать
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Подробности о конструкторе гоночной трассы Magic Tracks 220
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-1.jpg
                    @endslot
                    @slot('description')
                        Соединяющиеся детали
                    @endslot
                    @slot('title')
                        Соединяющиеся детали
                    @endslot
                    @slot('details')
                        Соберите свою собственную трассу за считанные секунды.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('description')
                        Гибкая форма
                    @endslot
                    @slot('title')
                        Гибкая форма
                    @endslot
                    @slot('details')
                        Гоночную трассу Magic Tracks можно поворачивать и сгибать в любом направлении.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('description')
                        Трансформируйте трассу на 360˚
                    @endslot
                    @slot('title')
                        Трансформируйте трассу на 360˚
                    @endslot
                    @slot('details')
                        Согните трассу в колесо и пустите машину по кругу.
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
                        {{ $image_path }}-4.jpg
                    @endslot
                    @slot('description')
                        Светодиодные огни
                    @endslot
                    @slot('title')
                        Светодиодные огни
                    @endslot
                    @slot('details')
                        Гоночная машина оснащена 5 светодиодными огнями, которые освещают ей путь.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('description')
                        Набор наклеек
                    @endslot
                    @slot('title')
                        Набор наклеек
                    @endslot
                    @slot('details')
                        Придайте своей машине оригинальный вид.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('description')
                        Легко сворачивается
                    @endslot
                    @slot('title')
                        Легко сворачивается
                    @endslot
                    @slot('details')
                        Не занимает места при хранении.
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
