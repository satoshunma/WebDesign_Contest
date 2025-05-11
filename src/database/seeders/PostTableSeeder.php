<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //html
        $param = [
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'HTMLとは何ですか？',
            'summary' => 'HTMLについて簡単に教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 2,
            'title' => 'HTMLでリンクを作成するには？',
            'summary' => 'HTMLについて簡単に教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 3,
            'title' => '見出しタグにはどんな種類がありますか？',
            'summary' => 'HTMLの見出しって何種類あるんでしょうか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 4,
            'title' => 'HTMLで画像を表示する方法は？',
            'summary' => 'HTMLで画像をページに載せたいんですが、どう書けばいいですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 5,
            'title' => 'HTMLのformタグの役割は？',
            'summary' => 'formタグって何のために使うんでしょうか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 6,
            'title' => 'HTMLとHTML5の違いは？',
            'summary' => 'HTMLとHTML5は何が違うんですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 7,
            'title' => 'metaタグの使い方は？',
            'summary' => 'metaタグってどんな時に使うんでしょうか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 8,
            'title' => 'HTMLでリストを作成するには？',
            'summary' => 'リストをHTMLで書きたいんですが、どう書けばいいですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 9,
            'title' => 'HTMLでテーブルを作るには？',
            'summary' => 'HTMLで表を作りたい時、どんなタグを使えばいいですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 10,
            'title' => 'inputタグのtype属性とは？',
            'summary' => 'inputタグのtypeっていろいろありますけど、どう使い分けるんですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 1,
            'user_id' => 11,
            'title' => 'HTMLコメントの書き方は？',
            'summary' => 'HTMLでコメントを残したいんですが、書き方を教えてください。',
        ];
        DB::table('posts')->insert($param);

        //css
        $param = [
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'CSSとは何ですか？',
            'summary' => 'CSSの基本について教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'CSSで文字の色を変えるには？',
            'summary' => 'テキストカラーの変更方法を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 3,
            'title' => 'クラスとIDの違いは何ですか？',
            'summary' => 'CSSにおけるclassとidの使い分けについて教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 4,
            'title' => 'CSSで背景画像を設定するには？',
            'summary' => '背景に画像を設定したいのですが、どうすれば良いですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 5,
            'title' => 'レスポンシブデザインとは？',
            'summary' => 'スマホ対応のレイアウトを作るにはどうすれば？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 6,
            'title' => 'CSSのflexboxとは何ですか？',
            'summary' => '要素を並べるflexboxの使い方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 7,
            'title' => 'hoverの使い方を教えてください。',
            'summary' => 'マウスを乗せたときのスタイル変更方法は？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 8,
            'title' => 'CSSのpositionプロパティの違いは？',
            'summary' => 'absoluteとrelativeなどの違いを教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 9,
            'title' => 'CSSでボックスの影をつけるには？',
            'summary' => 'box-shadowの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 10,
            'title' => 'CSSのcalc関数とは？',
            'summary' => 'calc()を使ってサイズを計算したいです。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 2,
            'user_id' => 11,
            'title' => 'CSSで円を描くには？',
            'summary' => 'border-radiusを使って丸を作る方法を知りたいです。',
        ];
        DB::table('posts')->insert($param);

        //Ruby
        $param = [
            'category_id' => 3,
            'user_id' => 1,
            'title' => 'Rubyとは何ですか？',
            'summary' => 'Rubyの特徴について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 2,
            'title' => 'Rubyで変数を定義するには？',
            'summary' => 'Rubyでの変数の書き方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 3,
            'title' => 'Rubyのクラスとは？',
            'summary' => 'Rubyにおけるクラスの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 4,
            'title' => 'eachメソッドの使い方は？',
            'summary' => '配列を繰り返すeachメソッドの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 5,
            'title' => 'Rubyのハッシュの使い方は？',
            'summary' => 'キーと値のセットを使う方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 6,
            'title' => 'Rubyで条件分岐をするには？',
            'summary' => 'if文など条件分岐の方法を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 7,
            'title' => 'RubyのブロックとProcの違いは？',
            'summary' => 'コードブロックの扱いの違いについて教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 8,
            'title' => 'Rubyでファイルを読み込む方法は？',
            'summary' => 'ファイル操作の基本的なコードを知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 9,
            'title' => 'Rubyのgemとは？',
            'summary' => 'gemって何ですか？どう使うのか教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 10,
            'title' => 'Rubyで例外処理を行うには？',
            'summary' => 'エラー処理の基本を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 3,
            'user_id' => 11,
            'title' => 'Rubyで配列をソートするには？',
            'summary' => 'sortメソッドなど配列の並び替え方法を教えてください。',
        ];
        DB::table('posts')->insert($param);

        //JavaScript
        $param = [
            'category_id' => 4,
            'user_id' => 1,
            'title' => 'JavaScriptとは何ですか？',
            'summary' => 'JavaScriptの基本について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 2,
            'title' => '変数宣言のletとconstの違いは？',
            'summary' => 'varとの違いも含めて知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 3,
            'title' => 'イベントリスナーの使い方は？',
            'summary' => 'クリックイベントなどの実装方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 4,
            'title' => 'JavaScriptでDOM操作をするには？',
            'summary' => 'HTML要素の取得や変更方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 5,
            'title' => '関数宣言とアロー関数の違いは？',
            'summary' => 'functionと=>の違いを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 6,
            'title' => '非同期処理とは？',
            'summary' => 'Promiseやasync/awaitについて簡単に知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 7,
            'title' => 'JavaScriptで配列をループするには？',
            'summary' => 'forEachやmapの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 8,
            'title' => 'JavaScriptでフォームの値を取得するには？',
            'summary' => 'フォームの入力値を取得して使いたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 9,
            'title' => 'localStorageの使い方は？',
            'summary' => 'ブラウザにデータを保存する方法を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 4,
            'user_id' => 10,
            'title' => 'JavaScriptのオブジェクトとは？',
            'summary' => '連想配列のようなものと聞きました。',
        ];
        DB::table('posts')->insert($param);
         
        //Python
        $param = [
            'category_id' => 5,
            'user_id' => 1,
            'title' => 'Pythonとはどんな言語ですか？',
            'summary' => 'Pythonの特徴や用途について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 2,
            'title' => 'Pythonで変数を定義するには？',
            'summary' => '変数の基本的な書き方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 3,
            'title' => 'Pythonでリストを使うには？',
            'summary' => 'リストの作り方や操作方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 4,
            'title' => 'for文とwhile文の違いは？',
            'summary' => 'Pythonで繰り返し処理をするにはどうすればいいですか？',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 5,
            'title' => 'Pythonで関数を定義するには？',
            'summary' => 'def文を使った関数の作成方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 6,
            'title' => 'Pythonでファイルを読み書きするには？',
            'summary' => 'ファイルの読み込みや書き込みの基本的な方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 7,
            'title' => 'Pythonの辞書型とは何ですか？',
            'summary' => 'dict型の使い方や特徴を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 8,
            'title' => 'Pythonで例外処理を行うには？',
            'summary' => 'try-except文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 9,
            'title' => 'PythonでWebスクレイピングをするには？',
            'summary' => 'BeautifulSoupなどを使った基本的なスクレイピング方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 10,
            'title' => 'PythonでJSONを扱うには？',
            'summary' => 'jsonモジュールを使ったデータの読み書きを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 5,
            'user_id' => 11,
            'title' => 'Pythonでクラスを使うには？',
            'summary' => 'クラスの定義方法とインスタンス化について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        //Go
        $param = [
            'category_id' => 6,
            'user_id' => 1,
            'title' => 'Go言語とは何ですか？',
            'summary' => 'Go言語の特徴や用途について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 2,
            'title' => 'Goで変数を定義するには？',
            'summary' => 'Goにおける変数の定義方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 3,
            'title' => 'Goで配列やスライスを使うには？',
            'summary' => 'スライスと配列の違いと使い方について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 4,
            'title' => 'Goでループ処理を行うには？',
            'summary' => 'forループの基本的な使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 5,
            'title' => 'Goで関数を定義する方法は？',
            'summary' => 'funcキーワードを使った関数の定義方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 6,
            'title' => 'Goでエラーハンドリングを行うには？',
            'summary' => 'Goのエラーチェックの書き方について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 7,
            'title' => 'Goの構造体とは何ですか？',
            'summary' => 'structの定義方法と使い方について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 8,
            'title' => 'Goでマップを使うには？',
            'summary' => 'map型の作り方と使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 9,
            'title' => 'GoでGoroutineを使うには？',
            'summary' => '並行処理の基本であるGoroutineの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 10,
            'title' => 'Goでチャネル（Channel）を使うには？',
            'summary' => 'チャネルを使ったデータのやり取り方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 6,
            'user_id' => 11,
            'title' => 'GoでHTTPサーバーを作るには？',
            'summary' => '標準ライブラリを使った簡単なWebサーバーの作り方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        //PHP
        $param = [
            'category_id' => 7,
            'user_id' => 1,
            'title' => 'PHPとは何ですか？',
            'summary' => 'PHPの特徴や用途について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 2,
            'title' => 'PHPで変数を定義するには？',
            'summary' => 'PHPでの変数の使い方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 3,
            'title' => 'PHPで配列を使うには？',
            'summary' => '配列の作成と操作方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 4,
            'title' => 'PHPで条件分岐をするには？',
            'summary' => 'if文やswitch文の使い方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 5,
            'title' => 'PHPで関数を定義する方法は？',
            'summary' => 'functionの書き方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 6,
            'title' => 'PHPとHTMLを組み合わせるには？',
            'summary' => 'PHPをHTMLに埋め込む方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 7,
            'title' => 'PHPでフォームからデータを受け取るには？',
            'summary' => '$_POSTや$_GETの使い方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 8,
            'title' => 'PHPでセッション管理をするには？',
            'summary' => 'セッションの開始と変数の保存方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 9,
            'title' => 'PHPでファイル操作をするには？',
            'summary' => 'ファイルの読み書き方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 10,
            'title' => 'PHPでエラー処理をするには？',
            'summary' => 'try-catchやエラーハンドリングの基本を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 7,
            'user_id' => 11,
            'title' => 'PHPでMySQLと接続するには？',
            'summary' => 'PDOを使ったデータベース接続方法を教えてください。',
        ];
        DB::table('posts')->insert($param);

        //Java
        $param = [
            'category_id' => 8,
            'user_id' => 1,
            'title' => 'Javaとは何ですか？',
            'summary' => 'Javaの特徴や使われる場面を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 2,
            'title' => 'Javaで変数を宣言するには？',
            'summary' => '基本的な変数の宣言と型について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 3,
            'title' => 'Javaで配列を使うには？',
            'summary' => '配列の定義と操作方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 4,
            'title' => 'Javaで繰り返し処理を行うには？',
            'summary' => 'for文、while文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 5,
            'title' => 'Javaでメソッドを定義するには？',
            'summary' => 'メソッドの書き方と呼び出し方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 6,
            'title' => 'Javaでクラスを定義するには？',
            'summary' => 'クラスの基本構文とインスタンス化について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 7,
            'title' => 'Javaで例外処理を行うには？',
            'summary' => 'try-catch文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 8,
            'title' => 'Javaのインターフェースとは？',
            'summary' => 'interfaceの定義と使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 9,
            'title' => 'Javaでファイルを扱うには？',
            'summary' => 'ファイルの読み書きの基本的な方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 10,
            'title' => 'JavaでGUIアプリを作るには？',
            'summary' => 'Swingなどを使ったGUIアプリ開発の方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 8,
            'user_id' => 11,
            'title' => 'Javaでデータベースに接続するには？',
            'summary' => 'JDBCを使った接続方法を教えてください。',
        ];
        DB::table('posts')->insert($param);

        //C
        $param = [
            'category_id' => 9,
            'user_id' => 1,
            'title' => 'C言語とは何ですか？',
            'summary' => 'C言語の特徴と使われる分野について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 2,
            'title' => 'C言語で変数を宣言するには？',
            'summary' => '型と一緒に変数を宣言する方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 3,
            'title' => 'C言語で配列を使うには？',
            'summary' => '配列の定義と使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 4,
            'title' => 'C言語で繰り返し処理をするには？',
            'summary' => 'for文やwhile文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 5,
            'title' => 'C言語で関数を定義するには？',
            'summary' => '関数の作成と呼び出し方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 6,
            'title' => 'C言語でポインタを使うには？',
            'summary' => 'ポインタの基本概念と使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 7,
            'title' => 'C言語で構造体を使うには？',
            'summary' => 'structの定義と使用方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 8,
            'title' => 'C言語でファイルを操作するには？',
            'summary' => 'fopenやfwriteなどの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 9,
            'title' => 'C言語でメモリを動的に確保するには？',
            'summary' => 'mallocやfreeの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 10,
            'title' => 'C言語のヘッダファイルとは？',
            'summary' => 'ヘッダファイルの役割と使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 9,
            'user_id' => 11,
            'title' => 'C言語のプリプロセッサとは？',
            'summary' => '#defineや#includeの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);

        //C#
        $param = [
            'category_id' => 10,
            'user_id' => 1,
            'title' => 'C#とは何ですか？',
            'summary' => 'C#の特徴と活用例について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 2,
            'title' => 'C#で変数を定義するには？',
            'summary' => 'C#での変数宣言の方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 3,
            'title' => 'C#のクラスとオブジェクトについて',
            'summary' => 'クラス定義とオブジェクト生成の基本を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 4,
            'title' => 'C#で条件分岐する方法は？',
            'summary' => 'if文、switch文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 5,
            'title' => 'C#での繰り返し処理の書き方',
            'summary' => 'for文、foreach文などのループ処理の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 6,
            'title' => 'C#で例外処理を行うには？',
            'summary' => 'try-catchの基本と例外の種類について知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 7,
            'title' => 'C#のプロパティとフィールドの違いは？',
            'summary' => 'それぞれの使いどころを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 8,
            'title' => 'C#でファイルを読み書きするには？',
            'summary' => 'ファイルの読み込みや書き込み方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 9,
            'title' => 'C#のLINQとは何ですか？',
            'summary' => 'LINQの基本的な書き方と便利な使い方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 10,
            'title' => 'C#で非同期処理をするには？',
            'summary' => 'async/awaitの使い方について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 10,
            'user_id' => 11,
            'title' => 'C#でフォームアプリを作るには？',
            'summary' => 'Windows FormsやWPFについて教えてください。',
        ];
        DB::table('posts')->insert($param);

        //C++
        $param = [
            'category_id' => 11,
            'user_id' => 1,
            'title' => 'C++とは何ですか？',
            'summary' => 'C++の概要と使われる理由を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 2,
            'title' => 'C++での変数とデータ型',
            'summary' => 'C++の基本的なデータ型と変数の定義方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 3,
            'title' => 'C++のクラスとオブジェクトの基本',
            'summary' => 'クラスの書き方とオブジェクト生成について知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 4,
            'title' => 'C++のポインタの使い方',
            'summary' => 'ポインタの基礎と操作方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 5,
            'title' => 'C++の参照と違いは何ですか？',
            'summary' => 'ポインタと参照の違いと使い分けを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 6,
            'title' => 'C++で継承を使うには？',
            'summary' => '基本的な継承の仕組みと例を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 7,
            'title' => 'C++のテンプレートとは？',
            'summary' => '関数テンプレートやクラステンプレートについて知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 8,
            'title' => 'C++でファイルを操作するには？',
            'summary' => 'fstreamを使った読み書きの方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 9,
            'title' => 'C++で例外処理をするには？',
            'summary' => 'try-catch文の書き方を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 10,
            'title' => 'C++のSTLについて知りたい',
            'summary' => 'vectorやmapなどの基本的な使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 11,
            'user_id' => 11,
            'title' => 'C++でメモリ管理を行うには？',
            'summary' => 'new/deleteとスマートポインタの違いを知りたいです。',
        ];
        DB::table('posts')->insert($param);

        //Swift
        $param = [
            'category_id' => 12,
            'user_id' => 1,
            'title' => 'Swiftとは何ですか？',
            'summary' => 'Swiftの基本情報と特徴について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 2,
            'title' => 'Swiftで変数と定数を宣言するには？',
            'summary' => 'letとvarの違いについて教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 3,
            'title' => 'Swiftの関数定義方法は？',
            'summary' => '基本的な関数の作り方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 4,
            'title' => 'Swiftで配列を使うには？',
            'summary' => '配列の作成と操作について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 5,
            'title' => 'Swiftで条件分岐を行うには？',
            'summary' => 'if文とswitch文の書き方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 6,
            'title' => 'Swiftのクラスと構造体の違いは？',
            'summary' => 'classとstructの違いについて教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 7,
            'title' => 'SwiftでUIを作るには？',
            'summary' => 'UIKitとSwiftUIの違いを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 8,
            'title' => 'Swiftのオプショナルとは？',
            'summary' => 'オプショナル型とアンラップの方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 9,
            'title' => 'Swiftのクロージャとは？',
            'summary' => 'クロージャの定義と使いどころを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 10,
            'title' => 'Swiftでデータを保存するには？',
            'summary' => 'UserDefaultsやファイル保存の方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 12,
            'user_id' => 11,
            'title' => 'SwiftでAPI通信を行うには？',
            'summary' => 'URLSessionの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);

        //MySQL
        $param = [
            'category_id' => 13,
            'user_id' => 1,
            'title' => 'MySQLとは何ですか？',
            'summary' => 'MySQLの概要と特徴を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 2,
            'title' => 'MySQLでデータベースを作成するには？',
            'summary' => 'CREATE DATABASE文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 3,
            'title' => 'MySQLでテーブルを作成するには？',
            'summary' => 'CREATE TABLEの基本文法を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 4,
            'title' => 'MySQLでデータを挿入するには？',
            'summary' => 'INSERT文の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 5,
            'title' => 'MySQLでデータを更新するには？',
            'summary' => 'UPDATE文の基本的な使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 6,
            'title' => 'MySQLでデータを削除するには？',
            'summary' => 'DELETE文の使い方と注意点を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 7,
            'title' => 'MySQLのSELECT文の使い方',
            'summary' => '基本的なSELECTの構文とWHERE句の使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 8,
            'title' => 'MySQLでのJOINの種類と使い方',
            'summary' => 'INNER JOINやLEFT JOINなどの違いを知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 9,
            'title' => 'MySQLでインデックスを作成するには？',
            'summary' => 'INDEXの作成とパフォーマンス改善について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 10,
            'title' => 'MySQLでトランザクションを使うには？',
            'summary' => 'BEGIN, COMMIT, ROLLBACKの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 13,
            'user_id' => 11,
            'title' => 'MySQLでユーザー権限を設定するには？',
            'summary' => 'GRANTやREVOKE文の使い方を知りたいです。',
        ];
        DB::table('posts')->insert($param);

        //SQLite
        $param = [
            'category_id' => 14,
            'user_id' => 1,
            'title' => 'SQLiteとは何ですか？',
            'summary' => 'SQLiteの特徴や用途について教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 2,
            'title' => 'SQLiteでデータベースを作成するには？',
            'summary' => 'sqlite3コマンドでDBを作る方法を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 3,
            'title' => 'SQLiteでテーブルを作る方法は？',
            'summary' => 'CREATE TABLE文の基本構文を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 4,
            'title' => 'SQLiteでデータを挿入するには？',
            'summary' => 'INSERT文の書き方と例を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 5,
            'title' => 'SQLiteでデータを検索する方法',
            'summary' => 'SELECT文とWHERE句の基本を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 6,
            'title' => 'SQLiteでデータを更新・削除するには？',
            'summary' => 'UPDATE文とDELETE文の基本構文を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 7,
            'title' => 'SQLiteの型について知りたい',
            'summary' => 'SQLiteのデータ型の特徴を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 8,
            'title' => 'SQLiteの制約とは？',
            'summary' => 'PRIMARY KEYやUNIQUE制約などを知りたいです。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 9,
            'title' => 'SQLiteでインデックスを作成するには？',
            'summary' => 'INDEX文の書き方と使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 10,
            'title' => 'SQLiteでトランザクションを使うには？',
            'summary' => 'BEGIN、COMMIT、ROLLBACKの使い方を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'category_id' => 14,
            'user_id' => 11,
            'title' => 'SQLiteでデータベースをバックアップするには？',
            'summary' => 'データの保存やエクスポートの方法を教えてください。',
        ];
        DB::table('posts')->insert($param);
        
        //other
        $param = [
            'category_id' => 15,
            'user_id' => 1,
            'title' => 'Web開発の基本的な流れは？',
            'summary' => 'Webサービスがどのように作られるのか教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 2,
            'title' => 'Gitとは何ですか？',
            'summary' => 'バージョン管理って何をするものですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 3,
            'title' => 'APIの役割とは？',
            'summary' => 'APIってどうやって使うんですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 4,
            'title' => 'MVCモデルについて教えてください',
            'summary' => 'MVCってどういう考え方ですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 5,
            'title' => 'CLIとGUIの違いは？',
            'summary' => 'コマンドラインとGUIの違いを教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 6,
            'title' => 'サーバーとは何ですか？',
            'summary' => 'サーバーってどんな役割を持っているのですか？',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 7,
            'title' => 'GitHubの使い方を教えてください',
            'summary' => 'GitHubでのプロジェクト管理の方法を知りたいです。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 8,
            'title' => 'ドメインとは何ですか？',
            'summary' => 'ドメイン名がどういう意味を持つのか知りたいです。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 9,
            'title' => 'IPアドレスとは何ですか？',
            'summary' => 'IPアドレスの役割や仕組みについて教えてください。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 10,
            'title' => 'DNSの仕組みとは？',
            'summary' => 'DNSがどうやってドメインとIPをつなぐのか知りたいです。',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'category_id' => 15,
            'user_id' => 11,
            'title' => 'オープンソースとは何ですか？',
            'summary' => 'オープンソースソフトウェアのメリットを教えてください。',
        ];
        DB::table('posts')->insert($param);
        
    }
}
