@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
@endsection

@section('content')
<div class="main-contents">
  <ol class="breadcrumb-001">
    <li><a href="/">ホーム</a></li>
    <li><a href="/category">カテゴリー</a></li>
    <li><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
  </ol>

  <h2 class="contact-form__title">{{ $category->name }}</h2>
  <div class="contact-form__description">
    {{ $category->description }}
  </div>

  <div class="new-items">
    @foreach($posts as $post)
      <div class="new-card">
        <div class="user-info">
          <img src="{{ asset('img/' . ($post->user->image ?? '1705.png')) }}" alt="" class="user-icon">
          <span class="user-name">{{ '@' . $post->user->name }}</span>
        </div>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->summary }}</p>
        <a href="{{ route('post.detail', $post->id) }}" class="new-card-link">詳しく見る</a>
      </div>
    @endforeach
  </div>
</div>
@endsection
