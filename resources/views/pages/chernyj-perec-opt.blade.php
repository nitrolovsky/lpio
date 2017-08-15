@component('components.onescreen')
    @slot('title')
        Оптовые поставки черного перца, черный перец оптом
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
        '../files/sushenyj-chesnok-opt/sushenyj-chesnok-opt.mp4'
    @endslot

    @slot('bg_poster')
        '../files/sushenyj-chesnok-opt/sushenyj-chesnok-opt.jpg'
    @endslot

    @slot('brand')
        CHESNOKGROUP
    @endslot

    @slot('description')
        Оптовые поставки черного перца
    @endslot

    @slot('phone')
        +79219672763
    @endslot

    @slot('phone_view')
        8 921 967 27 63
    @endslot

    @slot('email')
        pryzhok-parashyut@ya.ru
    @endslot

    @slot('address')
        Санкт-Петербург
    @endslot

    @slot('offer')
        Оптовые поставки черного перца по всей России со склада в Санкт-Петербурге
    @endslot

    @slot('bullets')
        <li>
            Прямые поставки из Индии
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
        https://www.youtube.com/embed/NegBQE5P93k
    @endslot

    @slot('lead_magnet')
        Получите прайс-лист с оптовыми ценами, заполнив форму
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
        <a href="tel:+79219672763" class="text-info a">8 921 967 27 63</a><br>
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
