<?php
    include "crud.php";
    class User implements Crud{
        private $user_id;
        private $first_name;
        private $last_name;
        private $city_name;

        function __construct($first_name, $last_name, $city_name){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->city_name = $city_name;
        }
        // user_id setter
        public function setUserId($user_id){
            $this->user_id = $user_id;
        }
        // user_id getter
        public function getUserId(){
            return $this->$user_id;
        }

        // crud interface
        public function save($conn){
            $fn = $this-> first_name;
            $ln = $this-> last_name;
            $city = $this-> city_name;
            $res = $conn->query("INSERT INTO user(first_name,last_name,user_city) VALUES('$fn','$ln','$city')");
            if ($res=== FALSE) {
                die("Error: " . $conn->error);
            }
            return $res;
        }

        public function readAll($conn){
            $users = array();
            $res = $conn-> query("SELECT * FROM user");
            return $users;
            
        }
        public function readUnique(){
            return null;
        }
        public function search(){
            return null;
        }
        public function update(){
            return null;
        }
        public function removeOne(){
            return null;
        }
        public function removeAll(){
            return null;
        }

    }
?>
