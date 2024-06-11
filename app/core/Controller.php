<?php

class Controller{
    //kelola view
    public function view($view, $data = []){ 
               require_once '../app/views/' . $view . '.php';
    }

    //kelola model
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}