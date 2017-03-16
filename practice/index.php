<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>練習課題 TOP</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h2>練習課題</h2>

    <h3>ルール</h3>
    <ul style="line-height:35px">
        <li>練習課題は全部で３つです</li>
        <li>練習課題はそれぞれ1つのPHPファイルになっています</li>
        <li>各ファイルごとに解答欄があるので、エディタ等で直接回答を記入してください</li>
        <li>回答前に、<b>practiceという名前のブランチをmasterブランチから切ってください</b></li>
        <li>1つ課題を終えるごとに、そのファイルをコミットしてください</li>
        <li>全て回答&コミット(3つ分)し終えたら、origin/practiceブランチにpushしてください</li>
        <li>origin/practiceブランチからorigin/masterブランチに向けてプルリクエストを発行してください</li>
    </ul>

    <hr>

    <h3>作業の具体的な流れ</h3>
    <ul style="line-height:35px">
        <li>itermを起動し、現在のプロジェクトがあるフォルダへ移動</li>
        <li><b>git branch</b> で 現在のブランチを確認</li>
        <li><b>git checkout master</b> でmasterブランチに移動</li>
        <li><b>git branch practice</b> でpracticeブランチを作成</li>
        <li><b>git branch</b> でpracticeブランチが作成されたことを確認</li>
        <li><b>git checkout practice</b>でブランチを切り替える</li>
        <li><b>git branch</b> でpracticeブランチに切り替わったことを確認</li>
        <li>現在のディレクトリにあるpracticeディレクトリを確認し、ファイルを確認</li>
        <li>practice01.php practice02.php practice03.php が確認出来る</li>
        <li>まずはpractice01.phpをエディタで開き、問題に回答する。</li>
        <li>回答が完了したら、再度itermで作業を行う</li>
        <li><b>git add practice01.php</b>、<b>git commit -m "任意のコミットメッセージ"</b> でコミット</li>
        <li>02, 03も同様に回答　->　コミットを繰り返す</li>
        <li>3つ分コミットできたら、git push origin practice でリモートリポジトリにpushする</li>
        <li><a href="https://github.com/ryoueno/sava">https://github.com/ryoueno/sava</a>にアクセス</li>
        <li><b>branches</b>をクリックし、practiceブランチの横の <b>new pull request</b> を選択</li>
        <li>適当にプルリクエストを作成する</li>
        <li>終了</li>
    </ul>

    <hr>

    <h3>以下のすべての課題に取り組んでください。</h3>
    <ol>
        <li><a href="practice01.php">練習課題1</li>
        <li><a href="practice02.php">練習課題2</li>
        <li><a href="practice03.php">練習課題3</li>
    </ol>

    <hr>

</body>
</html>
