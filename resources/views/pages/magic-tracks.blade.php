@php
    $path_images = "/files/magic-tracks-220-ru/images/";
@endphp
@component('components.landing-page')
    @slot('title')
        Конструктор гоночная трасса Magic Tracks 220 magic-tracks.lpio.ru
    @endslot

    @slot('brand')
        Magic Tracks
    @endslot

    @slot('description')
        Интернет-магазин детский игрушек
    @endslot

    @slot('phone')
        88219672763
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
        https://www.youtube.com/embed/q1rh9cD36vc
    @endslot

    @slot('lead_magnet')
        Получите купон-скидку 500 рублей на гоночную трассу Magic Tracks 220
    @endslot

    @slot('details')
        Популярный конструктор для детей.
    @endslot

    @slot('form')
        <form action="/leads" method="POST">
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
                    6 ключевых преимуществ конструктора гоночный трассы Magic Tracks 220
                @endslot
            @endcomponent
            <div class="row">
                @component('components.meaning')
                    @slot('image')
                        {{ $path_images }}magic-tracks-1.jpg
                    @endslot
                    @slot('description')
                        Соединяющиеся детали
                    @endslot
                    @slot('title')
                        Соединяющиеся детали
                    @endslot
                    @slot('details')
                        Соберите свою собственную трассу за считанные секунды.
                    @endslot
                @endcomponent

                @component('components.meaning')
                    @slot('image')
                        {{ $path_images }}magic-tracks-2.jpg
                    @endslot
                    @slot('description')
                        Гибкая форма
                    @endslot
                    @slot('title')
                        Гибкая форма
                    @endslot
                    @slot('details')
                        Гоночную трассу Magic Tracks можно поворачивать и сгибать в любом направлении.
                    @endslot
                @endcomponent

                @component('components.meaning')
                    @slot('image')
                        {{ $path_images }}magic-tracks-3.jpg
                    @endslot
                    @slot('description')
                        Трансформируйте трассу на 360˚
                    @endslot
                    @slot('title')
                        Трансформируйте трассу на 360˚
                    @endslot
                    @slot('details')
                        Согните трассу в колесо и пустите машину по кругу.
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.meaning')
                    @slot('image')
                        {{ $path_images }}magic-tracks-4.jpg
                    @endslot
                    @slot('description')
                        Светодиодные огни
                    @endslot
                    @slot('title')
                        Светодиодные огни
                    @endslot
                    @slot('details')
                        Гоночная машина оснащена 5 светодиодными огнями, которые освещают ей путь.
                    @endslot
                @endcomponent

                @component('components.meaning')
                    @slot('image')
                        {{ $path_images }}magic-tracks-5.jpg
                    @endslot
                    @slot('description')
                        Набор наклеек
                    @endslot
                    @slot('title')
                        Набор наклеек
                    @endslot
                    @slot('details')
                        Придайте своей машине оригинальный вид.
                    @endslot
                @endcomponent

                @component('components.meaning')
                    @slot('image')
                        {{ $path_images }}magic-tracks-6.jpg
                    @endslot
                    @slot('description')
                        Легко сворачивается
                    @endslot
                    @slot('title')
                        Легко сворачивается
                    @endslot
                    @slot('details')
                        Не занимает места при хранении.
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
        Copyright &#169; 2017 magic-tracks.lpio.ru Все права защищены. ИНН 7802602468. КПП 780201001. р/сч 40702810903000013545 в АО "Райффайзенбанк".<br>
        к/сч 30101810100000000723. БИК 044030723.
    @endslot

@endcomponent
