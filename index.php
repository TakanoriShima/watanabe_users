<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>会員一覧</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>会員一覧</h1>
        <?php if(count($users) !== 0): ?>
        <?php foreach($users as $user): ?>
        <ul>
            <li><?= $user->name ?></li>
            <li><?= $user->age . '歳' ?></li>
            <li><?= $user->drink() ?></li>
        </ul>
        <?php endforeach; ?>
        <?php else: ?>
        <p>会員がいません</p>
        <?php endif; ?>
        
        <p><a href="new.php">新規会員作成</a></p>
    </body>
</html>