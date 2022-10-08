<?php  

class About extends Controller {
    public function index($nama = 'Yusuf', $pekerjaan = 'Mahasiswa', $umur = '20')
    {
        $data['nama'] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'about me';
        $this->view('templates/header' $data);
        $his->view('about/index', $data);
        $this->view('templates/footer');

    }
    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view(' About/page');
        $this->view('templates/footer');
    }
}