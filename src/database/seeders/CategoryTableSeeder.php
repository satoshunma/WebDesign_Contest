<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'HTML',
            'slug' => 'html',
            'icon_class' => 'devicon-html5-plain',
            'description' => 'Webの骨組みを作るマークアップ言語。すべてのWebページの出発点。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'CSS',
            'slug' => 'css',
            'icon_class' => 'devicon-css3-plain',
            'description' => 'デザインとレイアウトを自在に操るスタイルシート。Webに色を加える魔法。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'Ruby',
            'slug' => 'ruby',
            'icon_class' => 'devicon-ruby-plain',
            'description' => 'シンプルで直感的な文法が魅力。Webアプリ開発を支えるサーバーサイド言語。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'JavaScript',
            'slug' => 'javascript',
            'icon_class' => 'devicon-javascript-plain',
            'description' => '動きを生み出すフロントエンドの要。ブラウザ上で動く万能スクリプト。。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'Python',
            'slug' => 'python',
            'icon_class' => 'devicon-python-plain',
            'description' => '機械学習からWeb開発まで、幅広く活躍する人気言語。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'Go',
            'slug' => 'go',
            'icon_class' => 'devicon-go-original-wordmark',
            'description' => 'シンプルかつ高速。モダンな並行処理が得意な言語。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'PHP',
            'slug' => 'php',
            'icon_class' => 'devicon-php-plain',
            'description' => 'サーバーサイドの代表格。Laravelなどのフレームワークで人気。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'Java',
            'slug' => 'java',
            'icon_class' => 'devicon-java-plain',
            'description' => 'エンタープライズやAndroid開発に強い、堅牢なオブジェクト指向言語。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'C',
            'slug' => 'c',
            'icon_class' => 'devicon-c-plain',
            'description' => 'システム開発の基本中の基本。低レベルでありながらパワフル。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'C#',
            'slug' => 'c-sharp',
            'icon_class' => 'devicon-csharp-plain',
            'description' => '.NETでのアプリケーション開発に最適。ゲーム開発にも強み。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'C++',
            'slug' => 'c++',
            'icon_class' => 'devicon-cplusplus-plain',
            'description' => '高速処理と柔軟性を兼ね備えた、ハイブリッドな言語。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'Swift',
            'slug' => 'swift',
            'icon_class' => 'devicon-swift-plain',
            'description' => 'iOSアプリ開発の標準言語。モダンで安全性が高い。。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'MySQL',
            'slug' => 'mysql',
            'icon_class' => 'devicon-mysql-plain-wordmark',
            'description' => '世界中で使われているリレーショナルデータベース。スケーラブルで堅牢。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'SQLite',
            'slug' => 'sqlite',
            'icon_class' => 'devicon-sqlite-plain',
            'description' => '軽量で簡単に扱える組み込み型データベース。小規模アプリに最適。'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'その他',
            'slug' => 'other',
            'icon_class' => '',
            'description' => 'あなたの興味を広げる、まだ見ぬ技術がここに。'
        ];
        DB::table('categories')->insert($param);
    }
}
