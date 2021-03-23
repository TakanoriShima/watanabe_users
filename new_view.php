<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規会員登録</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>新規会員登録</h1>
        <?php if($errors !== null): ?>
        <ul>
            <?php foreach($errors as $error): ?>    
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <form action="create.php" method="POST">
            お名前: <input type="text" name="name"><br>
            年齢: <input type="text" name="age"><br>
            <input type="submit" value="新規登録">
        </form>
        
        
        <p><a href="index.php">会員一覧へ</a></p>
    </body>
</html>