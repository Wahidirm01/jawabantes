<?php

class About extends Controller {
    
    public function index($nama= 'budi', $prodi= "pendidikan Komputer"){
        $data['nama'] = $nama;

        $data['prodi'] = $prodi; 
        
        $data['judul '] = 'About';
        
        $this->view('templates/header', $data);
        
        $this->view ('about/index', $data);
        
        $this->view('templates/footer');
    }



    public function page()
    {
        $data['judul '] = 'Page';
        $this->view ('templates/header', $data); 
        $this->view('about/page');
        $this->view ('templates/footer');
    }

}