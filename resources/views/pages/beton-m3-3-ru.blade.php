@component('components.bullet')
    @slot('title')
        Бетон купить в Санкт-Петербурге от бетонного завода
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
        <script async type="text/javascript">function loadscript(e,t){var n=document.createElement("script");n.src="//lptracker.net.ru/"+e;n.onreadystatechange=t;n.onload=t;document.head.appendChild(n);return 1}var init_lstats=function(){lstats.site_id=37003;lstats.referer()};var jquery_lstats=function(){jQstat.noConflict();loadscript("stats_auto.js",init_lstats)};loadscript("jquery-1.10.2.min.js",jquery_lstats);</script>
    @endslot

    @slot('video')
        'YKsEeME2zb4'
    @endslot

    @slot('brand')
        Ленинградский бетонный завод
    @endslot

    @slot('description')
        Сеть бетонных заводов
    @endslot

    @slot('phone')
        +78124269277
    @endslot

    @slot('phone_view')
        +7 (812) 426 92 77
    @endslot

    @slot('email')
        info.lpio.ru@gmail.com
    @endslot

    @slot('offer')
        Бетон с доставкой до вашего объекта за 2 часа. Действующие заводы: Янино-1, Сертолово, Металлострой. 100% отгрузка объема. Работаем 24/7. Заказ от 1 куба. Качество ГОСТ.
    @endslot

    @slot('bullets')
        <li>
            Оплата по факту отгрузки бетона на объекте
        </li>
        <li class="pt-1">
            Гарантия отгрузки 100% объема и соответствие марки
        </li>
        <li class="pt-1">
            Предоставляем паспорт качества с каждой поставкой
        </li>
    @endslot

    @slot('leadmagnet')
        Получите расчёт стоимости бетона с доставкой до вашего объекта за 1 минуту
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="beton">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black sw form-control w-4" id="phone" placeholder="Введите телефон" name="phone" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="font sw btn btn-primary btn-block w-4" role="button">
                    Получить расчёт с доставкой
                </button>
            </div>
            <div class="form-group mb-0">
                <div class="form-check mb-0">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked>
                    </label>
                    Согласен на обработку персональных данных и <a href="../files/beton/politic.pdf" class="text-info a" target="_blank">политикой конфиденциальности</a>
                </div>
            </div>
        </form>
    @endslot

    @slot('legal')
        Copyright &#169; 2017<br>
        <a href="tel:+78124269277" class="text-info a">+7 (812) 426 92 77</a><br>
        <a href="mailto:info.lpio.ru@gmail.com" class="text-info a">info.lpio.ru@gmail.com</a><br>
        Адреса заводов: п. Янино-1 складской комплекс Янино-1 лит А, п. Сертолово индустриальная ул. 15, Штурманская ул. 36
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
