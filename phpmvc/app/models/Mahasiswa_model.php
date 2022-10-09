<?php

class Mahasiswa_model{
private $table = 'mahasiswa';
private $db;

public function __construct()
{
    $this->db = new Database;
}


    // private $mhs = [
    // [
    //     "nama"=> "Yusuf Wahyu Syahroni",
    //     "nrp"=> "203040052",
    //     "email"=> "203040052@mail.unpas.ac.id",
    //     "jurusan"=> "Teknik Informatika'"
    // ],
    // [
    //     "nama"=> "Devi Indriawati",
    //     "nrp"=> "203040039",
    //     "email"=> "203040039@mail.unpas.ac.id",
    //     "jurusan"=> "Teknik Informatika"
    // ],
    // [
    //     "nama"=> "M.Rafi Ramadhan",
    //     "nrp"=> "203040051",
    //     "email"=> "203040051@mail.unpas.ac.id",
    //     "jurusan"=> "Teknik Informatika"
    // ]
    // ];

    public function getAllMahasiswa()
        {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getMahasiswaById($id)
        {
            $this->db->query('SELECT *FROM' . $this->table . 'WHERE id=:id');
            $this->db->db->bind('id', $id);
            return $this->db->single();
        }
    
}