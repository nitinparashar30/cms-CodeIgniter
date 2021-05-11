<?php

class Admin extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        // $this->islogin();                        
          
    }

    private function islogin()
    {
        if(!$this->session->userdata('email')){
            redirect('admin/index');
        }
    
    }

    public function index()
    {
        if($this->session->userdata('email')){
            
            $this->load->view('admin/dashboard');
        }

        $this->load->view('admin/login');
    }


    public function register()
    {    

        $this->load->view("admin/register");

    }
    public function doreg(){

        $array['name'] = $this->input->post('name');
        $array['email'] = $this->input->post('email');
        $password = $this->input->post('password');
        $array['password']= $this->encryption->encrypt($password);

    
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'confirm Password', 'required|matches[password]');

        if($this->form_validation->run()){
        $this->load->model('Admin_model');
        if($this->Admin_model->reg($array) == true){

            $this->session->set_flashdata('rmsg', 'Registration success');
            return redirect('admin/index');
        }
        else{
            echo "Register Not Done";

        }


        }
        else{

            $this->load->view('admin/register');
        }
    }
    

    public function loguser(){

        $email= $this->input->post('email');
        $password= $this->input->post('password');
        $this->load->model('Admin_model');
        if($result = $this->Admin_model->validate($email, $password)){

            $this->session->set_userdata('email',$result->email);
            $this->load->view('admin/dashboard', ['result'=>$result]);

      }   

        

    }

    public function slider()
    {
        $this->load->model('admin_model');
        $sdata = $this->admin_model->fetchimg();

        $this->load->model('admin_model');
        $selectimg = $this->admin_model->sliderft();
        
   
        $this->load->view('admin/slider', ['sdata'=> $sdata, 'selectimg'=> $selectimg]);    
    }


    public function setimg(){


        $config = [
            'allowed_types'=> 'jpg|jpeg|gif|png',            
            'upload_path'=> './upload/slider/',
            'encrypt_name'=> true,
        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload('img')){

        $data= $this->upload->data();

        $iconfig = [
            'image_library'=> 'gd2',
            'source_image' => './upload/slider/'.$data['file_name'],
            'create_thumb' => false,
            'maintain_ratio' => false,   
            'width' => 1500,   
            'height' => 500,   
            'new_image' => './upload/slider/'.$data['file_name'],   
        ];        
        
        $this->load->library('image_lib', $iconfig);
        $this->image_lib->resize();       

        $array = $this->input->post();
        $array['img'] = base_url('upload/slider/'. $data['file_name']);
            
        $this->load->model('admin_model');
        $this->admin_model->upimg($array);

        $this->session->set_flashdata('upload', 'Image uploaded successfully to gallery');
        return redirect('admin/slider');

        }
        else{
            echo "img to uploaded";
        }
    }

    public function content(){
        $this->load->model('admin_model');
        $sdata = $this->admin_model->fetchcont();
   
        $this->load->view('admin/content', ['sdata'=> $sdata]);   

        
    }


    public function setcont(){
        $config = [
            'allowed_types'=> 'jpg|jpeg|gif|png',            
            'upload_path'=> './upload/',
            'encrypt_name'=> true,
        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload('img')){

        $data= $this->upload->data();

        $iconfig = [
            'image_library'=> 'gd2',
            'source_image' => './upload/'.$data['file_name'],
            'create_thumb' => false,
            'maintain_ratio' => false,   
            'width' => 500,   
            'height' => 500,   
            'new_image' => './upload/'.$data['file_name'],   
        ];        
        
        $this->load->library('image_lib', $iconfig);
        $this->image_lib->resize();       

        $array = $this->input->post();
        $array['img'] = base_url('upload/'. $data['file_name']);
            
        $this->load->model('admin_model');
        $this->admin_model->upcont($array);

        $this->session->set_flashdata('upload', 'Content added');
        return redirect('admin/content');

        

        }
        else{

            echo "img to uploaded";
        }
    }

    public function fetchcont()
    {
        $this->load->model('admin_model');
        $sdata = $this->admin_model->fetchcont();
   
        $this->load->view('admin/comp/content', ['sdata'=> $sdata]);    
    }

public function logout()
{
    $this->session->unset_userdata('email');
    return redirect('admin');
}

public function delcont(){

    $id= $this->uri->segment(3);
    $this->load->model('Admin_model');
    $result= $this->Admin_model->delcont($id);

    if($result){
        $this->session->set_flashdata('del', 'Content deleted successfully');
        redirect('admin/content');
    }
}
public function editcont(){

    $id= $this->uri->segment(3);
    $this->load->model('Admin_model');
    $result= $this->Admin_model->editcont($id);
    $this->load->view('admin/editcont',['result'=>$result]);
    
    
    

}

public function upcont(){

  

    if (empty($_FILES['img']['name'])) {   

        $array = $this->input->post();
        $id= $this->input->post('id');        
      $this->load->model('admin_model');
      $this->admin_model->updcont($id, $array);  
        $this->session->set_flashdata('upload', 'Content Updated');
    return redirect('admin/content');     
        

    }else{



    $config = [
        'allowed_types'=> 'jpg|jpeg|gif|png',            
        'upload_path'=> './upload/',
        'encrypt_name'=> true,
    ];

    $this->load->library('upload', $config);

    if($this->upload->do_upload('img')){

    $data= $this->upload->data();

    $iconfig = [
        'image_library'=> 'gd2',
        'source_image' => './upload/'.$data['file_name'],
        'create_thumb' => false,
        'maintain_ratio' => false,   
        'width' => 500,   
        'height' => 500,   
        'new_image' => './upload/'.$data['file_name'],   
    ];        
    
    $this->load->library('image_lib', $iconfig);
    $this->image_lib->resize();       

    $array = $this->input->post();
    $array['img'] = base_url('upload/'. $data['file_name']);
        
    $id= $this->input->post('id');
    $this->load->model('admin_model');
    $this->admin_model->updcont($id, $array);

    $this->session->set_flashdata('upload', 'Content Updated');
    return redirect('admin/content');

    
    
    }
    else{

        echo "img not uploaded";
    }
}

    
}

public function services(){

    $this->load->view('admin/services');
}
public function posts(){

    $this->load->view('admin/posts');
}

public function imgok(){

    $id = $this->uri->segment(3);
    $this->load->model('admin_model');
    if($this->admin_model->selectpic($id)){

        $this->session->set_flashdata('select', 'Image has been select');
        return redirect('admin/slider');
}


     
}

public function imgre(){

    $id = $this->uri->segment(3);
    $this->load->model('admin_model');
    if($this->admin_model->repic($id)){

        $this->session->set_flashdata('del', 'Image has been remove');
        return redirect('admin/slider');
    }


     
}

public function apidata()
{
    $this->load->model('Admin_model');
   $data= $this->Admin_model->fetchapi();

//   return print_r($data);

    $json = json_encode($data);   
    return print_r($json);



}



}




?>