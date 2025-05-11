@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
@endsection

@section('content')

<main class="main-contents">
    <section class="login">
      <div class="login__inner">
        <h2 class="login__title">ログイン</h2>

        <form class="login-form" action="/login" method="post">
        @csrf
          <div class="form-fields">
            <div class="form__group">
              <label for="email" class="form-label">メールアドレス</label>
              <input type="email" id="email" name="email" class="form-input" >
            </div>
            @error('email')
              <div>{{ $message }}</div>
            @enderror

            <div class="form__group">
              <label for="password" class="form-label">パスワード</label>
              <input type="password" id="password" name="password" class="form-input" >
            </div>
            @error('password')
              <div>{{ $message }}</div>
            @enderror
            <button type="submit" class="login-button">ログイン</button>

            <div class="divider">
              <span class="divider-line"></span>
              <span class="divider-text">または</span>
            </div>

            <div class="social-buttons">
                <button type="button" class="social-button facebook-button">
                  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/facebook/facebook-original.svg" alt="Facebook" class="social-icon">
                  Facebookでログイン
                </button>
              
                <button type="button" class="social-button google-button"> 
                  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg" class="social-icon"/>
                  Googleでログイン
                </button>

                <button type="button" class="social-button twitter-button"> 
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/twitter/twitter-original.svg" class="social-icon"/>
                    Twitterでログイン
                </button>
              </div>
          </div>

          <div class="register-link-container">
            <p>アカウントを持っていませんか? <a href="/register" class="register-link">新規登録</a></p>
          </div>
        </form>
      </div>
    </section>
</main>

@endsection