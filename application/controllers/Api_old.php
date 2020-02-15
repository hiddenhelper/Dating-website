<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_modal');
        $this->load->model('Api_modal');
        $this->output->set_content_type('application/json');
        $this->load->helper('custom');
        
       
    }
   
    // signup......
    public function SignUp(){
        $user_name   = $this->input->get_post('user_name');
        $user_email  = $this->input->get_post('user_email');
        $user_pass   = $this->input->get_post('user_pass');        
        $mobile      = $this->input->get_post('mobile');
        $gender      = $this->input->get_post('gender');
        $age         = $this->input->get_post('age');
        $age_status  = $this->input->get_post('age_status');
        $lat         = $this->input->get_post('lat');
        $lng         = $this->input->get_post('lng');
        $city        = $this->input->get_post('city');
        $register_id = $this->input->get_post('register_id');
        $f_Uid = $this->input->get_post('f_Uid');
        
        $cityD = $this->Api_modal->get_row('cities', 'city_name', $city);
        if(empty($cityD)){
            $dataset =  array('city_name'=>$city);
            $cityid =   $this->Api_modal->add('cities', $dataset) ;
        }else{
            $cityid = $cityD->city_id; 
        }
        
        $data = array(
            'user_name'         => $user_name,
            'user_email'        => $user_email,
            'gender'            => $gender,
            'user_pass'         => $user_pass,
            'user_mobile'       => $mobile,
            'age'               => $age,             
            'age_status'        => $age_status,
            'register_id'       => $register_id,
            'lat'               => $lat,
            'lng'               => $lng,
            'city'              => $cityid,
            'f_Uid'             => $f_Uid
            
            
        );
        
        $res_check = $this->db->query("SELECT * FROM `user` WHERE `user_email`='$user_email' ");

        if($res_check->num_rows()>0){
            $data_result['result'] ='false';
            $data_result['msg']    ='Email Already Exist';
        }else{


            $wheredata=array(
            'user_email'  => $user_email
        );

          $res =   $this->Api_modal->add('user', $data) ;
       // if($result = $this->Main_modal->createData($data,'user')){
       if(!empty($res)){
          $result=$this->Api_modal->single_user_data($res);

            if ($result)
            {

                $data_result['result'] = 'true';
                $data_result['data']   = $result;
                $data_result['msg']    = 'Registered Successfully!';
               
            }else {
                $data_result['result'] = 'false';
                $data_result['msg']    = 'Sorry Not Registered!';
            }
        }else{
                $data_result['result'] = 'false';
                $data_result['msg']    = 'Sorry User Not Registered !';
        }}    
        echo json_encode($data_result);

    }
    

   // Login.........
   public function login(){
      date_default_timezone_set('Asia/Calcutta');
      $date = date('Y-m-d H:i:s');
      $user_email      = $this->input->get_post('user_email');
      $user_pass       = $this->input->get_post('user_pass');
      $register_id     = $this->input->get_post('register_id');
      $lat             = $this->input->get_post('lat');
      $lng             = $this->input->get_post('lng');
      $wheredata=array(
       'user_email'     =>$user_email,
        'user_pass'     =>$user_pass
        
       
      ); 
     
    
        $data = array(
        'user_email'    =>$user_email,
        // 'user_pass' =>$user_pass,
        'register_id'  =>$register_id,
        'lat'          =>$lat,
        'lng'          =>$lng
        );
    

      $result = $this->Main_modal->updateData('user', $data,$wheredata);
     if($result){
      $data_result['result']   = 'true';
        $data_result['data']   = $result;
        $data_result['msg']    = 'user Login and Updated Successfully!';
        
       }else{

        $result = $this->Main_modal->insert('user',$data);
        
       }
     $result=$this->Api_modal->single_user($wheredata);
        if ($result) {
            $data_result['result'] = 'true';
            $data_result['msg']    = 'Login Successfully!!';
            $data_result['data']   = $result;
        } else {
            $data_result['result'] = 'false';
            $data_result['msg']    = 'Invalid credentials!!';
            $data_result['data']   = 'false';
        }
        echo json_encode($data_result);
    }

    public function logout()
    {
    extract($_POST);
    if(isset($user_id))
    {
    $updateData = array(
    'register_id'=>""
    );
    $wheredata = array(
    'user_id'=>$user_id
    );
    if($this->Main_modal->updateData('user', $updateData,$wheredata))
    {
    $data_result['result'] = 'true';
    $data_result['msg'] = 'Successfully logout.';
    }
    }else{
    $data_result['result'] = 'false';
    $data_result['msg'] = 'Please give paramerter(user_id), method_name POST';
    }
    echo json_encode($data_result);
    }
      

    //api for get common user 
    public function commonInterest(){
      $user_id  =  $this->input->get_post('user_id');
      $user = $this->Api_modal->get_row('user','user_id',$user_id);
      $userLike = $this->Api_modal->get_user_likes($user_id);
      $likeids='';
      if(!empty($userLike))
      {
        foreach($userLike as $ulike)
        {
            $likeids .= "'".$ulike->to_user_id."',";
        }
        
        $likeids = rtrim($likeids,',');
      }
      $whereAry ='';
      if($likeids!='')
      {
        $whereAry = " and `user_id` NOT IN(".$likeids.") ";    
      }

      if(!empty($user->interest_id) && $user->interest_id!=0){
        $userIntrest =  explode(",", $user->interest_id);
       
        $sql = "SELECT * FROM `user`WHERE user_id!= ".$user_id." AND gender != '{$user->gender}' $whereAry";
        $getList = $this->db->query($sql)->result_array();
        $arrUrs = array();
        foreach ($getList as $key => $value) {
          $interestID = explode(",",$value['interest_id']);
          $user_id =  $value['user_id'];
          for ($i=0; $i <count($userIntrest); $i++) { 
            if(in_array($userIntrest[$i], $interestID)){
                      
                      if(in_array($user_id, $arrUrs)){
                        continue;
                      }
                
                        $arrUrs[] =$user_id;
                  
                        $cityD = $this->Api_modal->get_row('cities','city_id',$value['city']);
                     
                        $wheredata1= array('status' =>3, 'to_user_id' => $user_id);
                        $superLike = $this->Api_modal->count_row('tbl_like_unlike', $wheredata1);

                        if (!$superLike) {
                          $superLike=0;
                        }
                     
                            $data[] = array(
                            "user_id"               => $user_id,
                            "user_name"             => $value['user_name'],
                            "user_email"            => $value['user_email'],
                            "user_pass"             => $value['user_pass'],
                            "user_mobile"           => $value['user_mobile'],
                            "address"               => $value['address'],
                            "city"                  => $value['city'],
                            "lat"                   => $value['lat'],
                            "lng"                   => $value['lng'],
                            "gender"                => $value['gender'],
                            "user_status"           => $value['user_status'],
                            "age"                   => $value['age'],
                            "age_status"            => $value['age_status'],
                            "register_id"           => $value['register_id'],
                            "image1"                => $value['image1'],
                            "image2"                => $value['image2'],
                            "image3"                => $value['image3'],
                            "image4"                => $value['image4'],
                            "image5"                => $value['image5'],
                            "image6"                => $value['image6'],
                            "education"             => $value['education'],
                            "profession"            => $value['profession'],
                            "drinking_habit"        => $value['drinking_habit'],
                            "smoking"               => $value['smoking'],
                            "eating_habit"          => $value['eating_habit'],
                            "about_self"            => $value['about_self'],
                            "interest_field_name"   => $value['interest_field_name'],
                            "interest_id"           => $value['interest_id'],
                            "f_Uid"                 => $value['f_Uid'],
                            "city_name"             => $cityD->city_name,
                            'super_like_count'      => $superLike
        
                            );
        
        
                           }
                       }
                       
               }
           
           
                  if(!empty($data)){
                    $data_result['result'] = 'true';
                    $data_result['msg']    = 'All Interest List';
                    $data_result['count']  =  $superLike;
                    $data_result['data']   = $data;
            
                  }else {
                        $data = array();
                        $data_result['msg']    = 'Sorry Not in List';
                        $data_result['result'] = 'false';
                        $data_result['data']   = $data;
                  }
            }else{
        
              $data = array();
              $data_result['msg']    = 'No interest foud';
              $data_result['result'] = 'false';
              $data_result['data']   = $data;
        
            }
              echo json_encode($data_result);
              // exit();

    }

    public function Images_Updated(){  
        $user_id       = $this->input->get_post('user_id');
        $image1        = $this->input->get_post('image1');
        $image2        = $this->input->get_post('image2');
        $image3        = $this->input->get_post('image3');
        $image4        = $this->input->get_post('image4');
        $image5        = $this->input->get_post('image5');
        $image6        = $this->input->get_post('image6');
        
        $wheredata=array(
          'user_id'  => $user_id
         
        );
       
        if(!empty($_FILES['image1']['name']))
        {
          
          $image1 = time().$_FILES["image1"]['name'];
          $config['upload_path'] = 'images/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|png';
          $config['file_name'] = $image1;
          $config['overwrite'] = TRUE;
          $config['remove_spaces'] = TRUE;
          
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('image1')) {
           $error = array('error' => $this->upload->display_errors());
             echo $error['error'];
            }else{        
            $imageDetailArray = $this->upload->data();
            $image1 =  $imageDetailArray['file_name'];
          }
        }
       if($image1){

         $updateData['image1'] = $image1;

       }else{
        $updateData['image1'] = '';
       }


       
       if(!empty($_FILES['image2']['name']))
        {
          
          $image2 = time().$_FILES["image2"]['name'];
          $config['upload_path'] = 'images/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|png';
          $config['file_name'] = $image2;
          $config['overwrite'] = TRUE;
          $config['remove_spaces'] = TRUE;
          
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('image2')) {

            $error = array('error' => $this->upload->display_errors());
             echo $error['error'];
            }else{
            
            $imageDetailArray = $this->upload->data();
            $image2 =  $imageDetailArray['file_name'];

          }
        }
       if($image2){

         $updateData['image2'] = $image2;

       }else{
        $updateData['image2'] = '';
       }
      
       if(!empty($_FILES['image3']['name']))
        {
         
          $image3 = time().$_FILES["image3"]['name'];
          $config['upload_path'] = 'images/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|png';
          $config['file_name'] = $image3;
          $config['overwrite'] = TRUE;
          $config['remove_spaces'] = TRUE;
          
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('image3')) {

            $error = array('error' => $this->upload->display_errors());
             echo $error['error'];
            }else{
            
            $imageDetailArray = $this->upload->data();
            $image3 =  $imageDetailArray['file_name'];

          }
        }
       if($image3){

         $updateData['image3'] = $image3;

       }else{
        $updateData['image3'] ='';
       }
       
       if(!empty($_FILES['image4']['name']))
        {

          $image4 = time().$_FILES["image4"]['name'];
          $config['upload_path'] = 'images/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|png';
          $config['file_name'] = $image4;
          $config['overwrite'] = TRUE;
          $config['remove_spaces'] = TRUE;
          
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('image4')) {

            $error = array('error' => $this->upload->display_errors());
             echo $error['error'];
            }else{
            
            $imageDetailArray = $this->upload->data();
            $image4 =  $imageDetailArray['file_name'];

          }
        }
       if($image4){

         $updateData['image4'] = $image4;

       }else{
        $updateData['image4'] = '';
       }

        if(!empty($_FILES['image5']['name']))
        {
         
          $image5 = time().$_FILES["image5"]['name'];
          $config['upload_path'] = 'images/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|png';
          $config['file_name'] = $image5;
          $config['overwrite'] = TRUE;
          $config['remove_spaces'] = TRUE;
          
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('image5')) {

            $error = array('error' => $this->upload->display_errors());
             echo $error['error'];
            }else{
            
            $imageDetailArray = $this->upload->data();
            $image5 =  $imageDetailArray['file_name'];

          }
        }
       if($image5){

         $updateData['image5'] = $image5;

       }else{
        $updateData['image5'] ='';
       }

        if(!empty($_FILES['image6']['name']))
        {
        
          $image6 = time().$_FILES["image6"]['name'];
          $config['upload_path'] = 'images/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|png';
          $config['file_name'] = $image6;
          $config['overwrite'] = TRUE;
          $config['remove_spaces'] = TRUE;
          
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('image6')) {

            $error = array('error' => $this->upload->display_errors());
             echo $error['error'];
          }else{
            
            $imageDetailArray = $this->upload->data();
            $image6 =  $imageDetailArray['file_name'];

          }
        }
       if($image6){

         $updateData['image6'] = $image6;

       }else{
         $updateData['image6'] ='';
       }

        if(!empty($user_id)){
            $wheredata=array(
            'user_id'  => $user_id
         
        );
         if($result= $this->Main_modal->updateData('user', $updateData,$wheredata)){

          $result1=$this->Main_modal->singleRowdata($wheredata,'user');

              if ($result1)
              {

                  $data_result['result'] = 'true';
                  $data_result['data']   =$result1;
                  $data_result['msg']    = 'Update Successfully!';
                 
              }else {
                  $data_result['result'] = 'false';
                  $data_result['msg']    = 'Sorry Not Update!';
              }
          }else{
              $data_result['result'] = 'false';
              $data_result['msg']    = 'Sorry User Not Update !';
          }
        }

         echo json_encode($data_result);

    } 


    //update profile
    public function Update_Profile() {

	    date_default_timezone_set('Asia/Calcutta');
	    $date = date('Y-m-d H:i:s');
	    $user_id          = $this->input->get_post('user_id');
	    $user_name        = $this->input->get_post('user_name');
	    $education        = $this->input->get_post('education');   
	    $profession       = $this->input->get_post('profession');
	    $drinking_habit   = $this->input->get_post('drinking_habit');
	    $smoking          = $this->input->get_post('smoking');
	    $eating_habit     = $this->input->get_post('eating_habit');
	    $about_self       = $this->input->get_post('about_self');
	    $city             = $this->input->get_post('city');
	    $interest_id      = $this->input->get_post('interest_id');
	    $interest_field_name   = $this->input->get_post('interest_field_name');
   
        $cityD = $this->Api_modal->get_row('cities', 'city_name', $city);
        
        if(empty($cityD)){
            $dataset =  array('city_name'=>$city);
            $cityid =   $this->Api_modal->add('cities', $dataset) ;
        }else{
            $cityid = $cityD->city_id; 
        }
      
	    $data = array(
	      'user_id'          =>$user_id,
	      'user_name'        =>$user_name,
	      'education'        =>$education,            
	      'profession'       =>$profession,
	      'drinking_habit'   =>$drinking_habit,
	      'smoking'          =>$smoking,
	      'eating_habit'     =>$eating_habit,
	      'city'             =>$cityid,
	      'about_self'       =>$about_self,
	      'interest_field_name'=>$interest_field_name,
	      'interest_id'      =>$interest_id
	    );
       $wheredata = array(
          'user_id' => $this->input->get_post('user_id')
       );

      if($result=$this->Main_modal->selectAllById('user',$wheredata)){
          $result = $this->Main_modal->updateData('user', $data,$wheredata);
        if ($result) {
              
         // $res_update            = $this->Main_modal->selectAllById('user', $wheredata);
            $res_update=$this->Api_modal->single_user_data($user_id);
          $data_result['result'] = 'true';
          $data_result['data']   = $res_update;
          $data_result['msg']    = 'User Edit Successfully!';
            
        } else {
          $data_result['result'] = 'false';
          $data_result['msg']    = 'User Not Edit!';
          
        } 
      }else{
          $data_result['result'] = 'false';
          $data_result['msg']    = 'User id not exist!';
        }

      echo json_encode($data_result);        
    }




    //get user profile  
    public function Get_Profile() {
        $user_id=$this->input->get_post('user_id');

          $wheredata=array(
           'user_id'=>$user_id
          ); 
           //$result=$this->Main_modal->selectAllById('user',$wheredata);
          $result=$this->Api_modal->single_user_data($user_id);
          
          if($result){
              $superLike = $this->Api_modal->like_count($user_id, 3);
              //foreach ($result as $key => $user) {
              $arr= array(
                  "user_id"           =>$result->user_id,
                  "user_name"         =>$result->user_name,
                  "user_email"        =>$result->user_email,
                  "user_pass"         =>$result->user_pass,
                  "user_mobile"       =>$result->user_mobile,
                  "address"           =>$result->address,
                  "city"              =>$result->city,
                  "lat"               =>$result->lat,
                  "lng"               =>$result->lng,
                  "gender"            =>$result->gender,
                  "user_status"       =>$result->user_status,
                  "age"               =>$result->age,
                  "age_status"        =>$result->age_status,
                  "register_id"       =>$result->register_id,
                  "image1"            =>$result->image1,
                  "image2"            =>$result->image2,
                  "image3"            =>$result->image3,
                  "image4"            =>$result->image4,
                  "image5"            =>$result->image5,
                  "image6"            =>$result->image6,
                  "education"           =>$result->education,
                  "profession"          =>$result->profession,
                  "drinking_habit"      =>$result->drinking_habit,
                  "smoking"             =>$result->smoking,
                  "eating_habit"        =>$result->eating_habit,
                  "about_self"          =>$result->about_self,
                  "interest_field_name"   =>$result->interest_field_name,
                  "interest_id"           =>$result->interest_id,
                  "city_name"             =>$result->city_name,
                  "f_Uid"                 =>$result->f_Uid,
                  'super_like_count'      =>$superLike    
              );  
              $data_result['result'] = 'true';
              $data_result['data']   = $arr;
              $data_result['msg']    = 'Show user profile!'; 
          }
          else{

              $data_result['result'] = 'false';
              $data_result['msg']    = 'Sorry no show user profile!'; 
          }
         echo json_encode($data_result);
    }



    public function Online_List_By_UserId(){
        $user_id=$this->input->get_post('user_id');
      
        $userLike = $this->Api_modal->get_user_likes($user_id);
        $user = $this->Api_modal->get_row('user','user_id',$user_id);
        $cityD='';
        $likeids='';
        if(!empty($userLike))
        {
            foreach($userLike as $ulike)
            {
                $likeids .= "'".$ulike->to_user_id."',";
            }
            
           $likeids = rtrim($likeids,',');
        }
       
        $whereAry ='';
        
        if($likeids!='')
        {
           $whereAry = " and `user_id` NOT IN(".$likeids.")";    
        }
     
        $sql="SELECT * FROM user WHERE user_id!= $user_id and user_status=0 and gender!='{$user->gender}' $whereAry ORDER BY create_date_time DESC";

        $getList = $this->db->query($sql)->result_array();
        $count_Like = $this->Api_modal->likeNoti_count($user_id, 1,0);
        if(!empty($getList)){
            $arrUrs = array();
          
            foreach ($getList as $key => $value) {
        
                if(in_array($user_id, $arrUrs)){
                  continue;
                }
                $arrUrs[] =!$user_id;

                $cityD = $this->Api_modal->get_row('cities','city_id',$value['city']);
                
                 $wheredata1= array('status' =>3, 'to_user_id' => $user_id);
                        $superLike = $this->Api_modal->count_row('tbl_like_unlike', $wheredata1);

                        if (!$superLike) {
                          $superLike=0;
                        }
                  
                $data[] = array(
                  "user_id"      => $value['user_id'],
                  "user_name"    => $value['user_name'],
                  "user_email"   => $value['user_email'],
                  "user_pass"    => $value['user_pass'],
                  "user_mobile"  => $value['user_mobile'],
                  "address"      => $value['address'],
                  "lat"          => $value['lat'],
                  "lng"          => $value['lng'],
                  "gender"       => $value['gender'],
                  "user_status"  => $value['user_status'],
                  "age"          => $value['age'],
                  "age_status"   => $value['age_status'],
                  "register_id"  => $value['register_id'],
                  "image1"       => $value['image1'],
                  "image2"       => $value['image2'],
                  "image3"       => $value['image3'],
                  "image4"       => $value['image4'],
                  "image5"       => $value['image5'],
                  "image6"       => $value['image6'],
                  "education"        => $value['education'],
                  "profession"       => $value['profession'],
                  "drinking_habit"   => $value['drinking_habit'],
                  "smoking"          => $value['smoking'],
                  "eating_habit"     => $value['eating_habit'],
                  "about_self"       => $value['about_self'],
                  "interest_field_name"  => $value['interest_field_name'],
                  "interest_id"       => $value['interest_id'],
                  "city"              => $value['city'],
                  "city_name"         =>$cityD->city_name,
                  "f_Uid"         =>$value['f_Uid'],
                  'superLike'         => $superLike
    
                );


            }
        }     
        if(!empty($data)){
            $data_result['result'] = 'true';
            $data_result['msg']    = 'All Interest List';
            $data_result['count']  = $superLike;
            $data_result['data']   = $data;
            $data_result['like_count']   = $count_Like;
          if($count_Like>0){
            $data_result['status_seen']         = 0;
          }else{
             $data_result['status_seen']         = 1;
          }
    
        }else {
            $data = array();
            $data_result['result'] = 'false';
            $data_result['msg']    = 'Sorry Not in List';
            $data_result['count']  = 0;
            // $data_result['data']   = $data;
        }
        echo json_encode($data_result);
    }

          
    public function Online_List_notshow_inself(){
      $user_id=$this->input->get_post('user_id');
     
      $result=$this->db->query("SELECT * FROM user WHERE user_id!=$user_id and user_status=0 and like_status=0")->result_array();

      if($result){
            $data_result['result'] = 'true';
            $data_result['data']   = $result;
            $data_result['msg']    = 'Show user Online!'; 
        }
        else{

            $data_result['result'] = 'false';
            $data_result['msg']    = 'Sorry no show user!'; 
        }
       echo json_encode($data_result);   
    }

    // public function Unlike(){
    //   $user_id=$this->input->post('user_id');


    // }


    public function Like(){

        $user_id = $this->input->post('user_id');

        $to_user_id = $this->input->post('to_user_id');

        $data = array(
            'user_id'     => $user_id,
            'to_user_id' => $to_user_id

        );

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
    

    public function changePassword()
    {
        
        $user_id          = $this->input->get_post('user_id');
        $oldpassword = $this->input->get_post('oldpassword');
        $newpassword = $this->input->get_post('newpassword');
        
        $wheredata = array(
            'user_id' => $user_id,
            'user_pass' => $oldpassword
            
        );
        
        $result = $this->Main_modal->selectAllById('user', $wheredata);
        if ($result) {
            $data = array(
                'user_pass' => $newpassword
            );
            
            $res1 = $this->Main_modal->update($wheredata, 'user', $data);
            if ($res1) {
                $selectData = array(
                    'user_id' => $user_id
                );
                $result2    = $this->Main_modal->selectAllById('user', $selectData);
                foreach ($result2 as $key) {
                    $arr[] = array(
                        'user_id' => $key['user_id'],
                        'user_name' => $key['user_name'],
                        'user_pass' => $key['user_pass']
                    );
                }
                $data_result['result'] = 'true';
                $data_result['msg']    = "Your Password Update Sucessfully";
                $data_result['data']   = $arr;
                
            } else {
                
                $data_result['result'] = 'false';
                $data_result['msg']    = "Your Password Not Update";
            }
            
        } else {
            $data_result['result'] = 'false';
            $data_result['msg']    = "Your Old Password Not Correct!!";
        }
        echo json_encode($data_result);
    }


    // public function Support(){
      //  $wheredata = array(
      //     'user_email' => $this->input->post('user_email')
             
      //     );
      //     $result    = $this->Main_modal->selectAllById('user', $wheredata);
         
      //     if ($result) {
      //         $wherenewpass = array(
      //             'user_email' => $this->input->post('user_email')
      //         );
              
           
      //         $res1 = $this->Main_modal->selectAllById('user', $wherenewpass);
      //         if ($res1) {
      //             foreach ($res1 as $key => $value) {
                     
      //                 $user_name = $value['user_name'];
                      
      //                 $user_email = $value['user_email'];
                      
      //             }
      //         }
              
      //         // $ri_email = 'logicalsoftwebteam@gmail.com';
      //         // $to       = $this->input->post('user_email');
      //         $to       = 'logicalsoftwebteam@gmail.com';
      //         $from       = 'logicalsoftwebteam@gmail.com';
      //         $subject  = 'Help Support';
             
      //         $message = '';
             
      //         if (mail($to, $subject, $message)) {
      //             $data_result['result'] = 'true';
      //             $data_result['msg']    = 'mail success';
      //             $data_result['email']  = $to;
      //             // $data_result['otp']    = $myotp;
                  
      //         } else {
      //             $data_result['result'] = 'false';
      //             $data_result['msg']    = "Emailexist.";
      //         }
      //     } else {
      //         $data_result['result'] = 'false';
      //         $data_result['msg']    = "Email not exist.";
      //     }
          
      //     echo json_encode($data_result);
    // }


    public function City_List(){
      $result=$this->Api_modal->get_user_city();
        if($result){
            $data_result['data']   = $result;
            $data_result['msg']    = 'cities List';
            $data_result['result'] = 'true';
        }else {
            $data_result['msg']    = 'Sorry This City is Not in List';
            $data_result['result'] = 'false';
        }
        echo json_encode($data_result);
    }


    public function SearchByLocationAge(){
      $user_id=$this->input->get_post('user_id'); 
      $location = $this->input->get_post('location');
      $age = $this->input->get_post('age');
    
      $result          = $this->db->query("SELECT * FROM user WHERE user_id!='$user_id' AND age <= $age  AND location LIKE '".$location."%'")->result_array();
       
      if($result){
        foreach ($result as $key => $user){
            
          $arr[] = array(
            "user_id"              =>$user['user_id'],
            "user_name"            =>$user['user_name'],
            "user_email"            =>$user['user_email'],
            "user_pass"             =>$user['user_pass'],
            "user_mobile"           =>$user['user_mobile'],
            "location"              =>$user['location'],
            "lat"                   =>$user['lat'],
            "lng"                   =>$user['lng'],
            "gender"                =>$user['gender'],
            "user_status"           =>$user['user_status'],
            "age"                   =>$user['age'],
            "age_status"            =>$user['age_status'],
            "register_id"           =>$user['register_id'],
            "image1"                 =>$user['image1'],
            "image2"                 =>$user['image2'],
            "image3"                 =>$user['image3'],
            "image4"                 =>$user['image4'],
            "image5"                 =>$user['image5'],
            "image6"                 =>$user['image6'],
            "education"              =>$user['education'],
            "profession"             =>$user['profession'],
            "drinking_habit"          =>$user['drinking_habit'],
            "smoking"                 =>$user['smoking'],
            "eating_habit"           =>$user['eating_habit'],
            "about_self"             =>$user['about_self'],
            "interest_field_name"    =>$user['interest_field_name'],
            "interest_id"            =>$user['interest_id']

           );
        }
        $data_result['result'] = 'true';
        $data_result['data']   = $arr;
        $data_result['msg']    = 'Search All User!'; 
      }else{
        $data_result['result'] = 'false';
        $data_result['msg']    = 'Sorry Not Search Any User!'; 
      }

      echo json_encode($data_result);
    }


    //user search filter
    public function userFilter(){
        $user_id     = $this->input->get_post('user_id');
        $from_age    = $this->input->get_post('from_age');
        $to_age      = $this->input->get_post('to_age');
        $city        = $this->input->get_post('city');
        $profile_type = $this->input->get_post('profile_type');
        $user = $this->Api_modal->get_row('user','user_id',$user_id);
        // $user = $this->db->query("SELECT * from user WHERE user_id!=$user_id and gender!='{$user->gender}' ORDER BY user_id")->result_array();
        // print_r($user);exit();
        // $result = $this->Api_modal->userSearch($from_age,$to_age,$city,$profile_type,$user_id,$user->gender );

        $result = $this->Api_modal->userSearch($from_age,$to_age,$city,$profile_type,$user_id,$user->gender);
        // print_r($result);exit();
        $result1 =$this->db->query("SELECT * from user WHERE user_id!=$user_id and gender!='{$user->gender}' ORDER BY user_id")->result_array();
        // print_r($result1);exit();
        
        if ($result){
        
            foreach($result as $row){
             $wheredata1= array('status' =>3, 'to_user_id' => $user_id);
             $superLike = $this->Api_modal->count_row('tbl_like_unlike', $wheredata1);

              if(!$superLike) {
                $superLike=1;
              }
            }
            $data_result['result'] = 'true';
            $data_result['count'] = $superLike;
            $data_result['data']   = $result;
            $data_result['msg']    = 'User list!';
           
        }else {
            $data_result['result'] = 'true';
            $data_result['count'] = '1';
            $data_result['data'] =  $result1;
            $data_result['msg']    = 'User list!';
        }
        
        echo json_encode($data_result);
    }
    
    //user like unlike super like and messages
    public function userLikeUnlike(){
      $resp_msg = "";
      $resp_msg_alreay = "";
        $user_id        = $this->input->get_post('user_id');
        $to_user_id     = $this->input->get_post('to_user_id');
        $status         = $this->input->get_post('status');
        $register_id    = $this->input->get_post('register_id');
        $click          = 'click';
        if($status== 0){
            $userdata = array(
                'user_id'    =>$user_id,
                'to_user_id' =>$to_user_id,
                'status'     =>2
            );                
            if($this->Api_modal->deleteMulti('tbl_like_unlike', $userdata)){
                $data_result['result'] = 'true';
                $data_result['msg']    = 'Successfully reset';
            }else{
                $data_result['result'] = 'false';
                $data_result['msg']    = 'Record not found for reset';
            }
            echo json_encode($data_result);
            return false;
        }
        if($status==1)
        {
            $msg = 'Like Your profile';
            $resp_msg = 'Like Successfully';
            $resp_msg_alreay = 'You have alredy like this profile';  
        }
        
        if($status==2)
        {
            $msg = 'UnLike or Skip';
            $resp_msg = 'UnLike or Skip Successfully';
            $resp_msg_alreay = 'You have alredy unLike this profile'; 
        }
        
        if($status==3)
        {
            $msg = 'WOW! Congrats... You Got Super Like check and Reply';
            $resp_msg = 'Super Like Successfully';
            $resp_msg_alreay = 'You have alredy super like this profile';
        }
        if($status==4)
        {
          $msg='Visited Your Profile. Please Like or Superlike this Profile';
          $resp_msg = 'Visited Successfully';
          $resp_msg_alreay = 'You have alredy visited this profile. Please like or superlike';
        }
        // if($status==5)
        // {
        //   $msg='pair';
        // }
       
        $userdata = array(
                            'user_id'=>$user_id,
                            'to_user_id'=>$to_user_id,
                            'status'=>$status, 
                            'date_time'=>date('Y-m-d H:i:s'),
                        );
        $usermes = array(
                            'user_id'=>$user_id,
                            'to_user_id'=>$to_user_id,
                            // 'message'=>$message,
                            'click'=>'click',
                            'entity'=>$msg,
                            'entity_type'=>$status,
                            'date_time'=>date('Y-m-d H:i:s'),
                        );
        $superlike =1;
         
        
       $userD = $this->Api_modal->get_single_row('user', array('user_id' => $user_id));
       $toUserD = $this->Api_modal->get_single_row('user', array('user_id' => $to_user_id));
       
        if($status==3)
        {
            $superlike = $this->Api_modal->getSuperlike('tbl_like_unlike',$user_id,date('Y-m-d'));
        }
                
        $checklike = $this->Api_modal->get_row_array('tbl_like_unlike',array('user_id'=>$user_id,'to_user_id'=>$to_user_id,'status'=>$status));
        if(empty($checklike))
        {
            if($superlike<=10)
            {
              $result = $this->Api_modal->add('tbl_like_unlike',$userdata);
              if($status!=2)
              {
                $checkmsg = $this->Api_modal->get_row_array('tbl_notification',array('user_id'=>$user_id,'to_user_id'=>$to_user_id,'entity_type'=>$status));
                if(empty($checkmsg))
                {
                  $result = $this->Api_modal->add('tbl_notification',$usermes);    
                }

                if($status > 0){
                   if(!empty($userD)){
                        if(!empty($toUserD)){
                            $this->title = 'You got a notification from Single Mingle';
                            $this->message = '';
                            if($status == 1){
                               $this->message ='Hi '.$toUserD->user_name.',  You Got Like From '.$userD->user_name;
                            }else if($status == 4){
                                $this->message ='Hi '.$toUserD->user_name.', Your Profile Visited From '.$userD->user_name;
                            }else{
                                $this->message ='Hi '.$toUserD->user_name.', WOW! Congrats... You Got Super Like check and Reply From '.$userD->user_name;
                            }
                            $data['message']= $this->message;
                            $data['register_id']= $toUserD->register_id;//by p notification
                            $data['user_id']= $userD->user_id; //
                            $data['type'] = $this->title;
                            $data['click'] = 'click';
                            $data['click_event'] = $status;
                            // $data['click_id'] = $toUserD;
                            $res = send_notification($data);
                        }
                    }
                }
              }
            }else{
              $data_result['result'] = 'false';
              $data_result['msg']    = 'Only 10 super like allow in a day!';
              echo json_encode($data_result);
              return false;
            }
        }else{
          $data_result['result'] = 'false';
          $data_result['msg']    = $resp_msg_alreay;
          echo json_encode($data_result);
          return false;
        }
        
        if ($result)
        {
            $data_result['result'] = 'true';
            $data_result['msg']    = $resp_msg; 
        }else {
            $data_result['result'] = 'false';
            $data_result['msg']    = 'Please try again!';
        }
        
        echo json_encode($data_result);
    }
    
    
    public function getUserStatus(){
        
        
        $user_id = $this->input->get_post('user_id');
        
        if(empty($user_id)){
           echo json_encode(array('success'=>'false','msg'=>'send user id'));
            return false;
        }
        
        $result = $this->db->query("SELECT user.*, cities.city_id,cities.city_name FROM user JOIN cities ON cities.city_id = user.city WHERE user.user_id != '$user_id' ORDER BY last_login DESC");
        //echo $this->db->last_query(); die;
        
        if($result->result()){
            echo json_encode(array('success'=>'true','msg'=>'data found','data'=>$result->result()));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'data not found','data'=>'NA'));
            return false;
        }
    
    }
    
    public function updateOffOnline(){
      $user_id = $this->input->get_post('user_id');
      $status = $this->input->get_post('status');
       if(empty($user_id)){
            echo json_encode(array('success'=>'false','msg'=>'send user id'));
            return false;
        }
        
        
        $dataget = array('user_status'=>$status);
        
        $result = $this->Api_modal->modify('user', 'user_id', $user_id, $dataget);
        if($result){
            echo json_encode(array('success'=>'true','msg'=>'Updated succesfully'));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'Error'));
            return false;
        }
    
    }
    
    
    public function getLikes(){
        
        
        $user_id = $this->input->get_post('user_id');
        
        if(empty($user_id)){
            echo json_encode(array('success'=>'false','msg'=>'send user id'));
            return false;
        }
     
        $result = $this->Api_modal->get_likes($user_id, 1);
    
        if($result){
            echo json_encode(array('success'=>'true','msg'=>'data found','data'=>$result));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'data not found','data'=>'NA'));
            return false;
        }
    
    }
    
    public function LikeYou(){
        $user_id = $this->input->get_post('user_id');
      
        $count_Like=0;

        if(empty($user_id)){
            echo json_encode(array('success'=>'false','msg'=>'send user id'));
            return false;
        }
        $count_Like = $this->Api_modal->Wlike_count($user_id, 1,0);
        $result = $this->Api_modal->get_next_user_likes($user_id, 1);
    
        if($result){
            echo json_encode(array('success'=>'true','msg'=>'data found','count_like'=>$count_Like,'data'=>$result));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'data not found','data'=>'NA'));
            return false;
        }
    
    }

    // WHO LIKE REMOVE
      // public function LikeReplace(){
      //   $user_id  = $this->input->post('user_id');
      //   $to_user_id  = $this->input->post('to_user_id');
      //   extract($_POST);
      //   if(isset($user_id))
      //     {
         
      //     $where['to_user_id']  = $this->input->post('to_user_id'); 
          
         
      //       $result=$this->Main_modal->deleterec($where,'tbl_like_unlike');
           
      //       if ($result)
      //       {
      //         $data_result['result'] = 'true';
      //         $data_result['msg']    = 'Replace Profile Successfully!';
      //       }else {
      //         $data_result['result'] = 'false';
      //         $data_result['msg']    = 'Sorry Not Replace!';
      //       }
          
      //   }else{
      //     $data_result['result'] = 'false';
      //       $data_result['msg']    = 'User Id required!';
      //   }    
      //   echo json_encode($data_result);
    // }
    
    
    
    public function getDisLikes(){
        
        $user_id = $this->input->get_post('user_id');
        
        if(empty($user_id)){
            echo json_encode(array('success'=>'false','msg'=>'send user id'));
            return false;
        }
       
        $result = $this->Api_modal->GetDislike($user_id,2);
        // $result = $this->Api_modal->GetSkip($user_id,5);
        
    
        if($result){
            echo json_encode(array('success'=>'true','msg'=>'data found','data'=>$result));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'data not found','data'=>'NA'));
            return false;
        }
    
    }

    //Notification List at user
    public function Notification_List(){
      $user_id = $this->input->post('user_id');
      
      $count_Like=0;

      $count_SuperLike=0;

      $count_Vistors=0;
      $data = array();

      $wheredata=  array(
        'to_user_id' =>$user_id,
        'entity_type' =>1          
      );
      $wheredata2=  array(
        'to_user_id' =>$user_id,
        'entity_type' =>3           
      );
       
      $wheredata3=  array(
        'to_user_id' =>$user_id,
        'entity_type' =>4           
      );


      $result = $this->Main_modal->selectAllByIds('tbl_notification',$wheredata,'notification_id DESC');


        $result2 = $this->Main_modal->selectAllByIds('tbl_notification',$wheredata2,'notification_id DESC');

        $result3 = $this->Main_modal->selectAllByIds('tbl_notification',$wheredata3,'notification_id DESC');
        
        
        $count_Like = $this->Api_modal->count_row('tbl_notification',$wheredata); 

        $count_SuperLike = $this->Api_modal->count_row('tbl_notification',$wheredata2);

        $count_Vistors = $this->Api_modal->count_row('tbl_notification',$wheredata3);
        
        if($result)
        {
            foreach ($result as $keyl => $value) {
             $getName = $this->Main_modal->singleRowdata(array('user_id'=>$value['user_id']),'user'); 
             $data[] =  array(
              'notification_id'     =>$value['notification_id'],
              'user_id'             =>$value['user_id'],
              'user_name'           => !empty($getName->user_name) ? $getName->user_name : "",
              'user_email'          => !empty($getName->user_email) ? $getName->user_email : "",
              'user_mobile'         => !empty($getName->user_mobile) ? $getName->user_mobile : "" ,
              'user_pass'             => !empty($getName->user_pass) ? $getName->user_pass : "" ,
              'address'               => !empty($getName->address) ? $getName->address : "" ,
              'city'                  => !empty($getName->city) ? $getName->city : "" ,
              'lat'               => !empty($getName->lat) ? $getName->lat : "" ,
              'lng'               => !empty($getName->lng) ? $getName->lng : "" ,
              'gender'            => !empty($getName->gender) ? $getName->gender : "" ,
              'user_status'           => !empty($getName->user_status) ? $getName->user_status : "",
              'age'               => !empty($getName->age) ? $getName->age : "",
              'age_status'            => !empty($getName->age_status) ? $getName->age_status : "",
              'register_id'           => !empty($getName->register_id) ? $getName->register_id : "",
              'image1'              => !empty($getName->image1) ? $getName->image1 : "",
              'image2'              => !empty($getName->image2) ? $getName->image2 : "" ,
              'image3'              => !empty($getName->image3) ? $getName->image3 : "" ,
              'image4'            => !empty($getName->image4) ? $getName->image4 : "" ,
              'image5'              => !empty($getName->image5) ? $getName->image5 : "",
              'image6'              => !empty($getName->image6) ? $getName->image6 : "" ,
              'education'           => !empty($getName->education) ? $getName->education : "",
              'location'            => !empty($getName->location) ? $getName->location : "",
              'profession'            => !empty($getName->profession) ? $getName->profession : "",
              'drinking_habit'        => !empty($getName->drinking_habit) ? $getName->drinking_habit : "",
              'smoking'             => !empty($getName->smoking) ? $getName->smoking : "",
              'eating_habit'          => !empty($getName->eating_habit) ? $getName->eating_habit : "",
              'about_self'            => !empty($getName->about_self) ? $getName->about_self : "",
              'interest_id'           => !empty($getName->interest_id) ? $getName->interest_id : "",
              'interest_field_name'   => !empty($getName->interest_field_name) ? $getName->interest_field_name : "" ,
              'like_status'           => !empty($getName->like_status) ? $getName->like_status : "" ,
              'create_date_time'      => !empty($getName->create_date_time) ? $getName->create_date_time : "" ,
              'login_time'            => !empty($getName->login_time) ? $getName->login_time : "",
              'last_login'            => !empty($getName->last_login) ? $getName->last_login : "",
              'fcm_id'                => !empty($getName->fcm_id) ? $getName->fcm_id : "",
              'f_Uid'               => !empty($getName->f_Uid) ? $getName->f_Uid : "" ,
              'entity_type'         =>$value['entity_type'],
              'entity'                =>$value['entity'],
              'status'              =>$value['status'],
              'date_time'           =>$value['date_time']
          
             ); 
          }
        }

          
        if($result2)
        {
           foreach ($result2 as $keys => $value) {
             $getName = $this->Main_modal->singleRowdata(array('user_id'=>$value['user_id']),'user'); 
             $data[] =  array(
              'notification_id'     =>$value['notification_id'],
              'user_id'             =>$value['user_id'],
              'user_name'           =>$getName->user_name,
              'user_email'          =>$getName->user_email,
              'user_mobile'         =>$getName->user_mobile,
              'user_pass'             =>$getName->user_pass,
              'address'               =>$getName->address,
              'city'                  =>$getName->city,
              'lat'               =>$getName->lat,
              'lng'               =>$getName->lng,
              'gender'            =>$getName->gender,
              'user_status'           =>$getName->user_status,
              'age'               =>$getName->age,
              'age_status'            =>$getName->age_status,
              'register_id'           =>$getName->register_id,
              'image1'              =>$getName->image1,
              'image2'              =>$getName->image2,
              'image3'              =>$getName->image3,
              'image4'            =>$getName->image4,
              'image5'              =>$getName->image5,
              'image6'              =>$getName->image6,
              'education'           =>$getName->education,
              'location'            =>$getName->location,
              'profession'            =>$getName->profession,
              'drinking_habit'        =>$getName->drinking_habit,
              'smoking'             =>$getName->smoking,
              'eating_habit'          =>$getName->eating_habit,
              'about_self'            =>$getName->about_self,
              'interest_id'           =>$getName->interest_id,
              'interest_field_name'   =>$getName->interest_field_name,
              'like_status'           =>$getName->like_status,
              'create_date_time'      =>$getName->create_date_time,
              'login_time'            =>$getName->login_time,
              'last_login'            =>$getName->last_login,
              'fcm_id'                =>$getName->fcm_id,
              'f_Uid'               =>$getName->f_Uid,
              'entity_type'         =>$value['entity_type'],
              'entity'                =>$value['entity'],
              'status'              =>$value['status'],
              'date_time'           =>$value['date_time']
          
             ); 
          }
        }
          
        if($result3)
          {
               foreach ($result3 as $keyv => $value) {
               $getName = $this->Main_modal->singleRowdata(array('user_id'=>$value['user_id']),'user'); 
               $data[] =  array(
                'notification_id'     =>$value['notification_id'],
                'user_id'             =>$value['user_id'],
                'user_name'           =>$getName->user_name,
                'user_email'          =>$getName->user_email,
                'user_mobile'         =>$getName->user_mobile,
                'user_pass'             =>$getName->user_pass,
                'address'               =>$getName->address,
                'city'                  =>$getName->city,
                'lat'               =>$getName->lat,
                'lng'               =>$getName->lng,
                'gender'            =>$getName->gender,
                'user_status'           =>$getName->user_status,
                'age'               =>$getName->age,
                'age_status'            =>$getName->age_status,
                'register_id'           =>$getName->register_id,
                'image1'              =>$getName->image1,
                'image2'              =>$getName->image2,
                'image3'              =>$getName->image3,
                'image4'            =>$getName->image4,
                'image5'              =>$getName->image5,
                'image6'              =>$getName->image6,
                'education'           =>$getName->education,
                'location'            =>$getName->location,
                'profession'            =>$getName->profession,
                'drinking_habit'        =>$getName->drinking_habit,
                'smoking'             =>$getName->smoking,
                'eating_habit'          =>$getName->eating_habit,
                'about_self'            =>$getName->about_self,
                'interest_id'           =>$getName->interest_id,
                'interest_field_name'   =>$getName->interest_field_name,
                'like_status'           =>$getName->like_status,
                'create_date_time'      =>$getName->create_date_time,
                'login_time'            =>$getName->login_time,
                'last_login'            =>$getName->last_login,
                'fcm_id'                =>$getName->fcm_id,
                'f_Uid'               =>$getName->f_Uid,
                'entity_type'         =>$value['entity_type'],
                'entity'                =>$value['entity'],
                'status'              =>$value['status'],
                'date_time'           =>$value['date_time']
            
               ); 
              }
            }
          
          $query="SELECT COUNT(entity_type) as count FROM tbl_notification WHERE to_user_id='$user_id' and status=0";
            $res=$this->db->query($query)->row()->count;
            if(count($data)){
                $data_result['data']         = $data;
                $data_result['total_count']         = $res;
                $data_result['like_count']   =  $count_Like;
                $data_result['count_SuperLike'] = $count_SuperLike;
                $data_result['count_Vistors'] = $count_Vistors;
                $data_result['result'] = 'true';
                $data_result['msg']    = 'All notifictaion List!!';
            }
          else
        {
          $data_result['msg']    = 'Sorry Not having any notifictaion!!';
          $data_result['result'] = 'false';
        }
        echo json_encode($data_result);
    }



    //city list
    public function cityList(){
      $search=$this->input->post('search');

      $result=$this->db->query("SELECT * FROM cities WHERE city_name LIKE '".$search."%'")->result_array(); 
      

      if ($result) {
        $data_result['result'] = 'true';
        $data_result['data']   = $result;
        $data_result['msg']    = 'All Cities List';
      }else{
        $data_result['result'] = 'false';
        $data_result['msg']    = 'Not City in List';
      }
      echo json_encode($data_result);
    }


    //visit on Profile
    public function VisitProfile(){
      date_default_timezone_set('Asia/Calcutta');
      $date = date('Y-m-d H:m:s');
      $user_id=$this->input->post('user_id');
      $to_user_id=$this->input->post('to_user_id');
      
      $data   = array(
        'user_id'         => $user_id,
        'to_user_id'      => $to_user_id,
        'date_time'       =>$date
       

       );

      $result=$this->Main_modal->insert('tbl_notification',$data);
     if ($result) {
          $wheredata = array(
              'notification_id' => $this->db->insert_id()
          );
          $res1      = $this->Main_modal->selectAllById('tbl_notification', $wheredata);
          foreach ($res1 as $value) {
              $arr[] = array(
                  'notification_id'  => $value['notification_id'],
                  'user_id'          => $value['user_id'],
                  'to_user_id'       => $value['to_user_id'],
                  'date_time'        => $value['date_time']
              );
          }
          
          $data_result['result'] = 'true';
          $data_result['msg']    = 'Visited successfully!!';
          $data_result['data']   = $arr;

      } else {
          $data_result['result'] = 'false';
          $data_result['msg']    = 'Not Visit!!';
      }
      
      
      echo json_encode($data_result);
    }

    //Visitor List
      // public function VisitorList(){  

       //  $user_id=$this->input->post('user_id');
       //  $result =  $this->db->query("SELECT COUNT(tbl_vitistors.user_id) as visit FROM tbl_vitistors INNER JOIN user ON tbl_vitistors.user_id=user.user_id WHERE tbl_vitistors.user_id='$user_id'")->result_array();
       
        //    if ($result) {
        //        $data_result['result'] = 'true';
        //        // $data_result['data']   = $result;
        //        $data_result['count']   = $result;
        //        $data_result['msg']    = 'All Visit Your Profile!'; 
         //    }
         //    else{

         //        $data_result['result'] = 'false';
         //         $data_result['count']   = 0;
         //        $data_result['msg']    = 'Sorry Not any List!'; 
            
         //  }
       //   echo json_encode($data_result);
    // }

    // chnage status for seen notification
    public function seen_notification() {
      $to_user_id     =$this->input->post('user_id');
      $status         =$this->input->post('status');
      $data=array(
          'status'=>1

      );

      $wheredata=array(
          'to_user_id'=> $to_user_id 

      ); 
      
    
      if($result = $this->Main_modal->updateData('tbl_notification', $data,$wheredata)){
          $res_update            = $this->Main_modal->selectAllById('tbl_notification', $wheredata);
        if ($result) {
            $data_result['result'] = 'true';
            $data_result['data']   = $res_update;
            $data_result['msg']    = 'User Seen notification Successfully!';
              
        }
      } else {
          $data_result['result'] = 'false';
          $data_result['msg']    = 'User Not Seen notification!';
          
      }

      echo json_encode($data_result);
          
    }



    public function VisitorList11(){
      $user_id = $this->input->post('user_id');
      $count_Vistors=0;
        $wheredata=  array(
        'to_user_id' =>$user_id,
        'entity_type' => 4           
        );
        $result = $this->Main_modal->selectAllByIds('tbl_notification',$wheredata,'notification_id DESC');
       // $result=$this->Api_modal->single_user($user_id,4);

        $count_Vistors = $this->Api_modal->Wlike_count1($user_id, 1,0);
        
        if($result)
        {

           // $cityD = $this->Api_modal->get_row('cities','city_id',$value['city']);
          foreach ($result as $key => $value) {
           $getName = $this->Main_modal->singleRowdata(array('user_id'=>$value['user_id']),'user'); 

           $data[] =  array(
            'notification_id'     =>$value['notification_id'],
            'user_id'             =>$value['user_id'],
            'user_name'           =>$getName->user_name,
            'user_email'          =>$getName->user_email,
            'user_mobile'         =>$getName->user_mobile,
            'user_pass'             =>$getName->user_pass,
            'address'               =>$getName->address,
            'city'                  =>$getName->city,
            // "city"              => $value['city'],
            // "city_name"         =>$cityD->city_name,
            'lat'               =>$getName->lat,
            'lng'               =>$getName->lng,
            'gender'            =>$getName->gender,
            'user_status'           =>$getName->user_status,
            'age'               =>$getName->age,
            'age_status'            =>$getName->age_status,
            'register_id'           =>$getName->register_id,
            'image1'              =>$getName->image1,
            'image2'              =>$getName->image2,
            'image3'              =>$getName->image3,
            'image4'            =>$getName->image4,
            'image5'              =>$getName->image5,
            'image6'              =>$getName->image6,
            'education'           =>$getName->education,
            'location'            =>$getName->location,
            'profession'            =>$getName->profession,
            'drinking_habit'        =>$getName->drinking_habit,
            'smoking'             =>$getName->smoking,
            'eating_habit'          =>$getName->eating_habit,
            'about_self'            =>$getName->about_self,
            'interest_id'           =>$getName->interest_id,
            'interest_field_name'   =>$getName->interest_field_name,
            'like_status'           =>$getName->like_status,
            'create_date_time'      =>$getName->create_date_time,
            'login_time'            =>$getName->login_time,
            'last_login'            =>$getName->last_login,
            'fcm_id'                =>$getName->fcm_id,
            'f_Uid'               =>$getName->f_Uid,
            'entity_type'         =>$value['entity_type'],
            'entity'                =>$value['entity'],
            'status'              =>$value['status'],
            'date_time'           =>$value['date_time']
        
           ); 
        }

      
          
          $data_result['data']         = $data;
          $data_result['count_Vistors'] = $count_Vistors;
          $data_result['result'] = 'true';
          $data_result['msg']    = 'All Visitor List!!';
        }else {
          $data_result['msg']    = 'Sorry Not having any Visitor!!';
          $data_result['result'] = 'false';
        }
        echo json_encode($data_result);
    }

    


    // Intrest list........
    public function Intrest_List(){
      $user_id = $this->input->get_post('user_id');

        $wheredata = array(
          'user_id'=> $user_id
      );
      $user = $this->Main_modal->singleRowdata($wheredata,'user');
      if (!empty( $user) && $user->interest_id>0) {
         $interest = explode(",",$user->interest_id);       
         $getList = $this->Main_modal->getAll('interest_list');
          foreach ($getList as $key => $value) {
           $status = 0; 
          if(in_array($value['interest_id'], $interest)){               
              $status = 1;
              }
              $data[] = array(
                'interest_id'=>$value['interest_id'],
                'interest_field_name'=>$value['interest_field_name'],
                'status'=> $status
              );
          }
        }else{
        $getList = $this->Main_modal->getAll('interest_list');
        //print_r($getList);die;
        foreach ($getList as $key => $value) {
          $data[] = array(
            'interest_id'=>$value['interest_id'],
            'interest_field_name'=>$value['interest_field_name'],
            'status'=>0
          );
        }  
      }
      if(!empty($data)){

        $data_result['result'] = 'true';
        $data_result['msg']    = 'All Interest List';
        $data_result['data']   = $data;

        }else {
          $data = array();
          $data_result['msg']    = 'Sorry Not in List';
          $data_result['result'] = 'false';
          $data_result['data']   = $data;
        }
        echo json_encode($data_result);
    }


    public function Block(){
        date_default_timezone_set('Asia/Calcutta');
        $date = date('Y-m-d H:i:s');
        $user_id = $this->input->post('user_id');
        $to_user_id = $this->input->post('to_user_id');
        // $block_status = $this->input->post('block_status');
        $block_status = 0;
       
        
        $data = array(
            'user_id'          => $user_id,
            'to_user_id'       => $to_user_id,
            // 'block_status'     => $block_status
             'block_status'     => 0
            
        );

        $res_check = $this->db->query("SELECT * FROM `tbl_block` WHERE `user_id`='$user_id' AND `to_user_id`='$to_user_id' AND `block_status`='0'");

        if($res_check->num_rows()>0){
            $data_result['result'] ='true';
            $data_result['msg']    ='Already Blocked';
        }else{
          $result = $this->Api_modal->add('tbl_block',$data); 

          if($result){
            
             $data_result['result'] = 'true';
             $data_result['msg']   =  'block Sucessfully';  
             $data_result['block_status']   =  $block_status;  
          }
          else{
              $data_result['result']       = 'false';
               $data_result['msg']         =  'block Sucessfully';  
              $data_result['block_status'] =  $block_status;  
          }
        }
        echo json_encode($data_result);
    }



    public function UnBlock()
    {

      $user_id = $this->input->post('user_id');
      $to_user_id = $this->input->post('to_user_id');
      $block_status = 1;

      $data1 = array(
        'user_id'          => $user_id,
        'to_user_id'       => $to_user_id,
        'block_status'     => 1           
      );
       
      $check =  $this->db->query("SELECT * FROM tbl_block WHERE user_id ='{$user_id}' AND to_user_id = '{$to_user_id}' AND block_status = 0 "); 
      $datas = $check->row();
      if($datas)
      { 
        $wdata=array(
            'block_id' => $datas->block_id
        );
        $result = $this->Main_modal->updateData('tbl_block',$data1, $wdata);
        if($result)
        {
           $data_result['result'] = 'true';
           $data_result['msg']   =  'User Unblocked successfully.';  
           $data_result['block_status']   =  1;   
        }else{
            $data_result['result'] = 'false';
            $data_result['msg']    =  'Something went wrong.';  
            $data_result['block_status']    =  0; 
        }  
      }else{
        $data_result['result'] = 'false';
         $data_result['msg']   =  'Something went wrong.';  
         $data_result['block_status']   =  0;
      }
      echo json_encode($data_result);
    }



    // public function Block_status(){
      //   $user_id      = $this->input->post('user_id');
      //   $to_user_id   = $this->input->post('to_user_id');
      //   if(isset($user_id))
      //   {
      //     $check  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}'";
      //     $result = $this->db->query($check)->result_array();
      //     // $result1 = $this->Admin_model->select('tbl_block');
      //     if(count($result)){

      //       $data_result['result']='true';
      //       $data_result['block_status']=$result;
      //       $data_result['msg']='user block';
      //     }else{
      //       $data_result['result']='true';
      //       // $data_result['block_status']=0;
      //        $data_result['msg']='user block';
      //     }
      //   }else{
      //     $data_result['result']='false';
      //       $data_result['msg']='user id required';
      //   }
      //   echo json_encode($data_result);
    // }


    // public function Block_status(){
      //   $user_id      = $this->input->post('user_id');
      //   $to_user_id   = $this->input->post('to_user_id');
      //   if(isset($user_id) && isset($to_user_id))
      //   {
      //       $result1 = $this->Main_modal->checkBlockStaus($user_id,$to_user_id,0);
      //       print_r($result1);
      //       die();
            
      //       //$result2 = $this->Main_modal->checkBlockStaus($user_id,$to_user_id,0);
      //       if($result1)
      //        {
      //           if($result1->block_status ==1 )
      //           {
      //             $data_result['result']='true';
      //             $data_result['block_status']=1;
      //           }
      //        }elseif($result2) 
      //        {
                          
      //        }elseif($result1 && $result2){
      //         if($result1->block_status ==1 && $result2->block_status ==1 )
      //           {
      //             $data_result['result']='true';
      //             $data_result['block_status']=1;
      //           }elseif ($result1->block_status ==1 && $result2->block_status ==0 ) {
      //             $data_result['result']='true';
      //             $data_result['block_status']=0;
      //           }elseif($result1->block_status ==0 && $result2->block_status ==0)
      //           {
      //             $data_result['result']='true';
      //             $data_result['block_status']=0;
      //           }elseif ($result1->block_status ==0 && $result2->block_status ==1) {
      //             $data_result['result']='true';
      //             $data_result['block_status']=0;
      //           }  
      //        }else
      //        {
      //         $data_result['result']='true';
      //         $data_result['block_status']=1;
      //        }
      //   }else{
      //       $data_result['result']='false';
      //       $data_result['msg']='user id and to user id required';
      //   }
      //    echo json_encode($data_result);
    // }

    public function Block_status(){
      $user_id      = $this->input->post('user_id');
      $to_user_id   = $this->input->post('to_user_id');
      if(isset($user_id) && isset($to_user_id))
      {
        $check  = "SELECT * FROM `tbl_block` WHERE  (`user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}') AND (`user_id`='{$to_user_id}' AND `to_user_id`='{$user_id}')  AND block_status = 0 ";
        $result = $this->db->query($check)->result_array();
        if(count($result)){
          $data_result['result']='true';
          $data_result['msg']    =  'User Blocked';  
          $data_result['block_status']=0;
        }else
        {
          $check1  = "SELECT * FROM `tbl_block` WHERE  (`user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}') AND (`user_id`='{$to_user_id}' AND `to_user_id`='{$user_id}')  AND block_status = 1 ";
          $result1 = $this->db->query($check1)->result_array();
          if(count($result1)){
            $data_result['result']='true';
            $data_result['block_status']= 1;
            $data_result['msg']    =  'User Unblocked';
          }else{
            $check12  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}' AND block_status = 0 ";
            $result12 = $this->db->query($check12)->result_array();
            if(count($result12)){
                $data_result['result']='true';
                $data_result['msg']    =  'User Blocked';
                $data_result['block_status']= 0;
            }else{
              $check123456  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$to_user_id}' AND `to_user_id`='{$user_id}' AND block_status = 0 ";
              $result123456 = $this->db->query($check123456)->result_array();
              if(count($result123456))
              {
                $data_result['result']='true';
                $data_result['msg']    =  'User Blocked';
                $data_result['block_status']= 0;
              }else
              {
                $check1234568  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}' AND block_status = 1 ";
                $result1234568 = $this->db->query($check1234568)->result_array();
                if(count($result1234568))
                {
                  $check1234  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}' AND block_status = 0 ";
                  $result1234 = $this->db->query($check1234)->result_array();
                  if(count($result1234)){
                      $data_result['result']='true';
                      $data_result['msg']    =  'User Blocked';
                      $data_result['block_status']= 0;
                    }else{
                      $data_result['result']='true';
                      $data_result['block_status']= 1;
                      $data_result['msg']    =  'User Unblocked';
                    }
                }else{
                  $check12345  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$to_user_id}' AND `to_user_id`='{$user_id}' AND block_status = 0 ";
                  $result12345 = $this->db->query($check12345)->result_array();
                  if(count($result12345))
                  {
                     $check12345689  = "SELECT * FROM `tbl_block` WHERE  `user_id`='{$user_id}' AND `to_user_id`='{$to_user_id}' AND block_status = 1 ";
                      $result12345689 = $this->db->query($check12345689)->result_array();
                      if(count($result12345689))
                      {
                        $data_result['result']='true';
                        $data_result['block_status']= 0;
                        $data_result['msg']    =  'User Blocked';
                      }else{
                        $data_result['result']='true';
                        $data_result['block_status']= 1;
                        $data_result['msg']    =  'User Unblocked';
                      }
                  }else{
                    $data_result['result']='true';
                    $data_result['block_status']= 1;
                    $data_result['msg']    =  'User Unblocked';
                  }
                }
              }
            }
          }
        }
      }else{
          $data_result['result']='false';
          $data_result['msg']='user id and to user id required';
      }
       echo json_encode($data_result);
    }


    public function Report(){
      $user_id  = $this->input->post('user_id');
      $to_user_id  = $this->input->post('to_user_id');
      $report_msg  = $this->input->post('report_msg');   
      

      $data =array(
          'user_id'    =>$user_id,
          'to_user_id' =>$to_user_id,
          'report_msg' =>$report_msg
         
      ); 

      $result =$this->Main_modal->createData($data,'tbl_report_list');



      if ($result)
          {
                $user = $this->Api_modal->get_row('user','user_id',$user_id);
                // $user = $this->Api_modal->single_user_data($user_id);

              $data_result['result'] = 'true';
              $data_result['data']   = $data;
              $data_result['msg']    = 'Report Successfully Action will be taken within 24 hours!!';
             
          }else {
              $data_result['result'] = 'false';
              $data_result['msg']    = 'Sorry Not Report!';
          }
          echo json_encode($data_result);
    }

  
    public function getBlockList(){
      $user_id = $this->input->get_post('user_id');
      if(empty($user_id)){
        echo json_encode(array('success'=>'false','msg'=>'send user id'));
        return false;
      }    
      $result = $this->Api_modal->GetBlock_List($user_id,0);
      if($result){
          echo json_encode(array('success'=>'true','msg'=>'data found','data'=>$result));
          return false;
      }else{
          echo json_encode(array('success'=>'false','msg'=>'data not found','data'=>'NA'));
          return false;
      } 
    }

    public function SearchDislikeUser(){
      $search = $this->input->get_post('search');
      $cityD ='';
       extract($_POST);
      if(isset($search))
        {
      $result = $this->db->query("SELECT * FROM user WHERE  user_name LIKE '%$search%' ")->result_array();
      if ($result) {
        $result1= $this->Main_modal->select('user','user_id desc');
         if($result1){
          foreach ($result as $user){

             $cityD = $this->Api_modal->get_row('cities','city_id',$user['city']);

          $arr[] = array(
              "user_id"            =>$user['user_id'],
              "user_name"          =>$user['user_name'],
              "user_email"             =>$user['user_email'],
              "user_mobile"             =>$user['user_mobile'],
              "user_pass"             =>$user['user_pass'],
              "address"             =>$user['address'],
              "city"             =>$user['city'],
              "lat"             =>$user['lat'],
              "lng"             =>$user['lng'],
              "gender"             =>$user['gender'],
              "user_status"             =>$user['user_status'],
              "age"             =>$user['age'],
              "age_status"             =>$user['age_status'],
              "register_id"             =>$user['register_id'],
              "image1"             =>$user['image1'],
              "image2"             =>$user['image2'],
              "image3"             =>$user['image3'],
              "image4"             =>$user['image4'],
              "image5"             =>$user['image5'],
              "image6"             =>$user['image6'],
              "education"          =>$user['education'],
              "location"          =>$user['location'],
              "profession"          =>$user['profession'],
              "drinking_habit"     =>$user['drinking_habit'],
              "smoking"            =>$user['smoking'],
              "eating_habit"            =>$user['eating_habit'],
              "about_self"            =>$user['about_self'],
              "interest_id"            =>$user['interest_id'],
              "interest_field_name"            =>$user['interest_field_name'],
              "like_status"            =>$user['like_status'],
              "fcm_id"            =>$user['fcm_id'],
              "f_Uid"            =>$user['f_Uid'],
              "city_name"        => $cityD->city_name
            );
          }
            $data_result['result'] = 'true';
            $data_result['data']   = $arr;
            $data_result['msg']    = 'Search User!'; 
          }
        }else{
            $data_result['result'] = 'false';
            $data_result['msg']    = 'Sorry Not Search!'; 
          }
        }else{
          $data_result['result'] = 'false';
          $data_result['msg']    = 'Search Name Required!'; 
        }

          echo json_encode($data_result);
    }

    public function delete_User() {
      $user_id  = $this->input->post('user_id');
      extract($_POST);
      if(isset($user_id))
        {
        $wheredata=array(
          'user_id'=>$user_id
        );
        $where['user_id']  = $this->input->post('user_id'); 
        
        if($result=$this->Main_modal->selectAllById('user',$wheredata)){
          $result=$this->Main_modal->deleterec($where,'user');
          $result=$this->Main_modal->deleterec($where,'tbl_like_unlike');
          $result=$this->Main_modal->deleterec($where,'tbl_notification');
          $result=$this->Main_modal->deleterec($where,'tbl_block');
          if ($result)
          {
            $data_result['result'] = 'true';
            $data_result['msg']    = 'Delete Your Profile Successfully!';
          }else {
            $data_result['result'] = 'false';
            $data_result['msg']    = 'Sorry Not delete Profile!';
          }
        }else{
          $data_result['result'] = 'false';
          $data_result['msg']    = 'Sorry Not delete Profile!';
        }
      }else{
        $data_result['result'] = 'false';
          $data_result['msg']    = 'User Id required!';
      }    
      echo json_encode($data_result);
    }



    public function VisitorList(){
      $user_id = $this->input->get_post('user_id');

      $count_Vistors = $this->Api_modal->Wlike_count1($user_id, 1,0);
      if(empty($user_id)){
        echo json_encode(array('success'=>'false','msg'=>'send user id'));
        return false;
      }
      $result = $this->Api_modal->get_visits($user_id, 4);    
      if($result){
          echo json_encode(array(
            'data'=>$result,
            'count_Vistors' => $count_Vistors,
            'result'=>'true',
            'msg'=>'All Visitor List!!'
          ));
          return false;
      }else{
        echo json_encode(array('result'=>'false','msg'=>'data not found','data'=>'NA'));
          return false;
      }
    }

    //forgot password

     public function forgotpassword()
    {
        
        $wheredata = array(
            'user_email' => $this->input->post('user_email')
        );
        $result    = $this->Main_modal->selectAllById('user', $wheredata);
        // print_r($result);exit();
        if ($result) {
            $wherenewpass = array(
                'user_email' => $this->input->post('user_email')
            );
            
            $random_no = rand(100000, 999999);
            
            $otp = array(
                'user_pass' => $random_no
            );
            
            $res  = $this->Main_modal->update($wherenewpass, 'user', $otp);
            $res1 = $this->Main_modal->selectAllById('user', $wherenewpass);
            if ($res1) {
                foreach ($res1 as $key => $value) {
                    $myotp    = $value['user_pass'];
                    $user_name = $value['user_name'];
                    
                }
            }
            
            $ri_email = 'singleGetMingle.com';
            $to       = $this->input->post('user_email');
            $subject  = 'User Password Reset';
            
            $headers = "From: <" . $ri_email . ">" . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $message = '';
            $message .= '<!DOCTYPE html>
        <html>
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            </head>
       
            <body style="font-family:roboto !important;">
                <div style="width:100%; text-align:center; margin:0px auto;">
                <div style="width: 550px; height: auto;  margin: 10px auto;;">
                <div style="padding:2px 2px 8px 2px; background:#3498db; text-align:center;">

                 <div style="font-size: 20px; line-height: 40px; padding: 0;  margin-top: 5px;
                    text-align: center; color: #fff;">singleGetMingle
                    </div>

                </div>
                <div style="background:whitesmoke;padding: 15px 0;font-family: sans-serif;">
                <h3 style="text-align: left;padding-left: 100px; font-size: 18px;  margin-top: 0px;
                margin-bottom: 10px; color: #2dbba4;">Forgot Password</h3>
                <center>
                <p>Dear ' . $user_name . '.</p>
                <p>
                Your Forgot password otp is: ' . $random_no . '.</p>
                </center>
                </div>
                <footer>
                    <div style="background: #3498db; padding: 20px 5px 25px 5px;">
                    <div style="width:100%; text-align:center;">


                    <div style="font-size: 13px; line-height: 7px; padding: 0;  margin-top: 0px;
                    text-align: center; color: #fff;"> © singleGetMingle 2019. All Rights Reserved.
                    </div> 
                    </div>
                    </div>
                </footer>
                </div>
                </div>
            </body>
        </html>';
            if (mail($to, $subject, $message, $headers)) {
                $data_result['result'] = 'true';
                $data_result['msg']    = 'mail success';
                $data_result['email']  = $to;
                $data_result['password']    = $myotp;
                
            } else {
                $data_result['result'] = 'false';
                $data_result['msg']    = "Emailexist.";
            }
        } else {
            $data_result['result'] = 'false';
            $data_result['msg']    = "Email not exist.";
        }
        
        echo json_encode($data_result);
    }
  
  
}

  

