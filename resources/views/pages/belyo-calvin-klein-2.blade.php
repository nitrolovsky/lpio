@php
    $path_file = "/files/belyo-calvin-klein/";
@endphp
@component('components.landing-page')
    @slot('title')
        Женское белье Calvin Klein
    @endslot

    @slot('brand')
        Calvin Klein
    @endslot

    @slot('description')
        Интернет-магазин белья
    @endslot

    @slot('phone')
        88129672763
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
        https://www.youtube.com/embed/ppYGJTWINDU
    @endslot

    @slot('lead_magnet')
        <div>Комплект женского белья Calvin Klein</div>
        <div class="pt-3 text-danger">1950 &#8381;</div>
    @endslot

    @slot('details')
        Топ и трусики из экохлопка. Сохраняет внешний вид после 100 стирок.
    @endslot

    @slot('form')
        <form action="/leads" method="POST" class="border bg-light p-4 sw">
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
                    Заказать
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
                    Выберите модель и цвет
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-belye-slipy.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Белый комплект белья топ и трусики слипы
                    @endslot
                    @slot('details')
                        Белый цвет нижнего белья - нейтральный, ассоциируется с невинностью и в то же время роскошью. Трусики слипы закрывают ягодицы и имеют вырез на середине бедра. Резинка слипов располагается на бедрах или талии. Подходит для ежедневной носки.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-serye-slipy.jpg
                    @endslot
                    @slot('description')
                        Серый комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Серый комплект белья топ и трусики слипы
                    @endslot
                    @slot('details')
                        Серый – классический нейтральный цвет, интеллигентный цвет. Отражает собой все цвета, но ни один не доминирует в нем. Трусики слипы закрывают ягодицы и имеют вырез на середине бедра. Резинка слипов располагается на бедрах или талии. Подходит для ежедневной носки.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-chernye-slipy.jpg
                    @endslot
                    @slot('description')
                        Черный комплект белья топ и трусики слипы
                    @endslot
                    @slot('title')
                        Черный комплект белья топ и трусики слипы
                    @endslot
                    @slot('details')
                        Черный цвет стройнит, контрастирует с цветом кожи и высвечивает обнаженные руки, шею, грудь, ноги. Трусики слипы закрывают ягодицы и имеют вырез на середине бедра. Резинка слипов располагается на бедрах или талии. Подходит для ежедневной носки.
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
                        {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-belye-stringi.jpg
                    @endslot
                    @slot('description')
                        Белый комплект белья топ и трусики стринги
                    @endslot
                    @slot('title')
                        Белый комплект белья топ и трусики стринги
                    @endslot
                    @slot('details')
                        Белый цвет нижнего белья - нейтральный, ассоциируется с невинностью и в то же время роскошью. Стринги сексуальны и их удобно носить с платьями.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-serye-stringi.jpg
                    @endslot
                    @slot('description')
                        Серый комплект белья топ и трусики стринги
                    @endslot
                    @slot('title')
                        Серый комплект белья топ и трусики стринги
                    @endslot
                    @slot('details')
                        Серый – классический нейтральный цвет, интеллигентный цвет. Отражает собой все цвета, но ни один не доминирует в нем. Стринги сексуальны и их удобно носить с платьями.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $path_file }}komplekt-zhenskogo-belya-calvin-klein-chernye-stringi.jpg
                    @endslot
                    @slot('description')
                        Черный комплект белья топ и трусики стринги
                    @endslot
                    @slot('title')
                        Черный комплект белья топ и трусики стринги
                    @endslot
                    @slot('details')
                        Черный цвет стройнит, контрастирует с цветом кожи и высвечивает обнаженные руки, шею, грудь, ноги. Стринги сексуальны и их удобно носить с платьями.
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
        Copyright &#169; 2017 belyo-calvin-klein.lpio.ru
    @endslot

@endcomponent
