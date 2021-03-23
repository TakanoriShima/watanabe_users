<?php
    require_once 'user.php';
    
    class UserDAO{
        //データベースと接続
        private static function get_connection(){
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            $pdo = new PDO('mysql:host=localhost;dbname=users_app', 'root', '', $options);
            return $pdo;
        }
        //データベースと切断
        private static function close_connection($pdo, $stmt){
            $pdo = null;
            $stmt = null;
        }
        
        //全会員情報を取得
        public static function get_all_users(){
            try{
                $pdo = self::get_connection();
                $stmt = $pdo->query('SELECT * FROM users');
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
                $users = $stmt->fetchAll();
                
            }catch(PDOException $e){
                return array();
            }finally{
                self::close_connection($pdo, $stmt);
            }
            return $users;
        }
        
        //usersテーブルに新規データを追加
        public static function insert($user){
            try{
                $pdo = self::get_connection();
                $stmt = $pdo->prepare('INSERT INTO users(name, age) VALUES(:name, :age)');
                $stmt->bindValue(':name', $user->name, PDO::PARAM_STR);
                $stmt->bindValue(':age', $user->age, PDO::PARAM_INT);

                $stmt->execute();
                
            }catch(PDOException $e){
            }finally{
                self::close_connection($pdo, $stmt);
            }
        }    
    }