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

    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>