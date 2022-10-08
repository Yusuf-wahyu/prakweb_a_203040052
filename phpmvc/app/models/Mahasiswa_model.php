<?php

class Mahasiswa_model{
    //database handler
    private $dbh,
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn ='mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
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
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
}