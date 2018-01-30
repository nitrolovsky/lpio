@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <div class="pb-5">
            Общее количество = {{ count($files) }}
        </div>
        @foreach($files as $file)
            <div class="row">
                <div class="col-12">
                    @if(str_contains(url()->current(), 'dev'))
                        <a href="/pages/{{ $file }}" target="_blank">{{ $file }}</a>
                    @elseif(str_contains(url()->current(), 'ru'))
                        <a href="{{ $file }}.lpio.ru" target="_blank">{{ $file }}</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
