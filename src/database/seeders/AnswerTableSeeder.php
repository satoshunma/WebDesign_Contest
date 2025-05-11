<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Answer;
use App\Models\Post;
use App\Models\User;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'post_id' => 1,
            'user_id' => 1,
            'body' => 'HTMLはハイパーテキストを記述するためのマークアップ言語です。Webページの基本構造を定義します。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 1,
            'user_id' => 2,
            'body' => 'HTMLでは見出しや段落、リンクなどをタグで表現します。基本をしっかり押さえるのが大事です。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 2,
            'user_id' => 1,
            'body' => 'CSSはHTMLにスタイルを適用するための言語で、色やレイアウトなどを設定できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 3,
            'user_id' => 1,
            'body' => 'HTMLでは、<h1>から<h6>までの6種類の見出しタグがあります。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 3,
            'user_id' => 2,
            'body' => '<h1>は最も重要で大きな見出し、<h6>は最も小さくて優先度の低い見出しです。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 4,
            'user_id' => 1,
            'body' => '<img>タグを使用し、src属性に画像のパス、alt属性に代替テキストを記述します。
                        例：<img src="photo.jpg" alt="風景写真">'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 5,
            'user_id' => 1,
            'body' => '<form>タグは、ユーザーが入力したデータをサーバーに送信するためのフォームを作成します。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 5,
            'user_id' => 2,
            'body' => 'action属性で送信先のURL、method属性で送信方法（GETやPOST）を指定します。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 6,
            'user_id' => 1,
            'body' => 'HTML5では、<header>や<footer>、<section>などのセマンティックタグが追加され、構造が明確になりました。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 6,
            'user_id' => 2,
            'body' => '音声（<audio>）や動画（<video>）の埋め込みがHTMLだけで簡単にできるようになりました。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 7,
            'user_id' => 1,
            'body' => '<meta charset="UTF-8">でページの文字エンコーディングを指定できます。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 7,
            'user_id' => 2,
            'body' => '<meta name="description" content="ページの説明">で検索エンジン向けの説明文を設定できます。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 8,
            'user_id' => 1,
            'body' => '順序なしリストは<ul>タグ、順序付きリストは<ol>タグを使い、各項目を<li>で囲みます。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 9,
            'user_id' => 1,
            'body' => '<table>タグでテーブルを作成し、<tr>で行、<td>でセルを表します。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 9,
            'user_id' => 2,
            'body' => '表の見出しには<th>タグを使い、見出しセルとして強調表示されます。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 10,
            'user_id' => 1,
            'body' => 'type="text"でテキスト入力欄、type="email"でメールアドレスの入力欄など、目的に応じた入力欄を作成できます。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 10,
            'user_id' => 2,
            'body' => 'type="submit"で送信ボタン、type="checkbox"でチェックボックスを作成できます。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 11,
            'user_id' => 1,
            'body' => 'コメントは <!-- ここにコメントを書く --> の形式で記述します。'
        ];
        DB::table('answers')->insert($param);

        $param = [
            'post_id' => 12,
            'user_id' => 1,
            'body' => '見出しタグにはh1からh6まであり、数字が大きくなるほど見出しのレベルが下がります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 12,
            'user_id' => 2,
            'body' => 'h1タグは最も重要な見出しに使い、h6タグは最も下位の見出しに使います。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 13,
            'user_id' => 1,
            'body' => 'HTMLで画像を表示するにはimgタグを使い、src属性で画像のパスを指定します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 13,
            'user_id' => 2,
            'body' => '例：<img src="image.jpg" alt="説明文"> のように記述します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 14,
            'user_id' => 1,
            'body' => 'formタグはユーザーからの入力情報をサーバーに送信するためのフォームを作成します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 14,
            'user_id' => 2,
            'body' => 'formタグ内にはinputやtextareaなどの入力欄を設置します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 15,
            'user_id' => 1,
            'body' => 'HTML5では新しいタグ（article、sectionなど）やAPI（video、canvasなど）が追加されました。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 15,
            'user_id' => 2,
            'body' => 'HTML5は構造化を意識した設計になっており、より意味のあるマークアップが可能です。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 16,
            'user_id' => 1,
            'body' => 'metaタグはページに関する情報（文字コードや説明文など）を指定するために使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 16,
            'user_id' => 2,
            'body' => '例：<meta charset="UTF-8"> や <meta name="description" content="説明文"> のように使います。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 17,
            'user_id' => 1,
            'body' => 'HTMLでリストを作成するにはul（順不同）やol（順序あり）タグを使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 17,
            'user_id' => 2,
            'body' => 'liタグを使ってリスト項目をそれぞれ記述します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 18,
            'user_id' => 1,
            'body' => 'tableタグを使ってHTMLテーブルを作成できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 18,
            'user_id' => 2,
            'body' => 'tr（行）、th（見出しセル）、td（データセル）を組み合わせて構成します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 19,
            'user_id' => 1,
            'body' => 'inputタグのtype属性は、入力欄の種類を指定するために使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 19,
            'user_id' => 2,
            'body' => '例：type="text"は文字入力、type="email"はメール入力欄になります。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 20,
            'user_id' => 1,
            'body' => 'HTMLのコメントは<!-- コメント内容 --> のように記述します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 20,
            'user_id' => 2,
            'body' => 'コメントはブラウザには表示されず、HTMLコード内のメモや説明に使われます。'
        ];
        DB::table('answers')->insert($param); 

        $param = [
            'post_id' => 21,
            'user_id' => 1,
            'body' => 'calc関数は、CSS内で数値の計算を行うことができる便利な関数です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 21,
            'user_id' => 2,
            'body' => '例：width: calc(100% - 50px); のように使って、レイアウトの調整ができます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 22,
            'user_id' => 1,
            'body' => '円形を作るには、要素の幅と高さを同じにし、border-radiusを50%に設定します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 22,
            'user_id' => 2,
            'body' => '例：width: 100px; height: 100px; border-radius: 50%; で円形のボックスが作れます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 23,
            'user_id' => 1,
            'body' => 'Rubyはシンプルで直感的なコードを書けることを重視したプログラミング言語です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 23,
            'user_id' => 2,
            'body' => 'Rubyはオブジェクト指向言語で、コードの可読性と開発効率が高いです。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 24,
            'user_id' => 1,
            'body' => 'Rubyでは変数を `=` を使って簡単に定義できます。例: `x = 10`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 24,
            'user_id' => 2,
            'body' => '変数は宣言なしでそのまま使用でき、型の指定も不要です。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 25,
            'user_id' => 1,
            'body' => 'Rubyのクラスは、`class`キーワードを使って定義します。例: `class Car`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 25,
            'user_id' => 2,
            'body' => 'クラスはオブジェクトの設計図で、インスタンスを作成して使用します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 26,
            'user_id' => 1,
            'body' => 'eachメソッドは、配列やハッシュの各要素を繰り返し処理するために使います。例: `array.each { |x| puts x }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 26,
            'user_id' => 2,
            'body' => 'eachメソッドを使用すると、配列の要素を1つずつ取り出して操作できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 27,
            'user_id' => 1,
            'body' => 'ハッシュは、キーと値のペアでデータを格納するデータ構造です。例: `hash = { "name" => "Alice", "age" => 25 }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 27,
            'user_id' => 2,
            'body' => 'ハッシュは順序を持たないキーと値の組み合わせで構成され、値は任意のオブジェクトを取ることができます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 28,
            'user_id' => 1,
            'body' => 'Rubyで条件分岐を行うには `if` または `unless` を使います。例: `if x > 10`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 28,
            'user_id' => 2,
            'body' => '条件が成立する場合に実行されるコードは `if` ブロック内に記述します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 29,
            'user_id' => 1,
            'body' => 'Rubyのブロックは、メソッドの引数として渡されるコードの断片で、`yield` で呼び出します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 29,
            'user_id' => 2,
            'body' => 'Procはオブジェクトとして扱えるコードの断片で、`call`メソッドで実行できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 30,
            'user_id' => 1,
            'body' => 'ファイルを読み込むには、`File.read` や `File.open` を使います。例: `File.read("file.txt")`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 30,
            'user_id' => 2,
            'body' => 'ファイルを読み込むことで、テキストデータを文字列として取得できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 31,
            'user_id' => 1,
            'body' => 'Rubyのgemは、外部ライブラリやツールのパッケージです。`gem install` でインストールします。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 31,
            'user_id' => 2,
            'body' => 'gemはRubyのパッケージ管理システムで、必要なライブラリを簡単に導入できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 32,
            'user_id' => 1,
            'body' => '例外処理は `begin` と `rescue` を使って行います。例: `begin; # 処理; rescue => e; end`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 32,
            'user_id' => 2,
            'body' => '`rescue` を使うことで、エラーが発生してもプログラムが停止せずに処理できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 33,
            'user_id' => 1,
            'body' => '配列をソートするには `sort` メソッドを使います。例: `array.sort`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 33,
            'user_id' => 2,
            'body' => '`sort` メソッドはデフォルトで昇順にソートしますが、`reverse` メソッドを使うと降順にもできます。'
        ];
        DB::table('answers')->insert($param);


        
        $param = [
            'post_id' => 34,
            'user_id' => 1,
            'body' => 'JavaScriptは、主にWebブラウザで動作するスクリプト言語で、インタラクティブな動作を可能にします。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 34,
            'user_id' => 2,
            'body' => 'JavaScriptは、ウェブページに動的な要素を加えるために広く使用されるプログラミング言語です。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 35,
            'user_id' => 1,
            'body' => 'letは再代入可能な変数を宣言し、constは再代入不可の変数を宣言します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 35,
            'user_id' => 2,
            'body' => 'letはスコープ内で変更可能な変数を定義し、constは定数として値を変更できません。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 36,
            'user_id' => 1,
            'body' => 'イベントリスナーは、DOM要素に対してイベントが発生した際に処理を実行する方法です。例: `element.addEventListener("click", function() {...});`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 36,
            'user_id' => 2,
            'body' => 'addEventListenerは、イベントが発生する度に指定した関数を呼び出します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 37,
            'user_id' => 1,
            'body' => 'DOM操作には、`document.getElementById()`や`document.querySelector()`などのメソッドを使用して、HTML要素を取得し、操作します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 37,
            'user_id' => 2,
            'body' => 'DOM操作を通じて、ページの内容を動的に変更したり、ユーザーインタラクションに応じて反応させたりできます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 38,
            'user_id' => 1,
            'body' => '関数宣言は `function` キーワードを使って関数を定義し、アロー関数は `=>` を使って短縮記法で関数を定義します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 38,
            'user_id' => 2,
            'body' => 'アロー関数は、`this`の扱いが異なり、より簡潔に記述できる点が特徴です。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 39,
            'user_id' => 1,
            'body' => '非同期処理は、コードの実行がブロックされることなく別の処理を行うことです。`Promise`や`async/await`が一般的に使用されます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 39,
            'user_id' => 2,
            'body' => '非同期処理は、サーバーとの通信など、遅延が発生する処理を効率よく扱うために必要です。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 40,
            'user_id' => 1,
            'body' => '配列をループするには、`for`や`forEach`を使います。例: `array.forEach(item => { console.log(item); })`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 40,
            'user_id' => 2,
            'body' => '配列の要素を繰り返し処理するために便利な方法として`map`や`forEach`がよく使われます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 41,
            'user_id' => 1,
            'body' => 'フォームの値を取得するには、`document.querySelector()`を使ってフォーム要素を取得し、`value`プロパティを参照します。例: `document.getElementById("inputId").value`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 41,
            'user_id' => 2,
            'body' => 'フォームの値は、`input`や`textarea`の`value`プロパティでアクセスできます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 42,
            'user_id' => 1,
            'body' => 'localStorageは、ブラウザにデータを保存し、ページの再読み込み後もデータを保持できるストレージ機能です。例: `localStorage.setItem("key", "value")`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 42,
            'user_id' => 2,
            'body' => 'localStorageは、データを永続的に保存するために使用され、閉じたブラウザセッションでもデータが保持されます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 43,
            'user_id' => 1,
            'body' => 'JavaScriptのオブジェクトは、キーと値のペアを持つデータ構造で、`{}`で囲んで定義します。例: `{name: "Alice", age: 25}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 43,
            'user_id' => 2,
            'body' => 'オブジェクトは、プロパティをキーとして値を持ち、さまざまなデータ型を格納できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 44,
            'user_id' => 1,
            'body' => 'Pythonは、シンプルで読みやすいコードを重視した汎用プログラミング言語で、Web開発、データ解析、機械学習などに広く使用されています。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 44,
            'user_id' => 2,
            'body' => 'Pythonは、高い可読性を持つ言語で、初心者にも学びやすいとされています。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 45,
            'user_id' => 1,
            'body' => 'Pythonでは、変数は特別なキーワードなしで値を代入することで定義します。例: `x = 10`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 45,
            'user_id' => 2,
            'body' => 'Pythonでは、変数に値を代入するだけで変数が定義されます。例: `a = 5`'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 46,
            'user_id' => 1,
            'body' => 'Pythonでリストを使うには、`[]`で囲むことでリストを作成できます。例: `my_list = [1, 2, 3]`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 46,
            'user_id' => 2,
            'body' => 'リストは、順序付きの変更可能なコレクションで、インデックスを使って要素にアクセスできます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 47,
            'user_id' => 1,
            'body' => 'for文は、指定された範囲やリストなどの繰り返し可能なオブジェクトを使って繰り返します。while文は、条件式がTrueの間繰り返します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 47,
            'user_id' => 2,
            'body' => 'for文は、反復可能なオブジェクトを使用し、while文は条件がTrueである限り繰り返します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 48,
            'user_id' => 1,
            'body' => 'Pythonでは、`def`を使って関数を定義します。例: `def my_function():`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 48,
            'user_id' => 2,
            'body' => '関数を定義するには、`def`キーワードを使って名前と引数を指定します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 49,
            'user_id' => 1,
            'body' => 'Pythonでファイルを読み書きするには、`open()`を使います。例: `with open("file.txt", "r") as file:`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 49,
            'user_id' => 2,
            'body' => 'ファイル操作には`open()`関数を使い、読み書きモードを指定します。例: `with open("file.txt", "w") as file:`'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 50,
            'user_id' => 1,
            'body' => 'Pythonの辞書型は、キーと値のペアを格納するデータ型で、`{}`を使って定義します。例: `my_dict = {"key": "value"}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 50,
            'user_id' => 2,
            'body' => '辞書型は、任意のデータをキーに紐づけて格納できます。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 51,
            'user_id' => 1,
            'body' => 'Pythonで例外処理を行うには、`try`と`except`を使います。例: `try: ... except Exception as e: ...`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 51,
            'user_id' => 2,
            'body' => '例外処理は、`try`と`except`を使って、エラーをキャッチし、適切に処理します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 52,
            'user_id' => 1,
            'body' => 'PythonでWebスクレイピングをするには、`requests`と`BeautifulSoup`などのライブラリを使用します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 52,
            'user_id' => 2,
            'body' => 'Webスクレイピングには、`requests`でページを取得し、`BeautifulSoup`でHTMLを解析します。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 53,
            'user_id' => 1,
            'body' => 'PythonでJSONを扱うには、`json`モジュールを使用します。例: `import json` として、`json.loads()` や `json.dumps()` を使用します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 53,
            'user_id' => 2,
            'body' => 'JSONのデータを扱うには、`json`モジュールを使用して、PythonオブジェクトとJSONとの変換を行います。'
        ];
        DB::table('answers')->insert($param);
        
        
        $param = [
            'post_id' => 54,
            'user_id' => 1,
            'body' => 'Pythonでクラスを使うには、`class`キーワードを使用してクラスを定義します。例: `class MyClass:`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 54,
            'user_id' => 2,
            'body' => 'クラスを定義するには、`class`を使ってオブジェクト指向プログラミングを行います。'
        ];
        DB::table('answers')->insert($param);

        
        $param = [
            'post_id' => 55,
            'user_id' => 1,
            'body' => 'Go言語はGoogleが開発したプログラミング言語で、シンプルな文法と効率的な並列処理を特徴としています。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 55,
            'user_id' => 2,
            'body' => 'Go言語は高速で、特にサーバーサイドの開発や分散システムに適しています。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 56,
            'user_id' => 1,
            'body' => 'Goで変数を定義するには、`var`キーワードを使います。例：`var x int = 10`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 56,
            'user_id' => 2,
            'body' => 'Goでは、`:=`を使って変数を簡潔に定義できます。例：`x := 10`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 57,
            'user_id' => 1,
            'body' => 'Goで配列を定義するには、`[ ]`を使用します。例：`var arr [3]int`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 57,
            'user_id' => 2,
            'body' => 'Goのスライスは動的な配列で、`make()`関数を使って定義できます。例：`s := make([]int, 3)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 58,
            'user_id' => 1,
            'body' => 'Goでループ処理を行うには、`for`キーワードを使います。例：`for i := 0; i < 10; i++`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 58,
            'user_id' => 2,
            'body' => 'Goでは`for`文を使って、whileのように無限ループを作成できます。例：`for {}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 59,
            'user_id' => 1,
            'body' => 'Goで関数を定義するには、`func`キーワードを使います。例：`func add(a int, b int) int { return a + b }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 59,
            'user_id' => 2,
            'body' => 'Goの関数は戻り値を複数指定できます。例：`func sum(a, b int) (int, int)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 60,
            'user_id' => 1,
            'body' => 'Goのエラーハンドリングは、`if err != nil`パターンで行います。例：`if err != nil { return err }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 60,
            'user_id' => 2,
            'body' => 'Goでは、エラーを返す関数が`error`型の戻り値を返すのが一般的です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 61,
            'user_id' => 1,
            'body' => 'Goの構造体は、複数の異なる型をまとめることができるデータ構造です。例：`type Person struct { Name string; Age int }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 61,
            'user_id' => 2,
            'body' => '構造体を使うことで、関連するデータを一つのオブジェクトとしてまとめて扱うことができます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 62,
            'user_id' => 1,
            'body' => 'Goでマップを使用するには、`make(map[キーの型]値の型)`を使います。例：`m := make(map[string]int)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 62,
            'user_id' => 2,
            'body' => 'Goのマップはキーと値のペアを格納し、効率的な検索が可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 63,
            'user_id' => 1,
            'body' => 'GoでGoroutineを使うには、`go`キーワードを使って並行処理を行います。例：`go func() {}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 63,
            'user_id' => 2,
            'body' => 'Goroutineは軽量なスレッドで、複数の処理を並列に実行できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 64,
            'user_id' => 1,
            'body' => 'Goでチャネル（Channel）を使うには、`chan`キーワードを使ってデータを送受信します。例：`ch := make(chan int)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 64,
            'user_id' => 2,
            'body' => 'Goのチャネルは、Goroutine間でデータを安全にやり取りするために使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 65,
            'user_id' => 1,
            'body' => 'GoでHTTPサーバーを作るには、`net/http`パッケージを使います。例：`http.ListenAndServe(":8080", nil)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 65,
            'user_id' => 2,
            'body' => 'Goの`http`パッケージを使うことで、シンプルにHTTPサーバーを作成できます。'
        ];
        DB::table('answers')->insert($param);

        
        $param = [
            'post_id' => 66,
            'user_id' => 1,
            'body' => 'PHPは、Web開発に広く使用されるサーバーサイドのスクリプト言語です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 66,
            'user_id' => 2,
            'body' => 'PHPは動的なWebページを作成するために使用され、データベースと連携することも可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 67,
            'user_id' => 1,
            'body' => 'PHPで変数を定義するには、`$`記号を使います。例：`$x = 10;`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 67,
            'user_id' => 2,
            'body' => 'PHPでは変数名の前に`$`をつけて、簡単にデータを格納できます。例：`$name = "John";`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 68,
            'user_id' => 1,
            'body' => 'PHPで配列を使うには、`array()`または`[]`を使用します。例：`$arr = array(1, 2, 3)`または`$arr = [1, 2, 3];`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 68,
            'user_id' => 2,
            'body' => 'PHPの配列は、インデックス配列と連想配列の2種類があります。例：`$arr = [1, 2, 3]`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 69,
            'user_id' => 1,
            'body' => 'PHPで条件分岐をするには、`if`、`else`、`elseif`を使用します。例：`if($x > 10){}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 69,
            'user_id' => 2,
            'body' => 'PHPで`switch`文を使って複数の条件を一度にチェックできます。例：`switch($x){case 1: break;}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 70,
            'user_id' => 1,
            'body' => 'PHPで関数を定義するには、`function`キーワードを使います。例：`function add($a, $b){ return $a + $b; }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 70,
            'user_id' => 2,
            'body' => 'PHPの関数は、引数と戻り値を指定することができます。例：`function multiply($a, $b){ return $a * $b; }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 71,
            'user_id' => 1,
            'body' => 'PHPとHTMLを組み合わせるには、PHPタグ`<?php ?>`を使い、HTML内でPHPコードを埋め込みます。例：`<p><?php echo $name; ?></p>`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 71,
            'user_id' => 2,
            'body' => 'PHPとHTMLを組み合わせることで、動的にコンテンツを生成できます。例：`<h1><?php echo $title; ?></h1>`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 72,
            'user_id' => 1,
            'body' => 'PHPでフォームからデータを受け取るには、`$_GET`または`$_POST`を使用します。例：`$name = $_POST["name"];`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 72,
            'user_id' => 2,
            'body' => 'PHPでフォームデータを安全に受け取るためには、`filter_input()`関数を使うことをお勧めします。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 73,
            'user_id' => 1,
            'body' => 'PHPでセッション管理をするには、`session_start()`でセッションを開始し、`$_SESSION`でデータを保存します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 73,
            'user_id' => 2,
            'body' => 'PHPでは、セッションIDを使ってユーザーの状態を追跡できます。`session_start()`を必ず呼び出す必要があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 74,
            'user_id' => 1,
            'body' => 'PHPでファイル操作をするには、`fopen()`, `fwrite()`, `fclose()`などの関数を使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 74,
            'user_id' => 2,
            'body' => 'PHPでは、`file_get_contents()`や`file_put_contents()`を使って、ファイルを簡単に読み書きできます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 75,
            'user_id' => 1,
            'body' => 'PHPでエラー処理をするには、`try-catch`構文を使います。例：`try { throw new Exception("エラー"); } catch(Exception $e) { echo $e->getMessage(); }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 75,
            'user_id' => 2,
            'body' => 'PHPでエラーを表示するには、`ini_set("display_errors", 1)`を使ってエラー表示を有効にできます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 76,
            'user_id' => 1,
            'body' => 'PHPでMySQLと接続するには、`mysqli_connect()`関数を使います。例：`$conn = mysqli_connect("localhost", "root", "", "mydb");`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 76,
            'user_id' => 2,
            'body' => 'PHPでPDOを使うと、よりセキュアにデータベースに接続できます。例：`$pdo = new PDO("mysql:host=localhost;dbname=mydb", "root", "");`'
        ];
        DB::table('answers')->insert($param);

        

        $param = [
            'post_id' => 77,
            'user_id' => 1,
            'body' => 'Javaは、プラットフォームに依存せずに動作するオブジェクト指向プログラミング言語です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 77,
            'user_id' => 2,
            'body' => 'Javaは、クラスベースのオブジェクト指向言語で、広く使用されるアプリケーション開発に適しています。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 78,
            'user_id' => 1,
            'body' => 'Javaで変数を宣言するには、型を指定して変数名を記述します。例：`int x = 10;`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 78,
            'user_id' => 2,
            'body' => 'Javaでは、変数宣言時にデータ型を明示的に指定する必要があります。例：`String name = "John";`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 79,
            'user_id' => 1,
            'body' => 'Javaで配列を使うには、型を指定して配列を宣言します。例：`int[] arr = {1, 2, 3};`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 79,
            'user_id' => 2,
            'body' => 'Javaの配列は固定サイズのコレクションで、要素へのアクセスはインデックスで行います。例：`arr[0]`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 80,
            'user_id' => 1,
            'body' => 'Javaで繰り返し処理を行うには、`for`、`while`、`do-while`ループを使用します。例：`for(int i = 0; i < 10; i++)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 80,
            'user_id' => 2,
            'body' => 'Javaでは、`for-each`ループを使ってコレクションや配列を簡単にループできます。例：`for(int num : arr)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 81,
            'user_id' => 1,
            'body' => 'Javaでメソッドを定義するには、返り値の型、メソッド名、引数を指定します。例：`public int add(int a, int b) { return a + b; }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 81,
            'user_id' => 2,
            'body' => 'Javaでメソッドは、`public`、`private`などのアクセス修飾子を使用して定義します。例：`private void print() {}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 82,
            'user_id' => 1,
            'body' => 'Javaでクラスを定義するには、`class`キーワードを使用します。例：`class Car { int speed; }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 82,
            'user_id' => 2,
            'body' => 'Javaのクラスは、オブジェクトの設計図となり、メソッドや変数を含みます。例：`class Person { String name; }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 83,
            'user_id' => 1,
            'body' => 'Javaで例外処理を行うには、`try-catch`文を使用します。例：`try { int x = 10 / 0; } catch (ArithmeticException e) { e.printStackTrace(); }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 83,
            'user_id' => 2,
            'body' => 'Javaでは、`throws`を使ってメソッドに例外を投げることもできます。例：`public void method() throws IOException {}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 84,
            'user_id' => 1,
            'body' => 'Javaのインターフェースは、クラスに実装させるためのメソッドの契約を定義します。例：`interface Animal { void sound(); }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 84,
            'user_id' => 2,
            'body' => 'Javaのインターフェースは、複数のクラスで共通のメソッドを実装させる際に使用します。例：`class Dog implements Animal {}`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 85,
            'user_id' => 1,
            'body' => 'Javaでファイルを扱うには、`File`クラスや`BufferedReader`クラスを使います。例：`File file = new File("test.txt");`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 85,
            'user_id' => 2,
            'body' => 'Javaでファイル操作をする際、`FileReader`や`BufferedWriter`などを使用して読み書きができます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 86,
            'user_id' => 1,
            'body' => 'JavaでGUIアプリを作るには、`Swing`や`JavaFX`を使用します。例：`JButton button = new JButton("Click");`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 86,
            'user_id' => 2,
            'body' => 'JavaでGUIを作成する際は、`JFrame`や`JPanel`を使ってウィンドウやコンポーネントを配置します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 87,
            'user_id' => 1,
            'body' => 'Javaでデータベースに接続するには、`JDBC`を使用します。例：`Connection conn = DriverManager.getConnection(url, user, password);`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 87,
            'user_id' => 2,
            'body' => 'Javaでデータベース接続には、`DriverManager`や`PreparedStatement`を使用してSQL操作を行います。'
        ];
        DB::table('answers')->insert($param);

        

        $param = [
            'post_id' => 88,
            'user_id' => 1,
            'body' => 'C言語は、低レベルのプログラミング言語で、システムプログラミングや組み込みシステム開発に広く使用されます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 88,
            'user_id' => 2,
            'body' => 'C言語は、コンパイラを使用して機械語に変換され、非常に効率的な実行速度を誇ります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 89,
            'user_id' => 1,
            'body' => 'C言語で変数を宣言するには、データ型と変数名を記述します。例：`int x = 10;`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 89,
            'user_id' => 2,
            'body' => 'C言語では、変数宣言時に型を指定する必要があります。例：`char name[] = "John";`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 90,
            'user_id' => 1,
            'body' => 'C言語で配列を使うには、データ型と配列サイズを指定して宣言します。例：`int arr[5];`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 90,
            'user_id' => 2,
            'body' => 'C言語では、配列を使うことで複数の値を一つの変数で管理できます。例：`float numbers[10];`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 91,
            'user_id' => 1,
            'body' => 'C言語で繰り返し処理をするには、`for`、`while`、`do-while`ループを使用します。例：`for(int i = 0; i < 10; i++)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 91,
            'user_id' => 2,
            'body' => 'C言語で繰り返し処理を行う場合、`for`文や`while`文で反復処理が可能です。例：`while(x < 10)`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 92,
            'user_id' => 1,
            'body' => 'C言語で関数を定義するには、返り値の型、関数名、引数を指定します。例：`int add(int a, int b) { return a + b; }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 92,
            'user_id' => 2,
            'body' => 'C言語では、関数を定義して特定の処理をまとめることができます。例：`void printMessage() { printf("Hello"); }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 93,
            'user_id' => 1,
            'body' => 'C言語でポインタを使うには、変数のメモリアドレスを指し示すポインタを定義します。例：`int *ptr; ptr = &x;`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 93,
            'user_id' => 2,
            'body' => 'C言語では、ポインタを使ってメモリ操作を行います。例：`char *ptr = &str;`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 94,
            'user_id' => 1,
            'body' => 'C言語で構造体を使うには、`struct`を使って複数のデータを一つにまとめます。例：`struct Person { char name[50]; int age; };`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 94,
            'user_id' => 2,
            'body' => 'C言語の構造体は、異なる型のデータを一つの型として扱うことができます。例：`struct Car { int speed; char model[50]; };`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 95,
            'user_id' => 1,
            'body' => 'C言語でファイルを操作するには、`fopen`、`fclose`、`fprintf`、`fscanf`などの関数を使います。例：`FILE *f = fopen("file.txt", "r");`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 95,
            'user_id' => 2,
            'body' => 'C言語では、ファイル読み書きに`fopen`や`fwrite`を使って操作します。例：`fputs("Hello", file);`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 96,
            'user_id' => 1,
            'body' => 'C言語でメモリを動的に確保するには、`malloc`や`calloc`を使います。例：`int *ptr = malloc(sizeof(int) * 10);`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 96,
            'user_id' => 2,
            'body' => 'C言語では、`malloc`を使ってヒープ領域にメモリを動的に確保できます。例：`char *ptr = malloc(sizeof(char) * 20);`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 97,
            'user_id' => 1,
            'body' => 'C言語のヘッダファイルは、関数や定義をまとめて他のソースファイルで再利用できるようにします。例：`#include <stdio.h>`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 97,
            'user_id' => 2,
            'body' => 'C言語のヘッダファイルは、標準ライブラリや自分で定義した関数を他のファイルで利用できるようにするためのファイルです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 98,
            'user_id' => 1,
            'body' => 'C言語のプリプロセッサは、コンパイル前にコードを処理する機能です。例：`#define PI 3.14`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 98,
            'user_id' => 2,
            'body' => 'C言語のプリプロセッサは、マクロや条件付きコンパイルなどをサポートします。例：`#ifdef DEBUG`'
        ];
        DB::table('answers')->insert($param);


        $param = [
            'post_id' => 99,
            'user_id' => 1,
            'body' => 'C#は、Microsoftが開発したオブジェクト指向プログラミング言語で、.NETフレームワーク上で動作します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 99,
            'user_id' => 2,
            'body' => 'C#は、デスクトップ、Web、モバイルアプリケーションなど幅広い開発に対応した言語です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 100,
            'user_id' => 1,
            'body' => 'C#で変数を定義するには、データ型の後に変数名を記述します。例：`int number = 10;`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 100,
            'user_id' => 2,
            'body' => 'C#では、型安全性が高く、コンパイル時に型チェックが行われます。例：`string name = "Alice";`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 101,
            'user_id' => 1,
            'body' => 'C#のクラスは、オブジェクトの設計図で、オブジェクトはクラスを元に生成されるインスタンスです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 101,
            'user_id' => 2,
            'body' => 'C#では、クラスで定義したプロパティやメソッドを使ってオブジェクトを操作できます。例：`Person p = new Person();`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 102,
            'user_id' => 1,
            'body' => 'C#で条件分岐するには、`if`や`switch`文を使用します。例：`if (x > 10) { ... }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 102,
            'user_id' => 2,
            'body' => '条件に応じた処理を行うには、`switch (value)`構文も便利です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 103,
            'user_id' => 1,
            'body' => 'C#で繰り返し処理を行うには、`for`、`while`、`foreach`などのループを使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 103,
            'user_id' => 2,
            'body' => '`foreach`文はコレクションの各要素に対して処理を行うときに便利です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 104,
            'user_id' => 1,
            'body' => 'C#で例外処理を行うには、`try-catch-finally`構文を使用します。例：`try { ... } catch (Exception e) { ... }`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 104,
            'user_id' => 2,
            'body' => 'エラー発生時の処理を柔軟に制御するために、例外の種類に応じたcatch節を複数定義できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 105,
            'user_id' => 1,
            'body' => 'C#のフィールドはデータを保持する変数で、プロパティは値の取得や設定にロジックを加えるためのものです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 105,
            'user_id' => 2,
            'body' => 'プロパティはgetterとsetterを使ってアクセス制御を行えますが、フィールドは直接アクセスされます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 106,
            'user_id' => 1,
            'body' => 'C#でファイルを読み書きするには、`System.IO`名前空間を使います。例：`File.ReadAllText("file.txt");`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 106,
            'user_id' => 2,
            'body' => '`StreamReader`や`StreamWriter`を使うことで、ファイルの読み書きを効率よく行えます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 107,
            'user_id' => 1,
            'body' => 'LINQは、C#でコレクションなどに対してクエリのように操作ができる機能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 107,
            'user_id' => 2,
            'body' => 'LINQを使うと、データの検索・フィルタリング・並び替えなどが簡潔に記述できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 108,
            'user_id' => 1,
            'body' => 'C#で非同期処理を行うには、`async`と`await`キーワードを使います。例：`await Task.Delay(1000);`'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 108,
            'user_id' => 2,
            'body' => '非同期処理により、UIの応答性を保ったままバックグラウンド処理が可能になります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 109,
            'user_id' => 1,
            'body' => 'C#でフォームアプリを作るには、Visual StudioでWindows Forms アプリケーションを作成します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 109,
            'user_id' => 2,
            'body' => 'Windows Formsを使えば、ドラッグ＆ドロップで簡単にGUIを構築できます。'
        ];
        DB::table('answers')->insert($param);



        $param = [
            'post_id' => 110,
            'user_id' => 1,
            'body' => 'C++はC言語を拡張したオブジェクト指向のプログラミング言語で、高速な処理が可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 110,
            'user_id' => 2,
            'body' => 'C++はゲームやシステムソフトウェアなど、パフォーマンスが重視される場面でよく使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 111,
            'user_id' => 1,
            'body' => 'C++ではint, float, charなどのデータ型があり、`int x = 5;`のように変数を宣言します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 111,
            'user_id' => 2,
            'body' => 'C++は型に厳格で、変数を使う前に必ず型を指定する必要があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 112,
            'user_id' => 1,
            'body' => 'C++のクラスはオブジェクトの設計図で、オブジェクトはそのクラスから作られます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 112,
            'user_id' => 2,
            'body' => 'C++ではクラス内にメンバ変数やメソッドを定義し、`new`演算子でオブジェクトを生成します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 113,
            'user_id' => 1,
            'body' => 'C++でポインタを使うには、変数のアドレスを格納し、`*`や`&`演算子で操作します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 113,
            'user_id' => 2,
            'body' => 'ポインタはメモリを直接操作するため、使い方を誤るとバグの原因になりやすいです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 114,
            'user_id' => 1,
            'body' => 'C++の参照は別名のようなもので、ポインタより安全で扱いやすい特徴があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 114,
            'user_id' => 2,
            'body' => '参照は`&`で定義し、ポインタのように間接演算子を使わずにアクセスできます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 115,
            'user_id' => 1,
            'body' => 'C++で継承を使うには、`class 子 : public 親`のようにしてクラスの機能を引き継ぎます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 115,
            'user_id' => 2,
            'body' => '継承を使うことで、再利用性や拡張性の高いプログラムを作成できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 116,
            'user_id' => 1,
            'body' => 'テンプレートは型に依存しない汎用的な関数やクラスを定義するために使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 116,
            'user_id' => 2,
            'body' => '例：`template<typename T> T max(T a, T b) { return a > b ? a : b; }` のように記述します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 117,
            'user_id' => 1,
            'body' => 'C++でファイル操作を行うには、`fstream`ライブラリを使います。例：`ofstream`や`ifstream`。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 117,
            'user_id' => 2,
            'body' => 'ファイルの読み書きには`open()`や`close()`、`<<`や`>>`演算子を用います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 118,
            'user_id' => 1,
            'body' => 'C++では`try-catch`ブロックを使って例外処理を行います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 118,
            'user_id' => 2,
            'body' => '例外を投げるには`throw`を使い、適切なcatch節で処理します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 119,
            'user_id' => 1,
            'body' => 'STL（Standard Template Library）は、C++に標準で備わっている汎用的なライブラリ群です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 119,
            'user_id' => 2,
            'body' => 'STLにはvector, map, setなどのコンテナや、アルゴリズム関数が豊富に用意されています。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 120,
            'user_id' => 1,
            'body' => 'C++では`new`と`delete`を使って動的にメモリを管理できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 120,
            'user_id' => 2,
            'body' => 'スマートポインタ（`unique_ptr`, `shared_ptr`など）を使うと安全なメモリ管理が可能です。'
        ];
        DB::table('answers')->insert($param);
        
        

        $param = [
            'post_id' => 121,
            'user_id' => 1,
            'body' => 'SwiftはAppleが開発したモダンなプログラミング言語で、iOSやmacOSアプリの開発に使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 121,
            'user_id' => 2,
            'body' => 'Swiftは安全性やパフォーマンスに優れ、Objective-Cの後継として設計されています。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 122,
            'user_id' => 1,
            'body' => 'Swiftでは`var`で変数、`let`で定数を宣言します。例：`var name = "Taro"`。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 122,
            'user_id' => 2,
            'body' => '定数は`let`を使い、一度値を代入すると変更できません。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 123,
            'user_id' => 1,
            'body' => 'Swiftの関数は`func 関数名(引数) -> 戻り値の型`で定義します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 123,
            'user_id' => 2,
            'body' => '例えば`func greet(name: String) -> String { return "Hello, \\(name)" }`のように書きます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 124,
            'user_id' => 1,
            'body' => 'Swiftでは配列を`[型]`で定義し、`let nums = [1, 2, 3]`のように使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 124,
            'user_id' => 2,
            'body' => '配列には`append()`, `remove()`などのメソッドがあり、要素の追加や削除が可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 125,
            'user_id' => 1,
            'body' => 'Swiftでの条件分岐は`if`や`switch`を使います。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 125,
            'user_id' => 2,
            'body' => '`if`文では条件を`()`で囲まず、`if age >= 20 {}`のように記述します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 126,
            'user_id' => 1,
            'body' => 'クラスは参照型、構造体は値型で、メモリの扱いや継承の可否に違いがあります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 126,
            'user_id' => 2,
            'body' => 'クラスは`class`、構造体は`struct`で定義し、用途によって使い分けます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 127,
            'user_id' => 1,
            'body' => 'UIはUIKitやSwiftUIを使って構築します。SwiftUIでは宣言的な構文で記述します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 127,
            'user_id' => 2,
            'body' => 'SwiftUIでは`Text("Hello")`や`Button("Click") {}`のように簡潔にUIが書けます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 128,
            'user_id' => 1,
            'body' => 'オプショナルは値が存在するかもしれない変数を表し、`?`を使って宣言します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 128,
            'user_id' => 2,
            'body' => 'アンラップには`!`を使うか、`if let`や`guard let`で安全に取り出します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 129,
            'user_id' => 1,
            'body' => 'クロージャは無名関数で、関数の引数や戻り値として利用できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 129,
            'user_id' => 2,
            'body' => 'クロージャの基本形は`{ (引数) -> 戻り値 in 実行コード }`です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 130,
            'user_id' => 1,
            'body' => 'UserDefaultsやファイルシステム、CoreDataを使ってデータを保存できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 130,
            'user_id' => 2,
            'body' => '一時的なデータ保存にはUserDefaults、永続化にはCoreDataがよく使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 131,
            'user_id' => 1,
            'body' => 'API通信には`URLSession`を使用し、リクエストを送ってデータを取得します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 131,
            'user_id' => 2,
            'body' => '非同期処理には`async/await`や`completion handler`を使います。'
        ];
        DB::table('answers')->insert($param);

        

        $param = [
            'post_id' => 132,
            'user_id' => 1,
            'body' => 'MySQLはオープンソースのリレーショナルデータベース管理システムです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 132,
            'user_id' => 2,
            'body' => 'Webアプリケーションなどで広く使われており、SQLを使ってデータを操作します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 133,
            'user_id' => 1,
            'body' => '`CREATE DATABASE データベース名;`で新しいデータベースを作成できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 133,
            'user_id' => 2,
            'body' => '作成後は`USE データベース名;`で使用するデータベースを選択します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 134,
            'user_id' => 1,
            'body' => '`CREATE TABLE テーブル名 (カラム名 データ型, ...);`でテーブルを作成します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 134,
            'user_id' => 2,
            'body' => 'カラムに`PRIMARY KEY`や`NOT NULL`などの制約も指定できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 135,
            'user_id' => 1,
            'body' => '`INSERT INTO テーブル名 (カラム1, カラム2) VALUES (値1, 値2);`でデータを挿入します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 135,
            'user_id' => 2,
            'body' => '複数件同時に挿入する場合は、`VALUES`のあとに複数のタプルを記述します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 136,
            'user_id' => 1,
            'body' => '`UPDATE テーブル名 SET カラム名 = 新しい値 WHERE 条件;`でデータを更新します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 136,
            'user_id' => 2,
            'body' => 'WHERE句を忘れると全件更新されてしまうので注意が必要です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 137,
            'user_id' => 1,
            'body' => '`DELETE FROM テーブル名 WHERE 条件;`でデータを削除します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 137,
            'user_id' => 2,
            'body' => '安全のため、削除時も必ずWHERE句を指定しましょう。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 138,
            'user_id' => 1,
            'body' => '`SELECT * FROM テーブル名;`で全てのデータを取得できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 138,
            'user_id' => 2,
            'body' => '特定の列だけ取得するには、`SELECT カラム名 FROM テーブル名;`とします。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 139,
            'user_id' => 1,
            'body' => 'JOINにはINNER JOIN、LEFT JOIN、RIGHT JOIN、FULL JOINがあります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 139,
            'user_id' => 2,
            'body' => 'INNER JOINは一致するデータだけを結合し、LEFT JOINは左側の全データを保持します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 140,
            'user_id' => 1,
            'body' => '`CREATE INDEX インデックス名 ON テーブル名 (カラム名);`で作成できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 140,
            'user_id' => 2,
            'body' => 'インデックスは検索性能を向上させますが、更新処理は少し遅くなることがあります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 141,
            'user_id' => 1,
            'body' => '`START TRANSACTION;`, `COMMIT;`, `ROLLBACK;`を使ってトランザクションを操作します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 141,
            'user_id' => 2,
            'body' => 'トランザクションは複数の操作をまとめて成功または失敗にできる仕組みです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 142,
            'user_id' => 1,
            'body' => '`GRANT 権限 ON データベース.* TO \'ユーザー\'@\'ホスト\';`で設定します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 142,
            'user_id' => 2,
            'body' => '`REVOKE`を使えば既存の権限を取り消すことができます。'
        ];
        DB::table('answers')->insert($param);

        

        $param = [
            'post_id' => 143,
            'user_id' => 1,
            'body' => 'SQLiteは軽量な自己完結型のリレーショナルデータベースです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 143,
            'user_id' => 2,
            'body' => 'サーバー不要でファイルベースで動作するため、モバイルや組み込みシステムでよく使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 144,
            'user_id' => 1,
            'body' => 'SQLiteではファイルを作成するだけでデータベースが作成されます。例: `sqlite3 sample.db`。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 144,
            'user_id' => 2,
            'body' => 'コマンドラインで`sqlite3 ファイル名.db`を実行すれば新しいデータベースが作成されます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 145,
            'user_id' => 1,
            'body' => '`CREATE TABLE テーブル名 (カラム名 データ型, ...);`でテーブルを作成します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 145,
            'user_id' => 2,
            'body' => 'SQLiteでは型が柔軟なので、MySQLなどより自由度があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 146,
            'user_id' => 1,
            'body' => '`INSERT INTO テーブル名 (カラム1, カラム2) VALUES (値1, 値2);`でデータを挿入します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 146,
            'user_id' => 2,
            'body' => '複数の行を一度に挿入することも可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 147,
            'user_id' => 1,
            'body' => '`SELECT * FROM テーブル名;`で全件取得できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 147,
            'user_id' => 2,
            'body' => '`WHERE`句を使えば条件付きで検索可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 148,
            'user_id' => 1,
            'body' => '`UPDATE テーブル名 SET カラム = 値 WHERE 条件;`で更新、`DELETE FROM テーブル名 WHERE 条件;`で削除します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 148,
            'user_id' => 2,
            'body' => '更新・削除の際は必ずWHERE句を使って対象を絞りましょう。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 149,
            'user_id' => 1,
            'body' => 'SQLiteは動的型付けを採用しており、柔軟な型システムを持ちます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 149,
            'user_id' => 2,
            'body' => 'TEXT、INTEGER、REAL、BLOB、NULLの5つの型カテゴリがあります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 150,
            'user_id' => 1,
            'body' => '制約にはPRIMARY KEY、NOT NULL、UNIQUE、CHECK、FOREIGN KEYなどがあります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 150,
            'user_id' => 2,
            'body' => 'データ整合性を保つために制約はとても重要です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 151,
            'user_id' => 1,
            'body' => '`CREATE INDEX インデックス名 ON テーブル名(カラム名);`で作成します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 151,
            'user_id' => 2,
            'body' => 'インデックスにより検索が高速化されますが、更新コストは上がります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 152,
            'user_id' => 1,
            'body' => '`BEGIN TRANSACTION;`から`COMMIT;`または`ROLLBACK;`までがトランザクションの範囲です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 152,
            'user_id' => 2,
            'body' => '複数の操作をまとめて処理したいときに使われます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 153,
            'user_id' => 1,
            'body' => 'データベースファイル（.db）をコピーするだけでバックアップが可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 153,
            'user_id' => 2,
            'body' => '`sqlite3 old.db ".backup new.db"`でコマンドラインからバックアップできます。'
        ];
        DB::table('answers')->insert($param);



        $param = [
            'post_id' => 154,
            'user_id' => 1,
            'body' => 'Web開発の基本的な流れは、要件定義 → 設計 → 実装 → テスト → デプロイ → 保守の順です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 154,
            'user_id' => 2,
            'body' => 'フロントエンドとバックエンドに分かれ、それぞれの担当が連携しながら開発します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 155,
            'user_id' => 1,
            'body' => 'Gitはソースコードのバージョン管理システムで、変更履歴を記録できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 155,
            'user_id' => 2,
            'body' => '複数人での開発において、誰が何を変更したかを追跡できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 156,
            'user_id' => 1,
            'body' => 'APIは異なるソフトウェア同士がデータや機能をやり取りするための窓口です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 156,
            'user_id' => 2,
            'body' => '例として、天気情報や地図サービスのAPIを使って他のアプリと連携できます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 157,
            'user_id' => 1,
            'body' => 'MVCモデルはModel、View、Controllerに分けて構成される設計パターンです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 157,
            'user_id' => 2,
            'body' => 'MVCはコードの分離により保守性と再利用性を高める役割があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 158,
            'user_id' => 1,
            'body' => 'CLIはコマンドラインで操作するインターフェース、GUIはグラフィカルな画面操作です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 158,
            'user_id' => 2,
            'body' => 'CLIは軽量でスクリプト化に強く、GUIは直感的な操作が可能です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 159,
            'user_id' => 1,
            'body' => 'サーバーはクライアントのリクエストを処理して応答を返すコンピュータのことです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 159,
            'user_id' => 2,
            'body' => 'Webページを表示したり、データベースとやり取りする役割があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 160,
            'user_id' => 1,
            'body' => 'GitHubはGitリポジトリをホスティングするサービスで、コードの共有と管理ができます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 160,
            'user_id' => 2,
            'body' => 'リモートリポジトリにプッシュ・プルしたり、プルリクエストでチーム開発を進めます。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 161,
            'user_id' => 1,
            'body' => 'ドメインはWebサイトの住所のようなもので、例：example.comなどです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 161,
            'user_id' => 2,
            'body' => 'ドメインはIPアドレスの代わりに使われ、ユーザーがアクセスしやすくなります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 162,
            'user_id' => 1,
            'body' => 'IPアドレスはインターネット上の機器を識別するための番号です。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 162,
            'user_id' => 2,
            'body' => 'IPv4（例：192.168.0.1）やIPv6（例：::1）などの形式があります。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 163,
            'user_id' => 1,
            'body' => 'DNSはドメイン名をIPアドレスに変換する仕組みです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 163,
            'user_id' => 2,
            'body' => 'ユーザーがURLを入力すると、DNSが背後でIPに変換して接続します。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 164,
            'user_id' => 1,
            'body' => 'オープンソースとは、ソースコードが公開され自由に利用・改変・再配布できるソフトウェアです。'
        ];
        DB::table('answers')->insert($param);
        
        $param = [
            'post_id' => 164,
            'user_id' => 2,
            'body' => '代表的な例としてLinuxやLaravelなどがあります。'
        ];
        DB::table('answers')->insert($param);
        
        
        
    }
}
