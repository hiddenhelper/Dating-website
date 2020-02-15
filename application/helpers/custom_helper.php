<?php
defined('BASEPATH') OR ('No direct script access allowed');
define('FIREBASEKEY','AIzaSyDwfMjib_TCoT22VYrXOseWm4zWaVUnSOY');


/*  Request For notification ...............  
    $data['message']= $this->content ;
    $data['register_id']= $this->row->fcm_id;
    $data['type'] = $this->title;
    $res = send_notification($data);*/
                
   	function send_notification($data=array()){
     
        if(!isset($data['message']))
        {
            $data['message']='you have a new message';
        }
        
        if(!isset($data['register_id']))
        {
            $data['register_id']='xxsx';
        }
        if(!isset($data['user_id']))
        {
            $data['user_id']='user_id';
        }
        if(!isset($data['type']))
        {
            $data['type']='xxsx';
        }
        $fields=array(
        "to"  => $data['register_id'],
        "notification"  => $data,
        "data"=> $data
        );
        
        $url = 'https://fcm.googleapis.com/fcm/send';
        $headers = array(
         'Content-Type:application/json',
         'Authorization: key=AIzaSyA-pMGeZDne1nx2BRjnhtEhFE13hmEWS0U',

        'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        // Execute post
        $result = curl_exec($ch);
        //print_r($result);die;
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        // Close connection
        curl_close($ch);
        return $result;
    }
    
    // Save Notification..
    
    function save_notification($data=''){
        $obj = & get_instance();
	    
	    $obj->Api_model->add('tbl_notification', $data);
	    
    }
    
    // Save Url Picture
    function save_pic($url){
    	$imgName = randomstr(15);
    	
    	$content = file_get_contents($url);
    	if(file_put_contents('images/profile/'.$imgName.'.jpg', $content)){
    		return $imgName.'.jpg';
    	}else{
    		return false;
    	}
    }
    
    function randomstr($length='')
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
    