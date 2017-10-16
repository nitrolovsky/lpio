@php
    $path_files = "/files/ashmedia/";
@endphp
<!DOCTYPE html>
<html>
    @component('components.head')
        @slot('title')
            Создание видеороликов для бизнеса АШмедиа ashmedia.ru
        @endslot
        @slot('bg')
            {{ $path_files }}bg.jpg
        @endslot
        @slot('google_analytics')
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-99764557-1', 'auto');
              ga('send', 'pageview');

            </script>
        @endslot
        @slot('lptracker')

        @endslot
    @endcomponent
    <body>
        @component('components.nav')
            @slot('brand')
                АШМедиа
            @endslot
            @slot('ctr')
                Получить расчет
            @endslot
            @slot('menu')
                <li class="nav-item">
                    <a class="nav-link font" href="#video">Видео</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#benefits">Примеры работ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#comments">Комментарии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#contacts">Контакты</a>
                </li>
            @endslot
            @slot('modal')
                <h4 class="my-0 pt-2 pb-4 text-center font w-5">
                    Заполните форму
                </h4>
                <form action="/leads" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="source" value="ashmedia">
                    <input type="hidden" name="cta" value="Всплывающия форма навигации">
                    <div class="form-group">
                        <input type="text" class="font black form-control w-3" id="name" placeholder="Имя" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                            Получить расчет
                        </button>
                    </div>
                </form>
            @endslot
        @endcomponent

        @component('components.firstscreen-2')
            @slot('brand')
                АШмедиа
            @endslot
            @slot('description')
                Создание видеороликов для бизнеса
            @endslot
            @slot('phone')
                +79522193383
            @endslot
            @slot('phone_view')
                +7 952 219 33 83
            @endslot
            @slot('email')
                ashmedia@mail.ru
            @endslot
            @slot('region')
                Санкт-Петербург, м. Горьковская
            @endslot
            @slot('offer')
                Объясним ценность вашего продукта с помощью продающего видеоролика
            @endslot
            @slot('bullets')
                <li>
                    Дополнительный источник продаж
                </li>
                <li class="pt-1">
                    Срок работы - до 7 дней под ключ
                </li>
                <li class="pt-1">
                    Стоимость видеоролика - от 15 000 рублей
                </li>
            @endslot
            @slot('video')
                https://www.youtube.com/embed/zzEse2A5g_Y
            @endslot
            @slot('leadmagnet')
                Получите 3 концепции сценария видеоролика и расчет сметы заполнив форму
            @endslot
            @slot('form')
                <form action="/leads" method="POST" class="pt-3">
                    {{ csrf_field() }}
                    <input type="hidden" name="source" value="ashmedia">
                    <input type="hidden" name="cta" value="Форма с видео">
                    <div class="form-group">
                        <input type="text" class="font black sw form-control w-3" id="name" placeholder="Имя" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="font sw btn btn-primary btn-block w-4" role="button">
                            Получить
                        </button>
                    </div>
                </form>
            @endslot
        @endcomponent

        <div id="benefits"></div>
        <div class="bg-white font">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Посмотрите примеры наших видеороликов
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row">
                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row">
                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                <div class="row pt-5 pb-5">
                    <div class="mx-auto d-block">
                        <button class="btn btn-primary font w-4" role="button"  data-toggle="modal" data-target="#benefitModal">
                            Получить расчет
                        </button>
                        <div class="modal fade" id="benefitModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="my-0 pt-2 pb-4 text-center font w-5">
                                            Заполните форму
                                        </h5>
                                        <form action="/leads" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="ashmedia">
                                            <input type="hidden" name="cta" value="Всплывающая форма блока примеров">
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="name" placeholder="Имя" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn btn-primary btn-block" role="button">
                                                    Получить расчет
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="reviews"></div>
        <div class="bg-faded font">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Отзывы заказчиков о студии АШмедиа
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                    @component('components.meaningvideo')
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

                <div class="row pt-5 pb-5">
                    <div class="mx-auto d-block">
                        <button class="btn btn-primary font w-4" role="button"  data-toggle="modal" data-target="#benefitModal">
                            Получить консультацию
                        </button>
                        <div class="modal fade" id="benefitModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="my-0 pt-2 pb-4 text-center font w-5">
                                            Заполните форму
                                        </h5>
                                        <form action="/leads" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="ashmedia">
                                            <input type="hidden" name="cta" value="Всплывающая форма блока отзывов">
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="name" placeholder="Имя" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn btn-primary btn-block" role="button">
                                                    Получить консультацию
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @component('components.comments')
            @slot('bgcolor')
                bg-white
            @endslot
            @slot('title')
                Оставьте комментарий, отзыв или вопрос
            @endslot
            @slot('cackle')
                <script type="text/javascript">
                    cackle_widget = window.cackle_widget || [];
                    cackle_widget.push({widget: 'Comment', id: 49982});
                    (function() {
                        var mc = document.createElement('script');
                        mc.type = 'text/javascript';
                        mc.async = true;
                        mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
                    })();
                </script>
            @endslot
        @endcomponent

        @component('components.footer')
            @slot('bgcolor')
                bg-faded
            @endslot
            @slot('legal')
                2017 АШМедиа Все права защищены<br>
                <a href=https://vk.com/shevtsovpiter class=a target=_blank>Артем Шевцов</a>
            @endslot
            @slot('contacts')
                <a href="tel:+79522193383" class="a">+7 952 219 33 83</a><br>
                <a href="mailto:ashmedia@mail.ru" class="a">ashmedia@mail.ru</a><br>
                Санкт-Петербург, м. Горьковская
            @endslot
        @endcomponent

        @component('components.js')
            @slot('yandex')
                <!-- Yandex.Metrika counter -->
                <script type="text/javascript">
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function() {
                            try {
                                w.yaCounter44775685 = new Ya.Metrika({
                                    id:44775685,
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true,
                                    ecommerce:"dataLayer"
                                });
                            } catch(e) { }
                        });

                        var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () { n.parentNode.insertBefore(s, n); };
                        s.type = "text/javascript";
                        s.async = true;
                        s.src = "https://mc.yandex.ru/metrika/watch.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(document, window, "yandex_metrika_callbacks");
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/44775685" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            @endslot
        @endcomponent
    </body>
</html>
