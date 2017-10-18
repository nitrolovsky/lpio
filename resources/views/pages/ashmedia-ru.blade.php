@component('components.landing-page')
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
        89522193383
    @endslot

    @slot('phone_view')
        8 952 219 33 83
    @endslot

    @slot('email')
        ashmedia@mail.ru
    @endslot

    @slot('address')
        Санкт-Петербург, м. Горьковская
    @endslot

    @slot('presentation')
        ../files/ashmedia/bg1.jpg
    @endslot

    @slot('lead_magnet')
        Получите бесплатно 3 продающих концепции сценария видеоролика и расчет стоимости услуги
    @endslot

    @slot('details')
        Объясним ценность вашего продукта с помощью продающего видеоролика
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="ashmedia">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Введите имя" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" >
                    Получить
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
        <div class="container-fluid ">

            @component('components.header')
                @slot('title')
                    Посмотрите примеры наших видеороликов
                @endslot
            @endcomponent

            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/d1FgJJ1Za18
                    @endslot
                    @slot('title')
                        Кадровое агентство "STAFF PERSONAL"
                    @endslot
                    @slot('details')
                        Наша основная услуга - аутсорсинг. Мы нанимаем персонал для гостиничного бизнеса, продуктовых универсамов, а также различных производств. 3 дня - это срок от заявки до вывода рабочей силы на место труда.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/wCBFBCe-GMo
                    @endslot
                    @slot('title')
                        404 // антикафе
                    @endslot
                    @slot('details')
                        Вы сможете поработать в уютной атмосфере, отдохнуть после трудового дня и приятно провести время с друзьями. 404 станет отличным местом, чтобы встретится с деловым партнером. К вашим услугам ксерокс, сканер и принтер.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/VzGSFv-WDV8
                    @endslot
                    @slot('title')
                        Центр сертификации "ГОРТЕСТ"
                    @endslot
                    @slot('details')
                        Центр сертификации ГОРТЕСТ оказывает услуги по получению разрешительных документов для импорта, экспорта и реализации товаров на территории России.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/9f-CMh6rubE
                    @endslot
                    @slot('title')
                        Производство турок
                    @endslot
                    @slot('details')
                        Уникальное производство. 26 лет опыта работы. Продукт не имеющий аналогов по качеству и стилю в мире. Доставка по всей России. Вы можете получить продукт с символикой компании.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/BUtarYML3bQ
                    @endslot
                    @slot('title')
                        Медицинский центр "ДИАДЕНТ"
                    @endslot
                    @slot('details')
                        Клиника оказывает услуги по направлениям: стоматология, косметология, гинекология, урология и пластическая хирургия.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/E6qjWdrQtqo
                    @endslot
                    @slot('title')
                        Производство и продажа шуб "ANSE"
                    @endslot
                    @slot('details')
                        Портные цеха имеют высшее специальное образование и 5 лет опыта работы. За счет параллельного выполнения работ мы можем справится с большим объемом в сезонное время. Возможен индивидуальный пошив.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/xU7YA2ac5tw
                    @endslot
                    @slot('title')
                        Производство печатной продукции "Titanprint"
                    @endslot
                    @slot('details')
                        Занимаемся изготовлением различных видов рекламной и полиграфической продукции. Центром отдела широкоформатной печати является сольвентный принтер, который печатает в фотокачестве и с высокой точностью передает цвета и оттенки. А изображения устойчивы к влаге и ультрафиолету.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/tRfm_LSiRek
                    @endslot
                    @slot('title')
                        Производство кухонных фасадов "Омега"
                    @endslot
                    @slot('details')
                        На рынке с 2006 года. 5 заводов - партнеров. 20 крупных фабрик сбыта. 50 обращений ежедневно. Производим: кухонные двери, двери-купе, резку и обработку стекла, пескоструйные рисунки, фотопечать, стеновые панели для кухни, мебельную фурнитуру.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/UWblwq59Nos
                    @endslot
                    @slot('title')
                        Производство "Хорошая мебель"
                    @endslot
                    @slot('details')
                        Производим офисные стойки ресепшн, барные торговые стойки более 7 лет. С 2009 года реализовали свыше 100 уникальных проектов. Мы прямой производитель поэтому у нас цены ниже на 30%, чем в салонах.
                    @endslot
                @endcomponent
            </div>
        </div>
    @endslot

    @slot('reviews')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Отзывы заказчиков о студии АШмедиа
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/TBcozDTro4E
                    @endslot
                    @slot('title')
                        Отзыв "Staff Personal"
                    @endslot
                    @slot('details')
                        Задача: нужен был видеоролик для сайта. Показать офис, персонал, чем занимаемся, основные задачи и функции. Повысить уровень доверия клиентов. На рынке очень много компаний-однодневок и для заказчика высокий риск наткнуться на недобросовестного подрядчика. Мы на рынке с 2005 года.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/GBxC_eR2UqY
                    @endslot
                    @slot('title')
                        Отзыв "ГОРТЕСТ"
                    @endslot
                    @slot('details')
                        Задача: решить вопрос с кадрам. Для этого снять HR видео.
                    @endslot
                @endcomponent

                @component('components.card-video')
                    @slot('video')
                        https://www.youtube.com/embed/Z8AaFDtnX1c
                    @endslot
                    @slot('title')
                        Отзыв "Gidrotech"
                    @endslot
                    @slot('details')
                        Задача: Презентовать компанию.
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
        2017 АШМедиа Все права защищены<br>
        <a href=https://vk.com/shevtsovpiter target="_blank">Артем Шевцов</a>
    @endslot

@endcomponent
