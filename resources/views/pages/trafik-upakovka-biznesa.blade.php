@component('components.onescreen')
    @slot('title')
        Упаковка бизнеса и трафик на результат
    @endslot
    @slot('bg')
        /files/trafik-upakovka-biznesa/bg.jpg
    @endslot
    @slot('bg_poster')
        /files/trafik-upakovka-biznesa/bg.jpg
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
    @slot('brand')
        Павел Рейн
    @endslot
    @slot('description')
        Маркетолог
    @endslot
    @slot('phone')
        +79219672763
    @endslot
    @slot('phone_view')
        8 921 967 27 63
    @endslot
    @slot('email')
        nitrolovsky@gmail.com
    @endslot
    @slot('address')
        Санкт-Петербург, м. Невский проспект
    @endslot
    @slot('offer')
        Сделаю презентацию вашего бизнеса, повышу доверие с помощью видеомаркетинга и настрою трафик на результат
    @endslot
    @slot('bullets')
        <li>
            Цель - добиться увеличения прибыли
        </li>
        <li class="pt-1">
            Увеличить продажи, доверие и рекомендации
        </li>
        <li class="pt-1">
            Привлечь максимум клиентов с помощью видеомаркетинга
        </li>
    @endslot
    @slot('video')
        https://www.youtube.com/embed/rtcSgvzVC6Q
    @endslot
    @slot('bg_video')
        https://www.youtube.com/embed/rtcSgvzVC6Q
    @endslot
    @slot('lead_magnet')
        Получите презентацию заполнив форму
    @endslot
    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="trafik-upakovka-biznesa">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <textarea class="form-control font black w-3 sw" id="comment" rows="3" name="comment" placeholder="Имя и сфера деятельности"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="font sw btn btn-primary btn-block w-4" role="button">
                    Получить
                </button>
            </div>
            <div class="form-group mb-0">
                <div class="form-check mb-0">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked>
                    </label>
                    Согласен с обработкой персональных данных и <a href="/files/trafik-upakovka-biznesa/politic.pdf" class="text-info a" target="_blank">политикой конфиденциальности</a>
                </div>
            </div>
        </form>
    @endslot
    @slot('legal')
        Copyright &#169; 2017 lpio.ru Все права защищены
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
