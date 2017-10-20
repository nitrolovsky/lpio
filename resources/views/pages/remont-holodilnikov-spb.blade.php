@php
    $name = 'remont-holodilnikov-spb';
    $image_path = "/files/remont-holodilnikov-spb/remont-holodilnikov-spb";
@endphp
@component('components.landing-page')
    @slot('title')
        Ремонт холодильников Санкт-Петербург {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        РЕМХОЛОДСПБ
    @endslot

    @slot('description')
        Ремонт холодильников
    @endslot

    @slot('phone')
        88219672763
    @endslot

    @slot('phone_view')
        8 (812) 967 27 63
    @endslot

    @slot('email')
        info.lpio.ru@gmail.com
    @endslot

    @slot('address')
        Санкт-Петербург
    @endslot

    @slot('presentation')
        {{ $image_path }}-0.jpg
    @endslot

    @slot('lead_magnet')
        Отремонтируем холодильник на дому за 1 час от 500 рублей с гарантией 1 год
    @endslot

    @slot('details')
        Быстрый выезд, мастер в каждом районе Санкт-Петербурга. Устранение неисправностей: не включается, не выключается, покрывается льдом, протекает, не работают индикаторы, шумит, не холодит, неприятный запах, утечка фреона.
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" role="button">
                    Получить консультацию
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
                    Наши основные преимущества
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
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
                        {{ $image_path }}-2.jpg
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
                        {{ $image_path }}-3.jpg
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

        </div>
    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru Все права защищены. ИНН 7802602468. КПП 780201001. р/сч 40702810903000013545 в АО "Райффайзенбанк".<br>
        к/сч 30101810100000000723. БИК 044030723.
    @endslot

@endcomponent
