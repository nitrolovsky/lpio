@component('components.offer')
    @slot('title')
        Студия дизайна интерьеров
    @endslot

    @slot('bg_poster')
        dizajn-interera.jpg
    @endslot

    @slot('bg_video')

    @endslot

    @slot('brand')
        ELIZIUM
    @endslot

    @slot('description')
        Студия дизайна интерьера
    @endslot

    @slot('phone')
        88129672763
    @endslot

    @slot('phone_view')
        8 (812) 967 27 63
    @endslot

    @slot('email')
        info.lpio@ya.ru
    @endslot

    @slot('offer')
        Получите инструкцию "Как избежать лишних трат при ремонте и отделке с помощью дизайн-проекта и сохранить от 500 тысяч рублей".
    @endslot

    @slot('details')
        На основе опыта более 230 заказчиков. Сохранено в общей сумме более 164 миллионов рублей и 47 месяцев работы на переделки.
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4 sw" id="email" placeholder="Введите email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4 sw" id="phone" placeholder="Телефон" name="phone" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-success btn-block w-4 sw" role="button">
                    Получить инструкцию бесплатно
                </button>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Согласен на обработку персональных данных и <a href="" class="text-info  a" data-toggle="modal" data-target="#termsofuse">политикой конфиденциальности</a>
                </label>
            </div>
        </form>
    @endslot

    @slot('legal')
        Copyright &#169; 2017 &laquo;Элизиум&raquo;<br>
        Санкт-Петербург, Индустриальный проспект д. 44, БЦ Охта Хаус, офис 337а
    @endslot

    @slot('lptracker')

    @endslot

    @slot('gtm_head')
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-56WTNTG');</script>
        <!-- End Google Tag Manager -->
    @endslot

    @slot('gtm_body')
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56WTNTG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
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
