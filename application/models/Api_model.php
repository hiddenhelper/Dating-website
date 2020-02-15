<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {


    public function get_body_part($id)
    {
        $this->db->where('model_id',$id);
        $query = $this->db->get('model_body_info');
        $query_result = $query->result();
        return $query_result;
    }
    

    // public function get_body_part1($id)
    // {
    //     $this->db->where('user_id',$id);
    //     $query = $this->db->get('user');
    //     $query_result = $query->result();
    //     return $query_result;
    // }

    public function get_allcity()
    {
        $query = $this->db->get('countries');
        $query_result = $query->result();
        return $query_result;
    }

    public function get_ethnicity()
    {
        $query = $this->db->get('ethnicity');
        $query_result = $query->result();
        return $query_result;
    }

    public function get_education()
    {
        $query = $this->db->get('education');
        $query_result = $query->result();
        return $query_result;
    }

    public function get_marital_status()
    {
        $query = $this->db->get('marital_status');
        $query_result = $query->result();
        return $query_result;
    }
    
    public function get_height()
    {
        $query = $this->db->get('height');
        $query_result = $query->result();
        return $query_result;
    }
    
    public function get_body_type()
    {
        $query = $this->db->get('bodytype');
        $query_result = $query->result();
        return $query_result;
    }
    
    
    public function get_haircolor()
    {
        $query = $this->db->get('haircolor');
        $query_result = $query->result();
        return $query_result;
    }
    
    public function get_religion()
    {
        $query = $this->db->get('religion');
        $query_result = $query->result();
        return $query_result;
    }
    
    // public function get_weight()
    // {
    //     $query = $this->db->get('weight');
    //     $query_result = $query->result();
    //     return $query_result;
    // }
    
    public function get_doyousmoke()
    {
        $query = $this->db->get('doyousmoke');
        $query_result = $query->result();
        return $query_result;
    }
    
    
      public function get_doyoudrink()
    {
        $query = $this->db->get('doyoudrink');
        $query_result = $query->result();
        return $query_result;
    }
    
      public function get_eyecolor()
    {
        $query = $this->db->get('eyecolor');
        $query_result = $query->result();
        return $query_result;
    }
    
    
    
     
      public function get_singlemodel_height($id)
    {
        $this->db->where('height_id',$id);
        $query = $this->db->get('height');
        $query_result = $query->result();
        return $query_result;
    }
    
    
        public function get_singlemodel_weight($id)
    {
        $this->db->where('weight_id',$id);
        $query = $this->db->get('weight');
        $query_result = $query->result();
        return $query_result;
    }
    
      public function get_singleeye_colour($id)
    {
        $this->db->where('eyecolor_id',$id);
        $query = $this->db->get('eyecolor');
        $query_result = $query->result();
        return $query_result;
    }
    
    
    public function get_singlehair_colour($id)
    {
        $this->db->where('haircolor_id',$id);
        $query = $this->db->get('haircolor');
        $query_result = $query->result();
        return $query_result;
    }
    
        public function get_singleethnicity($id)
    {
        $this->db->where('ethnicity_id',$id);
        $query = $this->db->get('ethnicity');
        $query_result = $query->result();
        return $query_result;
    }
    
    
    
         public function get_singlebody_type($id)
    {
        $this->db->where('bodytype_id',$id);
        $query = $this->db->get('bodytype');
        $query_result = $query->result();
        return $query_result;
    }
    
         public function get_singlereligino($id)
    {
        $this->db->where('religion_id',$id);
        $query = $this->db->get('religion');
        $query_result = $query->result();
        return $query_result;
    }
    
    
    
         public function get_singleeducation($id)
    {
        $this->db->where('education_id',$id);
        $query = $this->db->get('education');
        $query_result = $query->result();
        return $query_result;
    }
    
         public function get_singlemarital_status($id)
    {
        $this->db->where('marital_status_id',$id);
        $query = $this->db->get('marital_status');
        $query_result = $query->result();
        return $query_result;
    }
    
       public function get_singlesmoke($id)
    {
        $this->db->where('doyousmoke_id',$id);
        $query = $this->db->get('doyousmoke');
        $query_result = $query->result();
        return $query_result;
    }
        
       public function get_singledoyoudrink($id)
    {
        $this->db->where('doyoudrink_id',$id);
        $query = $this->db->get('doyoudrink');
        $query_result = $query->result();
        return $query_result;
    }
    
     public function get_singlecountry($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('countries');
        $query_result = $query->result();
        return $query_result;
    }
    
    // public function get_singlemodeldetail($id)
    // {
    //     $this->db->where('model_id',$id);
    //     $query = $this->db->get('model');
    //     $query_result = $query->result();
    //     return $query_result;
    // }


    public function get_singlemodeldetail($id)
    {
        $this->db->where('user_id',$id);
        $query = $this->db->get('user');
        $query_result = $query->result();
        return $query_result;
    }
    
    //  public function get_singlegallary($id)
    // {
    //     $this->db->where('model_id',$id);
    //     $query = $this->db->get('model_gallary');
    //     $query_result = $query->result();
    //     return $query_result;
    // }
    
    //  public function get_singlemodeldetaildashboard($id)
    // {
    //     $this->db->where('model_id',$id);
    //     $query = $this->db->get('model');
    //     $query_result = $query->row();
    //     return $query_result;
    // }

    //   public function get_body_partdashboard($id)
    // {
    //     $this->db->where('model_id',$id);
    //     $query = $this->db->get('model_body_info');
    //     $query_result = $query->row();
    //     return $query_result;
    // }
////////////////////////////////////////////////////////////API.....////

    public function get_row($tableName, $colName, $id){
        $this->db->where($colName, $id);
        $result = $this->db->get($tableName);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
        else
            return FALSE;
    }


    public function get_user_likes($user_id=''){
        $sql      = "SELECT `to_user_id` FROM `tbl_like_unlike` WHERE user_id= ".$user_id."";
       return $this->db->query($sql)->result();
    }

     function count_row($table,$where){
        $this->db->where($where);
        $data = $this->db->get($table); 
        $num = $data->num_rows();       
        if($num){
            return $num;
            }else{
            return false;
        }
    }


    public function like_count($user_id='',$entity_type='', $status=''){
        $this->db->where('to_user_id', $user_id);       
        $this->db->where('status', $status);
        return $count = $this->db->count_all_results('tbl_notification');
    } 

    
    
}