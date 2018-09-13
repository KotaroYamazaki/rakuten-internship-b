<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            [
                'name' => 'はじまりのproject',
                'admin_user_id' => '1',
                'is_private' => false,
                'introduction' => 'そして　でんせつが　はじまった！'
            ],
            [
                'name' => "ryo's project",
                'admin_user_id' => '2',
                'is_private' => false,
                'introduction' => 'Webで稼ぎたい方、一緒に世界を変えませんか？ぜひご参加ください！'
            ],
            [
                'name' => "takahiro's project",
                'admin_user_id' => '3',
                'is_private' => false,
                'introduction' => 'このプロジェクトではWebとお年寄りをつなげるサービスを開発します。おばあちゃん子エンジニアあつまれ！'
            ],
            [
                'name' => "takato's project",
                'admin_user_id' => '4',
                'is_private' => false,
                'introduction' => 'エンジニア限定R1グランプリ開催！！！お笑いエンジニアあつまれ！！！！'
            ],
            [
                'name' => "kotaro's project",
                'admin_user_id' => '5',
                'is_private' => false,
                'introduction' => '本プロジェクトではみなさんの退勤アルゴリズムを改善し、定時帰宅を目指します。'
            ],
            [
                'name' => "yossy's project",
                'admin_user_id' => '6',
                'is_private' => false,
                'introduction' => 'ヨッシープロジェクトでは理想のヨッシーアイランド建設を目指します。建築系エンジニア募集中'
            ],
            [
                'name' => "teppy's project",
                'admin_user_id' => '7',
                'is_private' => false,
                'introduction' => 'みなさんを闇の世界に招待します。。。'
            ],
            [
                'name' => "pedro's project",
                'admin_user_id' => '8',
                'is_private' => false,
                'introduction' => 'さぁ夢の国へまいりましょう。眠い。'
            ],
            [
                'name' => "rew's project",
                'admin_user_id' => '9',
                'is_private' => false,
                'introduction' => 'ドラクエぇぇぇぇぇぇぇぇぇぇ'
            ],
            [
                'name' => "been's project",
                'admin_user_id' => '10',
                'is_private' => false,
                'introduction' => '新規サービス受託中'
            ],
            [
                'name' => "sakata's project",
                'admin_user_id' => '11',
                'is_private' => false,
                'introduction' => '今からLINEを開発してLINEに勝ちます。'
            ],
            [
                'name' => "yoshihama's project",
                'admin_user_id' => '12',
                'is_private' => false,
                'introduction' => 'シリコンバレーなんかこわくない'
            ],
            [
                'name' => "rakutenkeiba's project",
                'admin_user_id' => '13',
                'is_private' => false,
                'introduction' => 'horse racing'
            ],
            [
                'name' => "rakuteno-net's project",
                'admin_user_id' => '14',
                'is_private' => false,
                'introduction' => '結婚しようよ'
            ],
            [
                'name' => "rakutenmarriage's project",
                'admin_user_id' => '15',
                'is_private' => false,
                'introduction' => '年収1000万円も夢じゃない'
            ],
            [
                'name' => "rakutentoto's project",
                'admin_user_id' => '16',
                'is_private' => false,
                'introduction' => 'あー夏休み'
            ],
            [
                'name' => "rakutenitiba's project",
                'admin_user_id' => '17',
                'is_private' => false,
                'introduction' => 'シリコンバレーHackathonに向けてアプリ制作中'
            ],
            [
                'name' => "rakutenpay's project",
                'admin_user_id' => '18',
                'is_private' => false,
                'introduction' => 'PHPer来てください。。。'
            ],
            [
                'name' => "rakutentarvel's project",
                'admin_user_id' => '19',
                'is_private' => false,
                'introduction' => 'フロント足りてないです'
            ],
            [
                'name' => "rakutenbooks's project",
                'admin_user_id' => '20',
                'is_private' => false,
                'introduction' => 'インフラ系に詳しい方、募集中'
            ],
            [
                'name' => "rakutenkobo's project",
                'admin_user_id' => '21',
                'is_private' => false,
                'introduction' => 'デジタルマーケティング事業を学生でやりましょう'
            ],
            [
                'name' => "rakutenedy's project",
                'admin_user_id' => '22',
                'is_private' => false,
                'introduction' => 'LINE Boot Awardsに提出する作品を作っています。'
            ],
            [
                'name' => "rakutenminsyu's project",
                'admin_user_id' => '23',
                'is_private' => false,
                'introduction' => 'ディープラーニングでこの世界を変えましょう'
            ],
            [
                'name' => "rakutencard's project",
                'admin_user_id' => '24',
                'is_private' => false,
                'introduction' => 'DDDに興味のある方、大歓迎'
            ],
            [
                'name' => "rakutenbank's project",
                'admin_user_id' => '25',
                'is_private' => false,
                'introduction' => 'oFのアドオンを開発しています'
            ],
            [
                'name' => "rakutenblog's project",
                'admin_user_id' => '26',
                'is_private' => false,
                'introduction' => 'OSSにコントリビュートしましょう'
            ],
            [
                'name' => "rakuteneagles's project",
                'admin_user_id' => '27',
                'is_private' => false,
                'introduction' => 'コンテナ技術に興味のある方、来てね'
            ],
            [
                'name' => "rakuma's project",
                'admin_user_id' => '28',
                'is_private' => false,
                'introduction' => 'hololens'
            ],
            [
                'name' => "rakutenpoint's project",
                'admin_user_id' => '29',
                'is_private' => false,
                'introduction' => 'Vtuberハッカソンに出たい人向け'
            ],
            [
                'name' => "rakutencafe's project",
                'admin_user_id' => '30',
                'is_private' => false,
                'introduction' => '院生を募集しています'
            ],
        ]);
    }
}
