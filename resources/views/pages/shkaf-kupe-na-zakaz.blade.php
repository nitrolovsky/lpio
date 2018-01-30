@php
    $name = 'shkaf-kupe-na-zakaz';
    $image_path = "/files/shkaf-kupe-na-zakaz/";
@endphp
@component('components.lp20180129')
    @slot('title')
        Шкаф-купе на заказ напрямую от мебельной фабрики ФЭМАС по Санкт-Петербургу и Ленинградской области {{ $name }}.lpio.ru
    @endslot

    @slot('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand light" href="#">ФЭМАС</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#tipy-shkafov-kupe">Типы шкафов-купе</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fasady">Фасады</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#preimushchestva-fabriki">Преимущества фабрики</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endslot

    @slot('brand')
        ФЭМАС
    @endslot

    @slot('description')
        Мебельная фабрика
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Санкт-Петербург, ул. Потапова 2 лит М
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/ZU9gXDDXyeI
    @endslot

    @slot('lead_magnet')
        Вызовите дизайнера для замера, рассчета стоимости, демонстрации образцов и каталога
    @endslot

    @slot('details')
        Дизайнер вместе с вами спроектирует вместительный шкаф купе или гардеробную. Порекомендует лучший фасад, который подойдет к интерьеру. Подробно рассчитает стоимость и наполнение шкафа купе. А также вы получите серию картинок дизайн-проекта шкафа-купе в интерьере по вашим размерам.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Вызвать дизайнера бесплатно
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы дизайнер договорился о встрече
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Вызвать дизайнера бесплатно
            </button>
        </div>
    @endslot

    @slot('examples')

        <div class="container-fluid" id="tipy-shkafov-kupe">
            @component('components.header')
                @slot('title')
                    Изготавливаем все возможные типы шкафов-купе
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-v-prihozhuyu.jpg
                    @endslot
                    @slot('description')
                        Шкаф-купе в прихожую от 45 000 р.
                    @endslot
                    @slot('title')
                        Шкаф-купе в прихожую от 45 000 р.
                    @endslot
                    @slot('details')
                        Компактный размер. Выглядит лучше вешалок и комодов. Вместительный и удобный при узком коридоре. Изделие делается шириной от 40 до 60 см. Установка торцевой штанги позволяет вешать одежду передом, а не боком, поэтому получается добиться экономии пространства.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}vstroennyj-shkaf-kupe-na-zakaz.jpg
                    @endslot
                    @slot('description')
                        Встроенный шкаф-купе от 35 000 р.
                    @endslot
                    @slot('title')
                        Встроенный шкаф-купе от 35 000 р.
                    @endslot
                    @slot('details')
                        Встроенные шкафы не имеют боковой, задней стенки, дна и потолка. Встроенные шкафы-купе обладают большим полезным объёмом за счёт отсутствия части конструкции. Из-за визуального отсутствия лишних деталей корпуса дизайн шкафа-купе кажется красивей.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}ugolovoj-shkaf-kupe-na-zakaz.jpg
                    @endslot
                    @slot('description')
                        Угловой шкаф-купе от 40 000 р.
                    @endslot
                    @slot('title')
                        Угловой шкаф-купе от 40 000 р.
                    @endslot
                    @slot('details')
                        Для того, чтобы выбрать угловой шкаф-купе необходимо определить, в каком месте он будет находиться. Главное отличие шкафа-купе от обычной корпусной мебели – это невозможность переноса. Любой корпусной шкафчик можно переставить, угловой шкаф-купе переставить невозможно.
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-v-garderobnuyu-komnatu.jpg
                    @endslot
                    @slot('description')
                        Шкаф-купе для гардеробной от 40 000 р.
                    @endslot
                    @slot('title')
                        Шкаф-купе для гардеробной от 40 000 р.
                    @endslot
                    @slot('details')
                        Шкаф-купе для гардеробной комнаты - это перекрытая часть комнаты дверями купе от стены до стены, а за ними расположить сами стеллажи гардеробной. Оформить двери купе можно множеством способов - от простых панельных дверей с древесной фактурой и зеркал до пескоструя, витражей и фотопечати. Красивые двери купе будут украшением для вашего интерьера.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}korpusnyj-shkaf-kupe-na-zakaz.jpg
                    @endslot
                    @slot('description')
                        Корпусный шкаф-купе от 35 000 р.
                    @endslot
                    @slot('title')
                        Корпусный шкаф-купе от 35 000 р.
                    @endslot
                    @slot('details')
                        Корпусный шкаф-купе имеет все стенки, цоколь и потолок. В отличие от встроенного шкафа, корпусную модель можно перемещать из одной комнаты в другую и забрать с собой при переезде. При установке степень кривизны потолков, пола и стен в данном случае не играет значительной роли.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}radiusnyj-shkaf-kupe-na-zakaz.jpg
                    @endslot
                    @slot('description')
                        Радиусный шкаф-купе от 75 000 р.
                    @endslot
                    @slot('title')
                        Радиусный шкаф-купе от 75 000 р.
                    @endslot
                    @slot('details')
                        Радиусный шкаф имеет одно основное отличие. Профиль держателей дверей и сами двери имеют форму дуги. Использование радиусного шкафа-купе является отличным решением для владельцев небольших по площади квартир. Они представляют собой конструкцию с изогнутыми дверями, которые раздвигаются по определенному радиусу, обладают отличной вместительностью, имеют оригинальный вид.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

        <div class="container-fluid" id="fasady">
            @component('components.header')
                @slot('title')
                    Фасады и двери для шкафа-купе на ваш выбор
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-laminirovannoe-dsp.jpg
                    @endslot
                    @slot('description')
                        Ламинированное ДСП
                    @endslot
                    @slot('title')
                        Ламинированное ДСП
                    @endslot
                    @slot('details')
                        Древесно-стружечная плита, произведённая на основе высококачественной ДСтП, облицованная при повышенном давлении и температуре стойкой меламиновой пленкой, устойчивым к влаге и механическим повреждениям. Ламинирование обеспечивает хороший внешний вид, высокие потребительские качества и повышает физико-механические свойства. Ламинированная ДСтП не требует дальнейшей отделки.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-paneli-mdf.jpg
                    @endslot
                    @slot('description')
                        Панели МДФ
                    @endslot
                    @slot('title')
                        Панели МДФ
                    @endslot
                    @slot('details')
                        Плитный материал, изготавливаемый методом сухого прессования мелкой древесной стружки при высоком давлении и температуре. В качестве связующего элемента используются карбамидные смолы, модифицированные меламином. Это обеспечивает очень низкую эмиссию формальдегида, сравнимую с эмиссией натуральной древесины. Класс эмиссии формальдегида — Е1. МДФ используют в изготовлении шкафов, в частности, фасадов с элементами резьбы, при обработке выделяет не стружку, а пыль, поэтому идеален для фрезеровки полостей различной глубины, криволинейных отверстий и прочих криволинейных форм.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-zerkala.jpg
                    @endslot
                    @slot('description')
                        Зеркала
                    @endslot
                    @slot('title')
                        Зеркала
                    @endslot
                    @slot('details')
                        Зеркала визуально увеличивают помещение. На заднию стенку зеркала наносится защитная пленка, чтобы в случаях удара по зеркалу, оно не рассыпалось на опасные для жизни осколки.
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-fotopechat.jpg
                    @endslot
                    @slot('description')
                        Фотопечать
                    @endslot
                    @slot('title')
                        Фотопечать
                    @endslot
                    @slot('details')
                        Это создание изображения на поверхности стекла. В качестве изображения используют фотографии высокого разрешения. Виды печати: ультрафиолетовая и пленочная печать. При ультрафиолетовой краска наносится на стекло и затвердевает в порах стекла. Изображение не смывается и устойчиво к перепадам температур. При пленочной печати изображение наносится вначале на пленку, а затем пленка клеится на стекло.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-peskostrujnyj-risunok.jpg
                    @endslot
                    @slot('description')
                        Пескоструйный рисунок
                    @endslot
                    @slot('title')
                        Пескоструйный рисунок
                    @endslot
                    @slot('details')
                        Пескоструйный рисунок  на зеркале или на стекле  выполняется на специальном станке под действием сильной тонкой струей воздуха под давлением, смешанной с потоком кварцевого песка, как бы разрушая поверхность стекла, матируя его. Можно получить различную степень сплошной или частичной матировки меняя давление и зернистость песка. Существует 2 основных вида пескоструйного рисунка на шкафах купе - матовый рисунок на зеркальном поле и зеркальный рисунок на матовом поле. Можно применить так же глубинное нанесение рисунка, которое позволяет получить рисунок с объемом, обрабатывается как лицевая сторона зеркала, так и задняя по амальгаме.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-na-zakaz-cvetnoe-steklo.jpg
                    @endslot
                    @slot('description')
                        Цветное стекло
                    @endslot
                    @slot('title')
                        Цветное стекло
                    @endslot
                    @slot('details')
                        Цветное стекло которое мы используем для фасадов может быть двух типов. Первое получается путём оклеивания прозрачного стекла плёнкой  в промышленных условиях, в специальных камерах, исключающих попадание пыли между стеклом и цветной плёнкой. Другой вариант - это стекло Лакобель покрытое высококачественным цветным лаком.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

        <div class="container-fluid" id="preimushchestva-fabriki">
            @component('components.header')
                @slot('title')
                    Преимущества работы с нами
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-besplatnyj-vyezd-dizajnera-proektirovshchika-po-sankt-peterburgu.jpg
                    @endslot
                    @slot('description')
                        Работаем по Санкт-Петербургу и Ленинградской области
                    @endslot
                    @slot('title')
                        Работаем по Санкт-Петербургу и Ленинградской области
                    @endslot
                    @slot('details')
                        Бесплатный выезд дизайнера-проектировщика по Санкт-Петербургу. Вы можете посетить производственных цех, на котором будет изготавливаться ваш шкаф по адресу Санкт-Петербург, улица Потапова, дом 2, литера М. Двухэтажное здании мебельной фабрики ФЭМАС.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-ustanovka-za-1-den.jpg
                    @endslot
                    @slot('description')
                        Гарантия на 200 000 циклов открываний механизмов
                    @endslot
                    @slot('title')
                        Гарантия на 200 000 циклов открываний механизмов
                    @endslot
                    @slot('details')
                        Установка за 1 день. Итальянские станки класса А+ SKM обеспечивают европейскую точность допусков при обработке мебельных заготовок. Поэтому панели и полки получаются ровными и шкаф-купе устанавливаются за 1 день. Каждое изделие проверяется отделом технического контроля перед отгрузкой.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}shkaf-kupe-c-rassrochkoj-bez-pervogo-vznosa.jpg
                    @endslot
                    @slot('description')
                        Цена ниже на 30%, чем в салонах
                    @endslot
                    @slot('title')
                        Цена ниже на 30%, чем в салонах
                    @endslot
                    @slot('details')
                        Рассрочка без первого взноса. Предоставляем рассрочку 0% на срок до 12 месяцев без первого взноса. Принимаем к оплате банковские карты и электронные переводы. Цена шкафа-купе в зависимости от конфигурации 34 900 до 500 000 рублей. Продажа напрямую от производителя в Санкт-Петербурге, поэтому цены ниже на 30%, чем в салонах.
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}besplatnyj-3d-dizajn-proekt-shkafa-kupe.jpg
                    @endslot
                    @slot('description')
                        Бесплатный 3D дизайн-проект
                    @endslot
                    @slot('title')
                        Бесплатный 3D дизайн-проект
                    @endslot
                    @slot('details')
                        Наглядная демонстрация вашего шкафа-купе. Дизайнер-проектировщик подскажет какое функциональное наполнение подойдет в вашем случае в зависимости от предпочитаемой одежды. Проектирование 1 день. Изготовление 3-14 дней. Доставка и сборка 1 день. 6 вариантов шкафов: корпусные, встроенные, угловые, гардеробные, радиусные, прихожие. 6 видов фасадов: ЛСДП, МДФ, зеркала, фотопечать, пескоструйный рисунок, цветное стекло.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}besplatnyj-remont-v-techenii-2-dnej-shkafa-kupe.jpg
                    @endslot
                    @slot('description')
                        Гарантия 5 лет
                    @endslot
                    @slot('title')
                        Гарантия 5 лет
                    @endslot
                    @slot('details')
                        Бесплатный ремонт в течении 2 дней. Надежная оригинальная фурнитура, механизмы и комплектующие Blum (Произведено в Австрии) и Hettich (Произведено в Германии). Если с изделием что-то произойдет, то к вам в течении 1-2 дней, приедет мастер по рекламации, который все исправит и при необходимости заменит вышедшие из строя детали.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}opyt-raboty-dizajnerov-proektirovshchikov-shkafov-kupe-10-let.jpg
                    @endslot
                    @slot('description')
                        Опыт работы дизайнеров-проектировщиков 10 лет
                    @endslot
                    @slot('title')
                        Опыт работы дизайнеров-проектировщиков 10 лет
                    @endslot
                    @slot('details')
                        28 000 шкафов-купе произвели и установили за 18 лет работы. Каждый месяц изготавливаем и устанавливаем 150+ шкафов-купе всех видов. Дизайнер-проектировщик замерит помещение. Поможет с выбором шкафа-купе и покажет в чем отличие между разными моделями. Продемонстрирует образцы материалов и каталог готовых изделий. Сделает для вас 3D дизайн-проект по вашим пожеланиям. Добавит любые нестандартные решения в конструкцию и внешнему виду. Правильно спроектирует, чтобы им было удобно пользоваться, в него поместились все ваши вещи и шкаф-купе получился красивым.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('footer_phone')
        <a href="tel:88129672763" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('footer_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('footer_address')
        Санкт-Петербург, ул. Потапова 2 лит М
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
