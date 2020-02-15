<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Home_model');
		$this->load->database();
		$this->load->library('session');
        $this->load->helper('url');
	}


	public function index()
	{
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }

		$this->load->view('Health/header');
		$this->load->view('Health/index');
		$this->load->view('Health/footer',$data);
	}



    public function About_Us(){
    	if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }
		$this->load->view('Health/header');
		$this->load->view('Health/about_us');
		$this->load->view('Health/footer',$data);
		

	}
    

	public function Blog(){
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }
		$this->load->view('Health/header');
		$data['user']=$this->Admin_model->displayblog();
		$this->load->view('Health/blog',$data);
		$this->load->view('Health/footer',$data);
		

	}

	public function Blog_single(){

		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }
		$this->load->view('Health/header');
		$this->load->view('Health/blog_single');
		$this->load->view('Health/footer',$data);
		

	}

	public function Contact_us(){
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }
		$this->load->view('Health/header');
		$this->load->view('Health/contact_us');
		$this->load->view('Health/footer',$data);
		

	}

	public function Home(){
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }
		$this->load->view('Health/header');
		$this->load->view('Health/index');
		$this->load->view('Health/footer',$data);
		
	}
	public function SignUp(){
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }

        // $data['cities'] = $this->Admin_model->searchcity();
		$this->load->view('Health/header');
		$this->load->view('Health/signup',$data);
		$this->load->view('Health/footer',$data);
		

	}



   	public function Login(){

   		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }
		$this->load->view('Health/header');
		$this->load->view('Health/login');
		$this->load->view('Health/footer',$data);
		

	}

	public function Gallery(){
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }

	    $this->load->view('Health/header');

	   $data['user_session'] = $this->session->userdata('user_id');
	   $data['user']=$this->Admin_model->select('user'); 

	  
		$this->load->view('Health/gallery',$data);
		$this->load->view('Health/footer',$data);
	

	}

	public function Myaccount(){
		if (!$this->session->userdata('user_id'))
	   	{
	      redirect('welcome/Login');
	    }
		
      if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }
        
        $id =  $this->session->userdata()['user_id'];
        
        $this->load->view('Health/header');
		$data['record'] = $this->Admin_model->get_user_profile($id);
		$data['cities'] = $this->Admin_model->searchcity();
        $data['countlike'] = $this->Admin_model->like_count($id);
        $data['insterest_list'] = $this->Admin_model->select('interest_list');
		$this->load->view('Health/myaccount',$data);
		$this->load->view('Health/footer',$data);
	}


	public function messagelist(){
		if (!$this->session->userdata('user_id'))
	   	{
	      redirect('welcome/Login');
	    }

		
       if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }
        
        $id =  $this->session->userdata()['user_id'];
        
        $this->load->view('Health/header');
		$data['record'] = $this->Admin_model->get_user_profile($id);
		$data['cities'] = $this->Admin_model->searchcity();
        $data['countlike'] = $this->Admin_model->like_count($id);
		$this->load->view('Health/messagelist',$data);
		$this->load->view('Health/footer',$data);
	}


	public function onlinelist(){
		if (!$this->session->userdata('user_id'))
	   	{
	      redirect('welcome/Login');
	    }

     
       if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }
        
        $id =  $this->session->userdata()['user_id'];
        
        $this->load->view('Health/header');
		$data['record'] = $this->Admin_model->get_user_profile($id);
		$data['cities'] = $this->Admin_model->searchcity();
        $data['countlike'] = $this->Admin_model->like_count($id);
		$this->load->view('Health/onlinelist',$data);
		$this->load->view('Health/footer',$data);
	}

	public function chats($ids){
		if (!$this->session->userdata('user_id'))
	   	{
	      redirect('welcome/Login');
	    }

       if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }
        
        $id =  $this->session->userdata()['user_id'];
        $this->load->view('Health/header');
		$data['record'] = $this->Admin_model->get_user_profile($id);
		$data['reciever'] = $this->Admin_model->get_user_profile($ids);
		$data['cities'] = $this->Admin_model->searchcity();
        $data['countlike'] = $this->Admin_model->like_count($id);
		$this->load->view('Health/chat-page',$data);
		$this->load->view('Health/footer',$data);
	}



	public function likelist(){
	
      if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }
 		$id =  $this->session->userdata()['user_id'];
        $this->load->view('Health/header');
		$data['record'] = $this->Admin_model->get_user_profile($id);
        $data['countlike'] = $this->Admin_model->like_count($id);
        $data['liked_users'] = $this->Admin_model->likes_n_slike_users($id);
		$this->load->view('Health/likelistuser',$data);
		$this->load->view('Health/footer',$data);

		

	}



   public function profileShow($user_id){
		$this->load->view('Health/header');
		$result['data']=$this->Admin_model->displayprofile1($user_id);
		$this->load->view('Health/profileShow',$result);
	/*	 $this->load->view('Health/footer');*/
		

	}



	public function Search_girl(){

		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }

		$this->load->view('Health/header');
		  $location    =   $this->input->get('location');
		
		  $min    =   $this->input->get('min');

		///  print_r($_POST);

		  $max    =   $this->input->get('max');
		
	
   /*        $datas['query'] = $this->Admin_model->countRow(); */
       $data['query'] = $this->Admin_model->countRow(); 

        // $data['cities']    =   $this->Admin_model->searchcity();

        $data['results']    =   $this->Admin_model->search($location,$min,$max);

       //print_r($data['results']); 
        //die();

   

		$this->load->view('Health/search_girls',$data);
		$this->load->view('Health/footer',$data);
		

	}


	 public function Term_Conditions(){
		if(count($this->Home_model->select_online_users()))
        {
      		$data['online_user'] = $this->Home_model->select_online_users();
        }else{
        	$data['online_user'] = "";
        }
		$this->load->view('Health/header');
		$this->load->view('Health/term_condition');
		$this->load->view('Health/footer',$data);
		

	}

	






}
