<?php 
    class Users extends Controller {
        public function __construct(){

        }

        public function register(){
            // Check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
            } else {
                // Initialize data
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => ''
                ];
                // Load form
            }

            $this->view('users/register', $data);
        }

        public function login(){
            // Check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
            } else {
                // Initialize data
                $data = [         
                    'email' => '',
                    'password' => '',             
                    'email_error' => '',
                    'password_error' => '',
                ];
                // Load form
            }

            $this->view('users/login', $data);
        }
    }
?>