@php
    $name = 'marketingovoe-agentstvo';
    $image_path = "/files/marketingovoe-agentstvo/marketingovoe-agentstvo";
@endphp
@component('components.landing-page')
    @slot('title')
        Маркетинговое агентство {{ $name }}.lpio.ru
    @endslot

    @slot('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand light" href="#">LPIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#primeri-rabot">Примеры работ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#uslugi">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ostavit-zayavku">Оставить заявку</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endslot

    @slot('brand')
        LPIO
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
        {{ $image_path }}-0.png
    @endslot

    @slot('lead_magnet')
        Увеличим прибыль и продажи с помощью маркетинга на результат
    @endslot

    @slot('details')
        Маркетинг на результат - это ваша гарантия того, что деньги, которые вы тратите на рекламу и продвижение в итоге приносят вам прибыль. Мы связываем оплату своей работы с достижением конкретных цифр в воронке продаж бизнеса.
    @endslot

    @slot('form')
        <div id="ostavit-zayavku"></div>
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

    @slot('meat')
        <div id="primeri-rabot"></div>
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Примеры работ с прибылью 300 000+ рублей
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-13.png
                    @endslot
                    @slot('link_primer')
                        http://razvodka-trub.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://razvodka-trub.lpio.ru/" target="_blank">Сантехнические работы</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-14.png
                    @endslot
                    @slot('link_primer')
                        http://kuhni-na-zakaz.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://kuhni-na-zakaz.lpio.ru/" target="_blank">Кухни на заказ</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-15.png
                    @endslot
                    @slot('link_primer')
                        https://dostavkadivanov.ru/
                    @endslot
                    @slot('title')
                        <a href="https://dostavkadivanov.ru/" target="_blank">Фабрика диванов</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
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
                    @slot('link_primer')
                        http://remont-holodilnikov-spb.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://remont-holodilnikov-spb.lpio.ru/" target="_blank">Ремонт холодильников</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-11.jpg
                    @endslot
                    @slot('link_primer')
                        http://kupit-kvartiru-spb-distancionno-2.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://kupit-kvartiru-spb-distancionno-2.lpio.ru/" target="_blank">Продажа квартир для иногородних</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-12.jpg
                    @endslot
                    @slot('link_primer')
                        http://gazifikacija.com
                    @endslot
                    @slot('title')
                        <a href="http://gazifikacija.com" target="_blank">Газификация</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
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
                        {{ $image_path}}-7.jpg
                    @endslot
                    @slot('link_primer')
                        http://beton-m3.ru
                    @endslot
                    @slot('title')
                        <a href="http://beton-m3.ru" target="_blank">Бетон</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-8.jpg
                    @endslot
                    @slot('link_primer')
                        http://specii-opt.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://specii-opt.lpio.ru/" target="_blank">Специи оптом</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-9.jpg
                    @endslot
                    @slot('link_primer')
                        http://krossovki-opt.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://krossovki-opt.lpio.ru/" target="_blank">Кроссовки оптом</a>
                    @endslot
                    @slot('details')
                        <table class="table table-sm table-hover">
                            <tr><td>Рекламный бюджет</td><td>30 000 р. / месяц</td></tr>
                            <tr><td>Конверсия сайта</td><td>5 %</td></tr>
                            <tr><td>Цена заявки</td><td>650 р.</td></tr>
                            <tr><td>Цена клиента</td><td>2500 р.</td></tr>
                            <tr><td>Прибыль</td><td><b>300 000 р. / месяц</b></td></tr>
                        </table>
                    @endslot
                @endcomponent
            </div>
        </div>
    @endslot

    @slot('portfolio')
        <div id="uslugi"></div>
        <div class="container-fluid">
            @component('components.header')
                @slot('title')
                    Наши услуги для привлечение клиентов на результат
                @endslot
            @endcomponent
            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('title')
                        Создание продающего сайта
                    @endslot
                    @slot('details')
                        За счет высокой релеватности к рекламному объявлению посадочная страница (landing page) увеличивает поток заявок, позволяет оптимизировать текущие расходы на рекламу и получать больше целевых клиентов за счет структуры и грамотного уникального торгового предложения и лид-магнита. Правильный лендинг показывает клиенту именно тот продукт, который он ищет в интернете, и соответствует рекламному объявлению. Поэтому посадочные страницы - это сайты, которые продают эффективно.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('title')
                        Настройка контекстной рекламы Яндекс Директ и Google Adwords
                    @endslot
                    @slot('details')
                        Чтобы настроить контекстную рекламу эффективно надо глубоко разобраться в продукте, в каждом этапе продажи и том, как люди его ищут в интернете. Важно понять кто ваш клиент, какая у него потребность. Человек вводит в поиск слова и если не находит нужного ответа, то добавляет еще слова и так уточняет до тех пор пока не найдет решение своей проблемы. Это позволяет нам предложить клиенту то, что он ищет.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('title')
                        Копирайтинг - написание экспертных статей для SEO продвижения
                    @endslot
                    @slot('details')
                        В основе качественного текста находится опыт. Хороший копирайтер ищет нюансы и подводные камни, потому что опыт - это количество проблем с которыми вы столкнулись и успешно их решили. Эксперт рассказывает жизненные истории и вызывает доверие, живость и реалистичность истории состоит из деталей и чем их больше, тем сильнее клиенты доверяют вам.
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
                        Настройка таргетированной рекламы в социальных сетях: Facebook, Instagram, Вконтакте и Одноклассники
                    @endslot
                    @slot('details')
                        В социальных сетях люди заполняют большое количество данных о себе, они даже не представляют, что это может быть использовано в целях рекламы. Суть таргетинга в том, что мы ищем клиентов по той информации и признакам, которые они сами оставляют в социальных сетях о себе.
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
                        Вы слушали записи разговоров своих менеджеров? Если у вас есть менеджеры и нету записи их разговоров перед вами откроется удивительный новый мир. Вы мгновенно осознаете сколько денег теряете, сколько клиентов было слито и упущено прибыли. Мы анализируем записи разговоров. Выявляем типовые ошибки и распространненые возражения ваших клиентов. В результате у вас будет продающий скрипт, структура и этапы воронки продаж. Чек-лист для проверки разговоров по скрипту.
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('title')
                        Видеомаркетинг - ведение YouTube канала и съемка видео
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
