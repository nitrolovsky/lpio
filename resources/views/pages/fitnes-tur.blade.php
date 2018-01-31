@php
    $name = 'fitnes-tur';
    $image_path = "/files/fitnes-tur/fitnes-tur";
@endphp
@component('components.lp20180129')
    @slot('title')
        Фитнес тур Черное море {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        VINYLSMILES
    @endslot

    @slot('description')
        Фитнес туры на Черное море
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
        Узнайте как похудеть и отдохнуть с фитнес-туром на Черное Море
    @endslot

    @slot('details')
        Комплексный подход фитнес-тура: питание, тренировки, процедуры по уходу за собой и духовные практики.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Узнать про фитнес-тур
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и email, чтобы мы отправили вам презентацию и ответили на все вопросы
    @endslot

    @slot('popup_form')
        <input type="hidden" name="to" value="tour@vinylsmiles.studio">
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Узнать про фитнес-тур
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Отдохните на Черном море с пользой
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card-col-3')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('description')
                        Фитнес туры на Черное море Разнообразные тренировки
                    @endslot
                    @slot('title')
                        Разнообразные тренировки
                    @endslot
                    @slot('details')
                        Силовые, интервальные, пробежки вдоль моря, велопрогулки, йога, растяжка. Чередование разных видов тренировок сделает отдых интересным. Программа тренировок адаптируется под уровень участников.
                    @endslot
                @endcomponent

                @component('components.card-col-3')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('description')
                        Фитнес туры на Черное море Сбалансированное питание
                    @endslot
                    @slot('title')
                        Сбалансированное питание
                    @endslot
                    @slot('details')
                        5-ти разовое питание на территории гостиницы. Полностью сбалансированное по рекомендациям ВОЗ. Если у вас есть аллергия на какие-либо продукты или вы вегетарианка, для вас у нас тоже есть разработанное меню.
                    @endslot
                @endcomponent

                @component('components.card-col-3')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('description')
                        Фитнес туры на Черное море Увлекательные лекции
                    @endslot
                    @slot('title')
                        Увлекательные лекции
                    @endslot
                    @slot('details')
                        По физиологии похудения. Правильному питанию. Уходу за собой. Мастер-классы по приготовлению натуральных средств для тела. Тренинги мотивации и личностного роста.
                    @endslot
                @endcomponent

                @component('components.card-col-3')
                    @slot('image')
                        {{ $image_path }}-4.jpg
                    @endslot
                    @slot('description')
                        Фитнес туры на Черное море Водопады, дольмены и прогулки на яхте
                    @endslot
                    @slot('title')
                        Водопады, дольмены и прогулки на яхте
                    @endslot
                    @slot('details')
                        Посетим впечатлающие места и красивые виды Черного Моря. Ваши фотографии будут, как из рая. А если устанете от прогулок на территории гостиницы есть круглогодичный подогреваемый бассейн.
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Профессиональные тренера сопроводят на протяжении всего тура
                @endslot
            @endcomponent

            <div class="row">

                @component('components.card-col-6')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('description')
                        Фитнес туры на Черное море Макеева Дарья
                    @endslot
                    @slot('title')
                        Макеева Дарья
                    @endslot
                    @slot('details')
                        С детства занималась художественной гимнастикой и балетом. Прошла путь от балерины до лентяйки. А затем от лентяйки до тренера. Инструктор по йоге международного класса с 2015г. Большой опыт преподавания, как в группах, так и лично. Более года учила людей основам правильного питания и построения тренировок в Школе Идеального Тела Sekta. Более 250 довольных учеников. Более года опыта личных консультаций по вопросам питания и тренировок. В 2017 пробежала Московский полумарафон. Основательница школы здорового образа жизни PRO:тело.
                    @endslot
                @endcomponent

                @component('components.card-col-6')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('description')
                        Фитнес туры на Черное море Дарькина Яна
                    @endslot
                    @slot('title')
                        Дарькина Яна
                    @endslot
                    @slot('details')
                        Высшее образование по психологии. КМС по спортивной акробатике. 4 года личной практики ушу и тайцзы. Участвовала в Чемпионате России по чирлидингу. Более чем 3х летний опыт преподавания йоги в группах и персонально. МИЛЛИОН довольных учеников. Создатель проекта Прошпагат и соосновательница школы PRO:тело.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')

                    @endslot
                    @slot('description')

                    @endslot
                    @slot('title')

                    @endslot
                    @slot('details')

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
