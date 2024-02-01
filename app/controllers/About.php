<?php 

class About{

    public function index($nama = 'halo', $pekerjaan = 'halo'){
        echo "Halo Nama saya $nama saya adalah $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}

?>