<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {





public function __construct() {

		parent::__construct();
    $this->load->model('Home_model');
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		
	  $this->load->database();
    $this->load->helper('url');
    $this->load->library('session');

    //$data['online_user'] = $this->Home_model->select_online_users();
    if(count($this->Home_model->select_online_users()))
      $data['online_user'] = $this->Home_model->select_online_users();
		}


public function register()

	{
		$data['cities'] = $this->Admin_model->searchcity();
    if($this->input->post('register'))

    {


	    $user_name    = $this->input->post('user_name');

			$user_email   = $this->input->post('user_email');

			$user_mobile  = $this->input->post('user_mobile');

			$user_pass    = $this->input->post('user_pass');

			$age          = $this->input->post('age');

			$gender       = $this->input->post('gender');

 

 $que=$this->db->query("select * from user where user_email='".$user_email."'");

 $row = $que->num_rows();

 if($row)

 {

 $data['error']="<h3 style='color:red'>This user already exists</h3>";

 }

 else

 {
 	
 $user_f_ui = $this->get_user_id($user_email, $user_pass);
 $post_data = (array) $this->input->post();
 unset($post_data['register']);
 $result = $this->Home_model->insertAllData('user', $post_data);
 if($result)
 {
	$data['error']="<h3 style='color:#fdb813'>Your account created successfully</h3>";
 }
 //$que=$this->db->query("insert into user (user_name,user_email,user_mobile,user_pass,gender,age)values('$user_name ','$user_email','$user_mobile','$user_pass','$gender','$age')");

 }

 }
 
 

 	$this->load->view('Health/header');

	$this->load->view('Health/signup',@$data);

	$this->load->view('Health/footer');

 

 }

 public function get_user_id($email,$password)
 {?>
 	<script>
 		var email = "<?= $email; ?>";
 		var password = "<?= $password; ?>";
		firebase.auth().createUserWithEmailAndPassword(email, password).then(data => {  
    return data.user.uid;
     })
     .catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
      }); 
	     
 	</script>
<?php } 

	public function user_login_process()
	{
        $this->load->library('form_validation');
		$data=array();
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('user_pass', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) 
        {
            if($this->form_validation->error_string()!="")
            {
              $data["error"] = '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Warning!</strong> '.$this->form_validation->error_string().'</div>';
            }
        }else
        {
         $q = $this->db->query("Select * from `user` where (`user_email`='".$this->input->post("user_email")."') and user_pass='".$this->input->post("user_pass")."'  Limit 1");
	    if ($q->num_rows() > 0)
	    {

            $row = $q->row();
            $newdata = array(
                  'model_name'  => $row->user_email,
                  'logged_in' => TRUE,
                  'user_id'=>$row->user_id,
                  'f_Uid'=>$row->f_Uid,
                  'user_name'=>$row->user_name
                    );

                  $this->session->set_userdata($newdata);
                  redirect('Welcome/Gallery');

        }else
        {


            $data["error"] = '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           <strong>Warning!</strong> Invalid User and password.</div>';
        }



		}
			$this->load->view('Health/header');
      $this->load->view('Health/login', $data);
      $this->load->view('Health/footer');
	}




public function Logout() {

// Removing session data
/*$sess_array = array(
'user_email' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);*/
$this->session->sess_destroy();
$data['message_display'] = 'Successfully Logout';
$this->load->view('Health/header');
$this->load->view('Health/login', $data);
$this->load->view('Health/footer');
}





 



  





 public function   myaccountEdit(){




 if($this->input->post('update'))

 {

      $user_id = $this->input->post("user_id");
      $user_pass       = $this->input->post('user_pass');
      $city       = $this->input->post('city');
      $education     = $this->input->post('education');
      $profession             = $this->input->post('profession');
      $drinking_habit             = $this->input->post('drinking_habit');
      $smoking             = $this->input->post('smoking');
      $eating_habit             = $this->input->post('eating_habit');
      $about_self             = $this->input->post('about_self');
      $interest_field_name             = $this->input->post('interest_field_name');

       $wheredata=array(
       'user_id'     =>$user_id,
       
   
       
      ); 


    $data = array( 
        'user_pass'              =>$user_pass,
        'city'                   =>$city,
        'education'              =>$education,
        'profession'             =>$profession,
        'drinking_habit'         =>$drinking_habit,
        'smoking'                =>$smoking,
        'eating_habit'           =>$eating_habit,
        'about_self'             =>$about_self,
        'interest_field_name'    =>$interest_field_name,

        );

  

      $result = $this->Home_model->updateData('user',$data,$wheredata);




      if($result){

        redirect('welcome/myaccount');
      }

        else{

          echo "do not update";
        }



 }
}


public function Like() {


    $user_id = $this->session->userdata('user_id');

    $postId = $this->input->post('postId');
    $status = $this->input->post('status');
     $entity = $this->input->post('entity');
    $entitylike = $this->input->post('entitylike');




    $result =  $this->db->query("INSERT into tbl_like_unlike (user_id,to_user_id,status) values ('$user_id','$postId','$status')");

    if ($result) {

       $this->db->query("INSERT into  tbl_notification (user_id,to_user_id,entity_type,entity) values ('$user_id','$postId','$entity','$entitylike')");

   
      
    }


 
  }

 
   /* public function Like(){

   
        $data = array(
            'user_id'     => $user_id,
            'to_user_id' => $to_user_id

        );

        print_r($data);die();

        $res_check = $this->db->query("SELECT * FROM `tbl_like_unlike` WHERE `to_user_id`='$to_user_id' and `user_id`='$user_id' ");
        

        if($res_check->num_rows()>0){
            $data_result['result'] ='false';
            $data_result['msg']    ='You are Already Like';
        }else{
        if ($user_id=$fvrtUser_id) {

        $result = $this->Main_modal->createData($data,'tbl_like_unlike');
        }

        else{
            echo 'Not addded to Like';
        }


        if ($result) {
            $data_result['result'] ='true';
            $data_result['is_status'] = '1';
            $data_result['msg'] = 'You addded to Like!!';
        }else{
            $data_result['result'] ='false';
            $data_result['is_status'] = '0';
            $data_result['msg'] ='Not addded to Like';
        }
         }

        echo json_encode($data_result);
    }

*/



}

