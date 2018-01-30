@php
    $path_file = "/files/pilka-scholl/";
@endphp
<!DOCTYPE html>
<html>
    @component('components.head')
        @slot('title')
            Электрическая роликовая пилка Scholl Wet & Dry
        @endslot
        @slot('bg')
            {{ $path_file }}bg.jpg
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
                Scholl
            @endslot
            @slot('ctr')
                Купить
            @endslot
            @slot('menu')
                <li class="nav-item">
                    <a class="nav-link font" href="#video">Видео</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#benefits">Преимущества</a>
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
                    <input type="hidden" name="source" value="concrete">
                    <input type="hidden" name="cta" value="Всплывающия форма навигации">
                    <div class="form-group">
                        <input type="text" class="font black form-control w-3" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control font black w-3" id="comment" rows="3" name="comment" placeholder="Комментарий"></textarea>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                            Рассчитать смету с доставкой
                        </button>
                    </div>
                </form>
            @endslot
        @endcomponent

        @component('components.firstscreen')
            @slot('brand')
                Scholl
            @endslot
            @slot('description')
                Интернет-магазин товаров для красоты и здоровья
            @endslot
            @slot('phone')
                +79291168565
            @endslot
            @slot('phone_view')
                +7 929 116 85 65
            @endslot
            @slot('email')
                info.lpio.ru@gmail.com
            @endslot
            @slot('region')
                Санкт-Петербург
            @endslot
            @slot('offer')
                Электрическая роликовая пилка Scholl для удаления огрубевшей кожи стоп
            @endslot
            @slot('bullets')
                <li>
                    Бесплатная доставка по Москве и СПб
                </li>
                <li class="pt-1">
                    Подарок к каждой пилке
                </li>
                <li class="pt-1">
                    Бархатная кожа стоп за 2 недели использования
                </li>
            @endslot
            @slot('video')
                https://www.youtube.com/embed/rWucvgaEuyc
            @endslot
            @slot('leadmagnet')
                Получите промокод -40 % на пилку Scholl Wet & Dry
            @endslot
            @slot('form')
                <form action="/leads" method="POST" class="pt-3">
                    {{ csrf_field() }}
                    <input type="hidden" name="source" value="concrete">
                    <input type="hidden" name="cta" value="Форма с видео">
                    <div class="form-group">
                        <input type="text" class="font black sw form-control w-3" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control font black w-3 sw" id="comment" rows="3" name="comment" placeholder="Комментарий"></textarea>
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
                            6 ключевых преимуществ пилки Scholl
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}pilka-scholl-1.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Уход за кожей ног
                        @endslot
                        @slot('details')
                            Обновленная 2 версия. В 2016 году Великобританская компания Scholl выпустила вторую версию электрической роликовой пилки для удаления огрубевшей кожи стоп. Ролики от предыдущей модели подходят к новой.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}pilka-scholl-2.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Сравните результат до и после применения
                        @endslot
                        @slot('details')
                            Кожа ног становится гладкой и приятной на ощупь. Сравните стопы ног до и после использования пилки Scholl. Процедура на одну стопу занимает 10 минут.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}pilka-scholl-3.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Защита от воды и новые возможности
                        @endslot
                        @slot('details')
                            Меньше пыли и проведение процедуры в ванной. 2 версию пилки сделали водонепроницаемой. Теперь можно использовать в душе, ванной и по влажной коже. Если вы распарите ноги, то кожа станет мягкой и легче будет поддаваться обработке.
                        @endslot
                    @endcomponent
                </div>

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row">
                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}pilka-scholl-4.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Встроенный аккумулятор
                        @endslot
                        @slot('details')
                            Заряда хватает на неделю пользования. Питание от встроенного аккумулятора. Время зарядки составляет 3 часа. То, что пилка заряжана показывает индикатор, когда она заряжается, он мигает, при полной зарядке индикатор просто горит. 2 режима скорости, которые переключаются кнопкой на ручке.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}pilka-scholl-5.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Все необходимое в комплекте
                        @endslot
                        @slot('details')
                            Можно заряжать от компьютера. В комплекте электрическая пилка с аккумулятором, роликовая насадка Velvet Smooth Wet & Dry, зарядное устройство USB, адаптер USB в розетку, инструкция.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}pilka-scholl-6.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Хороший подарок любимой
                        @endslot
                        @slot('details')
                            Инструкция на упаковке. Упаковано в красивую коробочку, которую приятно подарить. Весит вместе с упаковкой 415 грамм. Размеры упаковки в длину 20 см, ширину 20 см, высоту 7 см.
                        @endslot
                    @endcomponent
                </div>

                <div class="row pt-5 pb-5">
                    <div class="mx-auto d-block">
                        <button class="btn btn-primary font w-4" role="button"  data-toggle="modal" data-target="#benefitModal">
                            Получить подробный прайс-лист
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
                                            <input type="hidden" name="source" value="concrete">
                                            <input type="hidden" name="cta" value="Всплывающая форма блока цены на получение прайс-листа">
                                            <div class="form-group">
                                                <input type="email" class="font black form-control w-3" id="email" placeholder="Email*" name="email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control font black w-3" id="comment" rows="3" name="comment" placeholder="Комментарий"></textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn btn-primary btn-block" role="button">
                                                    Получить прайс-лист
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
                bg-faded
            @endslot
            @slot('title')
                Задайте вопросы, менеджер ответит в течение 1 минуты
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
            @slot('legal')
                Copyright &#169; 2017 beton.lpio.ru Все права защищены. ИНН 7802602468. КПП 780201001. р/сч 40702810903000013545 в АО "Райффайзенбанк".<br>
                к/сч 30101810100000000723. БИК 044030723.
            @endslot
            @slot('contacts')
                <a href="tel:+78124269277" class="a">+7 (812) 426-92-77</a><br>
                <a href="mailto:info.lpio.ru@gmail.com" class="a">info.lpio.ru@gmail.com</a><br>
                Доставка 24/7 по СПб и ЛО
            @endslot
        @endcomponent

        @component('components.js')
            @slot('yandex')
                <!-- Yandex.Metrika counter -->
                <script type="text/javascript">
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function() {
                            try {
                                w.yaCounter44736544 = new Ya.Metrika({
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
                        s.src = "https://mc.yandex.ru/metrika/watch.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(document, window, "yandex_metrika_callbacks");
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/44736544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            @endslot
        @endcomponent
    </body>
</html>
