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
                    Распространенные поломки холодильников
                @endslot

            @endcomponent

            <div class="row">

                @component('components.card-2')

                    @slot('title')
                        Не морозит
                    @endslot

                    @slot('details')
                        Проблема может быть в:<br>
                        — утечке фреона;<br>
                        — засор трубки системы хладогенерации;<br>
                        — сломанном компрессоре;<br>
                        — обмерзшем вентиляторе.
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
                        Не работает морозилка
                    @endslot

                    @slot('details')
                        Проблема может быть в:<br>
                        — износившемся уплотнителе;<br>
                        — сломанном клапане переключения;<br>
                        — компрессоре;<br>
                        — электронном модуле управления.
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
                        Шумит, гудит
                    @endslot

                    @slot('details')
                        Проблема может быть в:<br>
                        — стандартной работе компрессора;<br>
                        — шумной работе системе NO FROST;<br>
                        — реле;<br>
                        — вентиляторе.
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
