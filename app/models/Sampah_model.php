<?php

class Sampah_model{
    private $tabel = 'sampah';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getSampah(){
        $this->db->query('SELECT 
        sampah.nama_klasifikasi,sampah.gambar,
        sampah.poin,
        kategori_sampah.kategori
    FROM 
        sampah
    JOIN 
        kategori_sampah ON sampah.id_kategori = kategori_sampah.id_kategori');
        return $this->db->resultSet();
    }

}