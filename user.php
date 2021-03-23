<?php
    // 会員の設計図
    class User{
        // プロパティ
        public $name; // 名前
        public $age; // 年齢
        // コンストラクタ
        public function __construct($name='', $age=''){
            // print 'OK';
            // print("OK");
            $this->name = $name;
            // this->$name = $name;
            $this->age = $age;
            // print $this->name . 'さんが生まれました' . PHP_EOL;
            // print($this->name . "さんが生まれました\n");
        }
        // お酒を飲む
        public function drink(){
            if($this->age >= 20){
                return 'お酒を正しく飲みましょう' . PHP_EOL;
            }else{
                return 'お酒は20歳から。あと' . (20 - $this->age) . '年お待ちください' . PHP_EOL;
            }
        }
        
        // 入力チェック
        public function validate(){
            $errors = array();
            if($this->name === ''){
                $errors[] = '名前を入力してください';
            }
            if($this->age === ''){
                $errors[] = '年齢を入力してください';
            }else if(!preg_match('/^[0-9]+$/', $this->age)){
                $errors[] = '0以上の整数を入力してください';
            }
            
            return $errors;
        }
    }
    
    