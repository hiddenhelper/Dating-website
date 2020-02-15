<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        
    }
    
    public function index()
    {
        $data['title']='Admin | Slay Room';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/index',$data);
   }
    
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $rem      = $this->input->post('rem');
        
        if ($rem) {
            
            setcookie("name", $username, time() + (86400 * 30), "/");
            setcookie("pass", $password, time() + (86400 * 30), "/");
            setcookie("rem", $rem, time() + (86400 * 30), "/");
        } else {
            
            setcookie("name", "", time() - (100), "/");
            setcookie("pass", "", time() - (100), "/");
            setcookie("rem", "", time() - (100), "/");
        }
        
        $result = $this->Admin_model->login($username, $password);
        if ($result) {
            
            $this->session->set_userdata('admin_id', $username);
            $this->session->set_flashdata('Sucessmessage', '<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Welcome!</strong>' . $username . ' .
			</div>');
            redirect('Dashboard/dashboard');
            
        } else {
            
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissable">
			
			<strong>Sorry!</strong> Incorrect Username And Password.
			</div>');
            redirect('Dashboard');
            
        }
    }
    
    //for dashboard
    
    // public function dashboard()
    // {
    //     if ($this->session->userdata('admin_id')) {
    //         $this->load->view('admin/assets/header');
    //         $this->load->view('admin/assets/sidebar');
    //         $where = array('approve_status' => '1' );
    //         $data['inst']         = $this->Model->record_count('institute_list',$where);
    //         $data['registration'] = $this->Model->record_count('user');
    //         $data['contact']      = $this->Model->record_count('contactus');
    //         $this->load->view('admin/index',$data);
    //        $this->load->view('admin/assets/footer');
    //     } else {
    //         redirect('Dashboard');
    //     }
    // }


    public function dashboard(){
    if($this->session->userdata('admin_id')){

    }else{
      redirect('Dashboard');
    }

    $data['title']='Dashboard | Cost Admin';
    $data['supplier'] = $this->Admin_model->count('supplier','sup_id desc');
    $data['product']  = $this->Admin_model->count('product','product_id desc');
    $this->load->view('admin/header',$data);   
    $this->load->view("admin/dashboard",$data);
        
  }
    
    //for logout
    
    public function logout()
    {
        
        $this->session->unset_userdata('admin_id');
        session_destroy();
        redirect(base_url(), 'refresh');
    }
}
    
    
    
    
    

