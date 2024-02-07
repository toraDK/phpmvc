<?php
class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Tora Digda",
    //         "nim" => "2341720161",
    //         "email" => "toradigda@gmail.com",
    //         "jurusan" => "Teknik Iinformatika"
    //     ],
    //     [
    //         "nama" => "aaaaaaaaa",
    //         "nim" => "000000000",
    //         "email" => "toradigda@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "bbbbbbbbb",
    //         "nim" => "2222222222222",
    //         "email" => "toradigda@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Tora Digda",
    //         "nim" => "444444444444",
    //         "email" => "toradigda@gmail.com",
    //         "jurusan" => "Teknik Sipil"
    //     ]
    // ];


    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
?>