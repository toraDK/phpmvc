<?php 

class About extends Controller{

    public function index($nama = 'halo', $pekerjaan = 'halo', $umur = 12){
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('About/page');
        $this->view('templates/footer');
    }
}

?>