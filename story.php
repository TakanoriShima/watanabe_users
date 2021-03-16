<?php
    // 会員の設計図を読みこむ
    require_once 'user.php';
    session_start();
    
    // 渡邉さん誕生
    $watanabe = new User('渡邉', 18);
    // 島さん誕生
    $shima = new User('島', 48);
    
    // 全会員情報を保存する配列
    $users = array();
    // 配列の最後に何かを追加する
    $users[] = $watanabe;
    $users[] = $shima;
    
    // セッションから新規会員を取り出す
    $user = $_SESSION['user'];
    // もしそんな人いれば
    if($user !== null){
        $users[] = $user;
        $_SESSION['user'] = null;
    }
    // var_dump($users);
    
    // print $watanabe->name;
    // print $shima->age;
    // $watanabe->drink();
    
    // HTMLファイルの表示
    include_once 'index.php';