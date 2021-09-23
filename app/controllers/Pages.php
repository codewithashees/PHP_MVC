<?php
    class Pages extends Controller{
        public function __construct(){
            //$this->userModel = $this->model('User');
        }

        public function index() {
            $data = [
                'title' => 'Home page'
            ];
    
            $this->view('index', $data);
        }

        public function about(){
            $data = [
                'Name'=>'Ashees Vishwakarma',
                'Email'=>'sharma838@yahoo.com',
                'Phone'=>'+91-9794231291'
            ];
            $this->view('about',$data);
        }

        // public function contact(){
        //     $this->view('pages/contact');
        // }
    }
?>