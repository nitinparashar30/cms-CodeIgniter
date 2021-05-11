<?php
class Home extends CI_Controller{


    public function __construct(){

        parent::__construct();
        $this->load->model('admin_model');        
    }
    
    public function index(){

        $sdata = $this->admin_model->fetchcont();
        $selectimg = $this->admin_model->sliderft();
        $this->load->view('main/home', ['sdata'=> $sdata, 'selectimg'=> $selectimg]);
        
    }

    public function page(){
        
        $id = $this->uri->segment(3);
        $sdata = $this->admin_model->fetchcont1($id);
        $this->load->view('main/page', ['sdata1'=> $sdata]);
    }

}



?>