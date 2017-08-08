@component('components.bullet')
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

    @slot('video')
        'Wyl5hEcPig4'
    @endslot

    @slot('brand')
        Sky Fly SPB
    @endslot

    @slot('description')
        Прыжки с парашютом в СПб
    @endslot

    @slot('phone')
        +79219672763
    @endslot

    @slot('phone_view')
        +7 921 967 27 63
    @endslot

    @slot('email')
        magicmagicart@gmail.com
    @endslot

    @slot('offer')
        Подарочный сертификат на прыжок с парашютом в тандеме с инструктором за 5900 р.
    @endslot

    @slot('bullets')
        <li>
            Граффити на заказ, роспись стен кистями
        </li>
        <li class="pt-1">
            Аэрография стен, нанесение фрески
        </li>
        <li class="pt-1">
            Портфолио 200+ проектов
        </li>
        <li class="pt-1">
            Защищаем рисунки лаком, стены можно мыть
        </li>
        <li class="pt-1">
            13+ лет опыта работы у художников
        </li>
        <li class="pt-1">
            2000+ м2 теперь радуют взгляд заказчиков
        </li>
        <li class="pt-1">
            Выполняем срочные заказы в срок
        </li>
    @endslot

    @slot('leadmagnet')
        Пообщайся с инструктором перед прыжком, заполнив форму
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="beton">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="phone" placeholder="Введите телефон" name="phone" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                    Поговорить
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
