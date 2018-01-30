@php
    $name = 'garderobnye-na-zakaz';
    $image_path = "/files/garderobnye-na-zakaz/garderobnye-na-zakaz";
@endphp
@component('components.lp20180129')
    @slot('title')
        Гардеробные на заказ в Санкт-Петербурге {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        REIN
    @endslot

    @slot('description')
        Гардеробные на заказ
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

    @slot('presentation')
        {{ $image_path }}-0.jpg
    @endslot

    @slot('lead_magnet')
        Узнайте как будет выглядить гардеробная вашей мечты с фотореалистичным дизайн-проектом
    @endslot

    @slot('details')
        3D визуализация позволит понять как будет выглядить ваша гардеробная комната, ее наполнение и на сколько ей будет удобно пользоваться. Расчет стоимости проекта после уточнение размеров и пожеланий к гардеробной комнате. 
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить дизайн-проект
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы дизайнер уточнил детали гардеробной комнаты
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
                Получить дизайн-проект
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Гардеробные на заказ, изготовленные для наших клиентов в стиле от классики до hi-tech
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('description')
                        Фабричный стандарт качества
                    @endslot
                    @slot('title')
                        Фабричный стандарт качества
                    @endslot
                    @slot('details')
                        Собственное производство в Санкт-Петербурге на оборудовании класса A++ с 2000 года.
                        Профессиональные дизайнеры-проектировщики с опытом работы от 10 лет.
                        Каждое изделие проходит отдел технического контроля перед отгрузкой.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('description')
                        Фирменные механизмы и комплектующие
                    @endslot
                    @slot('title')
                        Фирменные механизмы и комплектующие
                    @endslot
                    @slot('details')
                        Система раздвижных дверей Total Absolut (Польша).
                        Система раздвижных дверей Hettich (Германия).
                        Механизмы и фурнитура Blum (Австрия) и Hettich (Германия).
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('description')
                        Индивидуальный подход
                    @endslot
                    @slot('title')
                        Индивидуальный подход
                    @endslot
                    @slot('details')
                        Персональный дизайнер составит для вас проект гардеробной, учитывая ваши потребности и рекомендации.
                        Любые нестандартные решения по конструктиву и внешнему виду гардеробной.
                        Все виды гардеробных комнат: угловые, П-образные, в отельной комнате или в спальне и многие другие.
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
