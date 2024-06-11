<?php

class Riwayat extends Controller{
    public function index(){
        $data['judul'] = "Home";

        $this->view('templates/header', $data);
        $this->view('Riwayat/index');
        $this->view('templates/footer');
    }
}