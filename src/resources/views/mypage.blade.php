@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="main-contents">
    
  <ol class="breadcrumb-001">
    <li><a href="/">ホーム</a></li>
    <li><a href="/mypage">マイページ</a></li>
  </ol>

  <h2 class="contact-form__title">マイページ</h2>

    <div class="form-container">
      <div class="avatar">
        <img src="" alt="">
      </div>

      <form>
        <label>ユーザーネーム</label>
        <input type="text" name="username">

        <label>メールアドレス</label>
        <input type="email" name="email">

        <label>パスワード</label>
        <input type="password" name="password">

        <a class="button" href="/">更新</a>
      </form>
    </div>
  </div>

@endsection