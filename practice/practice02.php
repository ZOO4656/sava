<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>練習課題2</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
         <h2>スタイルシート記述</h2>
         <h3>以下のHTML要素にcssのプロパティを50個適用せよ。</h3>
         <h4>ただし、すでに6つあるので、残り44個追加せよ</h4>
         <h4>HTMLの要素を変更したり、改造してもかまわない</h4>

         <!-- 適応対象の要素 -->
         <div class="sushi">
             <span class="sushi-title">お寿司食べたい</span>

         </div>

         <div class="takoyaki">
             <span class="takoyaki-title">たこ焼き食べたい</span>
         </div>
         <!-- /適応対象の要素 -->


    </div>
    <a href="index.php">練習問題 TOPへ</a>
</body>
</html>

<!-- 解答欄 -->
<style>
    /* 残り44個追加してください */
    .sushi {
        height: 400px;
        border: solid 1px #000;
        font-weight: 100;
        word-spacing: 1;
        color:#ff0000;
        background-color: #ffff00;
        width: 50;
        margin:20;
        padding: 20
        max-width:20;
        max-height: 20;
        min-height: 20;
        min-width: 20;
        font-style: normal;
    }

    .sushi-title {
        font-size: 36px;
        font-weight: 300;
        color: #00ff00;
        background-color: #ff0000; 
        width:80;
        margin:40;
        padding: 40
        max-width:40;
        max-height: 40;
        min-width: 40;
        min-height: 40;
        font-style: italic;
    }

    .takoyaki {
        height: 400px;
        border: solid 1px #000;
        font-weight: 600;
        color:#0000ff ;
        background-color: #00ff00;
        width:100;
        margin:60;
        padding: 60;
        max-width: 60;
        max-height: 60;
        min-width: 60;
        min-height:60;
        font-style: oblique;
    }

    .takoyaki-title {
        font-size: 36px;
        font-weight: 900
        color:#ffffff;
        background-color: #000000;
        width:300;
        margin:80;
        padding: 80;
        max-width: 80;
        max-height: 80;
        min-height: 80;
        min-width: 80;
    }

</style>
<!-- /解答欄 -->
