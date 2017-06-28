@php
    $path_file = "/files/belyo-calvin-klein/";
@endphp
<!DOCTYPE html>
<html>
    @component('components.head')
        @slot('title')
            Женское белье Calvin Klein
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
                lpio
            @endslot
            @slot('ctr')
                Купить
            @endslot
            @slot('menu')
                <li class="nav-item">
                    <a class="nav-link font" href="#video">Видео</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#price">Модели</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font" href="#comments">Комментарии</a>
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
                Calvin Klein
            @endslot
            @slot('description')
                Интернет-магазин белья
            @endslot
            @slot('phone')
                +78129672763
            @endslot
            @slot('phone_view')
                +7 (812) 967 27 63
            @endslot
            @slot('email')
                info.lpio.ru@gmail.com
            @endslot
            @slot('region')
                Санкт-Петербург
            @endslot
            @slot('offer')
                Комплект женского белья Calvin Klein топ и трусики 1950 рублей
            @endslot
            @slot('bullets')
                <li>
                    Состоит из хлопка и эластана
                </li>
                <li class="pt-1">
                    Сохраняет внешний вид после 100 стирок
                </li>
                <li class="pt-1">
                    Бесплатная доставка курьером по Санкт-Петербургу
                </li>
            @endslot
            @slot('video')
                https://www.youtube.com/embed/ppYGJTWINDU
            @endslot
            @slot('leadmagnet')
                Оформите заказ на комплект женского белья Calvin Klein
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
                            Оформить заказ
                        </button>
                    </div>
                </form>
            @endslot
        @endcomponent


        <div class="bg-white font" id="price">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-5 black">
                            Выберите модель
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-belye-slipy.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-serye-slipy.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-chernye-slipy.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent
                </div>

                <div class="hidden-md-down">
                    <br>
                    <br>
                </div>

                <div class="row pb-5">
                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-belye-stringi.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-serye-stringi.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent

                    @component('components.meaning')
                        @slot('image')
                            {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-chernye-stringi.jpg
                        @endslot
                        @slot('description')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('title')
                            Белый комплект белья топ и трусики слипы
                        @endslot
                        @slot('details')
                            Используется для подбетонки. Подбетонка - это основание для основного фундамента.
                        @endslot
                    @endcomponent

                    <div class="mx-auto d-block pt-5">
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
                Оставьте размеры или эскиз вашего шкафа и мы рассчитаем стоимость
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
                Copyright &#169; 2017 beton.lpio.ru Все права защищены<br>
                ИНН 7802602468<br>
                КПП 780201001<br>
                р/сч 40702810903000013545 в АО "Райффайзенбанк"<br>
                к/сч 30101810100000000723<br>
                БИК 044030723
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
