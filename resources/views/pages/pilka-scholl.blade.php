@php
    $path_file = "/files/pilka-scholl/";
@endphp
@component('components.landing-page')
    @slot('title')
        Роликовая пилка Scholl Wet & Dry
    @endslot

    @slot('brand')
        Scholl
    @endslot

    @slot('description')
        Интернет-магазин товаров для красоты и здоровья
    @endslot

    @slot('phone')
        89219672763
    @endslot

    @slot('phone_view')
        8 812 967 27 63
    @endslot

    @slot('email')
        info.lpio.ru@gmail.com
    @endslot

    @slot('address')
        Санкт-Петербург
    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/rWucvgaEuyc
    @endslot

    @slot('lead_magnet')
        Получите купон-скидку 500 рублей на роликовую пилку Scholl Wet & Dry
    @endslot

    @slot('details')
        Для ухода за кожей стоп. Через месяц применения курсом ваши ноги станут бархатными.
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="pilka-scholl">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Введите email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" role="button">
                    Получить бесплатно
                </button>
            </div>
            <div class="form-check">
                <label class="form-check-label small">
                    <input type="checkbox" class="form-check-input" checked>
                    Согласие на обработку персональных данных, в соответствии с ФЗ от 27.07.2006 года №152-ФЗ «О персональных данных», согласно <a href="" data-toggle="modal" data-target="#termsofuse">политики конфиденциальности</a>
                </label>
            </div>
        </form>
    @endslot

    @slot('portfolio')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    6 ключевых преимуществ пилки Scholl
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $path_file }}pilka-scholl-1.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Уход за кожей ног
                    @endslot
                    @slot('details')
                        Обновленная 2 версия. В 2016 году Великобританская компания Scholl выпустила вторую версию электрической роликовой пилки для удаления огрубевшей кожи стоп. Ролики от предыдущей модели подходят к новой.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}pilka-scholl-2.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Сравните результат до и после применения
                    @endslot
                    @slot('details')
                        Кожа ног становится гладкой и приятной на ощупь. Сравните стопы ног до и после использования пилки Scholl. Процедура на одну стопу занимает 10 минут.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}pilka-scholl-3.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Защита от воды и новые возможности
                    @endslot
                    @slot('details')
                        Меньше пыли и проведение процедуры в ванной. 2 версию пилки сделали водонепроницаемой. Теперь можно использовать в душе, ванной и по влажной коже. Если вы распарите ноги, то кожа станет мягкой и легче будет поддаваться обработке.
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
                        {{ $path_file }}pilka-scholl-4.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Встроенный аккумулятор
                    @endslot
                    @slot('details')
                        Заряда хватает на неделю пользования. Питание от встроенного аккумулятора. Время зарядки составляет 3 часа. То, что пилка заряжана показывает индикатор, когда она заряжается, он мигает, при полной зарядке индикатор просто горит. 2 режима скорости, которые переключаются кнопкой на ручке.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}pilka-scholl-5.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Все необходимое в комплекте
                    @endslot
                    @slot('details')
                        Можно заряжать от компьютера. В комплекте электрическая пилка с аккумулятором, роликовая насадка Velvet Smooth Wet & Dry, зарядное устройство USB, адаптер USB в розетку, инструкция.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}pilka-scholl-6.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Хороший подарок любимой
                    @endslot
                    @slot('details')
                        Инструкция на упаковке. Упаковано в красивую коробочку, которую приятно подарить. Весит вместе с упаковкой 415 грамм. Размеры упаковки в длину 20 см, ширину 20 см, высоту 7 см.
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
        Copyright &#169; 2017 pilka-scholl.lpio.ru Все права защищены. ИНН 7802602468. КПП 780201001. р/сч 40702810903000013545 в АО "Райффайзенбанк".<br>
        к/сч 30101810100000000723. БИК 044030723.
    @endslot

@endcomponent
