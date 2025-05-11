@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/notice.css') }}">
@endsection

@section('content')
<div class="main-contents">
  <ol class="breadcrumb-001">
    <li><a href="/">ホーム</a></li>
    <li><a href="/news">お知らせ</a></li>
    <li><a href="/news/{{ $news->id }}">{{ $news->name }}</a></li>
  </ol>

  <div class="contact">
    <h2 class="contact-form__title">{{ $news->name }}</h2>
    <div class="contact-form__description">
        {{ $news->description }}
    </div>
  </div>

  <div class="contact-return">
    <a class="contact-return__title" href="/news">お知らせ一覧に戻る</h3>
  </div>
  

</div>
@endsection
