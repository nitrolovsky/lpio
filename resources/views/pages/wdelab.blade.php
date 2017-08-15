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
        Оставьте заявку
    @endslot

    @slot('form')
        <form id="__vtigerWebForm" name="wdelab " action="http://aemlab.ru/work/run/wdelab/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:f3d7c43eef146aff3ff16ac49988f2452c1dda47,1501662433">
            <input type="hidden" name="publicid" value="7a10efb385c7727a6a4d2a4d307c3351">
            <input type="hidden" name="urlencodeenable" value="1">
            <input type="hidden" name="name" value="wdelab ">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="name" placeholder="Имя*" name="firstname" data-label="" value="" required="">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="name" placeholder="Фамилия*" name="lastname" data-label="" value="" required="">
            </div>
            <div class="form-group">
                <input type="email" class="font black form-control w-4" id="name" placeholder="Адрес электронной почты*" name="email" data-label="" value="" required="">
            </div>
            <div class="form-group">
                <input type="email" class="font black form-control w-4" id="name" placeholder="Телефон*" name="phone" data-label="" value="" required="">
            </div>
            <div class="form-group">
                <textarea class="form-control font black w-4" id="comment" rows="3" name="description" placeholder="Описание*" required=""></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-primary btn-block w-4" role="button">
                    Отправить
                </button>
            </div>
            <div class="text-center">
                <small>
                    <a href="" class="text-primary  a" data-toggle="modal" data-target="#termsofuse">Пользовательское соглашение</a>
                </small>
            </div>
        </form>
        <script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}}; }</script>
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
