<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
  
  public function select($table,$order=""){      
   $this->db->select('*');
   $this->db->order_by($order);
   $this->db->from($table);
   $query = $this ->db-> get();
   return $query->result_array();
  }  

  function updateData($table,$data,$id)
  { 
    $this->db->where('user_id', $id);
    $this->db->update($table, $data);
    return true;
  }

  public function selec_users($table,$order=""){ 
    $this->db->select('user.*, cities.city_name');
    $this->db->from('user');
    $this->db->join('cities', 'cities.city_id = user.city');
    $this->db->order_by('user_id DESC');
    $query = $this->db->get();
    return $query->result_array();
  }

 public function searchcity()
  {
  $query=$this->db->query("select * from cities");
  return $query->result_array();
  }
  function displayprofile1($user_id)
 {
 $query=$this->db->query("select * from user where user_id='".$user_id."'");
 return $query->result();
 }


  public function selectgalary()
  {
  $query=$this->db->query("select * from user");
  return $query->result_array();
  }


  public function like_count($id){
    $query = $this->db->query("SELECT COUNT(*) as total_like_n_superl  FROM tbl_like_unlike where to_user_id ='$id' AND (status=1 OR status=3)");
    return $query->row();
        
    }

  public function likes_n_slike_users($id){
    $this->db->select('user.*,
                        tbl_like_unlike.status as like_status,
                        tbl_like_unlike.date_time as like_date_time,
                        cities.city_name as city_name');
    $this->db->from('tbl_like_unlike');
    $this->db->join('user', 'tbl_like_unlike.user_id = user.user_id');
    $this->db->join('cities', 'user.city = city_id');
    $this->db->where('tbl_like_unlike.to_user_id',$id);
    $this->db->where('tbl_like_unlike.status !=',2);
    $this->db->where('tbl_like_unlike.status !=',4);
    $query = $this->db->get();
    return $query->result_array(); 
    }


 public  function searchd($search)
    {
        $this->db->like('user_name',$search);
        $query  =   $this->db->get('user');
        return $query->result();
    }

  public function count($tbl,$id)
  {
    $this->db->select($id);
    // $this->db->distinct();
    $this->db->from($tbl);
    $query = $this->db->get();
    return $query->num_rows();
  }

// public function select($table,$order=""){ 
        
//    $this->db->select('*');
//    $this->db->order_by($order);
//    $this->db->from($table);
//    $query = $this ->db-> get();
//    return $query->result_array();
//   }

  public function record_count($table,$data='')
  {
    if(!empty($data))
    {
      $this->db->where($data);
    }
    $this->db->from($table);
    return $this->db->count_all_results();
  }


   public function selectAllById($table,$wheredata="")
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($wheredata);
    $query = $this->db->get();
    return $query->result_array();
  }
 
  public function get_yoga_images()
    {
      $query = $this->db->get('yoga_images');
      $query_result = $query->result();
      return $query_result;
    }


  // public function GetUserById($id)
  //   { 
  //     $this->db->where('user_id',$id);
  //     $query = $this->db->get('user');
  //     $query_result = $query->row();
  //     return $query_result;
  // }
    
  // public function EditUser($id)
  // {

  //   $data_arr=array(

  //     'user_name'=>$this->input->post("user_name"),
  //     'user_email'=>$this->input->post("user_email"),
  //     'user_mobile'=>$this->input->post("user_mobile"),
  //     // 'user_pass'=>$this->input->post("user_pass"),
  //     'user_status'=>1,
  
  //   ); 

  //   if($_FILES["user_img"]["size"] > 0){
  //     $config['upload_path'] = './upload/admin/User';
  //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
  //     $this->load->library('upload', $config);
    
  //    if ( ! $this->upload->do_upload('user_img'))
  //     {
  //       $error = array('error' => $this->upload->display_errors());
  //     }
  //     else
  //     {
  //       $img_data = $this->upload->data();
  //       $data_arr["user_img"]=$img_data['file_name'];
  //     }
                        
  //   }

  //   $this->db->where('user_id',$id);

  //   return $this->db->update('user',$data_arr);
  // }

 //27-01-2019
    
 public function Get_Gallery_img()
  { 
      
    $query = $this->db->get('yoga_images');
    $query_result = $query->result();
    return $query_result;
  }

  public function GetProducts()
  { 
      $query = $this->db->get('product');
      $query_result = $query->result();
      return $query_result;
  }

  // public function Getsingleplan($id)
  // { 
  //     $this->db->where('plan_id',$id);
  //     $query = $this->db->get('plan');
  //     $query_result = $query->result();
  //     return $query_result;
  // }

  // public function Updateplan($id)
  // {

  //     $data_arr=array(

  //       'Plan_name'=>$this->input->post("Plan_name"),
  //       'Plan_price'=>$this->input->post("Plan_price"),
  //       'p_type'=>$this->input->post("p_type"),
     
  //     ); 
  //     $this->db->where('plan_id',$id);

  //        return $this->db->update('plan', $data_arr);
  // }


  // public function Getsupportticket()
  // { 
      
  //     $this->db->join('user','user.user_id=ticket_support.userid');
  //     $query = $this->db->get('ticket_support');
  //     $query_result = $query->result();
  //     return $query_result;
  // }




  // public function Getsite_pagesByid($id)
  // { 
  //     $this->db->where('site_pages_id',$id);
  //     $query = $this->db->get('site_pages');
  //     $query_result = $query->result();
  //     return $query_result;
  // }

  // public function Updatepage($id)
  // {

  //     $data_arr=array( 
  //         'title'=>$this->input->post("text"),
  //         'text'=>$this->input->post("editor1"),   
  //            ); 
  //     $this->db->where('site_pages_id',$id);
  //        return $this->db->update('site_pages', $data_arr);
  // }

 public  function search($location="",$min=18,$max=80)
    {
      if(!empty($location))
      {
        $query = $this->db->query("SELECT * from user where age BETWEEN '$min' AND '$max' AND  city = '$location'");
      }else{
        $query = $this->db->query("SELECT * from user where age BETWEEN '$min' AND '$max'");
      }
     return $query->result();
   }

    public  function usercount()
    {
     
      $query=$this->db->query("SELECT COUNT(user_id) FROM user");
     return $query->num_rows();
   }

   public function countRow(){
$query = $this->db->query("SELECT count(*) user_id  FROM user");
    // print_r($query->result());
    return $query->result();
}




