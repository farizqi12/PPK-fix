<?php

class Profil extends Controller{
    public function index(){
        $data['judul'] = "Home";

        $this->view('templates/header', $data);
        $this->view('Profil/profil');
        $this->view('templates/footer');
    }
}