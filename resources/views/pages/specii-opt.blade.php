@component('components.onescreen')
    @slot('title')
        Оптовые поставки специй и пряностей, специи и пряности оптом
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

    @slot('lptracker')
        <noindex><script async src="https://stats.lptracker.ru/code/new/42912"></script></noindex>
    @endslot

    @slot('roistat')
        <script>
        (function(w, d, s, h, id) {
            w.roistatProjectId = id; w.roistatHost = h;
            var p = d.location.protocol == "https:" ? "https://" : "http://";
            var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
            var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
        })(window, document, 'script', 'cloud.roistat.com', '7fb8a6edcf4799069d4b8ee6b97487fa');
        </script>
    @endslot

    @slot('bg_video')
        ''
    @endslot

    @slot('bg_poster')
        '../files/chernyj-perec-opt/chernyj-perec-opt.jpg'
    @endslot

    @slot('brand')
        blizkaya
    @endslot

    @slot('description')
        Оптовые поставки специй и пряностей
    @endslot

    @slot('phone')
        88123894205
    @endslot

    @slot('phone_view')
        8 (812) 389 42 05
    @endslot

    @slot('email')
        specii-opt@ya.ru
    @endslot

    @slot('address')
        Санкт-Петербург
    @endslot

    @slot('offer')
        Оптовые поставки специй и пряностей по всей России с производства Санкт-Петербурга
    @endslot

    @slot('bullets')
        <li>
            200+ позиций: черный перец, сушенный чеснок, корица, карри...
        </li>
        <li class="pt-1">
            Собственный помол
        </li>
        <li class="pt-1">
            Прямые поставки ингредиентов из Индии
        </li>
        <li class="pt-1">
            Доставка по всей России
        </li>
        <li class="pt-1">
            Отсрочка оплаты для постоянных клиентов
        </li>
        <li class="pt-1">
            Бесплатные образцы товара
        </li>
    @endslot

    @slot('video')
        https://www.youtube.com/embed/9KvS_QN6vIg
    @endslot

    @slot('lead_magnet')
        Получите прайс-лист с оптовыми ценами, заполнив форму
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="to" value="navigatornit@yandex.ru">
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
        <a href="tel:88123894205" class="text-info a">8 (812) 389 42 05</a><br>
        <a href="mailto:specii-opt@ya.ru" class="text-info a">specii-opt@ya.ru</a><br>
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
