<?php

class Sampah extends Controller{
    public function index(){
        $data['judul'] = "Sampah";  
        $data['sampah'] = $this->model('Sampah_model')->getSampah();
        $this->view('templates/header', $data);
        $this->view('sampah/index', $data);
        $this->view('templates/footer');
    }
}