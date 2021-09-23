<?php
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        //AJAX ACTION
        public function action(){
            if(isset($_POST['action']) && $_POST['action'] == 'login'){
                $email = $_POST['email'];
                $password = $_POST['password'];
            }
        }

        //Login User
        public function login(){

            $data = [
                'title' => 'Login Page'
            ];

            $this->view('users/login', $data);
        }

        public function register(){
            $data = [
                'title' => 'Register Page'
            ];

            $this->view('users/register', $data);
        }
    }
?>