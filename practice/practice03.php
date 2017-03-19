<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>練習課題3</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
    <!-- 練習課題 -->


        <h2>MySQL操作</h2>

        <h3>事前の準備：CSVファイルのインポート</h3>
        <ol>
            <li>CSVファイルのダウンロード</li>
            <li>
                <ul>
                    <li><a href="demons.csv">demons.csv</a></li>
                    <li><a href="partners.csv">partners.csv</a></li>
                    <li><a href="spells.csv">spells.csv</a></li>
                </ul>
            </li>
            <li>Sequel Proでローカル環境のデータベースに接続する</li>
            <li>3つのCSVファイルをインポートする</li>
            <li>テーブル名はそれぞれ<b>demons, partners, spells</b>とする</li>
        </ol>
        <video src="csv_import.mp4" width="400" controls></video>

        <hr>

        <h3>問1. demonsテーブルにて、<b>book_color="シルバー"</b> のレコードを抽出するSQL文を発行せよ</h3>
        <h4>SQL文</h4>
        <p>
        <!-- 解答欄 -->
        select book_color from demons where  book_color = "シルバー";
        <!---->
        </p>

        <hr>

        <h3>問2. 以下の2つのレコードを挿入するSQL文を発行せよ</h3>
        <h4>demonsテーブルに挿入</h4>
        <table border="1">
            <tr>
                <th>id</th>
                <th>partner_id</th>
                <th>name</th>
                <th>book_color</th>
            </tr>
            <tr>
                <td>8</td>
                <td>8</td>
                <td>ウマゴン</td>
                <td>オレンジ</td>
            </tr>
        </table>

        <h4>partnersテーブルに挿入</h4>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <tr>
                <td>8</td>
                <td>カフカ・サンビーム</td>
            </tr>
        </table>

        <h4>SQL文</h4>
        <ol>
        <!-- 解答欄 -->
            <li> insert into demons(id,partner_id,name,book_color) value (8,8,"ウマゴン","オレンジ");</li>
            <li> insert into partners(id,name) value (8,"カフカ・サンビーム");</li>
        <!---->
        </ol>

        <hr>

        <h3>問3. partnersテーブルにて、<b>name="フォルゴレ"</b>であるレコードの<b>name</b>を<b>"パルコ・フォルゴレ"</b>に更新するSQL文を発行せよ</h3>
        <h4>SQL文</h4>
        <p>
        <!-- 解答欄 -->
        update partners set name = "パルコ・フォルゴレ" where id = 3;
        <!---->
        </p>

        <hr>

        <h3>問4. 【結合】<b>demonsテーブル</b>と<b>partnersテーブル</b>を結合し、全レコードを取得するSQL文を発行せよ</h3>
        <h4>SQL文</h4>
        <p>
        <!-- 解答欄 -->
        select * from partners inner join demons on partners.id = demons.partner_id;
        <!---->
        </p>

        <hr>

        <h3>問5. 【結合】<b>demons.name="ブラゴ"</b>の<b>術の名前</b>一覧を取得するSQL文を発行せよ</h3>
        <h4>demonsとspellsを結合 -> where demons.name="ブラゴ"で絞り込む</h4>
        <h4>SQL文</h4>
        <p>
        <!-- 解答欄 -->
        <pre>
        select *
        from
        spells inner join demons
        on
        spells.demon_id = demons.id
        where
        spells.demon_id = 2;
        </pre>
        <!---->
        </p>

        <hr>

        <h3>問6. 【発展】【結合からの結合】<b>partners.name="グスタフ"</b>である魔物の<b>術の名前</b>一覧を取得するSQL文を発行せよ</h3>
        <h4>demonsとpertnersを結合し、それにspellsを結合させる -> whereで絞り込む</h4>
        <h4>結合からの結合方法:</h4>
        <pre>
             SELECT table1.id FROM table1 INNER JOIN table2 ON table1.id = table2.table1_id INNER JOIN table3 ON table2.id = table3.table2_id WHERE table1.name = "hoge";
        </pre>
        <h4>結合したテーブルに結合するイメージ、（）の部分が１セット</h4>
        <pre>
             SELECT table1.id FROM (table1 INNER JOIN table2 ON table1.id = table2.table1_id) WHERE table1.name = "hoge";
        </pre>
        <h4>↑の部分にさらにINNER JOIN を付け足すだけ</h4>
        <pre>
             SELECT table1.id FROM (table1 INNER JOIN table2 ON table1.id = table2.table1_id) 【INNER JOIN table3 ON table2.id　= table3.table2_id】 WHERE table1.name = "hoge";
        </pre>

        <h4>SQL文</h4>
        <p>
        <!-- 解答欄 -->
        <pre>
        select spells.explaination
        from partners
        inner join demons
        on partners.id = demons.partner_id
        inner join spells
        on demons.id = spells.demon_id
        where partners.name = "グスタフ";
        </pre>
        <!---->
        </p>

        <hr>

        <h4>これで練習課題は終了です。全てコミットが完了したらpushし、pullリクエストを発行してください</h4>
    <!-- /練習課題 -->
    </div>
    <a href="index.php">練習問題 TOPへ</a>
</body>
</html>
