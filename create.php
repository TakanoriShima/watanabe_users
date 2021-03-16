<?php
    require_once 'user.php';
    // セッション開始
    session_start();
    // $_POSTはスーパーグローバル変数
    // var_dump($_POST);
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    // print $name;
    // print $age;
    
    // 入力された値をもとに新しい会員作る
    $user = new User($name, $age);
    // var_dump($user);
    
    // $user を story.phpへ送り込みたい
    // セッションを使う
    $_SESSION['user'] = $user;
    // story.php へ画面遷移
    header('Location: story.php');
    exit;