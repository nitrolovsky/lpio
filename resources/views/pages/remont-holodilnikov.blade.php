@php
    $name = 'remont-holodilnikov-spb';
    $image_path = "/files/remont-holodilnikov-spb/remont-holodilnikov-spb";
@endphp
@component('components.lp20180129')
    @slot('title')
        Ремонт холодильников Санкт-Петербург {{ $name }}.lpio.ru
    @endslot

    @slot('brand')
        ХОЛОДОВИЧКОВ
    @endslot

    @slot('description')
        Ремонт холодильников в Санкт-Петербурге
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

    @endslot

    @slot('presentation_video')
        https://www.youtube.com/embed/ybqYC4Fsm2s
    @endslot

    @slot('lead_magnet')
        Узнайте причину поломки и предварительную стоимость ремонта вашего холодильника по телефону
    @endslot

    @slot('details')
        Вас проконсультирует сертифицированный мастер по холодильникам с опытом работы более 10 лет.
        Выезжаем на дом в течении 1 часа с момента обращения. Работаем по всем районам Санкт-Петербурга. Вы можете узнать причину поломки стоимость ремонта по телефону.
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Узнать причину и стоимость ремонта
        </button>
    @endslot

    @slot('popup_form')
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку и мы отправим вам купон скидку 500 рублей на все товары</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/leads" method="POST" class="p-2">
                            {{ csrf_field() }}
                            <input type="hidden" name="source" value="all_leads">
                            <input type="hidden" name="cta" value="Форма с видео">
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                                    Узнать причину поломки и стомимость ремонта
                                </button>
                            </div>
                            <div class="form-check mb-0">
                                <label class="form-check-label small">
                                    <input type="checkbox" class="form-check-input" checked>
                                    Согласие на обработку персональных данных, в соответствии с ФЗ от 27.07.2006 года №152-ФЗ «О персональных данных», согласно <a href="" data-toggle="modal" data-target="#termsofuse">политики конфиденциальности</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endslot

    @slot('form_a')
        <form action="/leads" method="POST" class="border bg-light p-4 sw">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="all_leads">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" role="button">
                    Вызвать мастера бесплатно
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

    @slot('examples')
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
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('yandex')
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter44736544 = new Ya.Metrika2({
                            id:44736544,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true,
                            trackHash:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <!-- /Yandex.Metrika counter -->
    @endslot

@endcomponent
