<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <style>
            a, a:hover, a:active, a:visited {
                text-decoration:none;
            }

            body {
                font-family: "Montserrat";
                color: black;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6 {
                font-weight: 700;
            }

            [role="button"] {
                cursor: pointer;
            }

            .light {
                font-weight: 300;
            }

            .regular {
                font-weight: 400;
            }

            .bold {
                font-weight: 700;
            }

            .form-control {
                color: black;
            }

            .h1-a {
                font-size: 2.5rem;
                line-height: 1.1;
            }

            .h2-a {
                font-size: 2rem;
                line-height: 1.1;
            }

            .h3-a {
                font-size: 1.75rem;
                line-height: 1.1;
            }

            .h4-a {
                font-size: 1.5rem;
                line-height: 1.1;
            }

            .sw {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }
        </style>
        <title>
            {{ $title }}
        </title>
    </head>
    <body>
        {{ $yandex or '' }}

        {{ $navbar or '' }}
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <span class="h4 light">{{ $brand }}</span><br>
                    <span>{{ $description }}</span>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    {{ $header_phone }}<br>
                    {{ $header_email }}<br>
                    {{ $header_address }}
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 col-12 px-2 mx-auto">
                    @if (isset($presentation))
                        <img src="{{ $presentation or '' }}" class="img-fluid d-block mx-auto sw">
                    @endif
                    @if (isset($presentation_video))
                        <div class="embed-responsive embed-responsive-16by9 sw">
                            <iframe class="embed-responsive-item" src="{{ $presentation_video }}?rel=0&showinfo=0" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
                <div class="col-xl-6 col-12 px-2">
                    <div class="d-xl-none">
                        <br>
                        <br>
                    </div>
                    <div class="col-xl-8 col-12 mx-auto">
                        <h1 class="h2 mb-0">
                            {{ $lead_magnet }}
                        </h1>
                        <div class="py-4">
                            {{ $details }}
                        </div>

                        {{ $button_call_to_action }}

                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="/leads" method="POST" class="p-2">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="all_leads">
                                            <input type="hidden" name="cta" value="Форма с видео">
                                            <div class="form-group">
                                            <h5 class="my-0">
                                                {{ $popup_form_title }}
                                            </h5>
                                        </div>
                                            {{ $popup_form }}

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

                    </div>
                </div>
            </div>
        </div>

        {{ $examples or '' }}

        @isset($examples)
            <div class="container-fluid bg-light">
        @endisset
        @empty($examples)
            <div class="container-fluid">
        @endempty
            <div class="row p-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    {{ $footer }}
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    {{ $footer_phone }}<br>
                    {{ $footer_email }}<br>
                    {{ $footer_address }}
                </div>
            </div>
        </div>

        <div class="modal" id="termsofuse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Политика в области обработки и защиты персональных данных</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h4></h4>
                        <p>Настоящий документ (далее – Политика) устанавливает принципы, цели, условия и способы обработки персональных данных Лицензиата Лицензиаром и является неотъемлемой частью Оферты.</p>
                        <p>В целях защиты персональных данных в рамках Политики Лицензиатом признается любое дееспособное физическое лицо, индивидуальный предприниматель или представитель юридического лица, посетивший Сайт и (или) использующий Платформу.</p>
                        <p>В остальных случаях термины и определения, закрепленные в Оферте, должны соответствующим образом толковаться в рамках Политики. В случае наличия противоречий между Политикой и иными официальными документами Лицензиара применению подлежит настоящая Политика.</p>
                        <strong>1.Общие положения</strong>
                        <p>    1.1.Политика разработана в соответствии с действующим законодательством Российской Федерации о персональных данных.</li></p>
                        <p>    1.2.Действие Политики распространяется на все осуществляемые Лицензиаром и связанные с обработкой персональных данных процессы, как с использованием средств автоматизации, в том числе в сети Интернет, так и без использования таких средств. К таким процессам в том числе могут относятся сбор, запись, систематизация, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передача (распространение, предоставление, доступ), обезличивание, блокирование, удаление и уничтожение персональных данных.</p>
                        <p>    1.3.Присоединяясь к Оферте, Лицензиат дает согласие на</p>
                        <p>        1.3.1.Обработку своих персональных данных в целях и способами, предусмотренными Политикой.</p>
                        <p>        1.3.2.Передачу персональных данных платежным системам и организациям при оплате Тарифа с использованием Сайта.</p>
                        <p>        1.3.3.Получение от Лицензиара информационных сообщений о вебинарах, обновлениях Платформы, обучающей информации.</p>
                        <p>    1.4.Лицензиар не проверяет достоверность предоставленных Лицензиатом персональных данных, рассчитывая на добросовестность и разумность Лицензиата.</p>

                        <strong>2.Состав обрабатываемой информации</strong>
                        <p>2.1.В состав обрабатываемой информации входит:</p>
                        <p>2.1.1.Персональная информация, предоставляемая Лицензиатом самостоятельно, включая фамилию, имя, отчество, электронную почту, телефон, адрес, номер банковской карты и другие данные.</p>
                        <p>2.1.2.Техническая и статистическая информация:</p>
                        <p>2.1.2.1.IP-адрес компьютера Лицензиата и время доступа.</p>
                        <p>2.1.2.2.Сведения о посещенных разделах Сайта.</p>
                        <p>2.1.2.3.Информация, предоставляемая браузером Лицензиата, в том числе тип устройства, версия браузера, операционная система и пр.</p>
                        <p>2.1.2.4.Номер телефона при осуществлении Лицензиатом звонка на телефонные номера, указанные на Сайте.</p>
                        <p>2.1.2.5.Адрес электронной почты, при направлении Лицензиатом электронных писем Лицензиару.</p>
                        <p>2.1.3.Информация о действиях Лицензиата, к которой относятся:</p>
                        <p>2.1.3.1.Сведения о направленных запросах, вопросах.</p>

                        <strong>3.Цели обработки персональных данных</strong>
                        <p>3.1.Главной целью Политики является обеспечение защиты информации о Лицензиате, в том числе персональных данных, от несанкционированного доступа и разглашения. Также целью Политики является надлежащее выполнение обязательств Лицензиара перед Лицензиатом в рамках Оферты и иных договоров, которые могут быть заключены между Лицензиатом и Лицензиаром.</p>
                        <p>3.2.Лицензиат соглашается с тем, что Лицензиар также может использовать его персональные данные в целях:</p>
                        <p>3.2.1.Обработки писем от Лицензиата.</p>
                        <p>3.2.2.Связи с Лицензиатом, в том числе для направления ответов, уведомлений, решений, запросов и иной информации, связанной с исполнением Оферты.</p>
                        <p>3.2.3.Улучшения качества Платформы, удобства ее использования и разработки новых продуктов.</p>
                        <p>3.2.4.Разрешения споров, сбора отзывов и выявления неисправностей.</p>
                        <p>3.2.5.Сравнения персональных данных для подтверждения их точности и проверки их третьими лицами в случаях, предусмотренных законодательством.</p>
                        <p>3.2.6.Предотвращения случаев мошенничества и других злоупотреблений, а также для расследования таких случаев.</p>
                        <p>3.2.7.Проведения статистических и иных исследований, на основе обезличенных данных.</p>

                        <strong>4.Принципы обработки персональных данных</strong>
                        <p>Обработка персональных данных осуществляется основываясь на следующих принципах:</p>
                        <p>4.1.Законность и справедливая основа обработки персональных данных.</p>
                        <p>4.2.Обработка персональных данных в соответствии с конкретными, заранее определенными и законными целями.</p>
                        <p>4.3.Не допущение объединения баз данных, содержащих персональные данные, обработка которых осуществляется в целях, несовместимых между собой.</p>
                        <p>4.4.Соответствие содержания и объема персональных данных заявленным целям обработки.</p>
                        <p>4.5.Точность, достаточность, актуальность и достоверность персональных данных.</p>
                        <p>4.6.Законность технических мер, направленных на обработку персональных данных.</p>
                        <p>4.7.Разумность и целесообразность обработки персональных данных.</p>
                        <p>4.8.Законный и разумный срок хранения персональных данных.</p>

                        <strong>5.Обработка персональных данных</strong>
                        <p>5.1.Лицензиар производит обработку персональных данных своими силами и средствами с согласия Лицензиата. Обработка персональных данных Лицензиата начинается с момента их получения.</p>
                        <p>5.2.Сбор персональных данных осуществляется следующими способами:</p>
                        <p>5.2.1.Предоставление персональных данных их субъектами при заполнении соответствующих форм на Платформе и направлении электронных писем Лицензиару.</p>
                        <p>5.2.2.Автоматический сбор информации о Лицензиате:</p>
                        <p>5.2.2.1.При совершении звонков по номерам телефонов, указанным на Платформе, или направлении электронных писем и обратной связи по электронным письмам Лицензиара.</p>
                        <p>5.2.2.2.С помощью технологий и сервисов: веб-протоколы, куки, веб-отметки, которые запускаются только при вводе Лицензиатом своих данных.</p>
                        <p>5.3.Хранение и использование персональных данных.</p>
                        <p>5.3.1.Хранение персональных данных осуществляется в форме, позволяющей определить субъекта персональных данных не дольше, чем этого требуют соответствующие цели обработки. Обрабатываемые персональные данные подлежат уничтожению либо обезличиванию по достижении целей обработки, или в случае утраты необходимости в достижении этих целей.</p>
                        <p>5.3.2.Персональные данные Лицензиата хранятся исключительно должным образом на   защищенных электронных носителях и обрабатываются с использованием автоматизированных систем, за исключением случаев, когда неавтоматизированная обработка персональных данных необходима в соответствии с законодательством Российской Федерации. Лицензиар при обработке персональных данных Лицензиата применяет базы данных на территории Российской Федерации.</p>
                        <p>5.4.Передача персональных данных.</p>
                        <p>5.4.1.Данные банковской карты передаются только в зашифрованном виде и не сохраняются на Сайте. Все операции с платежными картами происходят в соответствии с требованиями VISA International, MasterCard, American Express и других платежных систем. При передаче информации используются специальные технологии безопасности карточных онлайн-платежей, обработка данных ведется на безопасном высокотехнологичном сервере процессинговой компании. В случаи использования регулярных платежей, при совершении первой операции номер банковской карты и срок действия будут сохранены на стороне банка.</p>
                        <p>5.4.2.Лицензиар не передает персональные данные третьим лицам без согласия Лицензиата, за исключением случаев, когда:</p>
                        <p>5.4.2.1.Передача информации необходима для обеспечения соблюдения требований законодательства Российской Федерации, предупреждения, пресечения незаконных действий Лицензиата и защиты законных интересов Лицензиара и третьих лиц.</p>
                        <p>5.4.2.2.Передача информации осуществляется по запросу государственных органов при соблюдении законодательства РФ.</p>
                        <p>5.4.2.3.Передача информации производится в рамках продажи или иной передачи Платформы в собственность третьим лицам. При этом к приобретателю переходят все обязательства по соблюдению условий настоящей Политики в отношении персональных данных, полученных от Лицензиата.</p>
                        <p>5.5.Блокирование персональных данных. Лицензиар оставляет за собой право временно прекратить обработку персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).</p>
                        <p>5.6.Уничтожение персональных данных. Персональные данные Лицензиата могут быть уничтожены Лицензиаром в случае наличия угрозы безопасности Платформы и нарушении Лицензиатом условий Оферты или по просьбе самого Лицензиата.</p>

                        <strong>6.Защита информации</strong>
                        <p>6.1.Лицензиар принимает технические и организационно-правовые меры, частью которых является Политика для защиты персональных данных Лицензиатов от незаконного или случайного доступа, сбора, хранения, использования, передачи, блокирования или уничтожения, а также от иных подобных действий.</p>

                        <strong>7.Права Лицензиата</strong>
                        <p>7.1.Лицензиат всегда имеет право на получение информации об обработке персональных данных о нем, в том числе содержащей:</p>
                        <p>7.1.1. Подтверждение факта обработки персональных данных.</p>
                        <p>7.1.2. Правовые основания обработки персональных данных.</p>
                        <p>7.1.3. Цели и применяемые Лицензиаром способы обработки персональных данных.</p>
                        <p>7.1.4. Наименование и место нахождения Лицензиара, сведения о лицах (за исключением работников Лицензиара), которые имеют доступ к персональным данным или которым могут быть раскрыты персональные данные на основании договора с Лицензиаром или в соответствии с законодательством Российской Федерации.</p>
                        <p>7.1.5. Обрабатываемые персональные данные, относящиеся к соответствующему Лицензиату, источник их получения, если иной порядок представления таких данных не предусмотрен законодательством Российской Федерации.</p>
                        <p>7.1.6. Сроки обработки персональных данных, в том числе сроки их хранения.</p>
                        <p>7.1.7. Порядок осуществления Лицензиатом прав, предусмотренных законодательством Российской Федерации.</p>
                        <p>7.1.8. Информацию об осуществленной или о предполагаемой трансграничной передаче данных.</p>
                        <p>7.1.9. Наименование или фамилию, имя, отчество и адрес лица, осуществляющего обработку персональных данных по поручению Лицензиара, если обработка поручена или будет поручена такому лицу.</p>
                        <p>7.1.10. Иные сведения, предусмотренные законодательством Российской Федерации.</p>
                        <p>7.2.Лицензиат вправе получать сведения, указанные в п. 7.1. Политики, неограниченное количество раз.</p>
                        <p>7.3.Лицензиат может отозвать согласие на обработку персональных данных.</p>

                        <p>8.Обязанности Лицензиара</p>
                        <p>В соответствии с требованиями Федерального закона «О персональных данных» Лицензиар обязан:</p>
                        <p>8.1. Предоставлять Лицензиату по его просьбе информацию, касающуюся обработки его персональных данных и указанную в п. 7.1. Политики, либо предоставить Лицензиату обоснованный отказ.</p>
                        <p>8.2.Принимать меры, необходимые и достаточные для обеспечения выполнения обязанностей, предусмотренных Политикой и Федеральным законом «О персональных данных».</p>
                        <p>8.3.При обработке персональных данных принимать необходимые правовые, организационные и технические меры или обеспечивать их принятие для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения, а также от иных неправомерных действий в отношении персональных данных.</p>
                        <p>8.4.По требованию Лицензиата уточнять обрабатываемые персональные данные, блокировать или удалять, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки.</p>
                        <p>8.5.Вести Реестр учета обращений Лицензиатов, в котором должны фиксироваться запросы Лицензиатов на получение персональных данных, а также факты предоставления персональных данных по этим запросам.</p>
                        <p>8.6.Обеспечить правомерность обработки персональных данных. В случае, если обеспечить правомерность обработки персональных данных невозможно, Лицензиар в срок, не превышающий десяти рабочих дней с даты выявления неправомерной обработки персональных данных, обязан уничтожить такие персональные данные или обеспечить их уничтожение.</p>
                        <p>8.7.В случае отзыва Лицензиатом согласия на обработку персональных данных прекратить их обработку и уничтожить персональные данные в срок, не превышающий тридцати дней с даты поступления указанного отзыва, за исключением случаев, когда обработка может быть продолжена в соответствии с законодательством.</p>

                        <strong>9.Ограничение действия Политики</strong>
                        <p>9.1.Действия Политики распространяются исключительно на Сайт Лицензиара, и не применяются к другим сайтам.</p>
                        <p>9.2.Лицензиат обязан разумно и ответственно подходить к выбору уровня конфиденциальности и к размещению собственных персональных данных на Платформе. Лицензиар не несет ответственности за действия третьих лиц, получивших доступ к персональным данным Лицензиата по вине последнего.</p>
                        <p>9.3.Лицензиар гарантирует, что не собирает, не использует и не передает третьим лицам информацию, касающуюся детей младше 14 лет.</p>

                        <strong>10.Заключительные положения</strong>
                        <p>10.1. Политика является локальным нормативным актом Лицензиара.</p>
                        <p>10.2. Общедоступность Политики обеспечивается публикацией на Сайте.</p>
                        <p>10.3. Лицензиар имеет право вносить изменения в Политику. При внесении изменений в актуальной редакции указывается дата последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения.';</p>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
