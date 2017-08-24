@component('components.onescreen')
    @slot('title')
        Агентство недвижимости Купина, снять коммерческое помещение в аренду
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

    @slot('bg_video')
        '../files/nedvizhimost-kupina/nedvizhimost-kupina-arenda-kommercheskogo.mp4'
    @endslot

    @slot('bg_poster')
        '../files/nedvizhimost-kupina/nedvizhimost-kupina-arenda-kommercheskogo.jpg'
    @endslot

    @slot('brand')
        KUPINA
    @endslot

    @slot('description')
        Агентство недвижимости Купина
    @endslot

    @slot('phone')
        +79650471186
    @endslot

    @slot('phone_view')
        +7 965 047 11 86
    @endslot

    @slot('email')
        nedvizhimost-kupina@ya.ru
    @endslot

    @slot('address')
        Санкт-Петербург
    @endslot

    @slot('offer')
        Подберем коммерческое помещение в Санкт-Петербурге для аренды по вашим параметрам
    @endslot

    @slot('bullets')
        <li>
            Помещения под производство, офис, кафе, магазин, ресторан
        </li>
        <li class="pt-1">
            Подберем в кратчайшие сроки, есть база арендодателей
        </li>
        <li class="pt-1">
            Проверяем юридическую чистоту помещения
        </li>
    @endslot

    @slot('video')
        https://www.youtube.com/embed/hmdkugHblKQ
    @endslot

    @slot('lead_magnet')
        Получите 5 лучших вариантов помещений по вашим параметрам, заполнив форму
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="to" value="nitrolovsky@gmail.com">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="phone" placeholder="Введите телефон*" name="phone" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                    Получить
                </button>
            </div>
            <div class="text-center">
                <small>
                    <a href="" class="text-primary  a" data-toggle="modal" data-target="#termsofuse">Пользовательское соглашение</a>
                </small>
            </div>
        </form>
    @endslot

    @slot('legal')
        Copyright &#169; 2017<br>
        <a href="tel:+79650471186" class="text-info a">+7 965 047 11 86</a><br>
        <a href="mailto:nedvizhimost-kupina@ya.ru" class="text-info a">nedvizhimost-kupina@ya.ru</a><br>
    @endslot

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
