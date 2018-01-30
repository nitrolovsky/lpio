@php
    $name = 'ashmedia';
    $image_path = "/files/ashmedia/ashmedia";
@endphp
@component('components.lp20180129')
    @slot('title')
        Создание видеороликов для бизнеса АШмедиа ashmedia.ru
    @endslot

    @slot('brand')
        АШмедиа
    @endslot

    @slot('description')
        Создание видеороликов для бизнеса
    @endslot

    @slot('header_phone')
        <a href="tel:89522193383" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 952 219 33 83</a>
    @endslot

    @slot('header_email')
        <a href="mailto:ashmedia@mail.ru" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">ashmedia@mail.ru</a>
    @endslot

    @slot('header_address')
        Санкт-Петербург, м. Горьковская
    @endslot

    @slot('presentation')
        ../files/ashmedia/bg1.jpg
    @endslot

    @slot('lead_magnet')
        Получите бесплатно 3 продающих концепции сценария видеоролика и расчет стоимости услуги
    @endslot

    @slot('details')
        Объясним ценность вашего продукта с помощью продающего видеоролика.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить бесплатно
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон и вы получите 3 концепции видероликов c расчетом стоимости
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Получить бесплатно
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
                        https://www.youtube.com/embed/d1FgJJ1Za18
                    @endslot
                    @slot('title')
                        Кадровое агентство "STAFF PERSONAL"
                    @endslot
                    @slot('details')
                        Наша основная услуга - аутсорсинг. Мы нанимаем персонал для гостиничного бизнеса, продуктовых универсамов, а также различных производств. 3 дня - это срок от заявки до вывода рабочей силы на место труда.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/wCBFBCe-GMo
                    @endslot
                    @slot('title')
                        404 // антикафе
                    @endslot
                    @slot('details')
                        Вы сможете поработать в уютной атмосфере, отдохнуть после трудового дня и приятно провести время с друзьями. 404 станет отличным местом, чтобы встретится с деловым партнером. К вашим услугам ксерокс, сканер и принтер.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/VzGSFv-WDV8
                    @endslot
                    @slot('title')
                        Центр сертификации "ГОРТЕСТ"
                    @endslot
                    @slot('details')
                        Центр сертификации ГОРТЕСТ оказывает услуги по получению разрешительных документов для импорта, экспорта и реализации товаров на территории России.
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
                        https://www.youtube.com/embed/9f-CMh6rubE
                    @endslot
                    @slot('title')
                        Производство турок
                    @endslot
                    @slot('details')
                        Уникальное производство. 26 лет опыта работы. Продукт не имеющий аналогов по качеству и стилю в мире. Доставка по всей России. Вы можете получить продукт с символикой компании.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/BUtarYML3bQ
                    @endslot
                    @slot('title')
                        Медицинский центр "ДИАДЕНТ"
                    @endslot
                    @slot('details')
                        Клиника оказывает услуги по направлениям: стоматология, косметология, гинекология, урология и пластическая хирургия.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/E6qjWdrQtqo
                    @endslot
                    @slot('title')
                        Производство и продажа шуб "ANSE"
                    @endslot
                    @slot('details')
                        Портные цеха имеют высшее специальное образование и 5 лет опыта работы. За счет параллельного выполнения работ мы можем справится с большим объемом в сезонное время. Возможен индивидуальный пошив.
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
                        https://www.youtube.com/embed/xU7YA2ac5tw
                    @endslot
                    @slot('title')
                        Производство печатной продукции "Titanprint"
                    @endslot
                    @slot('details')
                        Занимаемся изготовлением различных видов рекламной и полиграфической продукции. Центром отдела широкоформатной печати является сольвентный принтер, который печатает в фотокачестве и с высокой точностью передает цвета и оттенки. А изображения устойчивы к влаге и ультрафиолету.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/tRfm_LSiRek
                    @endslot
                    @slot('title')
                        Производство кухонных фасадов "Омега"
                    @endslot
                    @slot('details')
                        На рынке с 2006 года. 5 заводов - партнеров. 20 крупных фабрик сбыта. 50 обращений ежедневно. Производим: кухонные двери, двери-купе, резку и обработку стекла, пескоструйные рисунки, фотопечать, стеновые панели для кухни, мебельную фурнитуру.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/UWblwq59Nos
                    @endslot
                    @slot('title')
                        Производство "Хорошая мебель"
                    @endslot
                    @slot('details')
                        Производим офисные стойки ресепшн, барные торговые стойки более 7 лет. С 2009 года реализовали свыше 100 уникальных проектов. Мы прямой производитель поэтому у нас цены ниже на 30%, чем в салонах.
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
                    Отзывы заказчиков о студии АШмедиа
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/TBcozDTro4E
                    @endslot
                    @slot('title')
                        Отзыв "Staff Personal"
                    @endslot
                    @slot('details')
                        Задача: нужен был видеоролик для сайта. Показать офис, персонал, чем занимаемся, основные задачи и функции. Повысить уровень доверия клиентов. На рынке очень много компаний-однодневок и для заказчика высокий риск наткнуться на недобросовестного подрядчика. Мы на рынке с 2005 года.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/GBxC_eR2UqY
                    @endslot
                    @slot('title')
                        Отзыв "ГОРТЕСТ"
                    @endslot
                    @slot('details')
                        Задача: решить вопрос с кадрам. Для этого снять HR видео.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/Z8AaFDtnX1c
                    @endslot
                    @slot('title')
                        Отзыв "Gidrotech"
                    @endslot
                    @slot('details')
                        Задача: Презентовать компанию.
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
        Copyright &#169; 2018 АШМедиа<br>
        <a href=https://vk.com/shevtsovpiter target="_blank">Артем Шевцов</a>
    @endslot

    @slot('footer_phone')
        <a href="tel:89522193383" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 952 219 33 83</a>
    @endslot

    @slot('footer_email')
        <a href="mailto:ashmedia@mail.ru" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">ashmedia@mail.ru</a>
    @endslot

    @slot('footer_address')
        Санкт-Петербург, м. Горьковская
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
