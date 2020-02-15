<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  
  public function select($table,$order=""){      
   $this->db->select('*');
   $this->db->order_by($order);
   $this->db->from($table);
   $query = $this ->db-> get();
   return $query->result_array();
  }

  public function selectAllData($table,$order_by,$where){
   $this->db->select('*');
   $this->db->where('p_admin_id', $where);
   $this->db->order_by($order_by);
   $this->db->from($table);
   $query = $this ->db->get();    
   return $query->result_array();
  }

  public function select_online_users(){
	$query  =  $this->db->query("SELECT 
                       tbl_like_unlike.user_id,
                       user.user_name,
                       user.user_email,
                       user.f_Uid,
                       new_usr.f_Uid as log_user_uid,
                       user.image1
                    FROM tbl_like_unlike
                    INNER JOIN user ON tbl_like_unlike.user_id = user.user_id 
                    INNER JOIN user as new_usr  ON tbl_like_unlike.to_user_id = new_usr.user_id 
                    WHERE
                    EXISTS (SELECT 1
                          FROM tbl_like_unlike
                          WHERE tbl_like_unlike.user_id = new_usr.user_id ) AND
                          tbl_like_unlike.to_user_id = '{$this->session->userdata('user_id')}' AND 
                          tbl_like_unlike.user_id != '{$this->session->userdata('user_id')}' AND 
                          tbl_like_unlike.status != 2 
                    GROUP BY tbl_like_unlike.user_id");

    // $this->db->select('tbl_like_unlike.user_id,
    //                    user.user_name,
    //                    user.user_email,
    //                    user.f_Uid,
    //                    new_usr.f_Uid as log_user_uid,
    //                    user.image1
    //                  ');
    // $this->db->from('tbl_like_unlike');
    // $this->db->join('user', 'user.user_id = tbl_like_unlike.user_id');
    // $this->db->join('user as new_usr', 'new_usr.user_id = tbl_like_unlike.to_user_id');
    // $this->db->where('tbl_like_unlike.to_user_id=',$this->session->userdata('user_id'));
    // $this->db->where('tbl_like_unlike.user_id!=',$this->session->userdata('user_id'));
    // $this->db->where('tbl_like_unlike.status !=',2);
    // $this->db->group_by("tbl_like_unlike.user_id");

    //$query = $this->db->get();
    
    return $query->result_array();
  }

  public function count($tbl,$id)
  {
    $this->db->select($id);
    // $this->db->distinct();
    $this->db->from($tbl);
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function deleteMulti($tableName, $wh) {
      $this->db->where($wh);
      $this->db->delete($tableName);
      return TRUE;
  }

  function insertAllData($table,$userdata)
  { 
    $this->db->insert($table, $userdata);
    $insert_id = $this->db->insert_id();
    // echo $this->db->last_query();exit();
    return  $insert_id;
      
  }

    public function updateData($table,$data,$wheredata){

    $this->db->where($wheredata);

    $updateData=$this->db->update($table,$data);

    // echo $this->db->last_query();

    if($updateData){

      return $updateData;

    }else{

      return false;

    }

  }

  public function selectorganizer ($search) {
    $condition = "search = '" . $search . "'";
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where($condition);
    $query = $this->db->get();
    return $result = $query->result();
} 


  public function login($data) {

$condition = "user_email =" . "'" . $data['user_email'] . "' AND " . "user_pass =" . "'" . $data['user_pass'] . "'";
$this->db->select('*');
$this->db->from('user');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

public function read_user_information($sess_array) {

$condition = "user_email =" . "'" . $sess_array['user_email'] . "'";
$this->db->select('*');
$this->db->from('user');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}



  public function record_count($table,$data='')
  {
    if(!empty($data))
    {
      $this->db->where($data);
    }
    $this->db->from($table);
    return $this->db->count_all_results();
  }

  public function createData($data,$table){

    $this->db->set($data);

    $insertData = $this->db->insert($table);

    if($insertData){

      return TRUE;

    }else{

      return FALSE;

    }

  }

  
  public function insert($table,$data)

  {   $this->db->insert($table, $data);

       $insert_id = $this->db->insert_id();

       /*  echo $this->db->last_query();exit();*/

    return  $insert_id;

      

  }  

   public function selectAllById($table,$wheredata)
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

     public  function search($nsearch)
    {
        $this->db->like('user_name',$nsearch);
        $query  =   $this->db->get('user');
        return $query->result();
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

public function deleteMultsi($tableName, $wh) {
      $this->db->where($wh);
      $this->db->delete($tableName);
      return TRUE;
  }

  function displayblog()
 {
 $query=$this->db->query("select * from blog");
 return $query->result();
 }


   function displayblog1()
 {
 $query=$this->db->query("select * from blog");
 return $query->result();
 }

  function blogsave($n,$e,$d,$m)
 {
 $query="insert into blog (blogname,title,description,image) values ('$n','$e','d','$m')";
 $this->db->query($query);
 }

   public function displayblogid($id)
  {
  $query=$this->db->query("select * from blog where blog_id='".$id."'");
  return $query->result();
  }


  function updateblog($blogname,$title,$des,$image_name,$id)
 {
 $query=$this->db->query("update blog SET blogname='$blogname', title='$title', description='$description', image='$image_name' where blog_id='".$id."'");
 }


  function updateblog1($blogname,$title,$des,$id)
 {
 $query=$this->db->query("update blog SET blogname='$blogname', title='$title', description='$description' where blog_id='".$id."'");
 }

}


?>