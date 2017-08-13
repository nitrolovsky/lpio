@component('components.onescreen')
    @slot('title')
        Прыжок с парашютом
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
        '../files/pryzhok-parashyut/pryzhok-parashyut-bg-video.mp4'
    @endslot

    @slot('bg_poster')
        '../files/pryzhok-parashyut/pryzhok-parashyut-bg-image.jpg'
    @endslot

    @slot('brand')
        Sky Fly SPB
    @endslot

    @slot('description')
        Прыжки с парашютом
    @endslot

    @slot('phone')
        +79818273335
    @endslot

    @slot('phone_view')
        8 981 827 33 35
    @endslot

    @slot('email')
        pryzhok-parashyut@ya.ru
    @endslot

    @slot('address')
        Санкт-Петербург
    @endslot

    @slot('offer')
        Подарочный сертификат на прыжок с парашютом в тандеме с инструктором
    @endslot

    @slot('bullets')
        <li>
            Высота прыжка 2500 м, 30 секунд свободного падения
        </li>
        <li class="pt-1">
            Опытные инструктора со стажем 1300+ прыжков
        </li>
        <li class="pt-1">
            Профессиональное оборудование и парашюты
        </li>
        <li class="pt-1">
            Экшн видеосъемка
        </li>
        <li class="pt-1">
            Без очередей на прыжок
        </li>
    @endslot

    @slot('video')
        https://www.youtube.com/embed/Wyl5hEcPig4
    @endslot

    @slot('lead_magnet')
        Получи промокод -30% на прыжок с парашютом, заполнив форму
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="pryzhok-parashyut">
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
        <a href="tel:+79818273335" class="text-info a">8 981 827 33 35</a><br>
        <a href="mailto:pryzhok-parashyut@ya.ru" class="text-info a">pryzhok-parashyut@ya.ru</a><br>
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