/*
    public function countRow(){
$query = $this->db->query("SELECT *,count(user_id)  FROM user");
    // print_r($query->result());
    return $query->result();
}*/

function userprofile()
 {
 $query=$this->db->query("select * from user where user_id='$user_id'");
 return $query->result();
 }

/*  public function get_user($id)
 {
     $this->db->where('user_email', $id);
     $user_query = $this->db->get('user');

     return $user_query->result();
 }
*/

 function get_user($id)
 {
 $query=$this->db->query("SELECT user.*, cities.city_name as city FROM user
 INNER JOIN cities ON user.city = cities.city_id where user_id = '$id'");
 return $query->result();
 }

 function get_user_profile($id)
 {
 $query=$this->db->query("SELECT user.*, cities.city_name as city_name FROM user
 INNER JOIN cities ON user.city = cities.city_id where user.user_id = '{$id}'");
 
return $query->row();
 }


  function displayblog()
 {
 $query=$this->db->query("select * from blog");
 return $query->result();
 }




  function blogsave($n,$e,$me,$su,$d,$m)
 {
 $query="insert into blog (blog_name,title,message,superlike,des,image) values ('$n','$e','$me','$su','$d','$m')";
 $this->db->query($query);
 }

   public function displayblogid($id)
  {
  $query=$this->db->query("select * from blog where blog_id='".$id."'");
  return $query->result();
  }


  function updateblog($blogname,$title,$superlike,$mes,$des,$image_name,$id)
 {
 $query=$this->db->query("update blog SET blog_name='$blogname', title='$title',message='$mes',superlike='$superlike', des='$des', image='$image_name' where blog_id='".$id."'");
 }


  function updateblog1($blogname,$title,$superlike,$mes,$des,$id)
 {
 $query=$this->db->query("update blog SET blog_name='$blogname', title='$title',message='$mes',superlike='$superlike', des='$des' where blog_id='".$id."'");
 }

}


?>