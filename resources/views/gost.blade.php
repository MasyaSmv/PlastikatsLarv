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
            <div class="row row-catalog">
                @foreach ($gosts as $v)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="35%" y="50%" fill="#eceeef"
                                dy=".3em">{{ $v -> gost}}</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">{{$v -> title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{$gosts -> links()}}
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
