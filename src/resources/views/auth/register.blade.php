@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
@endsection

@section('content')

<main class="main-contents">
    <section class="register">
      <div class="register__inner">
        <h2 class="register__title">新規登録</h2>

        <form class="register-form" action="/register" method="post">
        @csrf
          <div class="form-fields">

          <div class="form__group">
              <label for="name" class="form-label">ユーザーネーム</label>
              <input type="name" id="name" name="name" class="form-input" required>
            </div>

            <div class="form__group">
              <label for="email" class="form-label">メールアドレス</label>
              <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form__group">
              <label for="password" class="form-label">パスワード</label>
              <input type="password" id="password" name="password" class="form-input" required>
            </div>

            <div class="form__group">
              <label for="password_confirmation" class="form-label">パスワード確認</label>
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" required>
            </div>

            <button type="submit" class="register-button">新規登録</button>

            <div class="divider">
              <span class="divider-line"></span>
              <span class="divider-text">または</span>
            </div>

            <div class="social-buttons">
                <button type="button" class="social-button facebook-button">
                  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/facebook/facebook-original.svg" alt="Facebook" class="social-icon">
                  Facebookで新規登録
                </button>
              
                <button type="button" class="social-button google-button"> 
                  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg" alt="Google" class="social-icon"/>
                  Googleで新規登録
                </button>

                <button type="button" class="social-button twitter-button"> 
                  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/twitter/twitter-original.svg" alt="Twitter" class="social-icon"/>
                  Twitterで新規登録
                </button>
              </div>
          </div>

          <div class="register-link-container">
            <p>登録済みの方はこちら <a href="/login" class="register-link">ログイン</a></p>
          </div>
        </form>
      </div>
    </section>
  </main>

@endsection