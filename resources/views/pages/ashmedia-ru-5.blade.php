@component('components.sellingwebsite')
    @slot('title')
        Создание видеороликов для бизнеса АШмедиа ashmedia.ru
    @endslot

    @slot('brand')
        АШмедиа
    @endslot

    @slot('description')
        Создание видеороликов для бизнеса
    @endslot

    @slot('phone')
        +79522193383
    @endslot

    @slot('phone_view')
        8 (812) 967 27 63
    @endslot

    @slot('email')
        ashmedia@mail.ru
    @endslot

    @slot('address')
        Санкт-Петербург, м. Горьковская
    @endslot

    @slot('presentation')
        ../files/ashmedia/bg.jpg
    @endslot

    @slot('lead_magnet')
        Получите бесплатно 3 продающих концепции сценария видеоролика и расчет стоимости услуги
    @endslot

    @slot('details')
        Объясним ценность вашего продукта с помощью продающего видеоролика
    @endslot

    @slot('form')
        <form action="/leads" method="POST" class="pt-3">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="ashmedia">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="name" placeholder="Введите имя" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="font black form-control w-4" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="font btn btn-primary btn-block w-4 " >
                    Получить
                </button>
            </div>
            <div class="form-check">
                <label class="form-check-label small">
                    <input type="checkbox" class="form-check-input" checked>
                    Согласен на обработку персональных данных, в соответствии с ФЗ от 27.07.2006 года №152-ФЗ «О персональных данных», согласно <a href="" class="text-info  a" data-toggle="modal" data-target="#termsofuse">политики конфиденциальности</a>
                </label>
            </div>
        </form>
    @endslot

@endcomponent
