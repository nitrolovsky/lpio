@component('components.onescreen')
    @slot('title')
        Художественная роспись стен, фреска, граффити
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
        <script async type="text/javascript">function loadscript(e,t){var n=document.createElement("script");n.src="//lptracker.net.ru/"+e;n.onreadystatechange=t;n.onload=t;document.head.appendChild(n);return 1}var init_lstats=function(){lstats.site_id=42192;lstats.referer()};var jquery_lstats=function(){jQstat.noConflict();loadscript("stats_auto.js",init_lstats)};loadscript("jquery-1.10.2.min.js",jquery_lstats);</script>
    @endslot

    @slot('bg_video')
        '../files/rospis-graffiti-ru/rospis-graffiti-ru.mp4'
    @endslot

    @slot('bg_poster')
        '../files/rospis-graffiti-ru/rospis-graffiti-ru.jpg'
    @endslot

    @slot('brand')
        МаСтудио
    @endslot

    @slot('description')
        Студия художников Санкт-Петербург и Москва
    @endslot

    @slot('phone')
        88124269298
    @endslot

    @slot('phone_view')
        8 (812) 426 92 98
    @endslot

    @slot('email')
        magicmagicart@gmail.com
    @endslot

    @slot('address')

    @endslot

    @slot('offer')
        Художественная роспись стен интерьеров от 1500р/м2. Cначала рисуем. Оплата после выполненной работы
    @endslot

    @slot('bullets')
        <li>
            Граффити на заказ, роспись кистями
        </li>
        <li class="pt-1">
            Аэрография, нанесение фрески
        </li>
        <li class="pt-1">
            15 художников с образованием и чувством стиля
        </li>
        <li class="pt-1">
            200 работ в портфолио, делаем эксклюзив
        </li>
        <li class="pt-1">
            От 5 лет, опыт каждого художника
        </li>
        <li class="pt-1">
            2000+ м2 теперь радуют взгляд заказчиков
        </li>
    @endslot

    @slot('video')
        https://www.youtube.com/embed/5PsoGwqhMjs
    @endslot

    @slot('lead_magnet')
        Получите крутейшее портфолио, заполнив форму
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="to" value="magicmagicart@gmail.com">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="email" placeholder="Введите email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="phone" placeholder="Телефон" name="phone" required="required">
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
        <a href="tel:+78124269298" class="text-info a">+7 (812) 426 92 98</a><br>
        <a href="mailto:magicmagicart@gmail.com" class="text-info a">magicmagicart@gmail.com</a><br>
        Санкт-Петербург, Греческий переулок 27 офис 16
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
