<?php
    // 会員の設計図を読みこむ
    require_once 'user_dao.php';
    session_start();
    
    // $_SESSION['users'] = null;

    // 全会員情報を保存する配列
    // $users = $_SESSION['users'];
    
    $users = UserDAO::get_all_users();
    
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    // HTMLファイルの表示
    include_once 'index_view.php';