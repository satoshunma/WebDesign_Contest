@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('content')
<div class="main-contents">
    <ol class="breadcrumb-001">
      <li><a href="/">ホーム</a></li>
      <li><a href="/inquiry">お問い合わせ</a></li>
    </ol>

    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form">
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="テスト太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">ふりがな</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="てすとたろう" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせ種類</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <select name="example1">
                    <option value="">--選択肢--</option>
                    <option value="1">ユーザー登録・ログイン関連</option>
                    <option value="2">投稿・回答に関する質問</option>
                    <option value="3">通報・マナー違反に関するもの</option>
                    <option value="4">ポイント・評価システムについて</option>
                    <option value="5">技術的な不具合やバグ報告</option>
                    <option value="6">アカウント削除や個人情報について</option>
                    <option value="7">運営への要望・提案</option>
                </select>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="資料をいただきたいです"></textarea>
            </div>
          </div>
        </div>
    <div class="form__button">
        <a class="form__button-submit" href="/">送信</a>
    </div>
    </form>
</div>

@endsection