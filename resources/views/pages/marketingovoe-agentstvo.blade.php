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
                    Как получить клиентов
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('title')
                        Заказать создание посадочной страницы
                    @endslot
                    @slot('details')
                        Посадочная страница (landing page) увеличивает поток заявок, позволяет оптимизировать текущие расходы на рекламу и получать больше целевых клиентов за счет структуры и грамотного УТП. Правильный лендинг показывает клиенту именно тот продукт, который он ищет в интернете, и соответствует рекламному объявлению.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('title')
                        Настройка контекстной рекламы Яндекс Директ
                    @endslot
                    @slot('details')

                        Настройка контекстной рекламы в Яндекс.Директ и Google Adwords — кропотливая инженерная работа. И по нашему глубокому убеждению, главный KPI здесь — это прибыль в вашем кармане. Мы поможем вам получать от 5 и до 86 заявок ежедневно по цене от 95 рублей за лид.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('title')
                        Настройка контекстной рекламы Google Adwords
                    @endslot
                    @slot('details')
                        Рассылка писем по электронной почте — самый доходный и недорогой способ получать реальных клиентов, их лояльность и рекомендации для вашего бизнеса. Минимум 60% клиентов агентства Convert Monster — постоянные читатели нашей еженедельной рассылки. E-mail маркетинг идеально подходит для продажи дорогих услуг, инфопродуктов, консультаций, франшиз и товаров интернет-магазина.
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
                    @slot('title')
                        Таргетированная реклама Facebook и Instagram
                    @endslot
                    @slot('details')
                        Абсолютно легальное продвижение сайта без внешних ссылок: рост трафика на 500% в год, уменьшение стоимости клика и фиксированный результат. Навечно выведем ваш сайт в топ-позиции поисковых систем Яндекс и Google. И уделим вашему сайту максимум внимания — берем в работу не более 4 проектов в год.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('title')
                        Написание скрипта продаж
                    @endslot
                    @slot('details')
                        Медийная реклама — идеальный вариант, когда нужно запустить новый продукт или собрать сливки продаж в сезон. Ваша реклама будет размещена более чем на 2 000 площадках и у пользователей не будет ни единого шанса не обратиться к вам. Для бюджетов от 1 000 000 рублей в месяц.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('title')
                        Ведение YouTube канала и съемка видео
                    @endslot
                    @slot('details')
                        YouTube канал и постоянная публикация новых видеороликов - это мощный инструмент привлечения дешего трафика и одновременно целевого. Мы поможем вам со сценариями и съемками, чтобы видео были максимально полезные. А полезные видеоролики увеличивают доверие за счет демонстрации вашей экспертности. Плюс правильное заполнение описания, заголовков, превью и субтитров позволит продвинуть видео в SEO выдаче и поиске.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>
    @endslot

    @slot('meat')
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Примеры работ и кейсы
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-7.jpg
                    @endslot
                    @slot('title')
                        Бетон
                    @endslot
                    @slot('details')
                        Посадочная страница (landing page) увеличивает поток заявок, позволяет оптимизировать текущие расходы на рекламу и получать больше целевых клиентов за счет структуры и грамотного УТП. Правильный лендинг показывает клиенту именно тот продукт, который он ищет в интернете, и соответствует рекламному объявлению.
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-8.jpg
                    @endslot
                    @slot('title')
                        Специи оптом
                    @endslot
                    @slot('details')
                        Настройка контекстной рекламы в Яндекс.Директ и Google Adwords — кропотливая инженерная работа. И по нашему глубокому убеждению, главный KPI здесь — это прибыль в вашем кармане. Мы поможем вам получать от 5 и до 86 заявок ежедневно по цене от 95 рублей за лид.
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-9.jpg
                    @endslot
                    @slot('title')
                        Кроссовки оптом
                    @endslot
                    @slot('details')
                        Рассылка писем по электронной почте — самый доходный и недорогой способ получать реальных клиентов, их лояльность и рекомендации для вашего бизнеса. Минимум 60% клиентов агентства Convert Monster — постоянные читатели нашей еженедельной рассылки. E-mail маркетинг идеально подходит для продажи дорогих услуг, инфопродуктов, консультаций, франшиз и товаров интернет-магазина.
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
                        {{ $image_path}}-10.jpg
                    @endslot
                    @slot('title')
                        Ремонт холодильников
                    @endslot
                    @slot('details')
                        Абсолютно легальное продвижение сайта без внешних ссылок: рост трафика на 500% в год, уменьшение стоимости клика и фиксированный результат. Навечно выведем ваш сайт в топ-позиции поисковых систем Яндекс и Google. И уделим вашему сайту максимум внимания — берем в работу не более 4 проектов в год.
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-11.jpg
                    @endslot
                    @slot('title')
                        Продажа квартир для иногородних
                    @endslot
                    @slot('details')
                        Медийная реклама — идеальный вариант, когда нужно запустить новый продукт или собрать сливки продаж в сезон. Ваша реклама будет размещена более чем на 2 000 площадках и у пользователей не будет ни единого шанса не обратиться к вам. Для бюджетов от 1 000 000 рублей в месяц.
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-12.jpg
                    @endslot
                    @slot('title')
                        Газификация
                    @endslot
                    @slot('details')
                        YouTube канал и постоянная публикация новых видеороликов - это мощный инструмент привлечения дешего трафика и одновременно целевого. Мы поможем вам со сценариями и съемками, чтобы видео были максимально полезные. А полезные видеоролики увеличивают доверие за счет демонстрации вашей экспертности. Плюс правильное заполнение описания, заголовков, превью и субтитров позволит продвинуть видео в SEO выдаче и поиске.
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

@endcomponent
