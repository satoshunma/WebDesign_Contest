<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Port View</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Port View
      </a>

      <nav class="header__nav">
        <ul class="nav__list">
          @guest
            <li class="nav__item"><a href="/login" class="nav__link">ログイン</a></li>
            <li class="nav__item"><a href="/register" class="nav__link">新規登録</a></li>
          @endguest

          @auth
            @if (request()->is('mypage'))
              {{-- 今がマイページなら非表示 --}}
            @else
            <li class="nav__item">
              <a href="/mypage" class="nav__link">マイページ</a>
            </li>
            @endif
            <li class="nav__item">
              <form action="/logout" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="nav__link logout-button">
                  ログアウト
                </button>
              </form>
            </li>
          @endauth
        </ul>
      </nav>
      
    </div>
  </header>

  <nav class="gnav">
  <ul class="gnav__list">
    <li class="gnav__item">
      <a href="/" class="gnav__link">
        <span class="gnav__label">HOME</span>
        <span class="gnav__sub">ホーム</span>
      </a>
    </li>
    <li class="gnav__item">
      <a href="/category" class="gnav__link">
        <span class="gnav__label">CATEGORY</span>
        <span class="gnav__sub">カテゴリ</span>
      </a>
    </li>
    <li class="gnav__item">
      <a href="/news" class="gnav__link">
        <span class="gnav__label">INFO</span>
        <span class="gnav__sub">お知らせ</span>
      </a>
    </li>
    <li class="gnav__item">
      <a href="/newarriveal" class="gnav__link">
        <span class="gnav__label">NEW</span>
        <span class="gnav__sub">新着</span>
      </a>
    </li>
    <li class="gnav__item">
      <a href="/inquiry" class="gnav__link">
        <span class="gnav__label">CONTACT</span>
        <span class="gnav__sub">お問合せ</span>
      </a>
    </li>
  </ul>
</nav>


  <main>
    @yield('content')
  </main>
  
  <!-- 投稿ボタン（フローティング） -->
@auth
<a href="" class="floating-post-button">
  新規投稿
</a>
@endauth

  <footer class="footer">
    <div class="md-flex md-justify-between">
      <div>
        <a href="/" class="footer__logo">
            Port view
        </a>
        <p class="footer_logo__column">頑張る人のためのPortView</p>
      </div>
      <div class="grid">
        <div>
          <p class="footer__navi-heading">SERVICE</p>
          <ul class="footer__navi">
            <li><a href="/">利用規約</a></li>
            <li><a href="/">プライバシーポリシー</a></li>
            <li><a href="/">ヘルプ</a></li>
          </ul>
        </div>
        <div>
          <p class="footer__navi-heading">FOLLOW US</p>
          <ul class="footer__navi">
            <li><a href="/">Facebook</a></li>
            <li><a href="/">Twitter</a></li>
            <li><a href="/">Instagram</a></li>
          </ul>
        </div>
        <div>
          <p class="footer__navi-heading">ABOUT</p>
          <ul class="footer__navi">
            <li><a href="/">お問い合わせ</a></li>
            <li><a href="/">サイトマップ</a></li>
            <li><a href="/">プライバシーポリシー</a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr />
  </footer>
</body>

</html>
