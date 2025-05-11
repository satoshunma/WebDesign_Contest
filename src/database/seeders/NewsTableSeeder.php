<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'システムメンテナンスのお知らせ',
            'description' => 'いつもご利用ありがとうございます！
                            ただいま、質問箱の快適な利用のためにシステムメンテナンスを実施しています。
                            そのため、一時的にサービスをご利用いただけない時間帯が発生します。

                            【メンテナンス予定日時】
                            〇月〇日（〇）〇:〇〇 ～ 〇:〇〇 頃まで（予定）

                            作業状況により前後する可能性があります。
                            ご不便をおかけして申し訳ありませんが、ご理解とご協力をお願いいたします！'
        ];
        DB::table('newses')->insert($param);
        
        $param = [
            'name' => '新機能リリースのお知らせ',
            'description' => 'いつもご利用ありがとうございます！
                            このたび、質問投稿時に「カテゴリをあとから変更できる機能」を追加しました。
                            「間違えて違うカテゴリに投稿しちゃった…」というときも安心です♪
                            これからも、より使いやすいサービスを目指して改善していきます！'
        ];
        DB::table('newses')->insert($param);

        $param = [
            'name' => 'アップデート情報（ver2.3.0）',
            'description' => 'ver2.3.0 をリリースしました！
                            今回のアップデート内容は以下のとおりです：

                            ・質問一覧のデザインを少し見やすく調整しました

                            ・ログイン状態が保持されやすくなりました

                            ・細かな不具合をいくつか修正しました

                            今後もどんどん改善していきます！'
        ];
        DB::table('newses')->insert($param);

        $param = [
            'name' => '利用規約改訂のお知らせ',
            'description' => '2025年5月10日付で、利用規約の一部を改訂しました。
                            主に「質問投稿に関する注意点」の記述を明確化しています。
                            お手数ですが、今一度ご確認をお願いいたします！'
        ];
        DB::table('newses')->insert($param);

        $param = [
            'name' => '新年キャンペーン開催中',
            'description' => '🎍新年あけましておめでとうございます！🎍
                            今年も質問箱をよろしくお願いします！
                            感謝の気持ちをこめて、ログインして質問すると抽選でプチギフトが当たるキャンペーンを開催中！
                            期間：1/1〜1/7まで'
        ];
        DB::table('newses')->insert($param);

        $param = [
            'name' => '【特集】初学者応援キャンペーン開催中！（〜1/31まで）',
            'description' => '「これからプログラミングを始めたい！」そんなあなたを応援します！
                            期間中、初学者向けのおすすめ質問をピックアップして紹介中✨
                            気になるカテゴリをのぞいて、気軽に質問してみよう！'
        ];
        DB::table('newses')->insert($param);

        $param = [
            'name' => '【マイページ改善】質問と回答の履歴が見やすくなりました',
            'description' => 'マイページをちょっとだけリニューアル！
                            「自分が投稿した質問」や「もらった回答」が、これまでよりスッキリ見やすくなりました◎
                            ぜひチェックしてみてください！'
        ];
        DB::table('newses')->insert($param);
    }
}
