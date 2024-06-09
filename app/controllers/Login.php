<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = "Login";        
        $this->view('login/index',$data);
    }

    public function log(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['login'] = $this->model('Login_model')->getUser($username, $password);
        

        session_start();
        if ($data['login'] == NULL) {
            header("Location:".BASEURL."/NOT FOUND");
        }else {
            foreach($data['login'] as $row) :
                $_SESSION['nama'] = $row['nama'];
                    header("Location:".BASEURL."/Home/index.php");               
            endforeach;    
        }

    }
}