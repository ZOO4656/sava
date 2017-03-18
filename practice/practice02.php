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
        font-weight: 100px;
        word-spacing: 1px;
        color:#f00;
        background-color: #ff0;
        width: 50px;
        margin:20px;
        padding: 20px;
        max-width:20px;
        max-height: 20px;
        min-height: 20px;
        min-width: 20px;
        font-style: normal;
    }

    .sushi-title {
        font-size: 36px;
        font-weight: 300px;
        color: #0f0px;
        background-color: #f00; 
        width:80px;
        margin:40px;
        padding: 40px;
        max-width:40px;
        max-height: 40px;
        min-width: 40px;
        min-height: 40px;
        font-style: italic;
    }

    .takoyaki {
        height: 400px;
        border: solid 1px #000;
        font-weight: 600px;
        color:#00fpx;
        background-color: #0f0px;
        width:100px;
        margin:60px;
        padding: 60ox;
        max-width: 60px;
        max-height: 60px;
        min-width: 60px;
        min-height:60px;
        font-style: oblique;
    }

    .takoyaki-title {
        font-size: 36px;
        font-weight: 900
        color:#fff;
        background-color: #000;
        width:300px;
        margin:80px;
        padding: 80px;
        max-width: 80px;
        max-height: 80px;
        min-height: 80px;
        min-width: 80px;
    }

</style>
<!-- /解答欄 -->
