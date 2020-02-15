<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ApiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_modal');
        $this->output->set_content_type('application/json');
    }
    
    public function index(){
        echo 'test';
    }
    
    //api for get common user 
    public function commonInterest(){
       
        $user_id  =  $this->input->get_post('user_id');
        $wheredata['user_id'] = $user_id;
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
           $whereAry = " and `user_id` NOT IN(".$likeids.")";    
        }
        
        if(!empty($user->interest_id) && $user->interest_id!=0){
          $userIntrest =  explode(",", $user->interest_id);
    
         
          
         $sql = "SELECT DISTINCT  user_id,user_name,user_email,user_pass,user_mobile,address,city,lat,lng,gender,user_status,age,age_status,register_id,image1,image2,image3,image4,image5,image6,education,profession,drinking_habit,smoking,eating_habit,about_self,interest_field_name,interest_id  FROM `user`WHERE user_id!= ".$user_id."$whereAry";
         
          
          $getList = $this->db->query($sql)->result_array();
          $arrUrs = array();
          
          
         // echo $this->db->last_query(); die;
         foreach ($getList as $key => $value) {
              
              $interestID = explode(",",$value['interest_id']);
              $user_id =  $value['user_id'];
         
            
                for ($i=0; $i <count($userIntrest); $i++) { 
                    
                    if(in_array($user_id, $arrUrs)){
                        continue;
                    }
                
                  $arrUrs[] =$user_id;
                  if(in_array($userIntrest[$i], $interestID)){
                      $cityD = $this->Api_modal->get_row('cities','city_id',$value['city']);
                      $superLike = $this->Api_modal->like_count($user_id, 3);
        
                     
                            $data[] = array(
                            "user_id"      => $user_id,
                            "user_name"    => $value['user_name'],
                            "user_email"   => $value['user_email'],
                            "user_pass"    => $value['user_pass'],
                            "user_mobile"  => $value['user_mobile'],
                            "address"      => $value['address'],
                            "city"         => $value['city'],
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
                            "city_name"         =>$cityD->city_name,
                            'super_like_count'  => $superLike
        
                            );
        
        
                           }
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
            }else{
        
              $data = array();
              $data_result['msg']    = 'No interest foud';
              $data_result['result'] = 'false';
              $data_result['data']   = $data;
        
            }
              echo json_encode($data_result);
              exit();
      
    }
    
    //user search filter
    public function userFilter(){
        $user_id     = $this->input->post('user_id');
        $from_age    = $this->input->post('from_age');
        $to_age      = $this->input->post('to_age');
        $city        = $this->input->post('city');
        $profile_type = $this->input->post('profile_type');
        $result = $this->Api_modal->userSearch($from_age,$to_age,$city,$profile_type,$user_id);
         // $result1 =$this->db->query("SELECT * from user ORDER BY user_id")->result_array();
         if ($result)
        {
            $data_result['result'] = 'true';
            $data_result['data']   = $result;
           
        }else {
            $data_result['result'] = 'false';
            // $data_result['data'] = $result1;
            $data_result['msg']    = 'User not found!';
        }
        
        echo json_encode($data_result);
    }
    
    //user like unlike super like and messages
    public function userLikeUnlike(){
        $user_id     = $this->input->get_post('user_id');
        $to_user_id  = $this->input->get_post('to_user_id');
        $status      = $this->input->get_post('status');
        $message     = $this->input->get_post('message');
        if($status== 0){
            $userdata = array(
                'user_id'=>$user_id,
                'to_user_id'=>$to_user_id,
                'status' => 2
            );                
            if($this->Api_modal->deleteMulti('tbl_like_unlike', $userdata)){
                $data_result['result'] = 'true';
                $data_result['msg']    = 'Successfully reset unlike';
            }else{
                $data_result['result'] = 'false';
                $data_result['msg']    = 'Record not found for reset unlike';
            }
            echo json_encode($data_result);
            return false;
        }
        if($status==1)
        {
            $msg = 'Like';
        }
        
        if($status==2)
        {
            $msg = 'UnLike';
        }
        
        if($status==3)
        {
            $msg = 'SuperLike';
        }
        
        $userdata = array(
                            'user_id'=>$user_id,
                            'to_user_id'=>$to_user_id,
                            'status'=>$status,
                            'date_time'=>date('Y-m-d H:i:s'),
                        );
        $usermes = array(
                            'user_id'=>$user_id,
                            'to_user_id'=>$to_user_id,
                            'message'=>$message,
                            'entity'=>$msg,
                            'entity_type'=>$status,
                            'date_time'=>date('Y-m-d H:i:s'),
                        );
         $superlike =1;
        if($status==3)
        {
            $superlike = $this->Api_modal->getSuperlike('tbl_like_unlike',$user_id,date('Y-m-d'));
        }
        
        $checklike = $this->Api_modal->get_row_array('tbl_like_unlike',array('user_id'=>$user_id,'to_user_id'=>$to_user_id));
        
        if(!empty($checklike))
        {
            if($superlike<=10)
            {
                $result = $this->Api_modal->modify('tbl_like_unlike','id',$checklike->id,$userdata);
                if($status!=2)
                {
                   $checkmsg = $this->Api_modal->get_row_array('tbl_notification',array('user_id'=>$user_id,'to_user_id'=>$to_user_id));
                    if(!empty($checkmsg))
                    {
                        $result = $this->Api_modal->modify('tbl_notification','notification_id',$checkmsg->notification_id,$usermes);
                    }else{
                        $result = $this->Api_modal->add('tbl_notification',$usermes);
                    } 
                }
            }else{
                $data_result['result'] = 'false';
                $data_result['msg']    = 'Only 10 super like allow in a day!';
                echo json_encode($data_result);
                return false;
            }
        }else{
            if($superlike<=10)
            {
                $result = $this->Api_modal->add('tbl_like_unlike',$userdata);
                if($message!='')
                {
                    $result = $this->Api_modal->add('tbl_notification',$usermes);
                }
            }else{
                $data_result['result'] = 'false';
                $data_result['msg']    = 'Only 10 super like allow in a day!';
                echo json_encode($data_result);
                return false;
            }
        }
        
        if ($result)
        {
            $data_result['result'] = 'true';
            $data_result['msg']    = $msg.' successfully';
           
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
            echo json_encode(array('success'=>'false','msg'=>'data found','data'=>'NA'));
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
        
       /* if(empty($status)){
            echo json_encode(array('success'=>'false','msg'=>'send user status'));
            return false;
        }*/
        
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
        
        //$result = $this->db->query("SELECT user.*,tbl_like_unlike.user_id as like_user_id,tbl_like_unlike.to_user_id as like_to_user_id FROM tbl_like_unlike JOIN user on user.user_id = tbl_like_unlike.user_id WHERE tbl_like_unlike.to_user_id = '$user_id' and tbl_like_unlike.status='1'");
        //echo $this->db->last_query(); die;
        
        $result = $this->Api_modal->get_likes($user_id, 1);
    
        if($result){
            echo json_encode(array('success'=>'true','msg'=>'data found','data'=>$result));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'data found','data'=>'NA'));
            return false;
        }
    
    }
    
    
    public function getDisLikes(){
        
        
        $user_id = $this->input->get_post('user_id');
        
        if(empty($user_id)){
            echo json_encode(array('success'=>'false','msg'=>'send user id'));
            return false;
        }
        
        $result = $this->Api_modal->get_dis_likes($user_id,2);
      //  $result = $this->db->query("SELECT user.*,tbl_like_unlike.user_id as like_user_id,tbl_like_unlike.to_user_id as like_to_user_id FROM tbl_like_unlike JOIN user on user.user_id = tbl_like_unlike.user_id WHERE tbl_like_unlike.to_user_id = '$user_id' and tbl_like_unlike.status='2'");
        // echo $this->db->last_query(); die;
        
        if($result){
            echo json_encode(array('success'=>'true','msg'=>'data found','data'=>$result));
            return false;
        }else{
            echo json_encode(array('success'=>'false','msg'=>'data found','data'=>'NA'));
            return false;
        }
    
    }


    
    
    
    
    
    
    
    
    
    
    //end class
}