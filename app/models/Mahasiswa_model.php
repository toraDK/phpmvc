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

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :nama, :nim, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}
?>