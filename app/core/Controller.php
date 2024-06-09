<?php

class Controller{
    //kelola view
    public function view($view, $data = []){
        session_start();
        if (!isset($_SESSION['nama'])) {
            require_once '../app/views/Login/index.php';
        }else {
            require_once '../app/views/' . $view . '.php';
        }
    }

    //kelola model
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}