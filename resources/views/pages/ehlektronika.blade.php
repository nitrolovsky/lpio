@component('components.bullet')
    @slot('title')
        Производство бытовых электрических приборов, электрического оборудования, компьютеров и периферийного оборудования, коммуникационного оборудования, элементов электронной аппаратуры, электронных печатных плат, бытовой электроники
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
        '-dsLGkBeV_I'
    @endslot

    @slot('brand')
        World Demanded Electronic
    @endslot

    @slot('description')
        Контрактное производство электроники
    @endslot

    @slot('phone')
        88002342919
    @endslot

    @slot('phone_view')
        8 800 234 29 19
    @endslot

    @slot('email')
         info@wdelab.com
    @endslot

    @slot('offer')
        Контрактное производство
    @endslot

    @slot('bullets')
        <li>
            Бытовых электрических приборов
        </li>
        <li class="pt-1">
            Электрического оборудования
        </li>
        <li class="pt-1">
            Компьютеров и периферийного оборудования
        </li>
        <li class="pt-1">
            Коммуникационного оборудования
        </li>
        <li class="pt-1">
            Элементов электронной аппаратуры
        </li>
        <li class="pt-1">
            Электронных печатных плат
        </li>
        <li class="pt-1">
            Бытовой электроники
        </li>
    @endslot

    @slot('leadmagnet')
        Получите прайс-лист и расчет вашего заказа
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="ehlektronika">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="name" placeholder="Имя Фамилия" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="phone" placeholder="Телефон" name="phone" required="required">
            </div>
            <div class="form-group">
                <textarea class="form-control font black w-4" id="comment" rows="3" name="comment" placeholder="Комментарий"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                    Получить
                </button>
            </div>
            <div class="form-group mb-0">
                <div class="form-check mb-0">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked>
                    </label>
                    Согласен на обработку персональных данных и <a href="../files/beton/politic.pdf" class="text-primary a" target="_blank">политикой конфиденциальности</a>
                </div>
            </div>
        </form>
    @endslot

    @slot('legal')
        Copyright &#169; 2017 World Demanded Electronic Все права защищены<br>
        Бесплатный звонок по России <a href="tel:88002342919" class="text-info a">8 800 234 29 19</a><br>
        Email <a href="mailto:info@wdelab.com" class="text-info a">info@wdelab.com</a><br>
        Ген. директор Валушев Сергей Александрович<br>
        ОГРН 5167746367850<br>
        ИНН 7714960760<br>
        КПП 771401001<br>
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
