@php
    $name = 'marketingovoe-agentstvo';
    $image_path = "/files/marketingovoe-agentstvo/marketingovoe-agentstvo";
@endphp
@component('components.landing-page')
    @slot('title')
        Маркетинговое агентство {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        lpio
    @endslot

    @slot('description')
        Маркетинговое агентство
    @endslot

    @slot('phone')
        88129672763
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
        Увеличим прибыль и продажи с помощью маркетинга на результат
    @endslot

    @slot('details')
        Маркетинг на результат - это ваша гарантия того, что деньги, которые вы тратите на рекламу и продвижение в итоге приносят вам прибыль. Мы связываем оплату своей работы с достижением конкретных цифр в воронке продаж бизнеса.
    @endslot

    @slot('form')
        <form action="/leads" method="POST" class="border bg-light p-4">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Введите email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" role="button">
                    Узнать условия
                </button>
            </div>
            <div class="form-check mb-0">
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
                    Распространенные поломки холодильников
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('description')
                        Не морозит
                    @endslot
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
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('description')
                        Не работает морозилка
                    @endslot
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
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('description')
                        Шумит, гудит
                    @endslot
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
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-4.jpg
                    @endslot
                    @slot('description')
                        Намерзает лед
                    @endslot
                    @slot('title')
                        Намерзает лед
                    @endslot
                    @slot('details')
                        Проблема может быть в:<br>
                        — нарушении температурного режима;<br>
                        — утечке фреона;<br>
                        — износе уплотнительной резинки;<br>
                        — датчике разморозки.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('description')
                        Протекает
                    @endslot
                    @slot('title')
                        Протекает
                    @endslot
                    @slot('details')
                        Проблема может быть в:<br>
                        — засоре в дренажном отверстии холодильной или морозильной камеры;<br>
                        — износе резинового уплотнителя;<br>
                        — термостате, компрессоре;<br>
                        — поломке трубки слива.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('description')
                        Работает без остановки
                    @endslot
                    @slot('title')
                        Работает без остановки
                    @endslot
                    @slot('details')
                        Проблема может быть в:<br>
                        — плохо закрытой дверце;<br>
                        — неисправности терморегулятора;<br>
                        — износе резинового уплотнителя;<br>
                        — утечке фреона, хладагента.
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
