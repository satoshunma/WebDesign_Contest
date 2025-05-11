@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<form action="#" class="search-form-1">
    <label>
        <input type="text" placeholder="キーワードを入力">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>

<div class="container">
  <div class="left-menu">
  <nav>
    <h2>主なカテゴリ</h2>
    <ul>
      <li><a href="/category/html">HTML</a></li>
      <li><a href="/category/css">CSS</a></li>
      <li><a href="/category/php">PHP</a></li>
      <li><a href="/category/java">Java</a></li>
      <li><a href="/category/python">Python</a></li>
      <li><a href="/category/c">C</a></li>
    </ul>
  </nav>
</div>

<div class="main-contents">
  <h2>トレンド</h2>
  <div class="new-items">
  @foreach($randomPosts as $post)
    <div class="new-card">
        <div class="user-info">
            <img src="{{ asset('img/' . ($post->user->image ?? '1705.png')) }}" alt="" class="user-icon">
            <span class="user-name">{{ '@' . ($post->user->name ?? '名無しユーザー') }}</span>
        </div>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->summary }}</p>
        <a href="{{ route('post.detail', $post->id) }}" class="new-card-link">詳しく見る</a>
    </div>
  @endforeach
</div>
</div>

<div class="right-menu">
  <h2>閲覧数ランキング</h2>
  <ul>
    @foreach($randomPosts as $post)
      <li><a href="{{ route('post.detail', $post->id) }}">{{ $post->title }}</a></li>
    @endforeach
  </ul>
</div>

@endsection