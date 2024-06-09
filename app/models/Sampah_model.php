<?php

class Sampah_model{
    private $tabel = 'sampah';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getSampah(){
        $this->db->query('SELECT 
        '.$this->tabel.'.*,
        kategori_sampah.kategori
    FROM 
        '.$this->tabel.'
    JOIN 
        kategori_sampah ON sampah.id_kategori = kategori_sampah.id_kategori');
        return $this->db->resultSet();
    }

}