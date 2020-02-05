<?php
if(!defined('BASEPATH')) exit ('No direct script access allowed');
class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    // $this->load->model('Api_model');
  }

  public function index()
  {
    $data['title']='Admin | Slay Connect';
    $this->load->view('admin/header',$data);
    $this->load->view('admin/index',$data);
  }


  public function login()
  {
    $data['title']= 'Admin | Slay Connect';
    $this->load->view('admin/header',$data);

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) 
    {
      if($this->form_validation->error_string()!="")
      {
        $data["error"] = '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <strong>Warning!</strong> '.$this->form_validation->error_string().'
          </div>';
      }
      }else
      {
        $q = $this->db->query("Select * from `admin` where (`admin_email`='".$this->input->post("email")."') and admin_password='".md5($this->input->post("password"))."'  Limit 1");
            // print_r($q) ; 
        if ($q->num_rows() > 0)
        {
          $row = $q->row(); 
          if($row->admin_status == "0")
          {
            $data["error"] = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>Warning!</strong> Your account currently inactive.</div>';
          }
          else
          {
            $newdata = array(
             'admin_name'  => $row->admin_fullname,
             'admin_email'     => $row->admin_email,
             'logged_in' => TRUE,
             'admin_id'=>$row->admin_id,
             'admin_type_id'=>$row->admin_type_id,
             'admin_image'=>$row->admin_image
            );
            $this->session->set_userdata($newdata);
            redirect('admin/dashboard');
                         
          }
        }
        else
        {
          $data["error"] = '<div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <strong>Warning!</strong> Invalid User and password. </div>';
        }
                   
                    
      }

    $this->load->view("admin/index",$data);
  }


     

  


  public function deactiveUser($id)
  {  
    if (!$this->session->userdata('admin_id') ) 
    {
      redirect('admin');
    }
    $this->db->query("Update  `user` SET user_status='0' where user_id = '".$id."'");
    $this->session->set_flashdata("success_req",'<div class="alert alert-success alert-dismissible" role="alert">
      <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Success!</strong>User Deactive successfully...</div>');

    redirect("admin/user");
  }


  public function user()
  {
   if (!$this->session->userdata('admin_id'))
   {
      redirect('admin');
    }

    $data['title']='User | Slay Connect';
    $this->load->view('admin/header',$data);
    $data['city']  = $this->Admin_model->select('cities');
  
    $wheredata=array(
      'gender'=>'Male'
    );
    // $data['user']=$this->Admin_model->selec_users('user','user_id DESC');
    $data['user']=$this->Admin_model->selectAllById('user',$wheredata);
    $this->load->view('admin/user/user',$data);
  }

  public function Alluser()
  {
   if (!$this->session->userdata('admin_id'))
   {
      redirect('admin');
    }

    $data['title']='User | Slay Connect';
    $this->load->view('admin/header',$data);
    $data['city']  = $this->Admin_model->select('cities');
  
   
    $data['user']=$this->Admin_model->selec_users('user','user_id DESC');
  
    $this->load->view('admin/user/user',$data);
  }

  public function female_user()
  {
   if (!$this->session->userdata('admin_id'))
   {
      redirect('admin');
    }

    $data['title']='User | Slay Connect';
    $this->load->view('admin/header',$data);
    $data['city']  = $this->Admin_model->select('cities');
  
    $wheredata=array(
      'gender'=>'Female'
    );
    // $data['user']=$this->Admin_model->selec_users('user','user_id DESC');
    $data['user']=$this->Admin_model->selectAllById('user',$wheredata);
    $this->load->view('admin/user/user',$data);
  }

 /*  public function cities() {
        
    $data = array(
        'city'              =>$city,
    

        );

        $query = $this->db->query('SELECT id,name FROM cities join WHERE country_id=' . $country_id);
        $data['cities'] = $query->result_array();
        $this->load->view('index/cities', $data);
        echo $country_id;
    }*/

   public function  UserDelete($user_id)
  {  
    if (!$this->session->userdata('admin_id') ) 
    {
    redirect('admin');
    }
       
    $this->db->query("Delete from `user` where user_id = '".$user_id."'");
              
    $this->session->set_flashdata("success_req",'<div class="alert alert-success alert-dismissible" role="alert">
    <i class="fa fa-check"></i>
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Success!</strong> User deleted successfully...
    </div>');

    redirect("admin/user");
         
  }




   public function addPhotos()
    {
      if ($this->session->userdata('admin_id')) {
       $fileName       = 'webdata/img/yoga_imges/'.$_FILES["yoga_img"]["name"];
       $path           = base_url().'webdata/img/yoga_imges/' . $_FILES['yoga_img']['name'];
       // $path           = 'http://ho.edupare.com/edupare/assets/img/' . $_FILES['cat_image']['name'];
       if(!empty($_FILES['yoga_img']['name'])){
          if(move_uploaded_file($_FILES['yoga_img']['tmp_name'],$fileName)){
            $data = array(
              'yoga_name'     => $this->input->post('yoga_name'),
              'yoga_img'    =>$path
            );
            $result = $this->Model->insert('yoga_images', $data);
           if ($result) {
              $this->session->set_flashdata('sucesscate', '<div class="alert alert-success ">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Gallery Image Add Sucessfully!!</strong>.
              </div>');
              redirect('Welcome/images');
            }else{
              $this->session->set_flashdata('not', '<div class="alert alert-danger ">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Gallery Image Not Add!!</strong>.
              </div>');
              redirect('Admin/allPhotos');
            }
          }else{
            redirect('Admin', 'refresh');
          }
        }else {
          redirect('Admin', 'refresh');
        }  
      }else {
        redirect('Admin');
      }
    }


    public function viewblog()
    {

   if (!$this->session->userdata('admin_id')){
      redirect('admin');
     }

      $data['title']='Category | Slay Room';
      $this->load->view('admin/header',$data);

      $result['data']=$this->Admin_model->displayblog();
      $this->load->view('admin/viewblog',$result);
 }

  



 



   public function BlogAdd()
 {
 //load registration view form


 if (!$this->session->userdata('admin_id'))
    {
      redirect('admin');
    }

    $data['title']='Product | Cost Admin';
  $this->load->view('admin/header',$data);
 

 if($this->input->post('submit'))
 {

 $n=$this->input->post('blogname');
 $e=$this->input->post('title');
 
 $me=$this->input->post('mes');
 $su=$this->input->post('superlike');
 $d=$this->input->post('des');
 $m = $_FILES['image']['name'];
 /* list($txt, $ext) = explode(".", $m);
  $image_name = time().".".$ext;*/
  $tmp = $_FILES['image']['tmp_name'];


  if(move_uploaded_file($tmp, 'upload/'.$m)){
 
//call saverecords method of Hello_Model and pass variables as parameter
 $this->Admin_model->blogsave($n,$e,$me,$su,$d,$m); 
 echo "Records Saved Successfully";
 }
 }
  $this->load->view('admin/addblog');
}

 public function blogdelete($blog_id)
  {  
    if (!$this->session->userdata('admin_id') ) 
    {
    redirect('admin');
    }
       
    $this->db->query("Delete from `blog` where blog_id = '".$blog_id."'");
              
    $this->session->set_flashdata("success_req",'<div class="alert alert-success alert-dismissible" role="alert">
    <i class="fa fa-check"></i>
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Success!</strong> Spplier deleted successfully...
    </div>');

    redirect("admin/viewblog");
         
  }



  function blogEdit()
 {

  if (!$this->session->userdata('admin_id'))
    {
      redirect('admin');
    }

 $data['title']='Product | Cost Admin';
 $this->load->view('admin/header',$data);
 $id=$this->input->get('id');
 $result['data']=$this->Admin_model->displayblogid($id);
 $this->load->view('admin/editblog',$result);
 if($this->input->post('update'))
 {

  $blogname=$this->input->post('blogname');
  $title=$this->input->post('title');
  $superlike=$this->input->post('superlike');
  $mes=$this->input->post('mes');
  $des=$this->input->post('des');
  $image_name = $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  if(empty(move_uploaded_file($tmp, 'upload/'.$image_name))){

 $this->Admin_model->updateblog1($blogname,$title,$superlike,$mes,$des,$id);
 redirect("admin/viewblog");
 }else{

   $this->Admin_model->updateblog($blogname,$title,$superlike,$mes,$des,$image_name,$id);
    redirect("admin/viewblog");
 }




 }
}

 
 
}