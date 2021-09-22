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
            <div class="row">
                <div class="col mb-4">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
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
