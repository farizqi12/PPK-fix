<?php

class Setor extends Controller{
    public function index(){
        $data['judul'] = "Setor";
        $data['sampah'] = $this->model('Setor_model')->getSampah();
        $data['poin'] = $this->model('Setor_model')->getPoin();
        $this->view('templates/header', $data);
        $this->view('setor/index', $data);
        $this->view('templates/footer');
    }
    public function validasi($nama_sampah = 'botol', $point = '10', ){
        $data['nama_sampah'] = $nama_sampah;
        $data['point'] = $point;
        $data['judul'] = "Setor | Validasi";
        $this->view('templates/header', $data);
        $this->view('setor/validasi', $data);
        $this->view('templates/footer');
    }
}