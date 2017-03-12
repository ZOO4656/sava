<?php
    $sava_list = [
        '塩サバ',
        'サバの味噌煮',
        'サバ寿司',
        'サバうどん',
        'サバ焼きそば',
        'サバご飯',
        'サバスパゲッティ',
        'サバ茶漬け',
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <section>
        <h1>今週のこんだて</h1>
            <ul>
                <?php foreach ($sava_list as $sava) :?>
                    <li>
                        <?= $sava ?>
                    </li>
                <?php endforeach ?>
            </ul>
    </section>
</body>
</html>
