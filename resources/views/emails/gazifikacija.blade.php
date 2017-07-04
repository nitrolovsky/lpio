<body style="font-family: Verdana;font-size:17px;">
    @if ($name)
        Имя - {{ $name or "" }}<br>
    @endif
    @if ($email)
        Email - {{ $email or ""}}<br>
    @endif
    @if ($phone)
        Телефон - {{ $phone or ""}}<br>
    @endif
    @if ($source)
        Источник - {{ $source or ""}}<br><br>
    @endif
    @if ($calc)
        {{ $calc or "" }}<br>
    @endif
    @if ($nar)
        {{ $nar or "" }}<br>
    @endif
    @if ($vn)
        {{ $vn or "" }}<br>
    @endif
    @if ($kol)
        {{ $kol or "" }}<br>
    @endif
    @if ($davl)
        {{ $davl or "" }}<br>
    @endif
    @if ($dlina)
        Длина до места подключения - {{ $dlina or "" }} м<br>
    @endif
    @if ($dym)
        {{ $dym or "" }}<br>
    @endif
    @if ($kotel)
        {{ $kotel or "" }}<br>
    @endif
    @if ($ob)
        {{ $ob or "" }}<br>
    @endif
    @if ($op1)
        {{ $op1 or "" }}<br>
    @endif
    @if ($op2)
        {{ $op2 or "" }}<br>
    @endif
    @if ($op3)
        {{ $op3 or "" }}<br>
    @endif
    @if ($op4)
        {{ $op4 or "" }}<br>
    @endif
    @if ($op5)
        {{ $op5 or "" }}<br>
    @endif
    @if ($op6)
        {{ $op6 or "" }}<br>
    @endif
    @if ($op7)
        {{ $op7 or "" }}<br>
    @endif
    @if ($op8)
        {{ $op8 or "" }}<br>
    @endif
    @if ($op9)
        {{ $op9 or "" }}<br>
    @endif
    @if ($op10)
        {{ $op10 or "" }}
    @endif
</body>
