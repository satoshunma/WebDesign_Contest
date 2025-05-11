@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/question.css') }}">
@endsection

@section('content')
<div class="main-contents">
  <ol class="breadcrumb-001">
    <li><a href="/">ホーム</a></li>
    <li><a href="/category">カテゴリー</a></li>
    <li><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
    <li>{{ $question->title }}</li>
  </ol>

  <h2 class="answer-heading">質問</h2>
    <h1 class="question-title">{{ $question->title }}</h1>
    <p class="question-summary">{{ $question->summary }}</p>
    <p class="question-category">カテゴリ: {{ $category->name }}</p>

    <h2 class="answer-heading">回答一覧</h2>
    @foreach ($answers as $answer)
      <div class="answer-box">
        <p class="answer-body">{{ $answer->body }}</p>
        <p class="answer-author">回答者: {{ $answer->user->name }}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
