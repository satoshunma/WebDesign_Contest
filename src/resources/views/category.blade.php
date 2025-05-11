@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endsection

@section('content')
<div class="contact-form__content">

    <ol class="breadcrumb-001">
        <li><a href="/">ホーム</a></li>
        <li><a href="/category">カテゴリー</a></li>
    </ol>

    <div class="contact-form__title">カテゴリ一覧</div>
    <div class="contact-form__description">
        学ぶべき技術、試したい言語、気になるフレームワークがここに。あなたの「次」を見つけましょう。
    </div>

    <div class="features">
    @foreach($categories as $category)
        <div class="feature-card">
            <div class="feature-icon">
              <i class="{{ $category->icon_class }}"></i>
            </div>
            <div class="feature-content">
                <h3>{{ $category->name }}</h3>
                <p>{{ $category->description}}</p>
                <a href="/category/{{ $category->slug }}">View</a>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
