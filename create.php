<?php
    require_once 'user_dao.php';
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
    
    $errors = $user->validate();
    
    if(count($errors) === 0){
        
        UserDAO::insert($user);
        
        // // セッションから会員一覧を取り出す
        // $users = $_SESSION['users'];
        
        // // もしそんな人いれば
        // if($user === null){
        //     $users = array();
        // }
        
        // // 会員を一覧に追加
        // $users[] = $user;
        
        // // セッションへ保存
        // $_SESSION['users'] = $users;
        
        
        
        $_SESSION['flash_message'] = '新規会員を登録しました';
        
        // index.php へ遷移
        header('Location: index.php');
        exit;
        
    }else{
        $_SESSION['errors'] = $errors;
        header('Location: new.php');
        exit;
    }
