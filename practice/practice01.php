<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>練習課題1</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
    <!-- 練習課題 -->


        <h2>記述問題</h2>

        <h3>問1. シェルとは何か、簡潔に一行で説明せよ</h3>
        <h4>回答</h4>
        <p>
        <!-- 解答欄 -->
        人間からの入力指示をコンピュータに伝えるプログラムのこと。
        コマンドラインから他のアプリの起動や終了させたりすることができる。
        <!---->
        </p>

        <hr>

        <h3>問2. gitでプロジェクトを管理する際、<b>「.gitignore」</b>という隠しファイルをしばしば生成する。これは何か簡潔に説明せよ</h3>
        <h4>回答</h4>
        <p>
        <!-- 解答欄 -->
        gitの管理下に置きたくないファイルが出てきた場合に利用する機能。
        gitの管理外に置くファイルの設定ができる。
        <!---->
        </p>

        <hr>

        <h3>問3. データベースソフトウェアはMySQL以外にも存在する。それ以外で5つ程度調べて記載せよ</h3>
        <h4>回答</h4>
        <ol>
        <!-- 解答欄 -->
            <li> Oracle Detavase </li>
            <li> PostgreSQL </li>
            <li> Web SQL </li>
            <li> Local Storage </li>
            <li> SQLLite </li>
        <!---->
        </ol>

        <hr>

        <h3>問4. ドキュメントルートとは何か、簡潔に説明せよ</h3>
        <h4>回答</h4>
        <p>
        <!-- 解答欄 -->
        WebサイトやFTPサイトの、トップページのデータが入っているディレクトリやフォルダ。
        <!---->
        </p>

        <hr>

        <h3>問5. このページを動かしている現在のローカル(仮想)サーバのOSの名前とバージョンを調べ、記載せよ</h3>
        <h4>調べ方</h4>
        <ol>
            <li>itermを起動</li>
            <li><b>docker ps</b>で、起動中のコンテナを調べる</li>
            <li><b>docker exec -it [コンテナ名] bash </b>でコンテナに接続</li>
            <li>コンテナ(サーバ)のOSが記載されているファイルは<b>/etc</b>ディレクトリ内の<b>issue</b>というファイルである</li>
            <li><b>/etc フォルダに移動する</b></li>
            <li>cat コマンド または vi コマンドで issue　を開く (例： cat issue)</li>
        </ol>
        <h4>回答</h4>
        <p>
        <!-- 解答欄 -->
        Ubuntu 16.04.1 LTS \n \l
        <!---->
        </p>

        <hr>

    <!-- /練習課題 -->
    </div>
    <a href="index.php">練習問題 TOPへ</a>
</body>
</html>
