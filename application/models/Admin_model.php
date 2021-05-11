<?php
class Admin_model extends CI_Model{

    public function reg($array){

        $q=$this->db->insert('users', $array);

        if($q > 0){

         return true;

        } 
        
        else{
          return false;
        }
    }
    public function validate($email, $password){

     

        $q= $this->db->where(["email"=>$email])
                 ->get('users');


                 if($q->result()){

                 $row = $q->row()->password;

                 $dpass = $this->encryption->decrypt($row);

                

                 if($password == $dpass){

                    $result = $q->row();

                    return $result;                  

                 
                 }

                 else
                 {
                     $this->session->set_flashdata('notlog','Password is incorrect');
                   $this->load->view('admin/login');
                 }
                }
                else{
                  $this->session->set_flashdata('notlog','Email not found');
                  $this->load->view('admin/login');

                }


    }

    public function upimg($array){

      $this->db->insert('slider', $array);


    }

    

    public function fetchimg(){

      $q= $this->db->select()
                   ->order_by('id', 'DESC')
                ->get('slider');

                $imgdata = $q->result();

                return $imgdata;
    }


    
    public function sliderft(){

      $q= $this->db->select()
                   ->where('status', 1)
                ->get('slider');

                $imgdata = $q->result();

                return $imgdata;
    }



    public function upcont($array){

      $this->db->insert('content', $array);


    }

    public function fetchcont(){

      $q= $this->db->select()
                   ->order_by('id', 'DESC')
                ->get('content');

                $imgdata = $q->result();

                return $imgdata;
    }
    public function fetchcont1($id){

      $q= $this->db->where('id', $id)
                   
                ->get('content');

                $data = $q->row();

                return $data;
    }
    public function delcont($id){

      $q = $this->db->delete('content', ['id'=>$id]);
                  return true;
    }

    public function editcont($id){
      $q = $this->db->select()
                    ->where('id', $id)
                    ->get('content');
                    $result= $q->row();
                    return $result;
    }

    public function updcont($id, $array){

      $q = $this->db->where('id',$id)
                ->update('content', $array);


                if($q){

                  return true;
                }else{
                  return false;
                }        



    }

    public function selectpic($id){

      $q=$this->db->where('id', $id)
              ->update('slider', ["status"=> 1]);

              if($q){

                return true;
              }else{
                return false;
              }  
    }

    public function repic($id){

      $q=$this->db->where('id', $id)
      ->update('slider', ["status"=> 0]);

      if($q){

        return true;
      }else{
        return false;
      }  


      
    }

    public function fetchapi(){

      $q= $this->db->select()
                   ->order_by('id', 'DESC')
                ->get('content');

                $data = $q->result();

                return $data;
    }



}



?>