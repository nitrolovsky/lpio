@php
    $name_file =    'garderobnye';
    $description =  'Гардеробные на заказ';
    $region =       'Санкт-Петербург';
    $brand =        'GARDER';

    $phone =        '88129672763';
    $phone_view =   '8 (812) 967 27 63';
    $email =        'info.lpio.ru@gmail.com';

    $path_image = "/files/" . $name_file . "/" . $name_file . "-";
    $url = $name_file . ".lpio.ru";
    $alt = $description . ' ' . $region . ' ' . $url;
@endphp

@component('components.landing-page-2')

    @slot('presentation')
        {{ $path_image }}0.jpg
    @endslot

    @slot('lead_magnet')
        Получите 10 примеров стильных дизайнов гардеробных и расчет цены по вашим размерам помещения
    @endslot

    @slot('details')
        Дизайнер приедет показать каталог и образцы бесплатно на замер бесплатно в удобное для вас время. Показывает каталог и образцы материалов.
    @endslot

    @slot('form_inputs')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone">
        </div>
    @endslot

    @slot('form_cta')
        Вызвать дизайнера бесплатно
    @endslot

    @slot('portfolio')
        <div class="container-fluid">

            @component('components.header')

                @slot('title')
                    Спроектируем и изготовим гардеробную любого типа, формы и конфигурации
                @endslot

            @endcomponent

            <div class="row">

                @component('components.card-2')

                    @slot('title')
                        Фабричный стандарт качества
                    @endslot

                    @slot('details')
                        Собственное производство в Санкт-Петербурге на оборудовании класса A++ с 2000 года.
                        Профессиональные дизайнеры-проектировщики с опытом работы от 10 лет.
                        Каждое изделие проходит отдел технического контроля перед отгрузкой.
                    @endslot

                    @slot('image')
                        {{ $path_image }}1.jpg
                    @endslot

                    @slot('alt')
                        {{ $alt }}
                    @endslot

                @endcomponent

                @component('components.card-2')

                    @slot('title')
                        Фирменные механизмы и комплектующие
                    @endslot

                    @slot('details')
                        Система раздвижных дверей Total Absolut (Польша).
                        Система раздвижных дверей Hettich (Германия).
                        Механизмы и фурнитура Blum (Австрия) и Hettich (Германия).
                    @endslot

                    @slot('image')
                        {{ $path_image }}2.jpg
                    @endslot

                    @slot('alt')
                        {{ $alt }}
                    @endslot

                @endcomponent

                @component('components.card-2')

                    @slot('title')
                        Индивидуальный подход
                    @endslot

                    @slot('details')
                        Персональный дизайнер составит для вас проект гардеробной, учитывая ваши потребности и рекомендации.
                        Любые нестандартные решения по конструктиву и внешнему виду гардеробной.
                        Все виды гардеробных комнат: угловые, П-образные, в отельной комнате или в спальне и многие другие.
                    @endslot

                    @slot('image')
                        {{ $path_image }}3.jpg
                    @endslot

                    @slot('alt')
                        {{ $alt }}
                    @endslot

                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>
    @endslot

    @slot('title')
        {{ $description }} {{ $region }} {{ $url }}
    @endslot

    @slot('brand')
        {{ $brand }}
    @endslot

    @slot('description')
        {{ $description }}
    @endslot

    @slot('phone')
        {{ $phone }}
    @endslot

    @slot('phone_view')
        {{ $phone_view }}
    @endslot

    @slot('email')
        {{ $email }}
    @endslot

    @slot('address')
        {{ $region }}
    @endslot

    @slot('footer')
        Copyright &#169; 2017<br>
        {{ $url }}<br>
        Все права защищены
    @endslot

@endcomponent
