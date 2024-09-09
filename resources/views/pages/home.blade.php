@extends('index')

@push('style')
    <link rel="stylesheet" href="{{asset('css/pages/home.css')}}">
@endpush

@php
    $paises = Util::getJsonFile(public_path('json/paises.json'));
@endphp

@section('content')
    <main class="homePage">
        <h1 class="titlePage">Essa é a home page</h1>
        @component('components.inputs.inputText')
            @slot('label')
                Manga
            @endslot
        @endcomponent
    </main>
@endsection