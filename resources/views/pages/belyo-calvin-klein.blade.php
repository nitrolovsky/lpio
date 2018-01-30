@php
    $name = 'belyo-calvin-klein';
    $image_path = "/files/belyo-calvin-klein/";
@endphp
@component('components.lp20180129')
    @slot('title')
        Комплект женского белья Calvin Klein {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        IGA BUTIK
    @endslot

    @slot('description')
        Интернет-магазин нижнего белья
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
        https://www.youtube.com/embed/ppYGJTWINDU
    @endslot

    @slot('lead_magnet')
        Получите промокод скидку 1000 рублей на комплект женского белья Calvin Klein
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>Состоит из экохлопка и эластана. Натуральные материалы, которые позволят вашей кожи дышать. И минимальное добавление эластана для растягивания и поддержания формы.
            <li>Сохраняет внешний вид после 100 стирок.
            <li>Бесплатная доставка курьером по Санкт-Петербургу.
        <ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить промокод на 1000 рублей
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы мы отправили вам промокод скидку 1000 рублей
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
                Получить промокод на 1000 рублей
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Модели и цвета
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}komplekt-zhenskogo-belya-calvin-klein-belye-slipy.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('details')
                        Белый цвет нижнего белья - нейтральный, ассоциируется с невинностью и в то же время роскошью. Трусики слипы закрывают ягодицы и имеют вырез на середине бедра. Резинка слипов располагается на бедрах или талии. Подходит для ежедневной носки.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}komplekt-zhenskogo-belya-calvin-klein-serye-slipy.jpg
                    @endslot
                    @slot('description')
                        Серый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Серый комплект белья топ и трусики слипы
                    @endslot
                    @slot('details')
                        Серый – классический нейтральный цвет, интеллигентный цвет. Отражает собой все цвета, но ни один не доминирует в нем. Трусики слипы закрывают ягодицы и имеют вырез на середине бедра. Резинка слипов располагается на бедрах или талии. Подходит для ежедневной носки.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}komplekt-zhenskogo-belya-calvin-klein-chernye-slipy.jpg
                    @endslot
                    @slot('description')
                        Черный комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Черный комплект белья топ и трусики слипы
                    @endslot
                    @slot('details')
                        Черный цвет стройнит, контрастирует с цветом кожи и высвечивает обнаженные руки, шею, грудь, ноги. Трусики слипы закрывают ягодицы и имеют вырез на середине бедра. Резинка слипов располагается на бедрах или талии. Подходит для ежедневной носки.
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
                        {{ $image_path }}komplekt-zhenskogo-belya-calvin-klein-belye-stringi.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики стринги
                    @endslot
                    @slot('title')
                        Белый комплект белья топ и трусики стринги
                    @endslot
                    @slot('details')
                        Белый цвет нижнего белья - нейтральный, ассоциируется с невинностью и в то же время роскошью. Стринги сексуальны и их удобно носить с платьями.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}komplekt-zhenskogo-belya-calvin-klein-serye-stringi.jpg
                    @endslot
                    @slot('description')
                        Серый комплект белья топ и трусики стринги
                    @endslot
                    @slot('title')
                        Серый комплект белья топ и трусики стринги
                    @endslot
                    @slot('details')
                        Серый – классический нейтральный цвет, интеллигентный цвет. Отражает собой все цвета, но ни один не доминирует в нем. Стринги сексуальны и их удобно носить с платьями.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}komplekt-zhenskogo-belya-calvin-klein-chernye-stringi.jpg
                    @endslot
                    @slot('description')
                        Черный комплект белья топ и трусики стринги
                    @endslot
                    @slot('title')
                        Черный комплект белья топ и трусики стринги
                    @endslot
                    @slot('details')
                        Черный цвет стройнит, контрастирует с цветом кожи и высвечивает обнаженные руки, шею, грудь, ноги. Стринги сексуальны и их удобно носить с платьями.
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
