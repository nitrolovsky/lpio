@component('components.landing-page-bullet')

    @slot('bg_image')
        /files/remont-kvartir-pod-klyuch/remont-kvartir-pod-klyuch.jpg
    @endslot

    @slot('brand')
        REIN
    @endslot

    @slot('description')
        Дизайнерская отделка и ремонт квартиры в Москве
    @endslot

    @slot('phone')
        89267231014
    @endslot

    @slot('phone_view')
        8 926 723 10 14
    @endslot

    @slot('email')
        info.lpio@ya.ru
    @endslot

    @slot('offer')
        Узнайте цену вашего дизайнерского ремонта квартиры «под ключ» в Москве ответив на тест из 10 вопросов
    @endslot

    @slot('details')
        Время теста - 2 минуты<br>
        Результаты прийдут на почту и телефон
    @endslot

    @slot('form_inputs')
        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Введите email" name="email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone" required>
        </div>
    @endslot

    @slot('form_cta')
        Пройти тест
    @endslot

    @slot('legal')
        remont-kvartir-pod-klyuch.lpio.ru
    @endslot

    @slot('google')
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-99764557-1', 'auto');
          ga('send', 'pageview');
        </script>
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
