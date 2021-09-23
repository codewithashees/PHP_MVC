<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        //Login Account
        public function login($email, $password) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
    
            //Bind value
            $this->db->bind(':email', $email);
    
            $row = $this->db->single();
    
            $hashedPassword = $row->password;
    
            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        }
    }
?>