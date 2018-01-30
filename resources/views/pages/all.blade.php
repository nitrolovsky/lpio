@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <div class="pb-5">
            Общее количество = {{ count($files) }}
        </div>
        @foreach($files as $file)
            <div class="row">
                <div class="col-12">
                    <a href="/pages/{{ $file }}" target="_blank">{{ $file }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
