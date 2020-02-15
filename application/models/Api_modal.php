<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_modal extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
 
	//insert 
	public function add($tableName, $data) {
	    $this->db->insert($tableName, $data);
	  
	    return $this->db->insert_id();
	}

	//update
	public function modify($tableName, $colName, $id, $data) {
	    $this->db->where($colName, $id);
	    $this->db->update($tableName, $data);
	    return TRUE;
	}

	//multi update
	public function modifyMulti($tableName, $data1, $data){
	    $this->db->where($data1);
	    $this->db->update($tableName, $data);
	}

	//delete
	public function delete($tableName, $colName, $id) {
	    $this->db->where($colName, $id);
	    $this->db->delete($tableName);
	    return TRUE;
	}

	//multi delete
	public function deleteMulti($tableName, $wh) {
	    $this->db->where($wh);
	    $this->db->delete($tableName);
	    return TRUE;
	}


     public function data_gets($tblName, $dataget='', $limits ='', $orderby='', $orderformat ='asc', $orDatget='' ) {
		$this->db->select('*');
		if($dataget != ''){					
			foreach ($dataget as $field => $value)					
				$this->db->where($field, $value);
		}	
		if($orDatget != ''){					
			foreach ($orDatget as $field => $value)				
			$this->db->or_where($field, $value);	
		}												
		if ($limits != ''){				
			$this->db->limit($limits);
		}	
		if ($orderby != ''){
			$this->db->order_by($orderby, $orderformat);
		}						
		$query = $this->db->get($tblName);			
		return $query->result();		
	}
	// single record		
	public function get_single_row($tableName, $dataget='', $returnType = '',  $orderby='', $orderformat ='asc'){
		if($dataget != ''){					
			foreach ($dataget as $field => $value)					
				$this->db->where($field, $value);
		}
		if ($orderby != ''){
			$this->db->order_by($orderby, $orderformat);
		}
		$result = $this->db->get($tableName);
		if ($result->num_rows() > 0) {	
		$result->row();	
			if ($returnType == 'array')					
				return $result->row_array();
			else					
				return $result->row();
		}		
			else			
				return FALSE;		
	}	
	
	public function get_row($tableName, $colName, $id){
	    $this->db->where($colName, $id);
	    $result = $this->db->get($tableName);
	    if ($result->num_rows() > 0) {
	        return $result->row();
	    }
	    else
	     return FALSE;
	}





	 public function like_count($user_id='',$entity_type='', $status=''){
        $this->db->where('to_user_id', $user_id);       
        $this->db->where('status', $status);
        return $count = $this->db->count_all_results('tbl_notification');
       
    } 
     

    public function likeNoti_count($user_id='',$status=''){
         $this->db->where('to_user_id', $user_id);
         $this->db->where('entity_type',0);
         $this->db->where('status', $status);
        return $count = $this->db->count_all_results('tbl_notification');
    } 


    public function Wlike_count($user_id){
         $this->db->where('to_user_id', $user_id);
         $this->db->where('entity_type',1);
         $this->db->where('status',0);
        return $count = $this->db->count_all_results('tbl_notification');
    } 


    public function Wlike_count1($user_id){
         $this->db->where('to_user_id', $user_id);
         $this->db->where('entity_type',4);
         $this->db->where('status',0);
        return $count = $this->db->count_all_results('tbl_notification');
    } 
    
    
	public function get_row_array($tableName, $array){
	    $this->db->where($array);
	    $result = $this->db->get($tableName);
	    if ($result->num_rows() > 0) {
	        return $result->row();
	    }
	    else
	        return FALSE;
	}
	
	public function get_result($tableName, $array=''){
		if($array)
		{
			$this->db->where($array);	
		}	 

	    $result = $this->db->get($tableName);
	    if ($result->num_rows() > 0) {
	        return $result->result();
	    }
	    else
	        return FALSE;
	}

	 // Pagination function

	public function getPaginationData($tableName, $filters = '', $perPage, $start, $orderby, $orderformat) {
	        //Set default order
	    if ($orderformat == '')
	        $orderformat = 'asc';
	        //add where clause
	    if ($filters != '' && count($filters) > 0)
	        $this->db->where($filters);
		    $this->db->limit($perPage, $start);
		    $this->db->order_by($orderby, $orderformat);
			$result = $this->db->get($tableName);
			if ($result->num_rows() > 0)
				return $result->result();
			else
				return FALSE;
	}

	//Function to return total number of rows
    public function getTotalRows($tableName, $filters = NULL) {
    if ($filters != NULL) {
        $this->db->where($filters);
        $count = $this->db->count_all_results($tableName);
    }
    else
        $count = $this->db->count_all($tableName);
        return $count;
    }
    
    public function getSuperlike($tableName,$user_id,$date){
        $this->db->where('user_id', $user_id);
        $this->db->where('DATE(date_time)', $date);
        return $count = $this->db->count_all_results($tableName);
    }


    
    public function userSearch($from='',$to='',$city='',$profile_type='',$user_id='',$gender=''){
    	$this->db->where('user_id !=',$user_id);
    	$this->db->where('u.gender !=',$gender);
        $this->db->select('u.*, ct.city_name');      
        $this->db->from('user u');
        $this->db->join('cities ct', 'u.city = ct.city_id');
             
       	
        if($from!='')
        {
	       $this->db->where('u.age >=',$from);
	       
        }
        if($to!='')
        {
	        $this->db->where('u.age <=',$to);
	       
        }
        
        if($city!='')
        {
	        $this->db->where('u.city',$city);
	        
        }
        
        if($profile_type==1)
        {
	        $this->db->order_by('u.create_date_time','desc');
	        
        }
        
        if($profile_type==2)
        {
	        $this->db->where('u.user_status',0);
	        
        }

	   return $this->db->get()->result();
    }


    
    public function get_user_likes($user_id=''){
        $sql      = "SELECT `to_user_id` FROM `tbl_like_unlike` WHERE status!=4 AND user_id= ".$user_id."" ;
       return $this->db->query($sql)->result();
    }    
    public function get_user_likes1($user_id=''){
    	$likeids= "";
        $sql      = "SELECT `to_user_id` FROM `tbl_like_unlike` WHERE status!=4 AND user_id= ".$user_id."" ;
       $result =  $this->db->query($sql)->result();
	     if(!empty($result))
	      {
	        foreach($result as $ulike)
	        {
	            $likeids .= "'".$ulike->to_user_id."',";
	        }
	        
	        $likeids = rtrim($likeids,',');
	      }
	      return $likeids; 
    }

    
    public function get_user_city($id=''){
       $this->db->select('DISTINCT(ct.city_id), ct.city_name, ct.state_id');
      
       $this->db->from('user u');
       $this->db->join('cities ct',  'u.city = ct.city_id');
             
       if($id != ''){
             $this->db->where('ct.id', $id);
       }          

       return $this->db->get()->result();
    }

     public function single_user_data($user_id=''){
        $this->db->select('u.*, ct.city_name');
      
        $this->db->from('user u');
        $this->db->join('cities ct',  'u.city = ct.city_id');
             
       	if($user_id)
		{
			$this->db->where('u.user_id', $user_id);	
		}
         
        return $this->db->get()->row();
    }
    
    public function single_user11($user_id='',$status=''){
        $this->db->select('u.*, ct.city_name');
      
        $this->db->from('user u');
        $this->db->join('cities ct',  'u.city = ct.city_id');
             
       	if($user_id)
		{
			$this->db->where('u.user_id', $user_id);	
		}
         $this->db->where('tlu.status', $status);
        return $this->db->get()->row();
    }

    public function single_user($wheredata){
        $this->db->select('user.*, cities.city_name');
        $this->db->from('user');
        $this->db->join('cities',  'cities.city_id=user.city');     
       	if($wheredata)
		{
			$this->db->where('user.user_email', $wheredata['user_email']);	
			$this->db->where('user.user_pass', $wheredata['user_pass']);	
		}

        return $this->db->get()->row();
    }
    
    
    
    public function get_likes($user_id='', $status=''){
        $this->db->select('tlu.id as like_id, tlu.user_id as to_user_id, tlu.status, tlu.date_time, u.*, ct.city_name');
        $this->db->from('user u');
        $this->db->join('tbl_like_unlike tlu',  'u.user_id = tlu.user_id');
        $this->db->join('cities ct',  'u.city = ct.city_id');
       
		if($user_id !=''){
		    
			$this->db->where('tlu.to_user_id', $user_id);	
		}
		
		$this->db->where('tlu.status', $status);

        return $this->db->get()->result();
    }


     public function get_visits($user_id='', $status=''){
        $this->db->select('tlu.id as like_id, tlu.user_id as to_user_id, tlu.status, tlu.date_time, u.*, ct.city_name');
        $this->db->from('user u');
        $this->db->join('tbl_like_unlike tlu',  'u.user_id = tlu.user_id');
        $this->db->join('cities ct',  'u.city = ct.city_id');
        
       
		if($user_id !=''){
		    
			$this->db->where('tlu.to_user_id', $user_id);	
		}
		
		$this->db->where('tlu.status', $status);

        return $this->db->get()->result();
    }
    
    
     public function get_next_user_likes($user_id='', $status=''){
     	$like_unlike_users = $this->get_user_likes1($user_id);
     	$query1 = "SELECT 
     				   tlu.id as like_id,
    				   tlu.status,
    				   tlu.date_time,
    				   u.*,
    				   ct.city_name 
	    			FROM tbl_like_unlike as tlu
	    			INNER JOIN user u ON u.user_id=tlu.user_id
	    			INNER JOIN cities ct ON u.city = ct.city_id
	    			WHERE tlu.to_user_id = '{$user_id}' AND tlu.status = '{$status}'";
	    			if(!empty($like_unlike_users))
	    			{
	    				$query1 .= " AND tlu.user_id NOT IN($like_unlike_users)";
	    			}

	 $query = $this->db->query($query1);
	 return $query->result();

     	 
  //       $this->db->select('tlu.id as like_id,
  //       				   tlu.status,
  //       				   tlu.date_time,
  //       				   u.*,
  //       				   ct.city_name');
  //       $this->db->from('tbl_like_unlike as tlu');
  //       $this->db->join('user u',  'u.user_id=tlu.user_id');
  //       $this->db->join('cities ct',  'u.city = ct.city_id');
  //       $this->db->where('tlu.to_user_id', $user_id);
  //       $this->db->where_not_in('tlu.user_id', $like_unlike_users); 
		// $this->db->where('tlu.status', $status);
       
    }
    
    
    public function get_dis_likes($user_id='', $status=''){
        $this->db->select('tlu.id as like_id, tlu.to_user_id, tlu.status, tlu.date_time, u.*, ct.city_name');
        $this->db->from('user u');
        $this->db->join('tbl_like_unlike tlu', 'u.user_id = tlu.to_user_id');
        $this->db->join('cities ct',  'u.city = ct.city_id');
             
       	if($user_id='')
		{
			$this->db->where('tlu.user_id', $user_id);	
		}
	
		$this->db->where('tlu.status', $status);

        return $this->db->get()->result();
    }


 	public function GetDislike($user_id='', $status=''){
        $this->db->select('tlu.id as like_id, tlu.user_id, tlu.status, tlu.date_time, u.*, ct.city_name');
        $this->db->from('user u');
        $this->db->join('tbl_like_unlike tlu',  'u.user_id = tlu.to_user_id');
        $this->db->join('cities ct',  'u.city = ct.city_id');
       
		if($user_id !=''){
		    
			$this->db->where('tlu.user_id', $user_id);	
		}
		
		$this->db->where('tlu.status', $status);
		return $this->db->get()->result();
    }



    public function GetBlock_List($user_id='', $status=''){
        $this->db->select('tlu.block_id , tlu.to_user_id, tlu.block_status, tlu.date_time, u.*, ct.city_name');
        $this->db->from('tbl_block tlu');
        //$this->db->join('tbl_block tlu',  'u.user_id = tlu.to_user_id');
        $this->db->join('user u ',  'tlu.to_user_id = u.user_id');
        $this->db->join('cities ct',  'u.city = ct.city_id');
       
		if($user_id !=''){
		    
			$this->db->where('tlu.user_id', $user_id);	
		}
		
		$this->db->where('tlu.block_status', 0);

        return $this->db->get()->result();
    }

  



   function count_row($table,$where){
			$this->db->where($where);
			$data = $this->db->get($table);	
			$num = $data->num_rows();		
			if($num){
				return $num;
				}else{
				return 0;
			}
		}
	public function select($table,$order_by=""){
		$this->db->select('*');
		$this->db->order_by($order_by);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function selectAllById($table,$wheredata){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($wheredata);
		$query = $this->db->get();
		return $query->result_array();
	}

    
    
///////////////////////////////////////////end class//////////////////////////////////////
}