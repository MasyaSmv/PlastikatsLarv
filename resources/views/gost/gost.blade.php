{{-- Подключаймый шаблон шапки --}}
@extends('header')

{{-- Название вкладки --}}
@section('title')
Каталог компаний
@endsection

{{-- Блок в шаблоне шапки, куда вставляется --}}
@section('main')

{{-- Весь HTML код --}}
<main role="main">
    <div class="news py-5">
        <div class="container">
            <h1>
                Гостов всего {{$gosts -> count()}}
            </h1>
            <div class="row row-catalog">
                @foreach ($gosts as $gost)
                    @include('gost.card', compact('gost'))
                @endforeach
            </div>
        </div>
    </div>


</main>
{{-- Поднимает наверх страницы --}}
{{-- <footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
    </div>
</footer> --}}

@endsection
