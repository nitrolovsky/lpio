@php
    $name = 'zakazat-videorolik';
    $image_path = "/files/zakazat-videorolik/zakazat-videorolik";
@endphp
@component('components.lp20180129')
    @slot('title')
        Заказать видеоролик {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        Ракета Студия
    @endslot

    @slot('description')
        Сценарии, съемка, монтаж, обработка видеороликов
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
        https://www.youtube.com/embed/2G56iiGmm6s
    @endslot

    @slot('lead_magnet')
        Узнайте как с помощью видеоролика показать ценность и пользу вашего бизнеса
    @endslot

    @slot('details')
        Мы покажем в видеоролике вас и насколько ответственно вы занимаетесь свои делом и улучшаете качество продукта.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Узнать
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и мы пообщаемся как донести преимущества вашей компании
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Узнать
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Посмотрите примеры видеороликов
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/Qt_rma1ZMw4
                    @endslot
                    @slot('title')
                        Имиджевый видеоролик
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/98iEqKihK4c
                    @endslot
                    @slot('title')
                        Видеоролик снимался для проекта свадебных организаторов
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/m-rLVXiFvdA
                    @endslot
                    @slot('title')
                        Видеоролик снимался к выпуску книги "Вкусные истории - душевные рецепты для теплой компании".
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/9GHzbaxl9lg
                    @endslot
                    @slot('title')
                        Видеоролик про любовь и стиль
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/I-QiWOdqXLI
                    @endslot
                    @slot('title')
                        Видеоролик снимался для декораторов
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/UFFc46DRs28
                    @endslot
                    @slot('title')
                        Видеоролик снимался для проекта свадебных организаторов
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/_EIBrRzCWOo
                    @endslot
                    @slot('title')
                        Имиджевый видеоролик с демонстрацией товара и стиля
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/9ef0jWaU0Bk
                    @endslot
                    @slot('title')
                        Fashion видеоролик
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/ehrImAacM3s
                    @endslot
                    @slot('title')
                        Демонстрация товара
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
