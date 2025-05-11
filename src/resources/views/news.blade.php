@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection

@section('content')

<div class="main-contents">
    
  <ol class="breadcrumb-001">
    <li><a href="/">ホーム</a></li>
    <li><a href="/news">お知らせ</a></li>
  </ol>

  <h2 class="contact-form__title">お知らせ</h2>

  <div class="news_contents">
  @foreach($newses as $news)
    <div class="news_month_item show">
      <a href="/news/{{ $news->id }}"><p>{{ $news->name }}</p></a>
    </div>
  @endforeach
  </div>
</div>
</div>

@endsection